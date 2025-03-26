@extends('layouts.app')

@section('content')
    @if($shortenedUrls->isEmpty())
        <p class="text-gray-600">You haven't shortened any URLs yet.</p>
    @else
        <table class="w-full border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Short URL</th>
                <th class="border p-2">Original URL</th>
                <th class="border p-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shortenedUrls as $shortUrl)
                <tr>
                    <td class="border p-2">
                        <a href="{{ url($shortUrl->short_code) }}" class="text-blue-600 underline" target="_blank">
                            {{ url($shortUrl->short_code) }}
                        </a>
                    </td>
                    <td class="border p-2 truncate">
                        <a href="{{ $shortUrl->original_url }}" class="text-blue-600 underline" target="_blank">
                            {{ Str::limit($shortUrl->original_url, 50) }}
                        </a>
                    </td>
                    <td class="border p-2">
                        <form>
                            @csrf
                            <button type="submit" class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
