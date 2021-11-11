<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post,};
use App\Http\Resources\{PostResource, BlogResource};
use App\Http\Requests\{CreatePostRequest,};

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

    public function store(CreatePostRequest $request)
    {
        return new PostResource(
            Post::create($request->validated())
        );
    }

    public function show($post)
    {
        //Blog::firstWhere('slug', SlugFormatter::concatWithUserId($blog, '1'))
        return new PostResource(Post::with(['blog'])->firstWhere('slug', $post));
    }

    public function update(CreatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
