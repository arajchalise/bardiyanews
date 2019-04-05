@extends('layouts.layout')

@section('content')
    <!-- Top ads -->
    <div class="ads" id="ads-full-width">
        <!-- <img src="{{ asset('ads/top.jpg') }}"> -->
        <blink><h1 style="text-align: center; color: red;">Place your Advertise here !!!</h1></blink>
    </div>
    <div style="height: 30px; width: 100%;"></div>
    <div>
        <!-- Loads with this content- Complete -->
        <div id="home">
            <!-- Breaking news or other highest priority news -->
            <div class="carousel slide col-lg-8 col-md-8" data-ride="carousel" style="float: left;">
              <div class="carousel-inner" role="listbox">
                @foreach( $news['breaking_news'] as $newss )
                   <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <h2 style="width: 100%;">{{ $newss->title}}</h2>
                       <img class="d-block img-fluid" src="{{ asset ('images/')}}/{{$newss->photo}}" style="width: 100%; height: 71%;">
                             <p>{{ str_limit($newss->description, 400) }}<a href="news/{{ $newss->id }}" class="btn btn-primary" role="btn">Read More</a></p>
                          
                   </div>
                @endforeach
              </div>
            </div>
            <!-- Right ads -->
            <div id="right_aside_ads" class="col-lg-4 col-md-4 d-none d-md-block" style="float: right;">
                <div style="height: 230px; margin-bottom: 5px;" class="ads">
                    <!-- <img src="{{ asset('ads/side1.jpg') }}"> -->
                    <blink><h1 style="text-align: center; color: red;">Place your Advertise here !!!</h1></blink>
                </div>
                <div style="height: 230px; margin-bottom: 5px;" class="ads">
                    <!-- <img src="{{ asset('ads/side2.jpg') }}"> -->
                    <blink><h1 style="text-align: center; color: red;">Place your Advertise here !!!</h1></blink>
                </div>
                <div style="height: 230px;" class="ads">
                    <!-- <img src="{{ asset('ads/side3.jpg') }}"> -->
                    <blink><h1 style="text-align: center; color: red;">Place your Advertise here !!!</h1></blink>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Business News -->
        <div id="business_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div id="ads-full-width" class="ads">
                <!-- <img src="{{ asset('ads/mid1.jpg') }}"> -->
                <blink><h1 style="text-align: center; color: red;">Place your Advertise here !!!</h1></blink>
            </div>
            <div class="news">
                <h1>ब्यबसाय</h1>
                    @foreach($news['breaking_news'] as $newss)
                    @if($loop->first)
                        <div class="col-md-4 col-lg-4" id="latest_business_news">
                            <div id="image">
                                <img src="{{asset('images')}}/{{ $newss->photo }}">
                            </div>
                            <div id="caption">
                                <a href="news/{{ $newss->id }}"><h2>{{ $newss->title }}</h2></a>
                            </div>
                        </div>
                    @endif
                    @endforeach
                    <div class="col-lg-5 col-md-5" id="other_news">
                        <h2 style="margin-bottom: 20px; text-align: center; font-weight: bold;">अन्य समाचार</h2>
                        <marquee behavior=scroll direction="up" scrollamount="5" height="300" onMouseOver="this.stop()" onMouseOut="this.start()">
                            @foreach($news['breaking_news'] as $newss)
                                @if($loop->first)
                                    @continue
                                @endif
                                <div id="other_news_title">
                                    <a href="news/{{ $newss->id }}"><p style="font-size: 18px;">{{ $newss->title }}</p></a>
                                </div>
                            @endforeach
                        </marquee>
                    </div>
                <div class="col-lg-3 col-md-3" id="currency">
                    <h2>Currency</h2>
                    <div style="color: #000;">
                        <noscript><p>Your Browser does not support Javascript</p></noscript>
                        <script type="text/javascript" src="https://fx-rate.net/fx-rates2.php?label_name=Nepalese Rupee Exchange Rate&lab=0&currency=NPR&flag_code=np&length=short&cid=AUD,CNY,JPY,USD,CAD,EUR,MYR,AED,GBP&lang=en"></script>
                    </div>
                    <div style="border: 1px solid red; height: 200px; width: 100%;">
                        <blink><h3 style="color: red;">Place your Ads here </h3></blink>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lifestyle news -->
        <div class="clearfix"></div>
        <div id="lifestyle_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div id="ads-full-width" class="ads">
                <!-- <img src="{{ asset('ads/mid2.jpg') }}"> -->
                <blink><h1 style="text-align: center; color: red;">Place your Advertise here !!!</h1></blink>
            </div>
            <div class="news">
                <h1>जीवनशैली</h1>
                <!-- @foreach($news['lifestyle_news'] as $newss)
                    <h2>{{ $newss->title}}</h2>
                @endforeach -->
                <div class="col-lg-7 col-md-7" style="float: left;">
                    @foreach($news['breaking_news'] as $newss)
                    @if($loop->first)
                            <div id="image">
                                <img src="{{asset('images')}}/{{ $newss->photo }}">
                            </div>
                                <a href="news/{{ $newss->id }}"><h2>{{ $newss->title }}</h2></a>
                            
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-5 col-md-5" style="float: right;">
                    @foreach($news['breaking_news'] as $newss)
                    @if($loop->first)
                            @continue
                    @endif
                    <div style="width: 50%; float: left; margin-bottom: 10px;">
                        <div id="image">
                                <img src="{{asset('images')}}/{{ $newss->photo }}">
                            </div>
                            
                                <a href="news/{{ $newss->id }}"><p>{{ $newss->title }}</p></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="entertainment_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div class="news">
                <h1>मनोरञ्जन</h1>
                @foreach($news['breaking_news'] as $newss)
                    @if($loop->first)
                        <div class="col-md-6 col-lg-6" id="latest_entertainent_news" style="float: left;">
                            <div id="image">
                                <img src="{{asset('images')}}/{{ $newss->photo }}">
                            </div>
                            
                                <a href="news/{{ $newss->id }}"><h2>{{ $newss->title }}</h2></a>
                            
                        </div>
                    @endif
                    @endforeach
                <div class="col-md-6 col-lg-6" style="float: right;">
                    @foreach($news['breaking_news'] as $newss)
                    @if($loop->first)
                        @continue
                    @endif
                        <div id="entertainment_image">
                            <a href="news/{{ $newss->id }}"><!-- <img src="{{asset('images')}}/{{ $newss->photo }}"> --><h3>{{ $newss->title }}</h3></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- <div id="sports_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div class="news">
                <h1>खेलकुद</h1>
                @foreach($news['sports_news'] as $newss)
                    <h2>{{ $newss->title}}</h2>
                @endforeach
            </div>
        </div>
        <div id="education_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div class="news">
                <h1>शिक्षा</h1>
                @foreach($news['education_news'] as $newss)
                    <h2>{{ $newss->title}}</h2>
                @endforeach
            </div>
        </div>
        <div id="health_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div class="news">
                <h1>स्वास्थ्य</h1>
                @foreach($news['health_news'] as $newss)
                    <h2>{{ $newss->title}}</h2>
                @endforeach
            </div>
        </div>
        <div id="literature_news" style="min-height: 400px;">
            <div style="height: 90px; width: 100%;"></div>
            <div class="news">
                <h1>साहित्य</h1>
                @foreach($news['literature_news'] as $newss)
                    <h2>{{ $newss->title}}</h2>
                @endforeach
            </div>
        </div> -->
    </div>
@endsection
