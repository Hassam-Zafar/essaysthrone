<?php 
use App\Models\{
    Page,
    Setting,
    Category,
};

/**
* @param file to save file in storage $file
* @param directory to create directory in uploads folder  $dir
* @return file stored in directory
*
**/
function uploadFile($file, $dir)
{
	$directory = public_path().'/uploads/'.$dir;
	if(!is_dir($directory)){
		mkdir($directory,0777,true);
	}

	$extension = $file->getClientOriginalExtension();
	$file_name = rand(10000,99999).'-'.time().'.'.$extension;
	$file->move($directory, $file_name);
	return $file_name;
}

/**
* @param file for delete $file
* @param $dir to check imaage exists or not
* @return boolean true or false
*/
function deleteFile($file, $dir)
{
    if(is_file(public_path().'\\'.$dir.'\\'.$file)){
        unlink(public_path().'\\'.$dir.'\\'.$file);
        return true;
    }
    return false;
}

/**
* @return array list of all active page
*/
function blog_pages($url)
{
    return Page::where(['status'=>1,'url'=>$url])->get(["title", "url", "status", "appearance", "meta_title", "meta_description", "tags"])->first();
}

/**
* @return array list of all active categories and relations
*/
function blog_navigation()
{
    return Category::with('subCategory','activeSubCategory','posts')->where(['parent_id'=>0,'is_active'=>1])->orderBy('id','desc')->get();
}

/**
* @param key $key
* @return value/link or null
*
**/
function socialMedia($key)
{
    $setting =  Setting::where('key',$key)->first(['value']);
    if(isset($setting->value)){
        return $setting->value;
    }
    return null;
}


/**
* @param description $description 
* @return response of curl request array
**/
function curlGetRequest($query)
{
    try{
        if(empty($query)){
            throw new Exception("Query and data is required", 1);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
    catch (Exception $e) {
    }
}

/**
* @param url link of post url $url
* @param $data sent the data in post form
* @return response array
*/
function curlPostRequest($url, $data)
{
    try{
        if(empty($url) && empty($data)){
            throw new Exception("Url and data is required", 1);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $headers = array();
        $headers[] = 'Content-Type: multipart/form-data';
        // $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)){
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);
        return $result;
    }
    catch (Exception $e) {
    }
}

/**
* @return array list of all active categories and relations
*/
function current_user()
{
    if(Session::has('current_user')){
        return Session::get('current_user');
    }else{
        return redirect()->route('userarea.login');
    }
}

/**
* @param url link of post url $url
* @param $data sent the data in post form
* @return response array
*/
function orderStatusLabel($order)
{
    $result = '';
    $url = route('frontend.preview',['id'=>base64_encode($order->id)]);
    if(in_array($order->status_id, ['1'])){
        $result = "<span><a href='$url' class='text-danger'>Payment Awaiting</a></span>";
    }
    elseif(in_array($order->status_id,[5])){
        $result = "<span>Delivered</span>";
    }elseif(in_array($order->status_id,[7])){
        $result = "<span class='text-success'>Completed</span>";
    }else{
        $result = "<span>In process</span>";
    }
    
    return $result;

}


/**
* @param url link of post url $url
* @param $data sent the data in post form
* @return response array
*/
function orderStatusOption($order)
{
    $result = '';
    $url = route('userarea.orders.mark_completed',['order'=>base64_encode($order->id)]);
    $id = base64_encode($order->id);
    
    if(in_array($order->status_id,[5])){
        $result = "<select class='form-select order_status' name='status' data-url='$url' data-order-id='$id'>
            <option value=''>Change Status</option>
            <option value='6'>Modify</option>
            <option value='7'>Completed</option>
            </select>";
    }else{
        $result = "---";
    }
    
    return $result;
}

?>