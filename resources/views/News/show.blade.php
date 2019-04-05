@extends('layouts.detailed_layout')

@section('content')
<div class="wrapper" style="margin-left: 5%; margin-right: 5%;">
    <div id="news_content" class="col-lg-9 col-md-9" style="float: left;">
        <h2>{{ $news->title}}</h2>
        <h5><span class="glyphicon glyphicon-user"></span>{{ $news->author}}</h5>
        <img src="{{asset('images/')}}/{{$news->photo}}" style="height: 300px; width: 100%;">
        <p>{{ $news->description}}</p>
    </div>
    <div id="related-content" class="col-lg-3 col-md-3" style="float: right;">
        <h1>Related Topic</h1>
        @foreach($related_topics as $related_topic)
            <p>{{ $related_topic->title }}</p>
        @endforeach
    </div>
</div>
@endsection
