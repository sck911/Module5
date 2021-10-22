<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    

    //returns the view with posts
    public function index()
        {
            $posts = BlogPost::all(); //fetch all blog posts from DB
            return view('blog.index', [
                'posts' => $posts,
            ]); 
        }


    //show form to create a blog post
    public function create()
        {
            return view('blog.create');
        }

   
    //store a new post
    public function store(Request $request)
        {
            $blogdata = $request->validate([
                'title'     => 'required',
                'body'      => 'required',
                'blogpic'   => 'required|mimes:jpg,png,jpeg|max:2048'
            ]);

            $newPost = BlogPost::create([
                'title'   => $request->title,
                'body'    => $request->body,
                'blogpic' => $request->blogpic,
                'user_id' => 1
            ]);

            //$imagePath = request('image')->store('uploads', 'public'); 
                       
            return redirect('/blog/' . $newPost->id);
        }


    //returns the view with the post
    public function show(BlogPost $blogPost)
        {
            return view('blog.show', [
                'post' => $blogPost,
            ]);
        }

    
    //show form to edit the post
    public function edit(BlogPost $blogPost)
        {
            return view('blog.edit', [
                'post' => $blogPost,
            ]); //returns the edit view with the post
        }


    //save the edited post
    public function update(Request $request, BlogPost $blogPost)
        {
            $blogPost->update([
                'title'   => $request->title,
                'body'    => $request->body,
                'blogpic' => $request->blogpic,
             ]);
    
            return redirect('/blog' . $blogPost->id);
        }

    
    //delete a post
    public function destroy(BlogPost $blogPost)
        {
            $blogPost->delete();
    
            return redirect('/blog');
        }
}