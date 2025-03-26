@extends('layouts.app')

@section('content')
    <div class="max-w-5xl flex w-full flex-col">
        @if($shortenedUrls->isEmpty())
            <p class="text-gray-600">You haven't shortened any URLs yet.</p>
        @else
            @foreach($shortenedUrls as $shortUrl)
                <div
                    class="bg-white rounded-2xl shadow-lg p-4 md:p-6 box-border w-full md:w-[100%] flex flex-row justify-between mb-4">
                    <div class="flex flex-col">
                        <p class="font-bold">Shortened:</p>
                        <a href="{{ url($shortUrl->short_code) }}" target="_blank">{{ url($shortUrl->short_code) }}</a>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Original:</p>
                        <a href="{{ url($shortUrl->original_url) }}"
                           target="_blank">{{ Str::limit($shortUrl->original_url, 70) }}</a>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Clicks:</p>
                        <p>147</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
