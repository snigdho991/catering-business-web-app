@extends('layouts.frontend-new')

@section('title', 'Services')

@section('content')
    <div class="b-title-page area-bg area-bg_dark parallax">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div> -->
                <h1 class="b-title-page__title">What We Do</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Our Services</li>
                </ol>
                <!-- end breadcrumb-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end b-title-page-->
      
      <section class="section-advantages">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div>
              <div class="text-center">
                <h2 class="ui-title-block ui-title-block_weight_normal">The<span class="text-primary"> Event Management</span> Specialists</h2>
                <div class="ui-subtitle-block">From Wedding Functions to Birthday Parties or Corporate Events to Musical Functions, We offer full range of Events Management Services that scale to your needs & budget.</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-emoticon-smile"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Anniversaries</h3>
                  <div class="b-advantages__info">Aorem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-md-4 col-sm-6">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-present"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Holiday Parties</h3>
                  <div class="b-advantages__info">Corem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-md-4 col-sm-6">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-pie-chart"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Corporate Functions</h3>
                  <div class="b-advantages__info">Eorem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-md-4 col-sm-6">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-magic-wand"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Fashion Concerts</h3>
                  <div class="b-advantages__info">Aorem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-md-4 col-sm-6">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-eyeglasses"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Conference Planning</h3>
                  <div class="b-advantages__info">Corem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-md-4 col-sm-6">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-diamond"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Stage Decorations</h3>
                  <div class="b-advantages__info">Eorem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="b-taglines area-bg bg-primary_a parallax">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="b-taglines__inner">
                  <h2 class="b-taglines__title">With a full range of Event Planning Services, our Clients have Successful & Prosperous Events!</h2>
                  <div class="b-taglines__text">We make your events smart & impactful by personalised event management services.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- end b-taglines-->

      <section class="b-services area-bg area-bg_dark area-bg_op_90 parallax">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <!-- <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"/></div> -->
                <h2 class="ui-title-block"><span class="text-primary">Featured</span> Events</h2>
                <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>

                @foreach($serviceTypes as $key => $serviceType)
                  <span class="badge rounded-pill badge-sun-wukong">{{ $serviceType->type }}</span>
                @endforeach

              </div>
              <div class="col-md-7" style="padding-left: 60px !important;">
                <h2 style="color: white; margin-bottom: 20px;"><span class="text-primary">Our Provided</span> Services</h2>

                @foreach($services as $key => $service)
                  <!-- <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                    Tooltip with HTML
                  </button> -->
                  <span class="badge badge-square badge-sun-wukong" data-toggle="tooltip" title="{{ $service->description }}">{{ $service->name }}</span>
                @endforeach

                <!-- <div class="bxslider">
                  <section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-people"></i>
                    <div class="b-advantages-2__inner">
                      <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                      <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                  </section>
                  <section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-food"></i>
                    <div class="b-advantages-2__inner">
                      <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Birthday Parties</h3>
                      <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                  </section>
                  <section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-karaoke"></i>
                    <div class="b-advantages-2__inner">
                      <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Corporate Seminars</h3>
                      <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                  </section>
                  <section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-people"></i>
                    <div class="b-advantages-2__inner">
                      <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                      <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                  </section>
                  <section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-food"></i>
                    <div class="b-advantages-2__inner">
                      <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Birthday Parties</h3>
                      <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                  </section>
                  <section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-karaoke"></i>
                    <div class="b-advantages-2__inner">
                      <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Corporate Seminars</h3>
                      <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                  </section>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end .services-->

      <!-- <section class="b-info-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-7 col-md-6">
              <div class="row">
                <div class="col-sm-6"><img src="{{ asset('assetslp/media/components/b-info-section/1.png') }}" alt="foto" class="b-info-section__img-1 img-mask"/></div>
                <div class="col-sm-6"><img src="{{ asset('assetslp/media/components/b-info-section/2.png') }}" alt="foto" class="b-info-section__img-2 img-mask"/></div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6">
              <div class="b-info-section__inner">
                <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"/></div>
                <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> - Events That Lasts</h2>
                <div class="ui-subtitle-block">You should choose Shahid Events Services because we bring your guests closer to you & helps you to create a relationship that lasts long!</div>
                <p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquled tempor enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea volputate consequat aute irure dolor reprehenderit.</p>
                <ul class="list list-mark-5 list_bold list_icon_color-primary">
                  <li>Excepteur sint occaecat cupidata non proident sunt</li>
                  <li>Qui officia deserunt anim labor tempore laboris volputate</li>
                  <li>Tempor incididunt uet labore dolore magna aliqua</li>
                  <li>Enim lanim veniam quis nostrud exercitation ullamco</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- end .b-info-section-->

      <!-- <div data-stellar-background-ratio="0.4" class="section-events section-texture-2 bg-grey stellar">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div>
              <div class="text-center">
                <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> Upcoming Events</h2>
                <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div data-min480="1" data-min768="3" data-min992="4" data-min1200="4" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                <section class="b-events-2 text-center">
                  <div class="b-events-2__media"><img src="{{ asset('assetslp/media/components/b-events/262x390_1.jpg') }}" alt="foto" class="img-responsive"/>
                    <div class="b-events-calendar">
                      <div class="b-events-calendar__wrap">
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                  <h3 class="b-events-2__title">Dance Event</h3>
                  <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                </section>
                
                <section class="b-events-2 text-center">
                  <div class="b-events-2__media"><img src="{{ asset('assetslp/media/components/b-events/262x390_2.jpg') }}" alt="foto" class="img-responsive"/>
                    <div class="b-events-calendar">
                      <div class="b-events-calendar__wrap">
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                  <h3 class="b-events-2__title">SEO Seminar 2016</h3>
                  <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                </section>
                <section class="b-events-2 text-center">
                  <div class="b-events-2__media"><img src="{{ asset('assetslp/media/components/b-events/262x390_3.jpg') }}" alt="foto" class="img-responsive"/>
                    <div class="b-events-calendar">
                      <div class="b-events-calendar__wrap">
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                  <h3 class="b-events-2__title">TomWed Event</h3>
                  <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                </section>
                <section class="b-events-2 text-center">
                  <div class="b-events-2__media"><img src="{{ asset('assetslp/media/components/b-events/262x390_4.jpg') }}" alt="foto" class="img-responsive"/>
                    <div class="b-events-calendar">
                      <div class="b-events-calendar__wrap">
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                        <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                  <h3 class="b-events-2__title">ABCD Concert</h3>
                  <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      
      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"></div>
              <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> Pricing Plans</h2>
              <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <section class="b-pricing">
                <h3 class="b-pricing__title">Standard</h3>
                <div class="b-pricing__subtitle">Ideal for Proposals, Birthdays</div>
                <div class="b-pricing-price"><span class="b-pricing-price__title">Starts from</span> $<span class="b-pricing-price__number">299</span></div>
                <ul class="b-pricing__description list-unstyled">
                  <li>2 Days Event</li>
                  <li>Full Services Consultation</li>
                  <li>Breakfast &amp; Lunch for Everyone</li>
                  <li>FREE Gifts for Kids</li>
                </ul><a href="/dashboard" class="btn btn-default" style="color: black;">order now</a>
              </section>
              <!-- end .b-pricing-->
            </div>
            <div class="col-md-4">
              <section class="b-pricing active">
                <h3 class="b-pricing__title">premium</h3>
                <div class="b-pricing__subtitle">Ideal for Wedding &amp; Seminars</div>
                <div class="b-pricing-price"><span class="b-pricing-price__title">Starts from</span> $<span class="b-pricing-price__number">499</span></div>
                <div class="b-pricing__icon bg-primary"><i class="icon fa fa-heart"></i></div>
                <ul class="b-pricing__description list-unstyled">
                  <li>2 Days Event</li>
                  <li>Full Services Consultation</li>
                  <li>Breakfast &amp; Lunch for Everyone</li>
                  <li>FREE Gifts for Kids</li>
                </ul><a href="/dashboard" class="btn btn-default" style="color: black;">order now</a>
              </section>
              <!-- end .b-pricing-->
            </div>
            <div class="col-md-4">
              <section class="b-pricing">
                <h3 class="b-pricing__title">corporate</h3>
                <div class="b-pricing__subtitle">Ideal for large business events</div>
                <div class="b-pricing-price"><span class="b-pricing-price__title">Starts from</span> $<span class="b-pricing-price__number">699</span></div>
                <ul class="b-pricing__description list-unstyled">
                  <li>2 Days Event</li>
                  <li>Full Services Consultation</li>
                  <li>Breakfast &amp; Lunch for Everyone</li>
                  <li>FREE Gifts for Kids</li>
                </ul><a href="/dashboard" class="btn btn-default" style="color: black;">order now</a>
              </section>
              <!-- end .b-pricing-->
            </div>
          </div>
        </div>
      </section>


      <!-- <div class="block-table block-table-md">
        <div class="block-table__cell col-md-6"><img src="{{ asset('assetslp/media/content/960x750/1.jpg') }}" alt="foto"></div>
        <div class="block-table__cell col-md-6">
          <section data-stellar-background-ratio="0.4" class="section-form-contact section-form-contact_color_white section-texture bg-primary stellar">
            <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1_wh.png') }}" alt="decor"></div>
            <h2 class="ui-title-block"><span>Shahid Events</span> Contact Form</h2>
            <div class="ui-subtitle-block">Send us a message for your personalized event booking.</div>
            <div id="success"></div>
            <form id="contactForm" action="#" method="post" class="b-form-contacts ui-form">
              <div class="row">
                <div class="col-md-6">
                  <input id="user-name" type="text" name="user-name" placeholder="Full Name" required="required" class="form-control"/>
                  <input id="user-phone" type="tel" name="user-phone" placeholder="Phone" class="form-control"/>
                </div>
                <div class="col-md-6">
                  <input id="user-email" type="email" name="user-email" placeholder="Email" class="form-control"/>
                  <input id="user-subject" type="text" name="user-subject" placeholder="Event type" class="form-control last-block_mrg-btn_0"/>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <textarea id="user-message" rows="3" placeholder="Message ..." required="required" class="form-control"></textarea>
                  <button class="btn btn-default">Send Message</button>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div> -->


      <!-- <div class="section-brands-2">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div data-min480="1" data-min768="3" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="b-brands owl-carousel owl-theme enable-owl-carousel">
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-1.png') }}" alt="foto" class="img-responsive center-block"/></div>
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-2.png') }}" alt="foto" class="img-responsive center-block"/></div>
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-3.png') }}" alt="foto" class="img-responsive center-block"/></div>
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-4.png') }}" alt="foto" class="img-responsive center-block"/></div>
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-5.png') }}" alt="foto" class="img-responsive center-block"/></div>
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-3.png') }}" alt="foto" class="img-responsive center-block"/></div>
                <div class="b-brands__item"><img src="{{ asset('assetslp/media/components/b-brands/logo-4.png') }}" alt="foto" class="img-responsive center-block"/></div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
@endsection

@section('styles')
  <!-- <link rel="stylesheet" href="https://brand.workingsolutions.com/components/css/wsol-components.css" /> -->
  <!-- <script src="https://brand.workingsolutions.com/components/js/react-embed.js"></script> -->

  <style type="text/css">
    .badge {
      display: inline-block;
      padding: 0.35em 0.65em;
      font-size: 0.75em;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      margin: 2px;
    }

    .badge-sun-wukong {
      background: linear-gradient(to right, #6440BC, #D83D1E);
    }

    .rounded-pill {
        border-radius: 0.75rem !important;
        font-family: "Source Sans Pro",sans-serif;
        font-weight: 700;
        padding: 12px 20px;
        font-size: 14px;
    }

    .badge-square {
        font-family: "Source Sans Pro",sans-serif;
        font-weight: 700;
        padding: 10px 16px;
        font-size: 12px;
    }

    .tooltip-inner {
      max-width: 236px !important;
      height: auto;
      font-size: 12px;
      padding: 10px 15px 10px 20px;
      background-color: white !important;
      color: black;
      border: 1px solid #737373;
      text-align: left;
      font-size: 14px;
      font: Arial, sans-serif;
      text-transform: none !important;
      font-weight: 500;
    }

  </style>
@endsection

@section("scripts")
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
  </script>
@endsection