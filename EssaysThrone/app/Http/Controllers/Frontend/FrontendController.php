<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Page,
    Post,
    Setting
};
use Mail;
use App\Mail\ContactMail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Page::find(1, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.home', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        $data['pages'] = Page::find(8, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.services', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        $data['pages'] = Page::find(9, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.about_us', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        $data['pages'] = Page::find(3, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.contact_us', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUsEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email'  => 'required|email|max:191',
            'message'  => 'required'
        ]);
        $email = $this->settings(5)->value ?? "info@writersgeek.com";
        $data['name'] = $request->name ?? "";
        $data['email'] = $request->email ?? "";
        $data['message'] = $request->message ?? "";
        Mail::to($email)
            // ->cc($moreUsers)
            ->send(new ContactMail($data));
            // ->queue(new ContactMail($data));
        return redirect()->back()->with('success','Response submitted. Thank you we will get back to you.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pricing()
    {
        $data['pages'] = Page::find(4, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        $url = config('app.crm_api_url') . '/price-plan?domain_id='.config('app.domain_id');
        // $url = "https://staging.katibeen.com/api/price-plan?domain_id='2";
        $response = curlGetRequest($url);
        $response = json_decode($response);
        if(isset($response) && $response->success){
            $data['data'] = $response->data;
        }
        return view('frontend.pricing', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function termsCondition()
    {
        $data['pages'] = Page::find(6, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.terms_conditions', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy()
    {
        $data['pages'] = Page::find(7, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.privacy_policies', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cookiePolicy()
    {
        $data['pages'] = Page::find(5, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.cookie_policies', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $data['posts'] = Post::with('pseudonym', 'categories')
            ->orderBy('id', 'desc')
            ->where('type', 'image')
            ->where('is_published', 1)
            ->get();

        $data['related_posts'] = Post::with('pseudonym', 'categories')
            ->orderBy('id', 'desc')
            ->where('type', 'image')
            ->where('is_published', 1)
            ->limit(5)
            ->get();

        $data['pages'] = Page::find(2, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);


        return view('frontend.blogs', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogDetail($slug)
    {
        $data['post'] = Post::with('pseudonym', 'categories')->where('slug',$slug)->first();

        $data['related_posts'] = Post::with('pseudonym', 'categories')
            ->orderBy('id', 'desc')
            ->where('type', 'image')
            ->where('is_published', 1)
            ->where('id', '!=', $data['post']->id)
            ->limit(5)
            ->get();
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);

        return view('frontend.blog_details', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        // dd($request->all());
        $data = [];

        $calculater_data = $request->only([
            "domain_id",
            "manual_discount_amount",
            "price_plan_type_of_work_id",
            "price_plan_level_id",
            "price_plan_urgency_id", 
            "price_plan_no_of_page_id",
        ]);
        if (!is_null($calculater_data))
            $data['calculater_data'] = $calculater_data;

        $data['pages'] = Page::find(10, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.orders', $data);
    }

    private function settings($id)
    {
        return Setting::find($id, ['value']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function essayWriting()
    {
        $data['pages'] = Page::find(11, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.essay_writings', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function assignment()
    {
        $data['pages'] = Page::find(12, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.assignments', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchPaper()
    {
        $data['pages'] = Page::find(13, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.research_papers', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thesis()
    {
        $data['pages'] = Page::find(14, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.thesis', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function articleReview()
    {
        $data['pages'] = Page::find(15, ['meta_title', 'meta_description', 'tags']);
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['tawk_to'] = $this->settings(11);
        return view('frontend.article_reviews', $data);
    }
}