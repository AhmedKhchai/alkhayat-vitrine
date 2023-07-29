@extends('layout')
@section('content')
    <main class="" id="main-collapse">

        <!-- Add your site or app content here -->

        <div class="hero-full-wrapper">
            <div class="grid">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-1.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-2.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-3.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-4.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-5.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Summer Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-6.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-7.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-8.jpg') }}">
                    <a href="{{ route('collections', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Winter Collection</h3>
                                <p>Take a closer look</p>
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
