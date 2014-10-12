<?php

/*
|--------------------------------------------------------------------------
| Bindings
|--------------------------------------------------------------------------
*/

Route::bind('post_slug', function ($value) {
    $post = app('Dries\Content\Manager')->get('posts')->published()->filterBy('slug', $value)->first();

    if ($post) {
        return $post;
    }

    App::abort(404);
});
Route::bind('page_slug', function ($value) {
    $page = app('Dries\Content\Manager')->get('pages')->published()->filterBy('slug', $value)->first();

    if ($page) {
        return $page;
    }

    App::abort(404);
});

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('blog', ['as' => 'archive', 'uses' => 'PostsController@archive']);
Route::get('blog/{post_slug}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);

Route::get('tag', 'TagsController@index');
Route::get('tag/{tag}', ['as' => 'tags.show', 'uses' => 'TagsController@show']);

Route::get('{page_slug}', ['as' => 'pages.show', 'uses' => 'PagesController@show']);