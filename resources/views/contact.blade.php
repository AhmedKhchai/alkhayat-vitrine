@extends('layout')
@section('content')
    <main class="" id="main-collapse">
        <div class="row">
            <div class="col-xs-12">
                <section class="section-container-spacer">
                    <!-- Main heading for the page -->
                    <h1>{{ __('Get in touch with us') }}</h1>
                    <!-- Subheading that provides a description -->
                    <p>{{ __('Send us your inquiries and reviews, and we will get back to you as quickly as possible.') }}
                    </p>
                </section>
                <section class="section-container-spacer">
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
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                        name="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Including the rest of the form fields with labels -->
                                <div class="form-group">
                                    <label for="subject">{{ __('Subject') }}</label>
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
                                    <label for="phone">{{ __('Phone') }}</label>
                                    <input type="text" id="phone"
                                        class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number"
                                        name="phone">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">{{ __('Message') }}</label>
                                    <textarea class="form-control textarea @error('message') is-invalid @enderror" id="message" placeholder="Message"
                                        name="message"></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg"
                                    title="Send your message to Alkhayat">Send</button>
                            </div>
                            <div class="col-md-6">
                                <h2>{{ __('Contact Details') }}</h2>
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
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                        3 KIS EL FATH PLACE EL HANSALI EL JADIDA, MAROC.
                                    </li>
                                </ul>
                                <h3>{{ __('Follow us on social networks') }}</h3>
                                <nav class="nav-footer-social-buttons">
                                    <a class="fa-icon" href="https://www.instagram.com/"
                                        title="Follow Alkhayat on Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a class="fa-icon" href="https://www.pinterest.com"
                                        title="Follow Alkhayat on Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a class="fa-icon" href="https://facebook.com/" title="Follow Alkhayat on Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>
@endsection
