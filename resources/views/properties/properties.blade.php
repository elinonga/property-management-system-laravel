@extends('layouts.app')

@section('content')

    <!-- inner Head -->
    <div class="inner-head overlap">
        <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="ti ti-home"></i></span>
                <h2>PROPERTIES - LIST </h2>
                <ul>
                    <li><a href="{{ route('home') }}" title="">HOME</a></li>
                    <li><a href="{{ route('view-property') }}" title="">PROPERTIES - LIST </a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-12 column">
                            <div class="properties-sec">
                                <div class="properties-list">

                                    <!-- Title za Juu Box -->
                                    <div class="filter-wrapper">
                                        <ol class="list-option-filter">

                                            <!--// Post a property -->
                                            <li class="icon-list-view">
                                                <div class="option-filter-box">
                                                    <a href="{{ route('add-property') }}"><h3>POST A PROPERTY</h3></a>
                                                </div>
                                            </li>

                                            <!--// select how many post you want to see perpage -->
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
                                    <!-- Title za Juu Box -->


                                    <!-- Properties Data -->
                                    <div class="properties-content properties-grid">

                                        @if ($properties->count())

                                            @foreach ($properties as $property)

                                                <x-property :property="$property" />

                                            @endforeach

                                            <!-- For Pagination -->
                                            {{ $properties->links() }}

                                        @else
                                            <p>There are no properties</p>
                                        @endif

                                    </div>
                                    <!-- Properties Data -->


                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
