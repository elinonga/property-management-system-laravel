@extends('layouts.app')

@section('content')


    <div class="inner-head overlap">
        <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="ti ti-home"></i></span>
                <h2 style="color: #0d0d0d">AGENT : {{ $user->name }}</h2>
                <ul>
                    <li><a href="{{ route('home') }}" title="" style="color: #0d0d0d">HOME</a></li>
                    <li>/</li>
                    <li><a href="#" title="" style="color: #0d0d0d">{{ $user->name }}</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="block">
        <div class="container agnet-prop">
            <div class="row">

                <div class="col-md-12">
                    <div class="filter-wrapper">
                        <ol class="list-option-filter">
                            <li>
                                <div class="option-filter-box">
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
                            </li>

                            <li>
                                <div class="option-filter-box">
                                    <div class="label-select">
                                        <select class="form-control">
                                            <option value="">
                                                Property/page
                                            </option>
                                            <option value="4">
                                                4 properties-/Page
                                            </option>
                                            <option value="8">
                                                8 properties-/Page
                                            </option>
                                            <option value="12">
                                                12 properties-/Page
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </li>

                            <li class="sort-rates-lastest">
                                <div class="option-filter-box">
                                    <span class="title">SORT BY:</span>
                                    <a href="" class="sort-icon orderby" data-order="" data-sort="rating_score">
                                        Rating                </a> /
                                    <a href="" class="sort-icon orderby active" data-order="" data-sort="date">
                                        Latest                </a>
                                </div>
                            </li>
                            <li class="icon-list-view">
                                <div class="option-filter-box">
                                    <span class="icon-view grid-style active"><i class="fa fa-th"></i></span>
                                    <span class="icon-view fullwidth-style"><i class="fa fa-th-list"></i></span>
                                </div>
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">

                        <!-- User's Listings -->
                        <div class="col-md-8 column">
                            <div class="single-post-sec">
                                <div class="blog-post property-post">

                                    <div class="properties-sec">
                                        <div class="properties-list">

                                            <div class="properties-content">
                                                <div class="row">

                                                    @if ($properties->count())

                                                        @foreach ($properties as $property)

                                                            <div class="col-md-6 col-sm-6  col-xs-12">

                                                                <div class="properties-box">
                                                                    <div class="properties-thumb">

                                                                        <img src="{{ asset('img/properties/' . $property->image) }}" alt="">

                                                                        <span class="spn-status"> For {{ $property->status }} </span>
                                                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                                        <ul class="property-info">
                                                                            <li>
                                                                                <i class="fa  fa-retweet"> </i> <span>{{ $property->area }} sqft </span>
                                                                            </li>
                                                                            <li class="li-rl"></li>
                                                                            <li>
                                                                                <i class="fa  fa-bed"></i><span>  {{ $property->bedrooms }}   </span>
                                                                            </li>
                                                                            <li class="li-rl"></li>
                                                                            <li>
                                                                                <i class="fa  fa-building"> </i> <span>{{ $property->bathrooms }}   </span>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="user-preview">
                                                                            <a class="col" href="agent.html">
                                                                                <img alt="Camilė" class="avatar avatar-small" src="{{ asset('img/agents/' . $property->user->avatar) }}" title="{{ $property->user->username }}">
                                                                            </a>
                                                                        </div>
                                                                        <a class="proeprty-sh-more" href="{{ route('view-property.show', $property->id) }}"><i class="ti ti-share"> </i></a>

                                                                    </div>
                                                                    <h3><a href="{{ route('view-property.show', $property->id) }}" title="">{{ $property->title }}</a></h3>
                                                                    <span class="price">${{ $property->price }} {{ $property->price_label }}</span>
                                                                </div>

                                                            </div>

                                                        @endforeach

                                                    @else
                                                        <p>{{ $property->user->name }} has no properties</p>
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User's Profile -->
                        <aside class="col-md-4 column">

                            <div class="agent_bg_widget widget">
                                <div class="agent_widget">
                                    <div class="agent_pic">
                                        <a href="#" title="">
                                            <img src="{{ asset('img/agents/' . $user->avatar) }}" alt="" />

                                            <!-- User's name + Edit Profile -->
                                            <div class="row">

                                                <div class="col-md-8">
                                                    <!-- User's name -->
                                                    <h5>{{ $user->name }}</h5>
                                                </div>

                                                <div class="col-md-4" style="margin-top: 25px;">
                                                    <!-- Edit -->
                                                    <a href="{{ route('user.edit', $user->id) }}" title=""><i class="fa fa-pencil"></i></a>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="agent_social">
                                        <a href="{{ $user->facebook }}" title=""><i class="fa fa-facebook"></i></a>
                                        <a href="{{ $user->linkedin }}" title=""><i class="fa fa-linkedin"></i></a>
                                        <a href="{{ $user->twitter }}" title=""><i class="fa fa-twitter"></i></a>
                                        <a href="{{ $user->pinterest }}" title=""><i class="fa fa-pinterest"></i></a>
                                    </div>

                                    <span>
                                            <i class="fa fa-phone"> </i> {{ $user->phone }}
                                        </span>
                                    <span>
                                            <i class="fa fa-envelope"> </i> {{ $user->email }}
                                        </span>

                                    <a href="{{ route('agents.all') }}"  title="" class="btn contact-agent">More Agents</a>
                                </div>
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
