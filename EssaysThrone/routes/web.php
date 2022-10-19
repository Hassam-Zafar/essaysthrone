<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-all', function () {
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    die('cleared');
});

// Route::get('/', function () {
// 	return redirect()->route('frontend.index');
// 	return view('welcome');
// });

// All admin panel routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@authenticate')->name('authenticate');

        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');

        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset');
    });

    Route::group(['middleware' => 'auth', 'as' => 'admin.'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        Route::resource('user', 'UserController');

        Route::resource('pseudonym', 'PseudonymController');

        Route::resource('category', 'CategoryController');
        Route::get('category/update/status', 'CategoryController@updateStatus')->name('category.update_status');

        Route::resource('sub_category', 'SubCategoryController');
        Route::get('sub_category/update/status', 'SubCategoryController@updateStatus')->name('sub_category.update_status');

        Route::resource('page', 'PageController');

        Route::resource('setting', 'SettingController');

        Route::resource('post', 'PostController');
    });
});

Route::group(['namespace' => 'Userarea', 'prefix' => 'userarea', 'as' => 'userarea.'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@authenticate')->name('authenticate');
        Route::post('user-login', 'LoginController@userareaAuthenticate')->name('userareaAuthenticate');
        Route::get('logout', 'LoginController@logout')->name('logout');

        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');

        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset');
    });

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profile', 'UserProfileController@profile')->name('profile');
    Route::post('update-profile/{customer_id}', 'UserProfileController@update')->name('update_profile');

    Route::group(['prefix' => 'quotes', 'as' => 'quotes.'], function () {
        Route::get('/', 'QuoteController@index')->name('index');
    });

    Route::group(['prefix' => 'writers', 'as' => 'writers.'], function () {
        Route::get('/', 'WriterController@index')->name('index');
    });

    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
        Route::get('/', 'OrderController@index')->name('index');
        Route::get('/awaiting-payment', 'OrderController@awaitingPayment')->name('payment_awaiting');
        Route::get('/in-process', 'OrderController@inProcess')->name('in_process');
        Route::get('/completed', 'OrderController@completed')->name('completed');
        Route::get('/delivered', 'OrderController@delivered')->name('delivered');
        Route::post('{order}/detail', 'OrderController@details')->name('details');
        Route::get('mark-completed/{order}', 'OrderController@markCompleted')->name('mark_completed');
        Route::post('mark-modify-order', 'OrderController@markModify')->name('mark_modify_order');
    });
});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::group(['as' => 'orders.'], function () {
        // Route::get('create', 'OrderController@store')->name('create');
        Route::post('store', 'OrderController@store')->name('store');
        Route::post('customers/guest/save', 'OrderController@saveGuestCustomer')->name('save_guest_customer');
        Route::post('customers/save', 'OrderController@saveCustomer')->name('save_customers');
        Route::post('customers/update/password/', 'OrderController@saveCustomerPassword')->name('save_customer_password');
        Route::post('save', 'OrderController@save')->name('save');
        Route::post('update/{order}', 'OrderController@update')->name('update');
    });
    Route::get('{id}/edit/', 'OrderController@edit')->name('edit');
    Route::get('{id}/preview/', 'OrderController@preview')->name('preview');
    Route::get('{id}/thankyou/', 'OrderController@thankyou')->name('thankyou');
    
    Route::get('thank-you/{id}/{status?}', 'OrderController@thankyou')->name('thankyou');
    Route::get('thankyou', 'OrderController@thankyouPage')->name('thankyou_page');
    Route::get('cancel', 'OrderController@cancelPayment')->name('cancel_order');
    

    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('services', 'FrontendController@services')->name('services');

    Route::get('essay-writing', 'FrontendController@essayWriting')->name('essay_writing');
    Route::get('assignments', 'FrontendController@assignment')->name('assignments');
    Route::get('research-paper', 'FrontendController@researchPaper')->name('research_papers');
    Route::get('thesis', 'FrontendController@thesis')->name('thesis');
    Route::get('article-reviews', 'FrontendController@articleReview')->name('article_reviews');
    
    Route::get('order', 'FrontendController@order')->name('order');
    Route::get('about-us', 'FrontendController@aboutUs')->name('aboutus');
    Route::get('contact-us', 'FrontendController@contactUs')->name('contactus');
    Route::post('contact-us', 'FrontendController@contactUsEmail')->name('contactus_email');
    Route::get('terms-&-conditions', 'FrontendController@termsCondition')->name('termsconditions');
    Route::get('privacy-policy', 'FrontendController@privacyPolicy')->name('privacypolicy');
    Route::get('cookie-policy', 'FrontendController@cookiePolicy')->name('cookiepolicy');
    Route::get('pricing', 'FrontendController@pricing')->name('pricing');
    Route::get('blog', 'FrontendController@blog')->name('blog');
    Route::get('blog/{slug}', 'FrontendController@blogDetail')->name('blog_detail');
});

Route::get('stripe/{order}', 'StripePaymentController@stripe')->name('stripe.get');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::post('paypal/{order}', 'PaypalController@sendPayment')->name('paypal.send');
Route::get('paypal/accept/{order}', 'PaypalController@accept')->name('paypal.accept');
Route::get('paypal/cancel/{order}', 'PaypalController@cancel')->name('paypal.cancel');
Route::get('paypal/alert/{order}', 'PaypalController@alert')->name('paypal.alert');

Route::get('paywithpaypal', 'PaypalController@payWithPaypal')->name('paywithpaypal');
Route::post('paypal', 'PaypalController@postPaymentWithpaypal')->name('paypal');
Route::get('paypal', 'PaypalController@getPaymentStatus')->name('status');
