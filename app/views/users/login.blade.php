<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>LS Student Administration @section('title') @show</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  {{ HTML::style('css/bootstrap.css', array(), true) }}
  {{  HTML::style('css/animate.css', array(), true) }}
  {{  HTML::style('css/font-awesome.min.css', array(), true) }}
  {{  HTML::style('css/icon.css', array(), true) }}
  {{  HTML::style('css/font.css', array(), true) }}
  {{  HTML::style('css/app.css', array(), true) }}
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->

</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><img src="{{ asset('images/logo.png') }}" class="m-r-sm" alt="scale"></a>
      <section class="m-b-lg">
       <header class="wrapper text-center">
                <strong>Administration</strong>
              </header>

        {{ Form::open(array('url' =>URL::to("/").'/login',  'class'=>'form-horizontal','method' => 'post')) }}
          <div class="list-group">
            <div class="list-group-item">
              <input type="email" id="email" name="email" placeholder="Email" class="form-control no-border">
            </div>
            <div class="list-group-item">
               <input type="password" name="password" id="password" placeholder="Password" class="form-control no-border">
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
         <!-- <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>-->
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="signup.html" class="btn btn-lg btn-default btn-block">Contact Us</a>
        {{ Form::close() }}
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Privacy policy | Terms of use | Copyright &copy; {{ Date('Y') }} BQu</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  {{  HTML::script('js/jquery.min.js', array(), true) }}
  <!-- Bootstrap -->
    {{  HTML::script('js/bootstrap.js', array(), true) }}
  <!-- App -->
	    {{  HTML::script('js/app.js', array(), true) }}
		{{  HTML::script('js/slimscroll/jquery.slimscroll.min.js', array(), true) }}
		{{  HTML::script('js/app.plugin.js', array(), true) }}
</body>
</html>