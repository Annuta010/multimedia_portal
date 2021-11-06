<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post,};
use App\Http\Resources\{PostResource, BlogResource};

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return PostResource::collection(
            Post::with('blog')
            ->get()
            ->sortByDesc('created_at')
            ->values()
        );
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
        return new PostResource(Post::with(['blog'])->firstWhere('slug', $post));
    }

    public function update(
        // CreateBlogRequest $request, Blog $blog
    )
    {
        // $blog->update($request->validated());
        // return $blog;
        return true;
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
