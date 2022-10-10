<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends Controller
{
    public function sendPayment(Request $request, $id)
    {
   
        if(isset($id)){
            $id = base64_decode($id);
            $url = 'https://staging.katibeen.com/api/v1/orders/show';
            $data['domain_id'] = config('app.domain_id');
            $data['order_id'] = $id;
            $response = curlPostRequest($url, $data);
            $response = json_decode($response);
// dd($response);
            if(isset($response->status) && $response->status==1){
                // PayPal settings
                $paypal_email = 'ichm.arshad@gmail.com';
                
                $return_url = route('paypal.accept',['order'=>base64_encode($response->data->id)]);
                
                $cancel_url = route('paypal.cancel',['order'=>base64_encode($response->data->id)]);
                
                $notify_url = route('paypal.alert',['order'=>base64_encode($response->data->id)]);
                
                //Order title
                $item_name = $response->data->topic;
                //Pay amount
                $item_amount = $response->data->grand_total_amount;
                //Payer first name
                $first_name = $response->data->customer->first_name;
                //Payer last name
                $last_name = $response->data->customer->last_name ?? "";
                //Payer email
                $payer_email = $response->data->customer->email;
                //Order Id
                $item_number = $response->data->order_no;
                
                // Check if paypal request or response
                if (!isset($request->txn_id) && !isset($request->txn_type)){
                    $querystring = '';
                    
                    // Firstly Append paypal account to querystring
                    $querystring .= "?business=".urlencode($paypal_email)."&";

                    // Append amount & currency (£) to quersytring so it cannot be edited in html

                    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
                    $querystring .= "item_name=".urlencode($item_name)."&";
                    $querystring .= "amount=".urlencode($item_amount)."&";
                    $querystring .= "first_name=".urlencode($first_name)."&";
                    $querystring .= "last_name=".urlencode($last_name)."&";
                    $querystring .= "payer_email=".urlencode($payer_email)."&";
                    $querystring .= "item_number=".urlencode($item_number)."&";
                    
                    //loop for posted values and append to querystring
                    foreach($_POST as $key => $value)
                    {
                        $value = urlencode(stripslashes($value));
                        $querystring .= "$key=$value&";
                    }

                    // Append paypal return addresses
                    $querystring .= "return=".urlencode(stripslashes($return_url))."&";
                    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
                    $querystring .= "notify_url=".urlencode($notify_url);
                    
                    // Append querystring with custom field
                    //$querystring .= "&amp;amp;amp;amp;amp;amp;custom=".USERID;
                    // Redirect to paypal IPN
                    header('location:https://www.paypal.com/cgi-bin/webscr'.$querystring);
                    exit();
                } 
                else {
                    // Response from PayPal
                }
            }else{
                abort('404');
            }

        }else{
            abort('404');
        }
    }

    public function accept($order_id)
    {
        $id = base64_decode($order_id);
        $url = 'https://staging.katibeen.com/api/v1/orders/mark-paid';
        $data['domain_id'] = config('app.domain_id');
        $data['order_id'] = $id;
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if(isset($response->status) && $response->status==1){
            $data['order'] = $response->data;
            return redirect()->route('frontend.thankyou',['id'=>$order_id, 'status'=>"Paid"])->with('success','Payment Successful');
        }else{
            return redirect()->route('frontend.thankyou',['id'=>$order_id, 'status'=>"Not Paid"])->with('error','Payment Not Successful');
        }    
    }

    public function cancel($order_id)
    {
        $id = base64_decode($order_id);
        return redirect()->route('frontend.cancel_order');
    }

    public function alert($order_id)
    {
        $id = base64_decode($order_id);
        $url = 'https://staging.katibeen.com/api/v1/orders/mark-paid';
        $data['domain_id'] = config('app.domain_id');
        $data['order_id'] = $id;
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if(isset($response->status) && $response->status==1){
            $data['order'] = $response->data;
            return redirect()->route('frontend.thankyou',['id'=>$order_id, 'status'=>"Paid"])->with('success','Payment Successful');
        }else{
            return redirect()->route('frontend.thankyou',['id'=>$order_id, 'status'=>"Not Paid"])->with('error','Payment Not Successful');
        }    
    }


    // public function alert() 
    // {
        
        
    //     /*
    //      *  IPN Handler
    //      */ 
             
    //     // Response from Paypal
    //     // read the post from PayPal system and add 'cmd'
    //     /*$full_resp_b=file_get_contents('php://input');
    //     $resp_data_r = array('full_response' => $full_resp_b, 'custom_status' => 'at the beginning of function raw data ');
    //     $this->db->insert('payment_response',$resp_data_r);
    //     $req = 'cmd=_notify-validate';
    //     foreach ($_POST as $key => $value) 
    //     {
    //         $value = urlencode(stripslashes($value));
    //         $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
    //         $req .= "&$key=$value";
    //     }*/
        
    //     //$this->db->insert('payment_response',$resp_data_r);
    //         $raw_post_data =file_get_contents('php://input');
    //         $raw_post_array = explode('&', $raw_post_data);
    //         $myPost = array();
    //         foreach ($raw_post_array as $keyval) {
    //           $keyval = explode ('=', $keyval);
    //           if (count($keyval) == 2)
    //             $myPost[$keyval[0]] = urldecode($keyval[1]);
    //         }
    //         // read the IPN message sent from PayPal and prepend 'cmd=_notify-validate'
    //         $req = 'cmd=_notify-validate';
    //         if (function_exists('get_magic_quotes_gpc')) {
    //           $get_magic_quotes_exists = true;
    //         }
    //         foreach ($myPost as $key => $value) {
    //           if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
    //             $value = urlencode(stripslashes($value));
    //           } else {
    //             $value = urlencode($value);
    //           }
    //           $req .= "&$key=$value";
    //         }
            
    //     // post back to PayPal system to validate
    //     $ch = curl_init('https://ipnpb.paypal.com/cgi-bin/webscr');
    //     curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    //     curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
        
    //     if( !($res = curl_exec($ch)) ) 
    //     {
            
    //         // error_log("Got " . curl_error($ch) . " when processing IPN data");
            
    //         $resp_data = array('custom_status' => 'failed');
    //         $this->db->insert('payment_response', $resp_data);
            
    //         curl_close($ch);
    //         exit;
        
    //     }
    //     else
    //     {
            
    //         //Assign posted variables to local variables
    //         $txn_id         = $_POST['txn_id'];
    //         $order_id       = $_POST['item_number'];
    //         $payer_email        = $_POST['payer_email'];
    //         $pay_amount         = $_POST['mc_gross'];
    //         $pay_currency       = $_POST['mc_currency'];
    //         $full_response      = $raw_post_data;
    //         $payment_status     = $_POST['payment_status'];
    //         $pending_reason = "";
    //         if($payment_status == "Pending")
    //         {
    //             $pending_reason = $_POST['pending_reason'];
    //         }
            
            
    //         //////////////////////////////////////////////////
            
            
    //         $compare_query = $this->db->query("SELECT * FROM orders WHERE order_id = '".$order_id."' AND CAST(total_cost AS DECIMAL) = CAST('".$pay_amount."' AS DECIMAL) ");
            
                
    //         if($compare_query->num_rows() > 0)
    //         {
                
    //             $res = $compare_query->row_array();
    //             $pkid = $res['pkid'];
    //             $cust_id = $res['cust_id'];
                
    //             //check that payment response already exist in payment table or not
    //             $query = $this->db->query("SELECT * FROM payment_response WHERE order_id = '".$order_id."' ");
    //             if($query->num_rows()==0) 
    //             {
    //                 $resp_data = array(
    //                 'txn_id' => $txn_id,
    //                 'order_id' => $order_id,
    //                 'payer_email' => $payer_email,
    //                 'pay_amount' => $pay_amount,
    //                 'currency' => $pay_currency,
    //                 'full_response' => $full_response,
    //                 'payment_status' => $payment_status,
    //                 'pending_reason' => $pending_reason,
    //                 'custom_status' => 'success'
    //                 );
                    
    //                 $insert_query = $this->db->insert('payment_response', $resp_data);
    //                 //query for sending notifications to the admin
    //                 if($insert_query)
    //                 {
    //                     date_default_timezone_set("Asia/Karachi");
    //                     $this->db->set('order_status', 1);
    //                     $this->db->set('order_date', date("Y-m-d H:i:s"));
    //                     $this->db->where('order_id', $order_id);
    //                     $order_status_query = $this->db->update('orders');
    //                     if($order_status_query)
    //                     {
                            
    //                         //$cust_id = $this->session->userdata('cust_id_hm');
    //                         $not_data = array(
    //                                     'cust_id' => $cust_id,
    //                                     'order_id' => $pkid,
    //                                     'notification_link' => 'admin/Order/all_pending_orders',
    //                                     'notification_subject' => 'Order Paid',
    //                                     'notification_type' => 3
    //                         );
    //                         $not_query = $this->db->insert('notifications', $not_data);
                        
    //                     }
                    
                        
    //                 }////if query for sending notifications to the admin ends here
                    
                    
    //             }
    //             else
    //             {
                    
    //                 $resp_data = array(
    //                 'txn_id' => $txn_id,
    //                 'payer_email' => $payer_email,
    //                 'pay_amount' => $pay_amount,
    //                 'currency' => $pay_currency,
    //                 'full_response' => $full_response,
    //                 'payment_status' => $payment_status,
    //                 'pending_reason' => $pending_reason,
    //                 'custom_status' => 'updated'
    //                 );
                    
    //                 $this->db->where('order_id', $order_id);
    //                 $this->db->update('payment_response', $resp_data);
                    
    //             }
                
    //         }
    //         else
    //         {   
    //             $resp_data = array('full_response' => $full_response, 'custom_status' => 'compare_query return empty result');
    //             $this->db->insert('payment_response',$resp_data);
    //         }
        
    //     }
        
    //     curl_close($ch);
    //     exit;
        
    // }
}