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

Route::get('/login', function () {
    return view('screens.auth.login');
});
Route::get('/register', function () {
    return view('screens.auth.register');
});
Auth::routes(['verify' => true]);
Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');

//home page
Route::get('/', 'HomeController@index')->name('home');

//about us
Route::get('/about-us', function () {
    return view('screens.about-us');
});

//privacy policy
Route::get('/privacy-policy', function () {
    return view('screens.privacy-policy');
});

//term and condition
Route::get('/term-condition', function () {
    return view('screens.term-condition');
});

//how ti works
Route::get('/how-it-works', function () {
    return view('screens.how-it-works');
});

//faq
Route::get('/faq', function () {
    return view('screens.faq');
});

// Route::get('/search-job', function () {
//     return view('screens.search-job');
// });
Route::get('/pro-member', function () {
    return view('screens.pro-membership');
});

//group route for User Profile
Route::group(['prefix' => 'user', 'middleware' => ['verified', 'auth']], function () {
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('/change-status', 'UserController@change_status')->name('change-status');
    Route::post('/save-general-info', 'UserController@save_general_info')->name('save-general-info');
    Route::post('/upload-resume', 'UserController@upload_resume')->name('upload-resume');
    Route::post('/save-languages', 'UserController@user_save_languages')->name('save-languages');
    Route::post('/mother-languages', 'UserController@user_mother_languages')->name('mother-languages');
    Route::post('/save-services-rates', 'UserController@save_services_rates')->name('save-services-rates');
    Route::post('/save-voice-over', 'UserController@save_voice_over')->name('save-voice-over');
    Route::post('/save-specilizations', 'UserController@save_specializations')->name('save-specilizations');
    Route::post('/save-software-tools', 'UserController@save_software_tools')->name('save-software-tools');
    Route::post('/save-files', 'UserController@user_save_files')->name('user.save.files');
    Route::post('/delete-user-files', 'UserController@delete_user_files')->name('delete.user.files');
    Route::post('/delete-user-languages', 'UserController@delete_user_languages')->name('delete.user.languages');
    Route::post('/delete-mother-languages', 'UserController@delete_mother_languages')->name('delete.mother.languages');
    Route::post('/delete-voiceover-language', 'UserController@delete_voiceover_language')->name('delete.voiceover.languages');
    Route::post('/delete-service-rates', 'UserController@delete_service_rates')->name('delete.service.rates');
    Route::post('/change-profile-photo', 'UserController@chagne_profile_photo')->name('change-profile-photo');
    Route::get('/view-user-profile', 'UserController@view_user_profile')->name('view-user-profile');
    Route::get('/change-user-status', 'UserController@change_user_status')->name('change-user-status');
});
//public profile freelancer
Route::get('/public-profile/{id}', 'UserController@public_profile')->name('public-profile');

Route::middleware(['verified', 'auth'])->group(function () {
    Route::get('/post-a-job', 'JobsController@index')->name('post-a-job');
    Route::post('/post-a-job', 'JobsController@store')->name('post-a-job');
    Route::get('/job-details/{id}', 'JobsController@job_details')->name('job-details');
    //SEND JOB PROPOSAL OR MESSAGE ROUTE
    Route::post('/job-send-message', 'JobsController@job_send_message')->name('job-send-message');
});

Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
Route::post('/contact-us', 'ContactUsController@store')->name('contact-us');

Route::get('/job-search', 'HomeController@job_search')->name('job-search');
Route::get('/make-job-fav', 'JobsController@make_job_fav')->name('make-job-fav');
Route::get('/remove-job-fav', 'JobsController@remove_job_fav')->name('remove-job-fav');
Route::get('/favourite-job', 'JobsController@favourite_job')->name('favourite-job');
Route::get('/favourite-job-search', 'JobsController@favourite_job_search')->name('favourite-job-search');
Route::get('/my-job', 'JobsController@my_job')->name('my-job');
Route::post('/job-delete', 'JobsController@job_delete')->name('job-delete');
Route::get('/job-update', 'JobsController@job_update')->name('job-update');
Route::post('/job-assignto', 'JobsController@job_assignto')->name('job-assignto');
Route::get('/my-assign-jobs', 'JobsController@my_assign_jobs')->name('my-assign-jobs');
Route::post('/rate-job', 'JobsController@rate_job')->name('rate-job');
//freelancer search and top freelancer 
Route::get('/search-freelancer', 'FreelancerController@search_freelancer')->name('search-freelancer');
Route::get('/top-freelancer', 'FreelancerController@index')->name('top-freelancer');
Route::post('/search-freelancer', 'FreelancerController@search')->name('search-freelancer');

//agency search and top agency 
Route::get('/top-agencies', 'AgencyController@index')->name('top-agencies');
Route::get('/search-agencies', 'AgencyController@search_agencies')->name('search-agencies');
Route::post('/search-agencies', 'AgencyController@search')->name('search-agencies');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Show this page after verifying email address
Route::view('/thanks-for-registration', 'auth.thanks-for-registration');
//Show thanks page after successfull registeration of user
Route::view('/successfully-registered', 'auth.login-success')->name('login.success');


/*chatter routes are start from here===========================================================*/

$route = function ($accessor, $default = '') {

    return  config('chatter.routes.' . $accessor, $default);
};

// Middleware helper.
$middleware = function ($accessor, $default = []) {
    return config('chatter.middleware.' . $accessor, $default);
};

// Authentication middleware helper.
$authMiddleware = function ($accessor) use ($middleware) {
    return array_unique(
        array_merge((array) $middleware($accessor), ['auth'])
    );
};

/*
 * Chatter routes.
 */
//Route::get('/forums', 'ChatterController@index');
Route::group([
    'as'         => 'chatter.',
    'prefix'     => $route('home'),
    'middleware' => $middleware('global', 'web'),
], function () use ($route, $middleware, $authMiddleware) {

    // Home view.
    Route::get('/', [
        'as'         => 'home',
        'uses'       => 'devdojoController\ChatterController@index',
        'middleware' => $middleware('home'),
    ]);

    // Single category view.
    Route::get($route('category') . '/{slug}', [
        'as'         => 'category.show',
        'uses'       => 'devdojoController\ChatterController@index',
        'middleware' => $middleware('category.show'),
    ]);

    /*
     * Auth routes.
     */

    // Login view.
    Route::get('login', [
        'as'   => 'login',
        'uses' => 'devdojoController\ChatterController@login',
    ]);

    // Register view.
    Route::get('register', [
        'as'   => 'register',
        'uses' => 'devdojoController\ChatterController@register',
    ]);

    /*
     * Discussion routes.
     */
    Route::group([
        'as'     => 'discussion.',
        'prefix' => $route('discussion'),
    ], function () use ($middleware, $authMiddleware) {

        // All discussions view.
        Route::get('/', [
            'as'         => 'index',
            'uses'       => 'devdojoController\ChatterDiscussionController@index',
            'middleware' => $middleware('discussion.index'),
        ]);

        // Create discussion view.
        Route::get('create', [
            'as'         => 'create',
            'uses'       => 'devdojoController\ChatterDiscussionController@create',
            'middleware' => $authMiddleware('discussion.create'),
        ]);

        // Store discussion action.
        Route::post('/', [
            'as'         => 'store',
            'uses'       => 'devdojoController\ChatterDiscussionController@store',
            'middleware' => $authMiddleware('discussion.store'),
        ]);

        // Single discussion view.
        Route::get('{category}/{slug}', [
            'as'         => 'showInCategory',
            'uses'       => 'devdojoController\ChatterDiscussionController@show',
            'middleware' => $middleware('discussion.show'),
        ]);

        // Add user notification to discussion
        Route::post('{category}/{slug}/email', [
            'as'         => 'email',
            'uses'       => 'devdojoController\ChatterDiscussionController@toggleEmailNotification',
        ]);

        /*
         * Specific discussion routes.
         */
        Route::group([
            'prefix' => '{discussion}',
        ], function () use ($middleware, $authMiddleware) {

            // Single discussion view.
            Route::get('/', [
                'as'         => 'show',
                'uses'       => 'devdojoController\ChatterDiscussionController@show',
                'middleware' => $middleware('discussion.show'),
            ]);

            // Edit discussion view.
            Route::get('edit', [
                'as'         => 'edit',
                'uses'       => 'devdojoController\ChatterDiscussionController@edit',
                'middleware' => $authMiddleware('discussion.edit'),
            ]);

            // Update discussion action.
            Route::match(['PUT', 'PATCH'], '/', [
                'as'         => 'update',
                'uses'       => 'devdojoController\ChatterDiscussionController@update',
                'middleware' => $authMiddleware('discussion.update'),
            ]);

            // Destroy discussion action.
            Route::delete('/', [
                'as'         => 'destroy',
                'uses'       => 'devdojoController\ChatterDiscussionController@destroy',
                'middleware' => $authMiddleware('discussion.destroy'),
            ]);
        });
    });

    /*
     * Post routes.
     */
    Route::group([
        'as'     => 'posts.',
        'prefix' => $route('post', 'posts'),
    ], function () use ($middleware, $authMiddleware) {

        // All posts view.
        Route::get('/', [
            'as'         => 'index',
            'uses'       => 'devdojoController\ChatterPostController@index',
            'middleware' => $middleware('post.index'),
        ]);

        // Create post view.
        Route::get('create', [
            'as'         => 'create',
            'uses'       => 'devdojoController\ChatterPostController@create',
            'middleware' => $authMiddleware('post.create'),
        ]);

        // Store post action.
        Route::post('/', [
            'as'         => 'store',
            'uses'       => 'devdojoController\ChatterPostController@store',
            'middleware' => $authMiddleware('post.store'),
        ]);

        /*
         * Specific post routes.
         */
        Route::group([
            'prefix' => '{post}',
        ], function () use ($middleware, $authMiddleware) {

            // Single post view.
            Route::get('/', [
                'as'         => 'show',
                'uses'       => 'devdojoController\ChatterPostController@show',
                'middleware' => $middleware('post.show'),
            ]);

            // Edit post view.
            Route::get('edit', [
                'as'         => 'edit',
                'uses'       => 'devdojoController\ChatterPostController@edit',
                'middleware' => $authMiddleware('post.edit'),
            ]);

            // Update post action.
            Route::match(['PUT', 'PATCH'], '/', [
                'as'         => 'update',
                'uses'       => 'devdojoController\ChatterPostController@update',
                'middleware' => $authMiddleware('post.update'),
            ]);

            // Destroy post action.
            Route::delete('/', [
                'as'         => 'destroy',
                'uses'       => 'devdojoController\ChatterPostController@destroy',
                'middleware' => $authMiddleware('post.destroy'),
            ]);
        });
    });
});

/*
 * Atom routes
 */
Route::get($route('home') . '.atom', [
    'as'         => 'chatter.atom',
    'uses'       => 'devdojoController\ChatterAtomController@index',
    'middleware' => $middleware('home'),
]);

/*chatter routes are end here===========================================================*/
