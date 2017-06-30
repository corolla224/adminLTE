<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('sidebartest', function(){ return view('sidebartest');});

Route::get('partials/sidebar', function(){ return view('partials/sidebar');});

Route::get('auth/login', function(){return view('auth/login');});



Route::get('auth/register', function(){return view('auth/register');});


Route::group(['middleware'=>['auth']], function() {
Route::get('/', function(){ return view('index');});

Route::get('index', function(){return view('index');});
Route::get('index2', function(){return view('index2');});

Route::get('pages/layout/top-nav', function(){return view('pages.layout.top-nav');});
Route::get('pages/layout/fixed', function(){return view('pages.layout.fixed');});
Route::get('pages/layout/boxed', function(){return view('pages.layout.boxed');});
Route::get('pages/layout/collapsed-sidebar', function(){return view('pages.layout.collapsed-sidebar');});

Route::get('pages/widgets', function(){return view('pages.widgets');});

Route::get('pages/calendar', function(){return view('pages/calendar');});

Route::get('pages/charts/chartjs', function(){return view('pages/charts/chartjs');});
Route::get('pages/charts/flot', function(){return view('pages/charts/flot');});
Route::get('pages/charts/inline', function(){return view('pages/charts/inline');});
Route::get('pages/charts/morris', function(){return view('pages/charts/morris');});

Route::get('pages/UI/general', function(){return view('pages/UI/general');});
Route::get('pages/UI/buttons', function(){return view('pages/UI/buttons');});
Route::get('pages/UI/icons', function(){return view('pages/UI/icons');});
Route::get('pages/UI/modals', function(){return view('pages/UI/modals');});
Route::get('pages/UI/sliders', function(){return view('pages/UI/sliders');});
Route::get('pages/UI/timeline', function(){return view('pages/UI/timeline');});

Route::get('pages/forms/advanced', function(){return view('pages/forms/advanced');});
Route::get('pages/forms/editors', function(){return view('pages/forms/editors');});
Route::get('pages/forms/general', function(){return view('pages/forms/general');});

Route::get('pages/tables/data', function(){return view('pages/tables/data');});
Route::get('pages/tables/simple', function(){return view('pages/tables/simple');});

Route::get('pages/mailbox/compose', function(){return view('pages/mailbox/compose');});
Route::get('pages/mailbox/mailbox', function(){return view('pages/mailbox/mailbox');});
Route::get('pages/mailbox/read-mail', function(){return view('pages/mailbox/read-mail');});

Route::get('pages/examples/404', function(){return view('pages/examples/404');});
Route::get('pages/examples/500', function(){return view('pages/examples/500');});
Route::get('pages/examples/blank', function(){return view('pages/examples/blank');});
Route::get('pages/examples/invoice-print', function(){return view('pages/examples/invoice-print');});
Route::get('pages/examples/invoice', function(){return view('pages/examples/invoice');});
Route::get('pages/examples/lockscreen', function(){return view('pages/examples/lockscreen');});
Route::get('pages/examples/login', function(){return view('pages/examples/login');});
Route::get('pages/examples/pace', function(){return view('pages/examples/pace');});
Route::get('pages/examples/profile', function(){return view('pages/examples/profile');});
Route::get('pages/examples/register', function(){return view('pages/examples/register');});

Route::get('documentation/index', function(){return view('documentation/index');});

Route::get('/profile', 'ProfileController@index');	
Route::post('/profile', 'ProfileController@update');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('index', function(){return view('index');});
