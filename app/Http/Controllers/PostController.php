<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    use UploadImageTrait;
    //

    public function showaddPost(){
        $categoryName = Category::all();
        return view('Adminside/addPost',compact('categoryName'));
    }

    public function store(Request $request){
        Post::create([
            'title'=>$request->title,
            'content'=>$request->contents,
            'categories_id'=>$request->categories_id,
            'user_id'=>Auth()->user()->id,
        ]);
        return redirect()->route('Admindashboard');
    }


    public function showAdminInfo(){
        return view('Adminside/addInfo');
    }


    public function storeAdminInfo(Request $request){
        $path = $this->UploadImage($request->photo,'AdminImage');
        Auth()->user()->update([
            'path' => $path,
            'name' =>$request->name,
            'githubUr'=>$request->githubUr,
            'twitterUrl'=>$request->twitterUrl,
            'linked-inUrl'=>$request->linkedinUrl,
            'faceUrl'=>$request->faceUrl,
            'instagramUrl'=>$request->instagramUrl,
        ]);
        return redirect()->route('Admindashboard');
    }
    public function Admindashboard(){
        $posts = Post::all();
        $countPost = Post::count();
        $countCategory = Category::count();
        $countAdmin = User::where('activate' , '1')->count();
        $showAdmin = User::all()->where('activate' , '1');
        return view('Adminside/index',['posts' => $posts , 'count' =>$countPost , 'catCount' => $countCategory , 'adminCount' => $countAdmin , 'showAdmin' =>$showAdmin]);
    }
    public function homepage(){
        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function about(){
        $posts = Post::all();
        return view('about');
    }

    public function editUpdate($id){
        $categoryName = Category::all();
        $post = Post::where('id',$id)->first();
        return view('Adminside/updatePost',['categoryName' => $categoryName , 'post' => $post]);
    }

    public function updatePost(Request $request,$id){
        $post = Post::findOrFail($id);
        $post->update([
            'title'=>$request->title,
            'content' => $request->contents,
            'categories_id' => $request->categories_id,
        ]);
        return redirect()->route('Admindashboard');
    }
    public function destory(Request $request, $id){
        Post::destroy($id);
        return redirect()->route('Admindashboard');
    }
}
