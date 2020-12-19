@extends('layouts.app')

@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-2">Address</h3>
                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-2">Contact Number</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-2">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{route('customers.create')}}" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name"
                                   value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Your Email"
                                   value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Subject"
                                   value="{{ old('subject') }}">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                      placeholder="Message">{{ old('message') }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

                <div class="col-md-6 d-flex">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.959391368944!2d-74.01453918387053!3d40.71891044512837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1ddf374aaf%3A0x7169128b6c73d4f0!2s198%20West%20St%20%23721%2C%20New%20York%2C%20NY%2010013%2C%20USA!5e0!3m2!1sen!2sru!4v1608126359244!5m2!1sen!2sru"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.popup.success')
    @include('layouts.popup.errors')

@endsection
