@extends('layout')
@section('content')
    <main class="" id="main-collapse">


        <div class="row">
            <div class="col-xs-12 section-container-spacer">
                <h1>{{ __('Our Summer Collection') }}</h1>
                <p>{{ __('Al Khayat presents a mix of understated elegance, new details and refined fabrics for its summer collection.') }}</p>
            </div>

        </div>

        <div class="hero-full-wrapper">
            <div class="grid">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-1.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{__('Get in touch with us')}}</h3>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-2.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{__('Get in touch with us')}}</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-3.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{__('Get in touch with us')}}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-4.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{__('Get in touch with us')}}</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-5.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{__('Get in touch with us')}}</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-6.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{__('Get in touch with us')}}</h3>
                            </div>
                        </div>
                    </a>
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
