@extends('layouts.frontend-new')

@section('title', 'Index Page')

@section('content')    
    <div id="main-slider" data-slider-width="100%" data-slider-height="860px" data-slider-arrows="true" data-slider-buttons="false" class="main-slider slider-pro">
        <div class="sp-slides">
          <!-- Slide 1-->
          <div class="sp-slide"><img src="{{ asset('assetslp/media/components/b-main-slider/bg-1.jpg') }}" alt="slider" class="sp-image"/>
            <div class="container">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" data-vertical="190px" data-horizontal="0" class="main-slider__item-1 sp-layer"><!-- <img src="{{ asset('assetslp/media/components/b-main-slider/item-1.png') }}" alt="Item"/> --></div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" data-vertical="250px" data-horizontal="100%" class="main-slider__item-2 sp-layer"><!-- <img src="{{ asset('assetslp/media/components/b-main-slider/item-2.png') }}" alt="Item"/> --></div>
                  <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" data-vertical="530px" data-horizontal="0" class="main-slider__item-3 sp-layer"><!-- <img src="{{ asset('assetslp/media/components/b-main-slider/item-3.png') }}" alt="Item"/> --></div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400" class="main-slider__info sp-layer">Birthday Event Management Specialists</div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="sp-layer">
                    <div class="main-slider__decor bg-primary"></div>
                  </div>
                  <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__title sp-layer">celebrate your events<br>that lasts longer</h2>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" class="sp-layer"><a href="/services" class="main-slider__btn btn btn-default">ask for a quote</a><a href="/services" class="main-slider__btn btn btn-default">read more</a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2-->
          <div class="sp-slide"><img src="{{ asset('assetslp/media/components/b-main-slider/bg-2.jpg') }}" alt="slider" class="sp-image"/>
            <div class="container">
              <div class="row">
               <div class="col-sm-10 col-sm-offset-1">
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400" class="main-slider__info sp-layer">We are the Event Management Specialists</div>
                  <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__title sp-layer">we personalize your wedding events</h2>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="sp-layer">
                    <div class="main-slider__decor bg-primary"></div>
                  </div>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" class="sp-layer"><a href="/services" class="main-slider__btn btn btn-default">our features</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end .main-slider-->
      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div>
              <div class="text-center">
                <h2 class="ui-title-block ui-title-block_lg">Welcome to<span class="text-primary"> Shahid Events</span></h2>
                <div class="ui-subtitle-block">From Wedding Functions to Birthday Parties or Corporate Events to Musical Functions,<br>We offer full range of Events Management Services that scale to your needs & budget.</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-puzzle"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Great Services</h3>
                  <div class="b-advantages__info">Aorem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-magic-wand"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Great People</h3>
                  <div class="b-advantages__info">Corem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
            <div class="col-sm-4">
              <section class="b-advantages b-advantages-1"><i class="b-advantages__icon text-primary icon-pie-chart"></i>
                <div class="b-advantages__inner">
                  <h3 class="b-advantages__title ui-title-inner">Great Ideas</h3>
                  <div class="b-advantages__info">Eorem ipsum dolor sit amet consectetur elit sed lusm tempor incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation</div>
                </div>
              </section>
              <!-- end .b-advantages-->
              
            </div>
          </div>
        </div>
      </section>
      <section class="section-default bg-grey">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="text-center">
                <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div>
                <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> Services</h2>
                <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services</div>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ex ea consequat duis aute irure dolor in reprehenderit in voluptate labore et dolore magna aliqua cillum dolore</p>
              </div>
            </div>
          </div>
        </div>
        <div class="label-vertical">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <section class="b-post-sm b-post-sm-1 b-post_mr-rg_38 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/1.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/1.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Social Events</a></h2>
                    </div>
                    <div class="entry-content">
                      <p>Sit amet consectetur elit sed lusm tempor incidant temdore ut labore etua dolore.</p>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
                <section class="b-post-sm b-post-sm-1 b-post_mr-rg_38 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/2.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/2.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Corporate Seminars</a></h2>
                    </div>
                    <div class="entry-content">
                      <p>Sit amet consectetur elit sed lusm tempor incidant temdore ut labore etua dolore.</p>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
              </div>
              <div class="col-md-4"><img src="{{ asset('assetslp/media/content/340x665/1.jpg') }}" alt="foto" class="img-w-radius img_mr-10 img-responsive"></div>
              <div class="col-md-4">
                <section class="b-post-sm b-post-sm-1 b-post_mr-lf_38 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/3.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/3.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Wedding Events</a></h2>
                    </div>
                    <div class="entry-content">
                      <p>Sit amet consectetur elit sed lusm tempor incidant temdore ut labore etua dolore.</p>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
                <section class="b-post-sm b-post-sm-1 b-post_mr-lf_38 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/4.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/4.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Birthday Parties</a></h2>
                    </div>
                    <div class="entry-content">
                      <p>Sit amet consectetur elit sed lusm tempor incidant temdore ut labore etua dolore.</p>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- b-progress width parallax-->
      <div class="section-progress section-progress_mod-a area-bg area-bg_dark parallax">
        <div class="area-bg__inner">
          <ul class="b-progress-list b-progress-list_no-icon list-unstyled clearfix">
            <li class="b-progress-list__item">
              <div class="b-progress-list__label"></div><span data-percent="320" class="b-progress-list__percent js-chart"><span class="js-percent"></span></span><span class="b-progress-list__name">Featured Events</span>
            </li>
            <li class="b-progress-list__item">
              <div class="b-progress-list__label"></div><span data-percent="156" class="b-progress-list__percent js-chart"><span class="js-percent"></span></span><span class="b-progress-list__name">Loyal Customers</span>
            </li>
            <li class="b-progress-list__item">
              <div class="b-progress-list__label"></div><span data-percent="594" class="b-progress-list__percent js-chart"><span class="js-percent"></span></span><span class="b-progress-list__name">Good Comments</span>
            </li>
            <li class="b-progress-list__item">
              <div class="b-progress-list__label"></div><span data-percent="167" class="b-progress-list__percent js-chart"><span class="js-percent"></span></span><span class="b-progress-list__name">Trophies Won</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- end b-progress width parallax-->
      
      
      <section class="section-gallery">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"></div>
              <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> Gallery</h2>
              <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
            </div>
          </div>
        </div>
        <div class="b-isotope">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <ul class="b-isotope-filter list-inline">
                  <li><a href="" data-filter="*" class="current">all events</a></li>
                  <li><a href="" data-filter=".corporate">corporate events</a></li>
                  <li><a href="" data-filter=".birthday">birthday parties</a></li>
                  <li><a href="" data-filter=".wedding">wedding events</a></li>
                  <li><a href="" data-filter=".product">product launches</a></li>
                  <li><a href="" data-filter=".social">social meetings</a></li>
                  <li><a href="" data-filter=".proposal">proposal events</a></li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="b-isotope-grid grid list-unstyled js-zoom-gallery">
            <li class="grid-sizer"></li>
            <li class="b-isotope-grid__item grid-item corporate product"><a href="{{ asset('assetslp/media/content/gallery/480x290/1.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/1.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate proposal"><a href="{{ asset('assetslp/media/content/gallery/480x290/2.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/2.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item birthday product social proposal"><a href="{{ asset('assetslp/media/content/gallery/480x290/3.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/3.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item wedding"><a href="{{ asset('assetslp/media/content/gallery/480x290/4.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/4.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate product social proposal"><a href="{{ asset('assetslp/media/content/gallery/480x290/5.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/5.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item birthday"><a href="{{ asset('assetslp/media/content/gallery/480x290/6.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/6.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item wedding social"><a href="{{ asset('assetslp/media/content/gallery/480x290/7.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/7.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate birthday"><a href="{{ asset('assetslp/media/content/gallery/480x290/8.jpg') }}" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="{{ asset('assetslp/media/content/gallery/480x290/8.jpg') }}" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
          </ul>
        </div>
        <!-- end .b-isotope-->

        <!-- <div class="text-center"><span class="b-isotope__info">See Our Full Gallery of Events!</span><a href="home.html" class="b-isotope__btn btn btn-primary">visit full gallery</a></div> -->
      </section>
      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <section data-stellar-background-ratio="0.4" class="b-info section-texture section-radius stellar section-texture_green section-radius">
              <h2 class="b-info__title">Get in Touch With Us!</h2>
              <div class="b-info__text">Ask questions, schedule a meeting or request a proposal. Let’s Get Started</div><a href="home.html" class="b-info__btn btn btn-default btn-sm btn-effect">contact us now</a>
            </section>
          </div>
          <div class="col-md-6">
            <section data-stellar-background-ratio="0.4" class="b-info section-texture section-radius stellar b-info_right section-texture_blue section-radius">
              <h2 class="b-info__title">Do You want To Work With Us!</h2>
              <div class="b-info__text">If you are talented enough than you can join our team and have a bright future</div><a href="home.html" class="b-info__btn btn btn-default btn-sm btn-effect">join our team</a>
            </section>
          </div>
        </div>
      </div> -->

      <!-- <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"></div>
              <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> Upcoming Events</h2>
              <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
              <div data-pagination="true" data-navigation="false" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                <section class="b-events">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="b-events__media"><img src="{{ asset('assetslp/media/components/b-events/555x390_1.jpg') }}" alt="foto" class="img-responsive"/></div>
                      <div class="text-center">
                        <div class="b-events-calendar bg-primary">
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="b-events__inner">
                        <h3 class="b-events__title"><span class="ui-decor-2 bg-primary"></span>The ABCD Concert 2016</h3>
                        <p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqul enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidata non proident sunt in culpa qui officia deserunt mol lit anim id est laborum tempore laboris volputate..</p>
                        <h4 class="b-events__subtitle">More Details</h4>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Themeforest Ave, CA</div>
                        <div class="b-events__details"><i class="icon icon-calendar"></i> September 13, 2016  ,  5:00 pm to 11:00 pm</div>
                      </div>
                    </div>
                  </div>
                </section>
                
                <section class="b-events">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="b-events__media"><img src="{{ asset('assetslp/media/components/b-events/555x390_1.jpg') }}" alt="foto" class="img-responsive"/></div>
                      <div class="text-center">
                        <div class="b-events-calendar bg-primary">
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="b-events__inner">
                        <h3 class="b-events__title"><span class="ui-decor-2 bg-primary"></span>The ABCD Concert 2016</h3>
                        <p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqul enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidata non proident sunt in culpa qui officia deserunt mol lit anim id est laborum tempore laboris volputate..</p>
                        <h4 class="b-events__subtitle">More Details</h4>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Themeforest Ave, CA</div>
                        <div class="b-events__details"><i class="icon icon-calendar"></i> September 13, 2016  ,  5:00 pm to 11:00 pm</div>
                      </div>
                    </div>
                  </div>
                </section>
                
                <section class="b-events">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="b-events__media"><img src="{{ asset('assetslp/media/components/b-events/555x390_1.jpg') }}" alt="foto" class="img-responsive"/></div>
                      <div class="text-center">
                        <div class="b-events-calendar bg-primary">
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">25</span><span class="b-events-calendar__title">days</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">16</span><span class="b-events-calendar__title">hours</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">47</span><span class="b-events-calendar__title">mins</span></div>
                          <div class="b-events-calendar__item"><span class="b-events-calendar__number">38</span><span class="b-events-calendar__title">secs</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="b-events__inner">
                        <h3 class="b-events__title"><span class="ui-decor-2 bg-primary"></span>The ABCD Concert 2016</h3>
                        <p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqul enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidata non proident sunt in culpa qui officia deserunt mol lit anim id est laborum tempore laboris volputate..</p>
                        <h4 class="b-events__subtitle">More Details</h4>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Themeforest Ave, CA</div>
                        <div class="b-events__details"><i class="icon icon-calendar"></i> September 13, 2016  ,  5:00 pm to 11:00 pm</div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              
            </div>
          </div>
        </div>
      </section> -->

      <div class="section-default area-bg area-bg_type-1 area-bg_dark parallax">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-11">
                <div data-pagination="true" data-navigation="false" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel">
                  @foreach($reviews as $review)
                    <?php
                        $customer = \App\Models\Customer::where('user_id', $review->user_id)->first();
                    ?>
                    <blockquote class="b-blockquote b-blockquote-3 b-blockquote-3_w_bg">
                      <p>{{ $review->feedback }}</p>
                      <footer class="b-blockquote__footer">
                        <div class="b-blockquote__face"><img src="{{ asset('assetslp/media/components/b-blockquote/face-1.jpg') }}" alt="face" class="img-responsive"/></div>
                        <cite title="Blockquote Title" class="b-blockquote__cite"><span class="b-blockquote__author">{{ $customer->first_name .' '. $customer->last_name }}</span><span class="b-blockquote__category">{{ $customer->address }}</span></cite>
                      </footer>
                    </blockquote>
                  <!-- end .b-blockquote-->
                  @endforeach
                  
                 {{--  <blockquote class="b-blockquote b-blockquote-3 b-blockquote-3_w_bg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
                    <footer class="b-blockquote__footer">
                      <div class="b-blockquote__face"><img src="{{ asset('assetslp/media/components/b-blockquote/face-1.jpg') }}" alt="face" class="img-responsive"/></div>
                      <cite title="Blockquote Title" class="b-blockquote__cite"><span class="b-blockquote__author">Adam Milney</span><span class="b-blockquote__category">California, USA</span></cite>
                    </footer>
                  </blockquote>
                  <!-- end .b-blockquote-->
                  
                  <blockquote class="b-blockquote b-blockquote-3 b-blockquote-3_w_bg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
                    <footer class="b-blockquote__footer">
                      <div class="b-blockquote__face"><img src="{{ asset('assetslp/media/components/b-blockquote/face-1.jpg') }}" alt="face" class="img-responsive"/></div>
                      <cite title="Blockquote Title" class="b-blockquote__cite"><span class="b-blockquote__author">Adam Milney</span><span class="b-blockquote__category">California, USA</span></cite>
                    </footer>
                  </blockquote>
                  <!-- end .b-blockquote--> --}}
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- <div class="section-brands">
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
      
      <!-- <section class="b-taglines area-bg area-bg_dark parallax">
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
      
      
      {{-- <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"></div>
              <h2 class="ui-title-block"><span class="text-primary">Shahid Events</span> Latest News</h2>
              <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
              <div data-min480="1" data-min768="2" data-min992="3" data-min1200="3" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                <section class="b-post-sm b-post-sm-2 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/380x290/1.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/380x290/1.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Sorem ipsum dola sit amet elit sed eusmod tempor incidunt</a></h2>
                    </div>
                    <div class="entry-footer">
                      <div class="entry-meta"><span class="entry-meta__item"><i class="icon icon-calendar"></i>Posted<a href="blog-post.html" class="entry-meta__link"> 25th August 2016</a></span></div>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
                <section class="b-post-sm b-post-sm-2 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/380x290/2.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/380x290/2.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Minim veniam quis nostrud exercal itation ulyamco laboris</a></h2>
                    </div>
                    <div class="entry-footer">
                      <div class="entry-meta"><span class="entry-meta__item"><i class="icon icon-calendar"></i>Posted<a href="blog-post.html" class="entry-meta__link"> 13th September 2016</a></span></div>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
                <section class="b-post-sm b-post-sm-2 clearfix">
                  <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/380x290/3.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/380x290/3.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Aliquip ex ea consequat duis aute irure dolor reprehenderit</a></h2>
                    </div>
                    <div class="entry-footer">
                      <div class="entry-meta"><span class="entry-meta__item"><i class="icon icon-calendar"></i>Posted<a href="blog-post.html" class="entry-meta__link"> 12th February 2017</a></span></div>
                    </div>
                  </div>
                </section>
                <!-- end post-->
                
              </div>
              <!-- end slider-->
            </div>
          </div>
        </div>
      </section> --}}
@endsection

@section('scripts')    
    <script>

    </script>
@endsection