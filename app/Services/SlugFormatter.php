<?php

namespace App\Services;

use Illuminate\Support\Str;

class SlugFormatter
{
    public static function concatWithUserId(string $slug, $id)
    {
        return "$slug|$id";
    }

    public static function trimUserId(string $slug)
    {
        return Str::before($slug, '|');
    }
}