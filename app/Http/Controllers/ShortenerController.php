<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ShortenerController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate(['url' => 'required|url']);

        $existing = ShortUrl::where('original_url', $request->url)->first();
        if ($existing) {
            return back()->with('short_url', url($existing->short_code));
        }

        $shortCode = Str::random(6);

        $shortUrl = ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $shortCode,
            'user_id' => Auth::id(),
        ]);

        return back()->with('short_url', url($shortUrl->short_code));
    }

    public function redirect($code)
    {
        $shortUrl = ShortUrl::where('short_code', $code)->firstOrFail();
        Click::create([
            'short_url_id' => $shortUrl->id,
        ]);
        return redirect($shortUrl->original_url);
    }
}
