@extends('layout')
@section('content')
    <main class="" id="main-collapse">


        <div class="row">
            <div class="col-xs-12 section-container-spacer">
                <h1>Our Winter Collection</h1>
                <p>Discover this beautiful and warm collection of men's winter clothing. Choose from sumptuous fabrics like silk, cotton and wool.</p>
            </div>

        </div>

        <div class="hero-full-wrapper">
            <div class="grid">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-1.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>


                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-2.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-3.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-4.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-5.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-6.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-7.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="grid-item">
                    <img class="img-responsive" alt="" src="{{ asset('images/jallaba-8.jpeg') }}">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>Get in Touch</h3>
                                {{-- <p>Take a closer look</p> --}}
                            </div>
                        </div>
                    </a>
                </div> -->

            </div>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                masonryBuild();
            });

        </script>



    </main>
@endsection
