@extends('layout')
@section('content')
    <main class="" id="main-collapse">

        <div class="row">
            <div class="col-xs-12 section-container-spacer">
                <!-- Main heading for the page -->
                <h1>{{ __('Collections') }}</h1>
                <!-- Subheading that provides a description -->
                <p>{{ __('Explore our diverse range of collections curated for different seasons and occasions.') }}</p>
            </div>
        </div>

        <div class="hero-full-wrapper">
            <div class="grid">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>

                <div class="col-xs-12 col-md-4 section-container-spacer">
                    <!-- Added alt description for image -->
                    <img class="img-responsive" alt="Best selling Jallaba" src="{{ asset('images/jallaba-summer-2.jpeg') }}">
                    <h2>{{ __('Best Seller') }}</h2>
                    <p> {{ __('These are some of the most popular products amongst our customers.') }}</p>
                    <!-- Added title attribute for link -->
                    <a href="{{ route('BestSellers', app()->getLocale()) }}" class="btn btn-primary"
                        title="View our Best Sellers">
                        {{ __('Take a Closer Look') }}</a>
                </div>

                <div class="col-xs-12 col-md-4 section-container-spacer">
                    <!-- Added alt description for image -->
                    <img class="img-responsive" alt="Jallaba from Winter Collection"
                        src="{{ asset('images/jallaba-4.jpeg') }}">
                    <h2>{{ __('Winter Collection') }}</h2>
                    <p>{{ __('Comfortable woolen and cotton garments suitable for cold weather. These kinds of JALLABAs are perfect for keeping you cozy during cold nights.') }}
                    </p>
                    <!-- Added title attribute for link -->
                    <a href="{{ route('WinterCollection', app()->getLocale()) }}" class="btn btn-primary"
                        title="View our Winter Collection">
                        {{ __('Take a Closer Look') }}</a>
                </div>

                <div class="col-xs-12 col-md-4 section-container-spacer">
                    <!-- Added alt description for image -->
                    <img class="img-responsive" alt="Jallaba from Summer Collection"
                        src="{{ asset('images/jallaba-6.jpeg') }}">
                    <h2>{{ __('Summer Collection') }}</h2>
                    <p>{{ __('Perfect JALLABAs and GANDOURAs for hot and warm weather to keep you cool and comfortable, thanks to the quality of the materials used.') }}
                    </p>
                    <!-- Added title attribute for link -->
                    <a href="{{ route('SummerCollection', app()->getLocale()) }}" class="btn btn-primary"
                        title="View our Summer Collection">
                        {{ __('Take a Closer Look') }}</a>
                </div>


            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                masonryBuild();
            });
        </script>
    </main>
@endsection
