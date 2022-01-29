@extends('layouts.app')

@section('content')

    <div class="inner-head overlap">
        <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="ti ti-home"></i></span>
                <h2 style="color: #0d0d0d">{{ $property->title }}</h2>
                <ul>
                    <li><a style="color: #0d0d0d" href="{{ route('home') }}" title="">HOME</a></li>
                    <li><a style="color: #0d0d0d" href="#" title="">/</a></li>
                    <li><a style="color: #0d0d0d" href="{{ route('user.properties', $property->user) }}" title="">
                            Realtor: {{ $property->user->name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- inner Head -->


    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">

                            <!-- Images + Further Details -->
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post property-post">
                                        <div class="property-gallery">
                                            <div class="light-slide-item">
                                                <div class="favorite-and-print">
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                        <li data-thumb="{{asset('img/demo/property1.jpg')}}">
                                                            <img src="{{ asset('img/demo/property1.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{ asset('img/demo/property3.jpg') }}">
                                                            <img src="{{ asset('img/demo/property1.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{ asset('img/demo/property2.jpg') }}">
                                                            <img src="{{ asset('img/demo/property2.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{asset('img/demo/property1.jpg')}}">
                                                            <img src="{{ asset('img/demo/property1.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{ asset('img/demo/property3.jpg') }}">
                                                            <img src="{{ asset('img/demo/property3.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{ asset('img/demo/property4.jpg') }}">
                                                            <img src="{{ asset('img/demo/property4.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{ asset('img/demo/property3.jpg') }}">
                                                            <img src="{{ asset('img/demo/property3.jpg') }}" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="{{asset('img/demo/property1.jpg')}}">
                                                            <img src="{{ asset('img/demo/property1.jpg') }}" alt="kwitara" />
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <h1> {{ $property->title }} </h1>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="property-detail">

                                                    <div class="detail-field row" >
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{ $property->type }}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{ $property->status }}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Location</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{ $property->location }}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                                <span class="amount">${{ $property->price }}</span> {{ $property->price_label }}
                                                            </span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Area</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->area }} sqft</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->bedrooms }}</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->bathrooms }}</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->lot_area }} ftsq</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->year_built }}</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->flooring }}</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->roofling }}</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{ $property->parking }} slots</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{ $property->desc }}</p>
                                            </div>
                                        </div>

                                        <div class="property-feature">
                                            <div class="heading3">
                                                <h3>Property Features </h3>
                                            </div>
                                            <div class="property-feature-content clearfix">
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> attic</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> gas heat</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> balcony</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> wine cellar</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> basketball court</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> trash compactors</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> gym</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> fireplace</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> pool</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> lake view</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> solar Heat</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> storm Windows</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> separate Shower</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> wet bar</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> remodeled</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> skylights</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> stone Surfaces</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> open entertaining Kitchen</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> golf course</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> health club</div>
                                                <div class="no-has">
                                                    <i class="fa fa-times-circle"></i> backyard</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> pet allowed</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> office/den</div>
                                                <div class="has">
                                                    <i class="fa fa-check-circle"></i> laundry</div>
                                            </div>
                                        </div>

                                        <div class="property-video">
                                            <div class="heading3">
                                                <h3>Property Video </h3>
                                            </div>
                                            <iframe height="400" src="{{ $property->video }}" allowfullscreen></iframe>
                                        </div>

                                        <div class="property-map">
                                            <div class="heading3">
                                                <h3>Find this property on the map </h3>
                                            </div>
                                            <div id="propertyMap" ></div>
                                        </div>


                                        <div class="send-email-to-agent">
                                            <div class="comment-form">
                                                <div class="heading3">
                                                    <h3>Send Message to Agent</h3>
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" placeholder="Name" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-at"></i>
                                                                <input type="text" placeholder="Email Id" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-phone"></i>
                                                                <input type="text" placeholder="Phone Number" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-pencil"></i>
                                                                <textarea placeholder="Your Message"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="flat-btn">SEND MESSAGE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>

                            <!-- Follow Widget -->
                            <aside class="col-md-4 column">

                                <!-- Profile Account -->
                                <div class="agent_bg_widget widget">
                                    <div class="agent_widget">
                                        <div class="agent_pic">
                                            <a href="{{ route('user.properties', $property->user) }}" title="">
                                                <img src="{{ asset('img/agents/' . $property->user->avatar) }}" alt="" />
                                                <h5>{{ $property->user->name }}</h5>
                                            </a>
                                        </div>
                                        <div class="agent_social">
                                            <a href="{{ $property->user->facebook }}" title=""><i class="fa fa-facebook"></i></a>
                                            <a href="{{ $property->user->google }}" title=""><i class="fa fa-google-plus"></i></a>
                                            <a href="{{ $property->user->twitter }}" title=""><i class="fa fa-twitter"></i></a>
                                            <a href="{{ $property->user->linkedin }}" title=""><i class="fa fa-linkedin"></i></a>
                                            <a href="{{ $property->user->pinterest }}" title=""><i class="fa fa-pinterest"></i></a>
                                        </div>

                                        <span>
                                                <i class="fa fa-phone"> </i> {{ $property->user->phone }}
                                            </span>
                                        <span>
                                                <i class="fa fa-envelope"> </i> {{ $property->user->email }}
                                            </span>


                                        <a href="{{ route('user.properties', $property->user) }}"  title="" class="btn contact-agent">More Listings</a>
                                    </div>
                                </div>


                                <!-- Search Property -->
                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>SEARCH PROPERTIES</h3>
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
                                                               data-slider-value="[0,450]" id="price-range" >
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Area</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0"
                                                               data-slider-max="600" data-slider-step="5"
                                                               data-slider-value="[50,450]" id="property-geo" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form-submit">
                                                <button type="submit" class="btn-search">Search</button>
                                            </div>
                                        </form>
                                    </div><!-- Services Sec -->
                                </div>

                            </aside>

                    </div>

                    <!-- Related Properties -->
                    <div class="related-properties-">
                        <div class="heading3">
                            <h3>RELATED PROPERTIES</h3>
                            <span>Lorem ipsum dolor amet</span>
                        </div>
                        <div class="related">
                            <div class="related-properties-items">

                                @if ($property->user->id === $property->user_id)

                                    @foreach ($properties as $property)

                                        <div class="item">
                                            <div class="properties-box">
                                                <div class="properties-thumb">
                                                    <img src="{{ asset('img/properties/' . $property->image) }}" alt="" />
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

                                            </div><!-- prop Box -->
                                        </div>

                                    @endforeach

                                @else
                                    <p>{{ $property->user->name }} has no properties</p>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
