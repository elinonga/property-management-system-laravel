@extends('layouts.app')

@section('content')

    <!-- /.preloader -->
{{--    <div id="preloader"></div>--}}

        <section>
            <div id="map_canvas"></div>
        </section>

        <section class="horizontal-search">
            <div class="container">
                <div class="">
                    <div class="search-form">
                        <form action="properties.html"  method="get" class="form-inline">
                            <div class="search-form-content">
                                <div class="search-form-field">
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <span class="gprice-label">Price</span>
                                        <input type="text" class="span2" value="" data-slider-min="0"
                                               data-slider-max="600" data-slider-step="5"
                                               data-slider-value="[0,450]" id="price-range" >
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
            </div>
        </section>

        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>RECENT PROPERTIES</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="properties-sec">
                            <div class="carousel-prop">
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property1.jpg" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                    </div>
                                    <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                    <span class="price">$340000</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property2.jpg" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/3.png" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="#" title="New York Villa">New York Villa</a></h3>
                                    <span class="price">$3400000</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property3.jpg" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/1.png" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$300000</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property4.jpg" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$34.00</span>
                                </div>
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property5.jpg" alt="" />
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li>
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-bed"></i><span>  5   </span>
                                            </li>
                                            <li class="li-rl"></li>
                                            <li>
                                                <i class="fa  fa-building"> </i> <span>3   </span>
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                            </a>
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$9000000</span>
                                </div>
                            </div><!-- Carousel -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <!-- PARALLAX BACKGROUND IMAGE -->
            <div  style="background: url(img/call-to-action-bg.jpg) repeat scroll 50% 422.28px transparent;
                  background-attachment: fixed;"
                  class="parallax scrolly-invisible  whitish">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-text-bar">
                            <h3>Sell or Rent  <span> Properties </span>Quickly ! </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
                            <a href="#" title="" class="flat-btn">Joing us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="heading4">
                    <h2>FEATURED PROPERTIES</h2>
                    <span>Lorem ipsum dolor consectetu</span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property4.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="">The Helux villa</a></h3>
                                        <span class="price">$444000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property3.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/1.png" title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$789000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property2.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$380000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property4.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$1000000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property5.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/3.png" title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$500000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property3.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span>  5   </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>3   </span>
                                                </li>
                                            </ul>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$340000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="block">
            <div  style="background: transparent url(&quot;img/call-to-action-big.jpg&quot;) repeat scroll 50% 0px; background-attachment: fixed;"
                  class="parallax scrolly-invisible  whitish">

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>OUR AGENTS</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="agents-carousal-sec">
                            <ul class="carousel">
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent1.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent3.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent5.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent4.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="agents-carousal-sec">
                            <div class="heading4">
                                <h2>OUR PARTNERS </h2>
                                <span>Lorem ipsum dolor</span>
                            </div>
                            <div class="our-clients-sec">
                                <ul class="carousel-client">
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client2.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client4.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client5.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
