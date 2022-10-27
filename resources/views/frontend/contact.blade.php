@extends('layouts.frontend-new')

@section('title', 'Contact us')

@section('content')
    <div class="b-title-page area-bg area-bg_dark parallax">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div> -->
                <h1 class="b-title-page__title">Contact Us</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Get in Touch</li>
                </ol>
                <!-- end breadcrumb-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end b-title-page-->
      
      <section class="section-contact">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div>
              <div class="text-center">
                <h2 class="b-contact__title ui-subtitle-block">Contact us if you need our services. We will be happy to make your events memorable!</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3">
              <div data-stellar-background-ratio="0.4" class="b-contact stellar section-texture section-texture_green section-radius">
                <div class="b-contact__name">Address</div>
                <div class="b-contact__info">38-2 Hilton Street, California</div>
                <div class="b-contact__icon icon-map"></div>
              </div>
              <!-- end b-contact-->
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3">
              <div data-stellar-background-ratio="0.4" class="b-contact stellar section-texture section-texture_blue section-radius">
                <div class="b-contact__name">Phone</div>
                <div class="b-contact__info">(+01) 123 456 7890</div>
                <div class="b-contact__icon icon-call-in"></div>
              </div>
              <!-- end b-contact-->
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3">
              <div data-stellar-background-ratio="0.4" class="b-contact stellar section-texture section-texture_grey section-radius">
                <div class="b-contact__name">Email</div>
                <div class="b-contact__info">inform@shahidevents.com</div>
                <div class="b-contact__icon icon-envelope-open"></div>
              </div>
              <!-- end b-contact-->
            </div>
          </div>
        </div>
      </section>


      {{-- <div class="section-form-contact" style="background-color: #EEEEEE;">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="ui-title-block"><i class="ui-decor-2 bg-primary"></i> message form</h2>
              <div id="success"></div>
              <form id="contactForm" action="#" method="post" class="b-form-contacts ui-form">
                <div class="row">
                  <div class="col-md-6">
                    <input id="user-name" type="text" name="user-name" placeholder="Your Name" required="required" class="form-control" style="border: 1px solid grey;"/>
                    <input id="user-phone" type="tel" name="user-phone" placeholder="Your Tel" class="form-control" style="border: 1px solid grey;"/>
                  </div>
                  <div class="col-md-6">
                    <input id="user-email" type="email" name="user-email" placeholder="Your Email" class="form-control" style="border: 1px solid grey;"/>
                    <input id="user-subject" type="text" name="user-subject" placeholder="Where do you heard about us?" class="form-control last-block_mrg-btn_0" style="border: 1px solid grey;"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <textarea id="user-message" rows="5" placeholder="Your Message ..." required="required" class="form-control" style="border: 1px solid grey;"></textarea>
                    <button class="btn btn-primary btn-block" style="color: black;">send comment</button>
                  </div>
                </div>
              </form>
              <!-- end .b-form-contact-->
            </div>
            <div class="col-md-6">
              <div id="map" class="map"></div>
            </div>
          </div>
        </div>
      </div> --}}


      <div class="b-contact-social-net bg-grey text-center">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="social-net list-inline">
                <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                <li class="social-net__item"><a href="instagram.com" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>
                <li class="social-net__item"><a href="skype.com" class="social-net__link text-primary_h"><i class="icon fa fa-skype"></i></a></li>
                <li class="social-net__item"><a href="behance.com" class="social-net__link text-primary_h"><i class="icon fa fa-behance"></i></a></li>
                <li class="social-net__item"><a href="vimeo.com" class="social-net__link text-primary_h"><i class="icon fa fa-vimeo"></i></a></li>
              </ul>
              <!-- end social-list-->
            </div>
          </div>
        </div>
    </div>
@endsection