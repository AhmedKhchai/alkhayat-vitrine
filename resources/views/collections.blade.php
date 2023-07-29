@extends('layout')
@section('content')
    <main class="" id="main-collapse">


        <div class="row">
            <div class="col-xs-12 section-container-spacer">
                <h1>{{ __('Collections') }}</h1>
                <p>{{ __('alkhayat is adamant to give its loyal customers a wide range of choices to meet their demands of traditional, premium quality garments.') }}
                </p>
            </div>

            <div class="col-xs-12 col-md-4 section-container-spacer">
                <img class="img-responsive" alt="" src="{{ asset('images/jallaba-summer-2.jpeg') }}">
                <h2>{{ __('Best Seller') }}
                </h2>
                <p> {{ __('These are some of the most popular products amongst our customers.') }}</p>
                <a href="{{ route('BestSellers', app()->getLocale()) }}" class="btn btn-primary" title="">
                    {{ __('Take a Closer Look') }}</a>
            </div>

            <div class="col-xs-12 col-md-4 section-container-spacer">
                <img class="img-responsive" alt="" src="{{ asset('images/jallaba-4.jpeg') }}">
                <h2>{{ __('Winter Collection') }}</h2>
                <p>{{ __('Comfortable woolen and cotton garments suitable for cold weather. These kinds of JALLABAs are perfect for keeping you cozy during cold nights.') }}

                </p>
                <a href="{{ route('WinterCollection', app()->getLocale()) }}" class="btn btn-primary" title="">
                    {{ __('Take a Closer Look') }}</a>
            </div>

            <div class="col-xs-12 col-md-4 section-container-spacer">
                <img class="img-responsive" alt="" src="{{ asset('images/jallaba-6.jpeg') }}">
                <h2>{{ __('Summer Collection') }}</h2>
                <p>{{ __('Perfect JALLABAs and GANDOURAs for hot and warm weather to keep you cool and comfortable, thanks to the quality of the materials used.') }}

                </p>
                <a href="{{ route('SummerCollection', app()->getLocale()) }}" class="btn btn-primary" title="">
                    {{ __('Take a Closer Look') }}</a>
            </div>

        </div>


    </main>
@endsection
