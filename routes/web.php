<?php



use Dotenv\Store\File\Paths;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

    $posts = Post::all();    

    return view('posts',[
        'posts' => $posts
    ]);
});


Route::get('posts/{post}', function($slug){
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[a-zA-Z_-]+');