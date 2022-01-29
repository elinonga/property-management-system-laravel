@extends('layouts.app')

@section('content')


    <!-- inner Head -->
    <div class="inner-head overlap">
        <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2 style="color: #0d0d0d">AGENTS LISTING</h2>
                <ul>
                    <li><a style="color: #0d0d0d" href="{{ route('home') }}" title="">HOME</a></li>
                    <li><a style="color: #0d0d0d">/</a></li>
                    <li><a style="color: #0d0d0d" href="{{ route('agents.all') }}" title="">AGENTS LISTING</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Section Block-->
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 column">
                    <div class="lsting-agents-sec">

                        <!-- Agent Row -->
                        <div class="row">

                            @if ($users->count())

                                @foreach ($users as $user)

                                    <div class="col-md-6">

                                        <!-- Agent Box -->
                                        <div class="lsting-agents-box">
                                            <img src="{{ asset('img/agents/' . $user->avatar) }}" style="width: 100%; height: 400px;" alt="" />
                                            <div class="lsting-agents-info">
                                                <i class="fa fa-share"></i>
                                                <a href="{{ route('user.properties', $user) }}"><h3>{{ $user->name }}</h3></a>
                                                    <i>Realtor</i>
                                                    <p>{{\Illuminate\Support\Str::limit($user->about, 50)}}</p>
                                                    <ul class="social-btns">
                                                        <li><a href="{{ $user->facebook }}" title=""><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="{{ $user->google }}" title=""><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="{{ $user->twitter }}" title=""><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                            </div>
                                        </div>

                                    </div>

                                @endforeach

                            @else
                                <p>There are no realtors.</p>
                            @endif

                        </div>
                        <ul class="pagination">
                            <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                            <li><a href="#" title="">1</a></li>
                            <li class="active"><a href="#" title="">2</a></li>
                            <li><a href="#" title="">3</a></li>
                            <li><a href="#" title=""><span>PREV</span></a></li>
                        </ul>

                    </div>
                </div>
                <aside class="col-md-4 column">
                    <div class="follow_widget widget">
                        <div class="heading2">
                            <h3>Follow Us</h3>
                        </div>
                        <div class="social_widget">
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                        </div>
                    </div><!-- Follow Widget -->
                    <div class="search_widget widget">
                        <div class="heading2">
                            <h3>Search properties</h3>
                        </div>
                        <div class="search-form">
                            <form action="properties.html"  method="get" class="form-inline">
                                <div class="search-form-content">
                                    <div class="search-form-field">
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control" name="s_location">
                                                    <option>All Locations</option>
                                                    <option>Tokyo</option>
                                                    <option>New Jersey</option>
                                                    <option>New York</option>
                                                    <option>Paris</option>
                                                    <option>Marrakech</option>
                                                    <option>lille</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control" name="s_sub_location">
                                                    <option>All Sub-locations</option>
                                                    <option>Central New York</option>
                                                    <option>GreenVille</option>
                                                    <option>Long Island</option>
                                                    <option>New York City</option>
                                                    <option>West Side</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control" name="s_cat">
                                                    <option>All Categories </option>
                                                    <option>Apartment</option>
                                                    <option>Load</option>
                                                    <option>Office Building</option>
                                                    <option>House</option>
                                                    <option>Villa</option>
                                                    <option>Retail</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control" name="s_statu">
                                                    <option> All Status </option>
                                                    <option>Open house</option>
                                                    <option>Rent </option>
                                                    <option>Boy</option>
                                                    <option>used</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control">
                                                    <option>No. of Bedrooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control">
                                                    <option>No. of Bed</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <span class="gprice-label">Price</span>
                                            <input type="text" class="span2" value="" data-slider-min="0"
                                                   data-slider-max="600" data-slider-step="5"
                                                   data-slider-value="[0,270]" id="price-range" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <span class="garea-label">Area</span>
                                            <input type="text" class="span2" value="" data-slider-min="0"
                                                   data-slider-max="600" data-slider-step="5"
                                                   data-slider-value="[170,600]" id="property-geo" >
                                        </div>
                                    </div>
                                </div>
                                <div class="search-form-submit">
                                    <button type="subimt" class="btn-search">Search</button>
                                </div>
                            </form>
                        </div><!-- Services Sec -->
                    </div><!-- Category Widget -->

                </aside>
            </div>
        </div>
    </section>


@endsection
