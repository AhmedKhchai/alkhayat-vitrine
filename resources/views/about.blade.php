@extends('layout')
@section('content')
    <main class="" id="main-collapse">

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <!-- Added alt attribute for image -->
                <img class="img-responsive" alt="Image showcasing Alkhayat products" src="{{ asset('images/machineAlkhayat.jpg') }}">
            </div>
            <div class="col-xs-12 col-md-6">
                <h1>{{ __('About Us') }}</h1>
                <p>{{ __('Our customers come from all walks of life, intending to experience an authentic and high-quality product that transcends the Moroccan traditions’ genuine spirit.') }}
                </p>

                <h2>{{ __('Authentic products made by hand in Morocco') }}</h2> <!-- Changed from h3 to h2 for better hierarchy -->
                <h3>
                    {{ __('Authenticity in design and form') }}
                </h3>
                <p>{{ __('Our customers come from all walks of life, intending to experience an authentic and high-quality product that transcends the Moroccan traditions’ genuine spirit.') }}
                </p>

                <h2>{{ __('Summer Jallabas and Gandouras Ideal to stay fresh and cool during hot times') }}</h2> <!-- Changed from h3 to h2 for better hierarchy -->
                <h3>
                    {{ __('Summer Collection') }}
                </h3>
                <p>{{ __('Perfect JALLABAs and GANDOURAs for hot and warm weather to keep you cool and comfortable, thanks to the quality of the materials used.') }}
                </p>

                <h2>{{ __('Winter Jallabas perfect for staying cozy in the cold season') }}</h2> <!-- Changed from h3 to h2 for better hierarchy -->
                <h3>
                    {{ __('Winter Collection') }}
                </h3>
                <p>
                    {{ __('Comfortable woolen and cotton garments suitable for cold weather. These kinds of JALLABAs are perfect for keeping you cozy during cold nights.') }}
                </p>

                <a href="{{ route('contact', app()->getLocale()) }}" class="btn btn-primary" title="Get in touch with Alkhayat"> <!-- Added title attribute for better SEO -->
                    {{ __('Get in touch') }}
                </a>
            </div>
        </div>

    </main>
@endsection
