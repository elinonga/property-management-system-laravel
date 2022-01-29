@extends('layouts.app')

@section('content')

    <div class="inner-head overlap">
        <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="ti ti-home"></i></span>
                <h2>SUBMIT PROPERTY </h2>
                <ul>
                    <li><a href="#" title="">HOME</a></li>
                    <li><a href="#" title="">SUBMIT PROPERTY </a></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="block">
        <div class="container agnet-prop">
            <div class="row">

                <aside class="col-md-4 column">

                    <div class="agent_bg_widget widget">
                        <div class="agent_widget">
                            <div class="agent_pic">
                                <a href="agent.html" title="">
                                    <img src="img/demo/man1.jpg" alt="" />
                                    <h5>Smith forbes</h5>
                                </a>
                            </div>
                            <div class="agent_social">
                                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                            </div>

                            <span>
                                    <i class="fa fa-phone"> </i> +1 9090909090
                                </span>
                            <span>
                                    <i class="fa fa-envelope"> </i> agent@company.com
                                </span>
                            <ul class="agent-menu">
                                <li>
                                    <a href="" ><i class="fa fa-user"> </i> My Profile </a>
                                </li>
                                <li>
                                    <a href="" ><i class="fa fa-home"> </i> My Properties </a>
                                </li>
                                <li>
                                    <a href="" ><i class="fa fa-sign-out"> </i> Log-out </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="package_widget widget">
                        <div class="heading2">
                            <h3>Your Current Package</h3>
                        </div>
                        <div class="package-content">
                            <p><strong>Free Membership</strong></p>
                            <p>Listing included:&nbsp;3</p>
                            <p>Listing remain:&nbsp;1</p>
                            <p>Featured included:&nbsp;1</p>
                            <p>Featured remain:&nbsp;1</p>
                            <p>Ends On:&nbsp;Never</p>
                        </div>
                    </div>

                    <div class="pass_pro_widget widget">
                        <div class="heading2">
                            <h3>Change Your Plan</h3>
                        </div>
                        <div class="plan-content">
                            <form class="subscription_post">

                                <div class="form-message">
                                </div>
                                <div class="form-group">
                                    <div class="dropdown label-select">
                                        <select class="form-control">
                                            <option>Basic Plan</option>
                                            <option>Slave Plan</option>
                                            <option>Gold Plan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="recurring_payment" class="checkbox-label">
                                        <input id="recurring_payment" name="recurring_payment" value="1" type="checkbox">
                                        Make Payment Recurring
                                    </label>
                                </div>
                                <div class="">
                                    <input class="btn btn-success" value="PAY WITH PAYPAL" type="submit">
                                </div>
                                <div class="package-info">
                                    or&nbsp;
                                    <a href="#">View more detail</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </aside>

                <div class="col-md-8 column">

                    <div class="heading4">
                        <h2>SUBMIT PROPERTY</h2>
                    </div>

                    <div class="submit-content">

                        <form action="{{ route('add-property') }}" id="new_post" enctype="multipart/form-data" name="new_post" method="post" class="property-form" role="form">

                            @csrf


                            <!-- Property Description & Price -->
                            <div class="control-group">
                                <div class="group-title">Property Description &amp; Price</div>
                                <div class="group-container row">

                                    <div class="col-md-8">
                                        <div class="form-group s-prop-title">
                                            <label for="title">Title&nbsp;&#42;</label>
                                            <input type="text" id="title" class="form-control" name="title" required="" value="{{ old('title') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-area">
                                            <label for="area">Area&nbsp;(sqft)</label>
                                            <input type="text" id="area" class="form-control" name="area" value="{{ old('area') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group s-prop-desc">
                                            <label for="textarea">Description&nbsp;&#42;</label>
{{--                                            <input type="text" id="textarea" class="form-control" name="desc" value="{{ old('desc') }}">--}}
                                            <textarea id="textarea" name="desc" rows="10" required="" style="width: 100%;"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group s-prop-price row">
                                            <div class="price col-md-4">
                                                <label for="price">Price&nbsp;&#42;&nbsp;(&#36;)</label>
                                                <input type="text" id="price" class="form-control" value="{{ old('price') }}" name="price" required="">
                                            </div>
                                            <div class="price_label col-md-8">
                                                <label for="price_label">After price label (ex: "per month")</label>
                                                <input type="text" id="price_label" class="form-control" value="{{ old('price_label') }}" name="price_label">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-status">
                                            <label>Status</label>
                                            <div class="dropdown label-select">
                                                <select name="status" class="form-control">
                                                    <option>Sale</option>
                                                    <option>Open house</option>
                                                    <option>Rent</option>
                                                    <option>Sold</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-type">
                                            <label>Type</label>
                                            <div class="dropdown label-select">
                                                <select name="type" class="form-control">
                                                    <option>Apartment</option>
                                                    <option>Co-op</option>
                                                    <option>Condo</option>
                                                    <option>Single Family Home</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-bedrooms">
                                            <label for="bedrooms">Bed Rooms</label>
                                            <input type="text" id="bedrooms" class="form-control" value="{{ old('bedrooms') }}" name="bedrooms">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-bathrooms">
                                            <label for="bathrooms">Bath Rooms</label>
                                            <input type="text" id="bathrooms" class="form-control" value="{{ old('bathrooms') }}" name="bathrooms">
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Image -->
                            <div class="control-group">
                                <div class="group-title">Property Images</div>
                                <div class="group-container row">
                                    <div class="col-md-12">
                                        <div id="upload-container">
                                            <div id="aaiu-upload-container">
                                                <div class="moxie-shim moxie-shim-html5">

                                                    <label for="input-upload" class="btn flat-btn btn-lg">Select Images</label>

                                                    <input id="input-upload" type="file" multiple="" name="image" value="{{ old('image') }}" accept="image/jpeg,image/gif,image/png">

                                                    @error('image')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                </div>
                                                <p>At least 1 image is required for a valid submission. The featured image will be used to dispaly on property listing page.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Additional Info -->
                            <div class="control-group">
                                <div class="group-title">Additional Info</div>
                                <div class="group-container row">

                                    <div class="col-md-4">
                                        <div class="form-group property_field_lot_area">
                                            <label for="property_field_lot_area">Lot Area</label>
                                            <input type="text" id="property_field_lot_area" name="lot_area" class="form-control" value="{{ old('lot_area') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-property_field_year_built">
                                            <label for="property_field_year_built">Year Built</label>
                                            <input type="text" id="property_field_year_built" name="year_built" class="form-control" value="{{ old('year_built') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-property_field_flooring">
                                            <label for="property_field_flooring">Flooring</label>
                                            <input type="text" id="property_field_flooring" name="flooring" class="form-control" value="{{ old('flooring') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-property_field_garage_size">
                                            <label for="property_field_garage_size">Garage Size</label>
                                            <input type="text" id="property_field_garage_size" name="garage_size" class="form-control" value="{{ old('garage_size') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-property_field_roofling">
                                            <label for="property_field_roofling">Roofling</label>
                                            <input type="text" id="property_field_roofling" name="roofling" class="form-control" value="{{ old('roofling') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-property_field_parking">
                                            <label for="property_field_parking">Parking</label>
                                            <input type="text" id="property_field_parking" name="parking" class="form-control" value="{{ old('parking') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group s-prop-property_field_style">
                                            <label for="property_field_style">Style</label>
                                            <input type="text" id="property_field_style" name="style" class="form-control" value="{{ old('style') }}">
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Listing Location -->
                            <div class="control-group">
                                <div class="group-title">Listing Location</div>
                                <div class="group-container row">

                                    <div class="col-md-12">
                                        <div class="form-group s-prop-address">
                                            <label for="address">Address&nbsp;&#42;</label>
                                            <textarea id="address" class="form-control" name="address" rows="1" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group s-prop-location">
                                            <label>Location</label>
                                            <div class="dropdown label-select">
                                                <select name="location" class="form-control">
                                                    <option>New Jersey</option>
                                                    <option>New York</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group s-prop-sub_location">
                                            <label>Sub Location</label>
                                            <div class="dropdown label-select">
                                                <select name="sub_location" class="form-control">
                                                    <option>Central New York</option>
                                                    <option>GreenVille</option>
                                                    <option>Long Island</option>
                                                    <option>New York City</option>
                                                    <option>West Side</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group s-prop-long">
                                            <label for="property_gmap_longitude">Longitude (for Google Maps)</label>
                                            <input type="text" id="property_gmap_longitude" class="form-control" value="-74.005279" name="long">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group s-prop-lat">
                                            <label for="property_gmap_latitude">Latitude (for Google Maps)</label>
                                            <input type="text" id="property_gmap_latitude" class="form-control" value="40.714398" name="lat">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="property_google_map">
                                            <div id="property_google_map" class="form-group property_google_map" style="height: 300px; margin-top: 25px; overflow: hidden;position: relative;width: 100%;">
                                            </div>
                                            <div class="property_google_map_search">
                                                <input placeholder="Search your map" name="maps" value="{{ old('maps') }}" type="text" autocomplete="off" id="property_google_map_search_input">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                             <!-- Property Video -->
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="control-group small-group">
                                        <div class="group-title">Property Video</div>
                                        <div class="group-container row">
                                            <div class="col-md-12">
                                                <div class="form-group s-prop-video">
                                                    <label for="_video_embedded">Video Embedded</label>
                                                    <input type="text" id="_video_embedded" class="form-control" value="{{ old('video') }}" name="video">
                                                    <small>Enter a Youtube, Vimeo, Soundcloud, etc... URL.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <!-- Submit -->
                            <div class="submit row" style="clear: both; margin-top: 25px;">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-lg flat-btn" id="property_submit" value="Add Property">
                                    <label style="margin-top: 15px; margin-left: 10px;">  Your submission will be reviewed by Administrator before it can be published</label>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
