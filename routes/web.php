<?php

use App\Http\Controllers\PostsController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
//    return view('welcome');
//    $post=new Post();
//    $post->title ='test title';
//    $post->content='test content';
//    $post->save();
//    Post::create([
//        'title'=>'test title',
//        'content'=>'test content',
//    ]);

//    $post=Post::all();
//    dd($post);

//    $post=Post::find(1);
//    dd($post);

//      $post=Post::where('id','<',10)->orderBy('id','DESC')->get();
//      dd($post);

//    $post=Post::find(1);
//    $post->update([
//       'title'=>'updated title',
//       'content' =>'update content',
//    ]);

//    $post=Post::find(1);
//    $post->title='save title';
//    $post->content='save content';
//    $post->save();

//    $post=Post::find(1);
//    $post->delete();

//    Post::destroy(2);

//    Post::destroy(3, 5, 7);

//    $allPosts = Post::all();
//    dd($allPosts);

//    $featuredPosts=Post::where('is_feature',1)->get();
//    dd($featuredPosts);

//    $fourthPost = Post::find(4);
//    dd($fourthPost);

//    $lastPost=Post::orderBy('id','DESC')->first();
//    dd($lastPost);

    $comment = new Comment();
    $comment->content = '456';
    $comment->post_id = '6';
    $comment->save();

});
Route::get('show', [PostsController::class, 'index'])->name('posts.index');
Route::get('post', [PostsController::class, 'show'])->name('posts.show');
Route::get('contact', [PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostsController::class, 'about'])->name('posts.about');

