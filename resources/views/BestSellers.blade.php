@extends('layout')
@section('content')
    <main class="" id="main-collapse">

        <div class="row">
            <div class="col-xs-12 section-container-spacer">
                <h1>{{ __('Our Best selling Collection') }}</h1>
                <p>{{ __('Some of our most popular options according to our customers') }}</p>
            </div>
        </div>

        <div class="hero-full-wrapper">
            <div class="grid">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>

                <!-- Product 1 -->
                <div class="grid-item">
                    <img class="img-responsive" alt="Best selling Jallaba 1" src="{{ asset('images/jallaba-1.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description"
                        title="Inquire about Jallaba 1">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h2>{{ __('Jallaba 1') }}</h2>
                                <p>{{ __('Get in touch with us to know more about this product') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product 2 -->
                <div class="grid-item">
                    <img class="img-responsive" alt="Best selling Jallaba 2" src="{{ asset('images/jallaba-2.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description"
                        title="Inquire about Jallaba 2">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h2>{{ __('Jallaba 2') }}</h2>
                                <p>{{ __('Get in touch with us to know more about this product') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product 3 -->
                <div class="grid-item">
                    <img class="img-responsive" alt="Best selling Jallaba 3" src="{{ asset('images/jallaba-3.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description"
                        title="Inquire about Jallaba 3">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h2>{{ __('Jallaba 3') }}</h2>
                                <p>{{ __('Get in touch with us to know more about this product') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ... You can continue adding more products in a similar manner -->

            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                masonryBuild();
            });
        </script>
    </main>
@endsection
