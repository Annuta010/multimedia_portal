<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post,};

class PostController extends Controller
{
    public function index()
    {
        return Post::with('blog')->get()->sortByDesc('created_at')->values();
    }

    public function store(
        // CreatePostRequest $request
    )
    {
        return true;
        // Blog::create($request->validated());
    }

    public function show($post)
    {
        //Blog::firstWhere('slug', SlugFormatter::concatWithUserId($blog, '1'))
        return Post::with(['blog'])->firstWhere('slug', $post);
    }

    public function update(
        // CreateBlogRequest $request, Blog $blog
    )
    {
        // $blog->update($request->validated());
        // return $blog;
        return true;
    }

    public function destroy(
        // Blog $blog
    )
    {
        // return $blog->delete();
        return true;
    }
}
