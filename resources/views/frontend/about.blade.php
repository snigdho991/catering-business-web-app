@extends('layouts.frontend-new')

@section('title', 'About us')

@section('content')
    <div class="b-title-page area-bg area-bg_dark parallax">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div> -->
                <h1 class="b-title-page__title">Who We Are</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">About</li>
                </ol>
                <!-- end breadcrumb-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end b-title-page-->
      
      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <!-- <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div> -->
              <div class="text-center">
                <h2 class="ui-title-block ui-title-block_weight_normal">We<span class="text-primary"> Create Events</span> That Lasts</h2>
                <div class="ui-subtitle-block">From Wedding Functions to Birthday Parties or Corporate Events to Musical Functions, We offer full range of Events Management Services that scale to your needs & budget.</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <section class="b-post-sm b-post-sm-1 b-post-sm-1_align_center clearfix">
                <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/5.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/5.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                    <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Our Vision</a></h2>
                  </div>
                  <div class="entry-content">
                    <p>Aorem ipsum dolor sit amet consectetur elit sed tempor incididunt ut labore etua dolore mag aliqua minim veniam quis nostrud exercitation</p>
                  </div>
                </div>
              </section>
              <!-- end post-->
              
            </div>
            <div class="col-sm-4">
              <section class="b-post-sm b-post-sm-1 b-post-sm-1_align_center clearfix">
                <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/6.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/6.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                    <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Our Approach</a></h2>
                  </div>
                  <div class="entry-content">
                    <p>Corem ipsum dolor sit amet consectetur elit sed tempor incididunt ut labore etua dolore mag aliqua minim veniam quis nostrud exercitation</p>
                  </div>
                </div>
              </section>
              <!-- end post-->
              
            </div>
            <div class="col-sm-4">
              <section class="b-post-sm b-post-sm-1 b-post-sm-1_align_center clearfix">
                <div class="entry-media"><a href="{{ asset('assetslp/media/content/posts/322x180/7.jpg') }}" class="js-zoom-images"><img src="{{ asset('assetslp/media/content/posts/322x180/7.jpg') }}" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                    <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="/services">Our Goals</a></h2>
                  </div>
                  <div class="entry-content">
                    <p>Eorem ipsum dolor sit amet consectetur elit sed tempor incididunt ut labore etua dolore mag aliqua minim veniam quis nostrud exercitation</p>
                  </div>
                </div>
              </section>
              <!-- end post-->
              
            </div>
          </div>
        </div>
      </section>
      <div class="block-table block-table-lg">
        <div class="block-table__cell col-lg-6">
          <section class="section-type-2 bg-grey">
            <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"></div>
            <h2 class="ui-title-block">Why Choose<span class="text-primary"> Shahid Events</span></h2>
            <div class="ui-subtitle-block">Corem ipsum dolor sit amet elit sed do eiusmod tempor incididunt labore.</div>
            <section class="b-advantages-2 b-advantages-2_mod-a"><i class="b-advantages-2__icon flaticon-people"></i>
              <div class="b-advantages-2__inner">
                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">The Events Specialists</h3>
                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore labore dolore lorem ipsum consectetur adipisicing elit sed do eiusmod tempor incididunt.</div>
              </div>
            </section>
            <!-- end .b-advantages-->
            <section class="b-advantages-2 b-advantages-2_mod-a"><i class="b-advantages-2__icon flaticon-firework"></i>
              <div class="b-advantages-2__inner">
                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Dedicated Venues &amp; Arrangements</h3>
                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore labore dolore lorem ipsum consectetur adipisicing elit sed do eiusmod tempor incididunt.</div>
              </div>
            </section>
            <!-- end .b-advantages-->
            <section class="b-advantages-2 b-advantages-2_mod-a"><i class="b-advantages-2__icon flaticon-technology"></i>
              <div class="b-advantages-2__inner">
                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">All Types of Events</h3>
                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore labore dolore lorem ipsum consectetur adipisicing elit sed do eiusmod tempor incididunt.</div>
              </div>
            </section>
            <!-- end .b-advantages-->
          </section>
        </div>
        <div class="block-table__cell col-lg-6"><img src="{{ asset('assetslp/media/content/960x783/1.jpg') }}" alt="foto"></div>
      </div>

      <!-- b-progress width parallax-->
      <!-- <div class="section-progress section-progress_mod-a area-bg bg-primary_a parallax">
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
      </div> -->
      <!-- end b-progress width parallax-->

      <section class="section-team">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor" class="center-block"></div>
              <div class="text-center">
                <h2 class="ui-title-block"><span class="text-primary"> Shahid Events</span> Team Members</h2>
                <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <section class="b-team b-team_mod-a">
                <div class="b-team__media"><img src="{{ asset('assetslp/media/components/b-team/1.jpg') }}" alt="Foto" class="img-responsive"/></div>
                <div class="b-team__inner">
                  <div class="ui-decor-2 bg-primary"></div>
                  <h3 class="b-team__name ui-title-inner">Charles Hasman</h3>
                  <div class="b-team__category">Founder &amp; Director</div>
                  <div class="b-team__description">Eorem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor magna</div>
                  <ul class="social-net list-inline">
                    <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                    <li class="social-net__item"><a href="instagram.com" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>
                  </ul>
                  <!-- end social-list-->
                </div>
              </section>
              <!-- end b-team-->
              <section class="b-team b-team_mod-a">
                <div class="b-team__media"><img src="{{ asset('assetslp/media/components/b-team/2.jpg') }}" alt="Foto" class="img-responsive"/></div>
                <div class="b-team__inner">
                  <div class="ui-decor-2 bg-primary"></div>
                  <h3 class="b-team__name ui-title-inner">Kethy Hilton</h3>
                  <div class="b-team__category">Events Manager</div>
                  <div class="b-team__description">Corem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor aliqua</div>
                  <ul class="social-net list-inline">
                    <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                    <li class="social-net__item"><a href="instagram.com" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>
                  </ul>
                  <!-- end social-list-->
                </div>
              </section>
              <!-- end b-team-->
              <section class="b-team b-team_mod-a">
                <div class="b-team__media"><img src="{{ asset('assetslp/media/components/b-team/3.jpg') }}" alt="Foto" class="img-responsive"/></div>
                <div class="b-team__inner">
                  <div class="ui-decor-2 bg-primary"></div>
                  <h3 class="b-team__name ui-title-inner">Anna Sydney</h3>
                  <div class="b-team__category">Events Manager</div>
                  <div class="b-team__description">Eorem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor magna</div>
                  <ul class="social-net list-inline">
                    <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                    <li class="social-net__item"><a href="instagram.com" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>
                  </ul>
                  <!-- end social-list-->
                </div>
              </section>
              <!-- end b-team-->
              <section class="b-team b-team_mod-a">
                <div class="b-team__media"><img src="{{ asset('assetslp/media/components/b-team/4.jpg') }}" alt="Foto" class="img-responsive"/></div>
                <div class="b-team__inner">
                  <div class="ui-decor-2 bg-primary"></div>
                  <h3 class="b-team__name ui-title-inner">Ava Taylor</h3>
                  <div class="b-team__category">Supervisor</div>
                  <div class="b-team__description">Corem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor aliqua</div>
                  <ul class="social-net list-inline">
                    <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                    <li class="social-net__item"><a href="instagram.com" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>
                  </ul>
                  <!-- end social-list-->
                </div>
              </section>
              <!-- end b-team-->
            </div>
          </div>
        </div>
      </section>
      <section data-stellar-background-ratio="0.4" class="section-type-3 bg-grey section-texture-2 stellar">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="ui-decor-1"><img src="{{ asset('assetslp/media/general/ui-decor-1.png') }}" alt="decor"></div>
              <h2 class="ui-title-block"><span class="text-primary"> Shahid Events</span> Skills</h2>
              <p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquled enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip volputate consequat aute irure dolor in reprehenderit in velit..</p>
              <ul class="list list-mark-5 list_icon_color-primary list_bold">
                <li>Excepteur sint occaecat cupidata non proident sunt</li>
                <li>Qui officia deserunt anim labor tempore laboris volputate</li>
                <li>Tempor incididunt uet labore dolore magna aliqua</li>
                <li>Enim lanim veniam quis nostrud exercitation ullamco</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <div class="progress-block-group">
                <div class="progress-block">
                  <div class="progress__title">Birthday Parties</div>
                  <div class="progress progress-w-number">
                    <div style="width: 80%" class="progress-bar bg-primary"><span class="progress-bar__number">80%</span></div>
                  </div>
                </div>
                <div class="progress-block">
                  <div class="progress__title">Wedding Events</div>
                  <div class="progress progress-w-number">
                    <div style="width: 90%" class="progress-bar bg-primary"><span class="progress-bar__number">90%</span></div>
                  </div>
                </div>
                <div class="progress-block">
                  <div class="progress__title">Corporate Events</div>
                  <div class="progress progress-w-number">
                    <div style="width: 55%" class="progress-bar bg-primary"><span class="progress-bar__number">55%</span></div>
                  </div>
                </div>
                <div class="progress-block">
                  <div class="progress__title">Proposal Arrange</div>
                  <div class="progress progress-w-number">
                    <div style="width: 65%" class="progress-bar bg-primary"><span class="progress-bar__number">65%</span></div>
                  </div>
                </div>
                <div class="progress-block">
                  <div class="progress__title">Social Seminars</div>
                  <div class="progress progress-w-number">
                    <div style="width: 85%" class="progress-bar bg-primary"><span class="progress-bar__number">85%</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="b-advertisement area-bg area-bg_dark area-bg_op_70 parallax">
        <div class="area-bg__inner">
          <div class="b-advertisement__label bg-primary">Celebrate with<strong> Shahid Events</strong></div>
          <h2 class="b-advertisement__title ui-title-block">Plan your Birthday Celebration with us!</h2>
          <div class="b-advertisement__info">We will distribute FREE GIFTS to every single kid - That’s Our Promise!</div>
        </div>
      </section> -->

      <!-- <div class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-sm-11">
              <div data-pagination="true" data-navigation="false" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel">
                <blockquote class="b-blockquote b-blockquote-3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
                  <footer class="b-blockquote__footer">
                    <div class="b-blockquote__face"><img src="{{ asset('assetslp/media/components/b-blockquote/face-1.jpg') }}" alt="face" class="img-responsive"/></div>
                    <cite title="Blockquote Title" class="b-blockquote__cite"><span class="b-blockquote__author">Adam Milney</span><span class="b-blockquote__category">California, USA</span></cite>
                  </footer>
                </blockquote>
                
                <blockquote class="b-blockquote b-blockquote-3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
                  <footer class="b-blockquote__footer">
                    <div class="b-blockquote__face"><img src="{{ asset('assetslp/media/components/b-blockquote/face-1.jpg') }}" alt="face" class="img-responsive"/></div>
                    <cite title="Blockquote Title" class="b-blockquote__cite"><span class="b-blockquote__author">Adam Milney</span><span class="b-blockquote__category">California, USA</span></cite>
                  </footer>
                </blockquote>
                
                <blockquote class="b-blockquote b-blockquote-3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.</p>
                  <footer class="b-blockquote__footer">
                    <div class="b-blockquote__face"><img src="{{ asset('assetslp/media/components/b-blockquote/face-1.jpg') }}" alt="face" class="img-responsive"/></div>
                    <cite title="Blockquote Title" class="b-blockquote__cite"><span class="b-blockquote__author">Adam Milney</span><span class="b-blockquote__category">California, USA</span></cite>
                  </footer>
                </blockquote>
                
              </div>
            </div>
          </div>
        </div>
    </div> -->
@endsection