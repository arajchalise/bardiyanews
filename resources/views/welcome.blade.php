@extends('layouts.layout')

@section('content')
    <!-- Top ads -->
    <div style="height: 150px; background: red;">
        <h1>Top Ads Here</h1>
    </div>
    <!-- left ads -->
    <div>
        <div>
            <div id="breaking_news" class="col-lg-9 col-md-9" style="float: left;">
                <h1>Breaking News</h1>
                @foreach($news['breaking_news'] as $newss)
                    <h2>{{ $newss->title}}</h2>
                @endforeach
            </div>
            <!-- Right ads -->
            <div id="right_aside_ads" class="col-lg-3 col-md-3 d-none d-md-block" style="float: right; min-height: 300px; background: green;">
                <div>Ad 1</div>
                <div>Ad 2</div>
                <div>Ad 3</div>
            </div>
        </div>
        <div class="clearfix"></div>
    <div id="inthe_page_ad" style="min-height: 150px; background: blue;">Mid page ad</div>
    <div id="business_news">
        <h1>Business News</h1>
        @foreach($news['business_news'] as $newss)
            <h2>{{ $newss->title}}</h2>
        @endforeach
    </div>
    <div id="inthe_page_ad" style="min-height: 150px; background: blue;">Mid Page Ad</div>
    <div id="lifestyle_news">
        <h1>Lifestyle News</h1>
        @foreach($news['lifestyle_news'] as $newss)
            <h2>{{ $newss->title}}</h2>
        @endforeach
    </div>
    <div id="entertainment_news">
        <h1>Entertainemnt News</h1>
        @foreach($news['entertainment_news'] as $newss)
            <h2>{{ $newss->title}}</h2>
        @endforeach
    </div>
    </div>
@endsection
