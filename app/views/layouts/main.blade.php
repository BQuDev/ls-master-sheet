<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>LS Student Administration @section('title') @show</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

{{ HTML::style('css/bootstrap.css'); }}
{{ HTML::style('css/animate.css'); }}
{{ HTML::style('css/font-awesome.min.css'); }}
{{ HTML::style('css/icon.css'); }}
{{ HTML::style('css/font.css'); }}
{{ HTML::style('css/app.css'); }}

@section('post_css')
@show

    <!--[if lt IE 9]>
{{ HTML::script('js/ie/html5shiv.js'); }}
{{ HTML::script('js/ie/respond.min.js'); }}
{{ HTML::script('js/ie/excanvas.js'); }}
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="{{ URL::to('/') }}" class="navbar-brand">
          <img src="{{asset('images/logo.png')}}" class="m-r-sm" alt="scale">

        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i></a>
      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-grid"></i>
          </a>
          <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
            <div class="row m-l-none m-r-none m-t m-b text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="{{ URL::to('/students') }}/">
                    <span class="m-b-xs block">
                      <i class="i  i-docs i-2x text-primary-lt"></i>
                    </span>
                    <small class="text-muted">Admissions</small>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </li>
      </ul>
      <!--<form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">
          </div>
        </div>
      </form>-->
      	  @section('san')
            @show
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

             {{ Sentry::getUser()->first_name }}&nbsp;&nbsp;{{ Sentry::getUser()->last_name }} <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">

            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ URL::to('/').'/logout' }}" data-toggle="ajaxModal" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print" id="nav">
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!--<span class="thumb avatar pull-left m-r">
                        <img src="{{ URL::to('/').'/images/a0.png' }}"  alt="">
						
                        <i class="on md b-black"></i>
                      </span>-->
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt">{{ Sentry::getUser()->first_name }}&nbsp;&nbsp;{{ Sentry::getUser()->last_name }} </strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block"></span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <li>
                        <a href="docs.html">Help</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="{{ URL::to('/').'/logout' }}" data-toggle="ajaxModal" >Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>


                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Main menu</div>
                  <ul class="nav nav-main" data-ride="collapse">
                   <li>
                                        <a href="{{ URL::to('/students') }}/">
                                          <i class="i i-docs icon">
                                          </i>
                                          <span class="font-bold">All Admissions</span>
                                        </a>
                                      </li>
                                   <li >
                                <a href="{{ URL::to('/students/create') }}/">

                                   <i class="i i-pencil2 icon">
                                   </i>
                                   <span class="font-bold">New Admission</span>
                                 </a>

                               </li>

                                   <li >
                                             <a href="{{ URL::to('students/verify') }}">

                                                <i class="i  i-checked icon">
                                                </i>
                                                <span class="font-bold">Verify Admissions</span>
                                              </a>

                                            </li>
                                   <li >
                                             <a href="{{ URL::to('students/validate') }}">

                                                <i class="i  i-checked icon">
                                                </i>
                                                <span class="font-bold">Validate Admissions</span>
                                              </a>

                                            </li>
<li >
                                             <a href="{{ URL::to('/export') }}/">

                                                <i class="i i-file-excel icon">
                                                </i>
                                                <span class="font-bold">Export</span>
                                              </a>

                                            </li>

<li style="position: absolute; bottom: 5px;width: 100%">
                      <a href="{{ URL::to('/contact-developer') }}/">
                        <i class="i i-circle-sm text-danger-dk"></i>
                        <span>Contact BQu</span>
                      </a>
                    </li>

                    @section('main_menu')
                    @show
                   </ul>
                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm"></div>
                  <ul class="nav">
                    @section('sub_menu')
                    @show
                  </ul>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm"></div>
                  <ul class="nav">

                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>

            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="{{ URL::to('/').'/logout' }}" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
             <header class="header bg-light dk">
                <div class="row">
                              <div class="col-lg-12">
                                <!-- .breadcrumb -->
                                <ul class="breadcrumb">
                                  <li><a href="{{ URL::to('/') }}"><i class="fa fa-home"></i> Home</a></li>
                                  @section('breadcrumb')
                                  @show
                                </ul>
                                <!-- / .breadcrumb -->
                              </div>
                              </div>
            </header>
            <section class="scrollable wrapper">


              @yield('content')

            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  {{ HTML::script('js/jquery.min.js'); }}
   {{ HTML::script('js/chosen/chosen.jquery.min.js'); }}

  <!-- Bootstrap -->
  {{ HTML::script('js/bootstrap.js'); }}
  {{ HTML::script('js/app.plugin.js'); }}
  <!-- App -->

    {{ HTML::script('js/slimscroll/jquery.slimscroll.min.js'); }}

    @section('post_js')
    @show
</body>
</html>