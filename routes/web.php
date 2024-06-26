<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Artisan;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\MessageController;
    use App\Http\Controllers\CartController;
    use App\Http\Controllers\WishlistController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\ProductReviewController;
    use App\Http\Controllers\PostCommentController;
    use App\Http\Controllers\CouponController;
    use App\Http\Controllers\PayPalController;
    use App\Http\Controllers\NotificationController;
    use App\Http\Controllers\HomeController;
    use \UniSharp\LaravelFilemanager\Lfm;

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

    // CACHE CLEAR ROUTE
    Route::get('cache-clear', function () {
        Artisan::call('optimize:clear');
        request()->session()->flash('success', 'Successfully cache cleared.');
        return redirect()->back();
    })->name('cache.clear');


    // STORAGE LINKED ROUTE
    Route::get('storage-link',[AdminController::class,'storageLink'])->name('storage.link');

    
    
    
    Route::POST('admin/product/saveorder',[AdminController::class,'saveorder']);
    Route::POST('admin/product/addproductimages',[AdminController::class,'addproductimages']);
    Route::get('admin/product/deleteimage/{id}',[AdminController::class,'deleteimage']);
    Route::get('admin/product/deletevariation/{id}',[AdminController::class,'deletevariation']);
    Route::get('admin/product/deletevariationimage/{id}',[AdminController::class,'deletevariationimage']);
    Route::get('admin/searchproduct',[AdminController::class,'searchproduct']);



    Route::get('admin/product/Variations/{id}',[AdminController::class,'getvariations']);
    Route::POST('admin/product/updatevariations',[AdminController::class,'updatevariations']);

    Route::POST('admin/product/updatevariationsimages',[AdminController::class,'updatevariationsimages']);
    
    Route::POST('getstock',[FrontendController::class,'getstock']);
    Route::POST('filterproducts',[FrontendController::class,'filterproducts']);

    Route::post('addproductreview', [FrontendController::class, 'addproductreview']);    
    
    Route::post('enquery', [FrontendController::class, 'enquery']);
    Route::get('deleteenquiery/{id}', [FrontendController::class, 'deleteenquiery']);
    
    Auth::routes(['register' => false]);

    Route::get('project-work', [FrontendController::class, 'projectwork']);

    Route::POST('projectinquiery', [FrontendController::class, 'projectinquiery']);
    
    Route::get('custom-work', [FrontendController::class, 'customwork']);


    Route::post('selectcolor', [FrontendController::class, 'selectcolor']);
    Route::get('user/login', [FrontendController::class, 'login'])->name('login.form');
    Route::post('user/login', [FrontendController::class, 'loginSubmit'])->name('login.submit');
    Route::get('user/logout', [FrontendController::class, 'logout'])->name('user.logout');

    Route::get('user/register', [FrontendController::class, 'register'])->name('register.form');
    Route::post('user/register', [FrontendController::class, 'registerSubmit'])->name('register.submit');
// Reset password
    Route::post('password-reset', [FrontendController::class, 'showResetForm'])->name('password.reset');
// Socialite
    Route::get('login/{provider}/', [LoginController::class, 'redirect'])->name('login.redirect');
    Route::get('login/{provider}/callback/', [LoginController::class, 'Callback'])->name('login.callback');

    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('all-products', [FrontendController::class, 'allproducts']);

    Route::get('/retailer-dashboard', [FrontendController::class, 'retailerdashboard'])->name('retailerdashboard');

   Route::get('color/{id}', [FrontendController::class, 'bycolor']);

// Frontend Routes
    Route::get('/home', [FrontendController::class, 'index']);
    Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
    Route::post('/contact/message', [MessageController::class, 'store'])->name('contact.store');
    Route::get('product-detail/{slug}', [FrontendController::class, 'productDetail'])->name('product-detail');
    Route::post('/product/search', [FrontendController::class, 'productSearch'])->name('product.search');
    Route::get('/product-cat/{slug}', [FrontendController::class, 'productCat'])->name('product-cat');
    Route::get('/product-sub-cat/{slug}/{sub_slug}', [FrontendController::class, 'productSubCat'])->name('product-sub-cat');
    Route::get('/product-brand/{slug}', [FrontendController::class, 'productBrand'])->name('product-brand');
// Cart section
    Route::POST('add-to-cart', [FrontendController::class, 'addToCart']);

    Route::get('removefromcart/{id}', [FrontendController::class, 'removefromcart']);
    
    Route::get('search', [FrontendController::class, 'searchproduct']);
    
    
    Route::post('stripe', [FrontendController::class, 'stripePost'])->name('stripe.post');
    Route::get('return-policy', [FrontendController::class, 'returnpolicy']);

    Route::get('/stripepayment/{id}', [FrontendController::class, 'stripepayment']);
    
    Route::post('cart-update', [CartController::class, 'cartUpdate'])->name('update.cart');

    Route::get('/cart', function () {
        return view('frontend.pages.cart');
    })->name('cart');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
// Wishlist
    Route::get('/wishlist', function () {
        return view('frontend.pages.wishlist');
    })->name('wishlist');
    Route::get('/wishlist/{slug}', [WishlistController::class, 'wishlist'])->name('add-to-wishlist')->middleware('user');
    Route::get('wishlist-delete/{id}', [WishlistController::class, 'wishlistDelete'])->name('wishlist-delete');
    Route::post('cart/order', [OrderController::class, 'store'])->name('cart.order');
    Route::get('order/pdf/{id}', [OrderController::class, 'pdf'])->name('order.pdf');
    Route::get('/income', [OrderController::class, 'incomeChart'])->name('product.order.income');
// Route::get('/user/chart',[AdminController::class, 'userPieChart'])->name('user.piechart');
    Route::get('/product-grids', [FrontendController::class, 'productGrids'])->name('product-grids');
    Route::get('/product-lists', [FrontendController::class, 'productLists'])->name('product-lists');
    Route::match(['get', 'post'], '/filter', [FrontendController::class, 'productFilter'])->name('shop.filter');
// Order Track
    Route::get('/product/track', [OrderController::class, 'orderTrack'])->name('order.track');
    Route::post('product/track/order', [OrderController::class, 'productTrackOrder'])->name('product.track.order');
// Blog
    Route::get('/blogs', [FrontendController::class, 'blog'])->name('blog');
    Route::get('/blog-detail/{slug}', [FrontendController::class, 'blogDetail'])->name('blog.detail');
    Route::get('/blog/search', [FrontendController::class, 'blogSearch'])->name('blog.search');
    Route::post('/blog/filter', [FrontendController::class, 'blogFilter'])->name('blog.filter');
    Route::get('blog-cat/{slug}', [FrontendController::class, 'blogByCategory'])->name('blog.category');
    Route::get('blog-tag/{slug}', [FrontendController::class, 'blogByTag'])->name('blog.tag');

// NewsLetter
    Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');

// Product Review
    Route::resource('/review', 'ProductReviewController');
    Route::post('product/{slug}/review', [ProductReviewController::class, 'store'])->name('review.store');

// Post Comment
    Route::post('post/{slug}/comment', [PostCommentController::class, 'store'])->name('post-comment.store');
    Route::resource('/comment', 'PostCommentController');
// Coupon
    Route::post('/coupon-store', [CouponController::class, 'couponStore'])->name('coupon-store');
// Payment
    Route::get('payment/{id}', [PayPalController::class, 'payment'])->name('payment');
    Route::get('cancel', [PayPalController::class, 'cancel'])->name('payment.cancel');
    Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');


// Backend section start

    Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::get('/file-manager', function () {
            return view('backend.layouts.file-manager');
        })->name('file-manager');
        // user route
        Route::resource('users', 'UsersController');
        // Banner
        Route::resource('banner', 'BannerController');
        // Brand
        Route::resource('brand', 'BrandController');
        // Profile
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin-profile');
        Route::post('/profile/{id}', [AdminController::class, 'profileUpdate'])->name('profile-update');
        // Category
        Route::resource('/category', 'CategoryController');
        // Product
        Route::resource('/product', 'ProductController');
        // Ajax for sub category
        Route::post('/category/{id}/child', 'CategoryController@getChildByParent');
        // POST category
        Route::resource('/post-category', 'PostCategoryController');
        // Post tag
        Route::resource('/post-tag', 'PostTagController');
        // Post
        Route::resource('/post', 'PostController');
        // Message
        Route::resource('/message', 'MessageController');
        Route::get('/message/five', [MessageController::class, 'messageFive'])->name('messages.five');

        // Order
        Route::resource('/order', 'OrderController');
        // Shipping
        Route::resource('/shipping', 'ShippingController');
        // Coupon
        Route::resource('/coupon', 'CouponController');
        // Settings
        Route::get('settings', [AdminController::class, 'settings'])->name('settings');
        Route::post('setting/update', [AdminController::class, 'settingsUpdate'])->name('settings.update');


        
        Route::POST('updatecolor', [AdminController::class, 'updatecolor']);
        Route::POST('addnewcolor', [AdminController::class, 'addnewcolor']);
        Route::get('attributes', [AdminController::class, 'attributes']);

        // Notification
        Route::get('/notification/{id}', [NotificationController::class, 'show'])->name('admin.notification');
        Route::get('/notifications', [NotificationController::class, 'index'])->name('all.notification');
        Route::delete('/notification/{id}', [NotificationController::class, 'delete'])->name('notification.delete');
        // Password Change
        Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password.form');
        Route::post('change-password', [AdminController::class, 'changPasswordStore'])->name('change.password');
    });


// User section start
    Route::group(['prefix' => '/user', 'middleware' => ['user']], function () {
        Route::get('/', [HomeController::class, 'index'])->name('user');
        // Profile
        Route::get('/profile', [HomeController::class, 'profile'])->name('user-profile');
        Route::post('/profile/{id}', [HomeController::class, 'profileUpdate'])->name('user-profile-update');
        //  Order
        Route::get('/order', "HomeController@orderIndex")->name('user.order.index');
        Route::get('/order/show/{id}', "HomeController@orderShow")->name('user.order.show');
        Route::delete('/order/delete/{id}', [HomeController::class, 'userOrderDelete'])->name('user.order.delete');
        // Product Review
        Route::get('/user-review', [HomeController::class, 'productReviewIndex'])->name('user.productreview.index');
        Route::delete('/user-review/delete/{id}', [HomeController::class, 'productReviewDelete'])->name('user.productreview.delete');
        Route::get('/user-review/edit/{id}', [HomeController::class, 'productReviewEdit'])->name('user.productreview.edit');
        Route::patch('/user-review/update/{id}', [HomeController::class, 'productReviewUpdate'])->name('user.productreview.update');

        // Post comment
        Route::get('user-post/comment', [HomeController::class, 'userComment'])->name('user.post-comment.index');
        Route::delete('user-post/comment/delete/{id}', [HomeController::class, 'userCommentDelete'])->name('user.post-comment.delete');
        Route::get('user-post/comment/edit/{id}', [HomeController::class, 'userCommentEdit'])->name('user.post-comment.edit');
        Route::patch('user-post/comment/udpate/{id}', [HomeController::class, 'userCommentUpdate'])->name('user.post-comment.update');

        // Password Change
        Route::get('change-password', [HomeController::class, 'changePassword'])->name('user.change.password.form');
        Route::post('change-password', [HomeController::class, 'changPasswordStore'])->name('change.password');

    });

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        Lfm::routes();
    });
