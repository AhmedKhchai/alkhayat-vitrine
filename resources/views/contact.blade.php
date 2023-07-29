@extends('layout')
@section('content')
    <main class="" id="main-collapse">


        <div class="row">
            <div class="col-xs-12">
                <div class="section-container-spacer">
                    <h1>{{ __('Get in touch with us') }}
                    </h1>
                    <p>{{ __('send us your inquiries and reviews and we will get back to you the fastest we can.') }}</p>
                </div>
                <div class="section-container-spacer">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form method="post" action="contact" class="reveal-content">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{-- <input type="email" class="form-control" id="email" placeholder="Email"> --}}
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" name="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{-- <input type="text" class="form-control" id="subject" placeholder="Subject"> --}}
                                    <input type="text" id="subject"
                                        class="form-control @error('subject') is-invalid @enderror" placeholder="Subject"
                                        name="subject">
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{-- <input type="text" class="form-control" id="phone" placeholder="phone"> --}}
                                    <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Phone Number" name="phone">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{-- <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea> --}}
                                    <textarea class="form-control textarea @error('message') is-invalid @enderror"
                                        placeholder="Message" name="message"></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg">Send</button>

                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled address-container">
                                    <li>
                                        <span class="fa-icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                        +212 661-495341
                                    </li>
                                    <li>
                                        <span class="fa-icon">
                                            <i class="fa fa-at" aria-hidden="true"></i>
                                        </span>
                                        contact@alkhayat.ma
                                    </li>
                                    <li>
                                        <span class="fa-icon">
                                            <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                        3 KIS EL FATH PLACE EL HANSALI EL JADIDA, MAROC.
                                    </li>
                                </ul>
                                <h3>{{ __('Follow us on social networks') }}</h3>
                                <p class="nav-footer-social-buttons">
                                    <a class="fa-icon" href="https://www.instagram.com/" title="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a class="fa-icon" href="https://www.pinterest.com" title="">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a class="fa-icon" href="https://facebook.com/" title="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>

@endsection
