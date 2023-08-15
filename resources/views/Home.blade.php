@extends('newLayout')
@section('newContent')
    <section dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}" class="u-clearfix u-section-1" id="carousel_293a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-palette-5-base u-shape u-shape-rectangle u-shape-1"></div>

            <!-- Main Showcase Image -->
            <div class="u-container-style u-group u-image u-image-tiles u-image-1" data-image-width="100"
                data-image-height="100">
                <div class="u-container-layout u-container-layout-1"></div>
            </div>

            <!-- Image Gallery -->
            <div
                class="u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner u-gallery-inner-1">

                    <!-- Product Image 1 -->
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-1.jpeg') }}"
                                alt="Summer Jallaba Image 1">
                        </div>
                    </div>

                    <!-- Product Image 2 -->
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-2.jpeg') }}"
                                alt="Summer Jallaba Image 2">
                        </div>
                    </div>

                    <!-- Product Image 3 and so on... -->
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-3.jpeg') }}"
                                alt="Jallaba Image 3">
                        </div>
                    </div>

                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-4.jpeg') }}"
                                alt="Summer Jallaba Image 4">
                        </div>
                    </div>

                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-5.jpeg') }}"
                                alt="Jallaba Image 5">
                        </div>
                    </div>

                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-6.jpeg') }}"
                                alt="Summer Jallaba Image 6">
                        </div>

                        <!-- Brand Authenticity Description -->
                        <div class="u-container-style u-group u-group-2">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <p class="u-text u-text-1">
                                    {{ __('We are a brand which has been born into Authenticity. It is time to create original and truly traditional products.') }}
                                </p>
                                <p class="u-text u-text-2">{{ __('seasonal') }}
                                    <a href="{{ route('collections', app()->getLocale()) }}"
                                        class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1"
                                        title="View our seasonal collections">
                                        {{ __('collections') }}
                                    </a>
                                </p>
                                <a href="{{ route('about', app()->getLocale()) }}"
                                    class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2"
                                    title="Learn more about our brand">{{ __('learn more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brand Authenticity Description -->
            <div class="u-container-style u-group u-group-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                    <p class="u-text u-text-1">
                        {{ __('We are a brand which has been born into Authenticity. It is time to create original and truly traditional products.') }}
                    </p>
                    <p class="u-text u-text-2">
                        {{ __('seasonal') }}
                        <a href="{{ route('collections', app()->getLocale()) }}" title="View our seasonal collections"
                            class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">
                            {{ __('collections') }}
                        </a>
                    </p>
                    <a href="{{ route('about', app()->getLocale()) }}" title="Learn more about our brand"
                        class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2">
                        {{ __('learn more') }}
                    </a>
                </div>
            </div>

            <!-- Authenticity Quote -->
            <div class="u-container-style u-group u-white u-group-3">
                <div class="u-container-layout u-valign-middle u-container-layout-3">
                    <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-3">
                        {{ __('Authentic products made by hand in Morocco') }}
                    </h1>
                </div>
            </div>
        </div>
    </section>
@endsection
