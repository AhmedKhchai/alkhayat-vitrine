@extends('newLayout')
@section('newContent')

    <section dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}" class="u-clearfix u-section-1" id="carousel_293a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-palette-5-base u-shape u-shape-rectangle u-shape-1"></div>
            <div class="u-container-style u-group u-image u-image-tiles u-image-1" data-image-width="100"
                data-image-height="100">
                <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div
                class="u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner u-gallery-inner-1">
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-1.jpeg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-2.jpeg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-2">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-3.jpeg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-3">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-4.jpeg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-4">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-5.jpeg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-5">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide">
                            <img class="u-back-image u-expanded" src="{{ asset('images/jallaba-summer-6.jpeg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-6">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-group u-group-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                    <p class="u-text u-text-1">
                        {{ __('We are a brand which has been born into Authenticity. It is time to create original and truly traditional products.') }}

                        &nbsp;</p>
                    <p class="u-text u-text-2">{{ __('seasonal') }} <a
                            href="{{ route('collections', app()->getLocale()) }}"
                            class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">
                            {{ __('collections') }} </a>
                    </p>
                    <a href="{{ route('about', app()->getLocale()) }}"
                        class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2">{{ __('learn more') }}</a>
                </div>
            </div>
            <div class="u-container-style u-group u-white u-group-3">
                <div class="u-container-layout u-valign-middle u-container-layout-3">
                    <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-3">
                        {{ __('Authentic products made by hand in Morocco') }} </h1>
                </div>
            </div>
        </div>
    </section>

@endsection
