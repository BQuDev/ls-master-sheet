<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link rel="dns-prefetch" href="//themes.googleusercontent.com" />

	<link rel="dns-prefetch" href="//ajax.googleapis.com" />
	<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
	<link rel="dns-prefetch" href="//agorbatchev.typepad.com" />

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Empty - Mango: Slick and Responsive Admin Template</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- iPhone: Don't render numbers as call links -->
	<meta name="format-detection" content="telephone=no">

	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->


	<!-- The Styles -->
	<!-- ---------- -->

	<!-- Layout Styles -->
	{{ HTML::style('css/style.css'); }}
	{{ HTML::style('css/grid.css'); }}
	{{ HTML::style('css/layout.css'); }}


	<!-- Icon Styles -->
	{{ HTML::style('css/icons.css'); }}
	{{ HTML::style('css/fonts/font-awesome.css'); }}
	<!--[if IE 8]>{{ HTML::style('css/fonts/font-awesome-ie7.css'); }}<![endif]-->


	<!-- External Styles -->
	{{ HTML::style('css/external/jquery-ui-1.8.21.custom.css'); }}
	{{ HTML::style('css/external/jquery.chosen.css'); }}
	{{ HTML::style('css/external/jquery.cleditor.css'); }}
	{{ HTML::style('css/external/jquery.colorpicker.css'); }}
	{{ HTML::style('css/external/jquery.elfinder.css'); }}
	{{ HTML::style('css/external/jquery.fancybox.css'); }}
	{{ HTML::style('css/external/jquery.jgrowl.css'); }}
	{{ HTML::style('css/external/jquery.plupload.queue.css'); }}
	{{ HTML::style('css/external/syntaxhighlighter/shCore.css'); }}
	{{ HTML::style('css/external/syntaxhighlighter/shThemeDefault.css'); }}

	<!-- Elements -->
	{{ HTML::style('css/elements.css'); }}
	{{ HTML::style('css/forms.css'); }}

	<!-- OPTIONAL: Print Stylesheet for Invoice -->
	{{ HTML::style('css/print-invoice.css'); }}

	<!-- Typographics -->
	{{ HTML::style('css/typographics.css'); }}

	<!-- Responsive Design -->
	{{ HTML::style('css/media-queries.css'); }}

	<!-- Bad IE Styles -->
	{{ HTML::style('css/ie-fixes.css'); }}

	<!-- The Scripts -->
	<!-- ----------- -->


	<!-- JavaScript at the top (will be cached by browser) -->

	<!-- Load Webfont loader -->
	<script type="text/javascript">
		window.WebFontConfig = {
			google: { families: [ 'PT Sans:400,700' ] },
			active: function(){ $(window).trigger('fontsloaded') }
		};
	</script>
	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js'); }}

	<!-- Essential polyfills -->
	{{ HTML::script('js/mylibs/polyfills/modernizr-2.6.1.min.js'); }}
	{{ HTML::script('js/mylibs/polyfills/respond.js'); }}
	{{ HTML::script('js/mylibs/polyfills/matchmedia.js'); }}
	<!--[if lt IE 9]>{{ HTML::script('js/mylibs/polyfills/selectivizr-min.js'); }}<![endif]-->
	<!--[if lt IE 10]>{{ HTML::script('js/mylibs/charts/excanvas.js'); }}<![endif]-->
	<!--[if lt IE 10]>{{ HTML::script('js/mylibs/polyfills/classlist.js'); }}<![endif]-->

	<!-- Grab frameworks from CDNs -->
	{{ HTML::script('js/libs/jquery-1.7.2.min.js'); }}

		<!-- Do the same with jQuery UI -->
	{{ HTML::script('js/libs/jquery-ui-1.8.21.min.js'); }}

		<!-- Do the same with Lo-Dash.js -->
	{{ HTML::script('js/libs/lo-dash.min.js'); }}



	<!-- scripts concatenated and minified via build script -->

		<!-- General Scripts -->
    	{{ HTML::script('js/mylibs/jquery.hashchange.js'); }}
    	{{ HTML::script('js/mylibs/jquery.idle-timer.js'); }}
    	{{ HTML::script('js/mylibs/jquery.plusplus.js'); }}
    	{{ HTML::script('js/mylibs/jquery.jgrowl.js'); }}
    	{{ HTML::script('js/mylibs/jquery.scrollTo.js'); }}
    	{{ HTML::script('js/mylibs/jquery.ui.touch-punch.js'); }}
    	{{ HTML::script('js/mylibs/jquery.ui.multiaccordion.js'); }}
    	{{ HTML::script('js/mylibs/number-functions.js'); }}

    	<!-- Forms -->
    	{{ HTML::script('js/mylibs/forms/jquery.autosize.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.checkbox.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.chosen.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.cleditor.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.colorpicker.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.ellipsis.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.fileinput.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.fullcalendar.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.maskedinput.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.mousewheel.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.placeholder.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.pwdmeter.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.ui.datetimepicker.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.ui.spinner.js'); }}
    	{{ HTML::script('js/mylibs/forms/jquery.validate.js'); }}
    	{{ HTML::script('js/mylibs/forms/uploader/plupload.js'); }}
    	{{ HTML::script('js/mylibs/forms/uploader/plupload.html5.js'); }}
    	{{ HTML::script('js/mylibs/forms/uploader/plupload.html4.js'); }}
    	{{ HTML::script('js/mylibs/forms/uploader/plupload.flash.js'); }}
    	{{ HTML::script('js/mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js'); }}

    	<!-- Charts -->
    	{{ HTML::script('js/mylibs/charts/jquery.flot.js'); }}
    	{{ HTML::script('js/mylibs/charts/jquery.flot.orderBars.js'); }}
    	{{ HTML::script('js/mylibs/charts/jquery.flot.pie.js'); }}
    	{{ HTML::script('js/mylibs/charts/jquery.flot.resize.js'); }}

    	<!-- Explorer -->
    	{{ HTML::script('js/mylibs/explorer/jquery.elfinder.js'); }}

    	<!-- Fullstats -->
    	{{ HTML::script('js/mylibs/fullstats/jquery.css-transform.js'); }}
    	{{ HTML::script('js/mylibs/fullstats/jquery.animate-css-rotate-scale.js'); }}
    	{{ HTML::script('js/mylibs/fullstats/jquery.sparkline.js'); }}

    	<!-- Syntax Highlighter -->
    	{{ HTML::script('js/mylibs/syntaxhighlighter/shCore.js'); }}
    	{{ HTML::script('js/mylibs/syntaxhighlighter/shAutoloader.js'); }}

    	<!-- Dynamic Tables -->
    	{{ HTML::script('js/mylibs/dynamic-tables/jquery.dataTables.js'); }}
    	{{ HTML::script('js/mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard.js'); }}
    	{{ HTML::script('js/mylibs/dynamic-tables/jquery.dataTables.tableTools.js'); }}

    	<!-- Gallery -->
    	{{ HTML::script('js/mylibs/gallery/jquery.fancybox.js'); }}

    	<!-- Tooltips -->
    	{{ HTML::script('js/mylibs/tooltips/jquery.tipsy.js'); }}

    	<!-- Do not touch! -->
    	{{ HTML::script('js/mango.js'); }}
    	{{ HTML::script('js/plugins.js'); }}
    	{{ HTML::script('js/script.js'); }}

    	<!-- Your custom JS goes here -->
    	{{ HTML::script('js/app.js'); }}

	<!-- end scripts -->

<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body>

	<!-- Some dialogs etc. -->

	<!-- The loading box -->
	<div id="loading-overlay"></div>
	<div id="loading">
		<span>Loading...</span>
	</div>
	<!-- End of loading box -->

	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->

	<!-- The toolbar at the top -->
	<section id="toolbar">
		<div class="container_12">

			<!-- Left side -->
			<div class="left">
				<ul class="breadcrumb">

					<!--<li><a href="#">Dashboard</a></li>-->

					 @section('breadcrumb')

                            @show

				</ul>
			</div>
			<!-- End of .left -->

			<!-- Right side -->
			<!--<div class="right">
				<ul>

					<li><a href="#"><span class="icon i14_admin-user"></span>Blue Button</a></li>
					<li class="red"><a href="#">Red Button</a></li>

				</ul>
			</div>--><!-- End of .right -->

			<div class="phone">

				<!-- User Link -->
				<li><a href="#"><span class="icon icon-user"></span></a></li>
				<!-- Navigation -->
				<li><a class="navigation" href="#"><span class="icon icon-list"></span></a></li>

			</div>

		</div>
	</section><!-- End of #toolbar -->

	<!-- The header containing the logo -->
	<header class="container_12">
		<a href="{{ URL::to('/') }}"><img src="{{ URL::asset('img/Education-Group2.PNG')}}" alt="Mango" width="191" height="60"></a>
		<a class="phone-title" href="#"><img src="{{ URL::asset('img/logo-mobile.png')}}" alt="Mango" height="22" width="70" /></a>

		<div class="buttons">
			<!--<a href="#">
				<span class="icon icon-sitemap"></span>
				Button
			</a>-->
		</div>
	</header><!-- End of header -->

	<!-- The container of the sidebar and content box -->
	<div role="main" id="main" class="container_12 clearfix">

		<!-- The blue toolbar stripe -->
		<section class="toolbar">
			<div class="user">
				<div class="avatar">
					<img src="{{ URL::asset('img/layout/content/toolbar/user/avatar.png')}}">
					<!--<span>3</span>-->
				</div>
				<span>BQu User</span>
				<!--<ul>
					<li><a href="#">Profile</a></li>
					<li class="line"></li>
					<li><a href="#">Logout</a></li>
				</ul>-->
			</div>
			<!--<ul class="shortcuts">
				<li>
					<a href="#"><span class="icon i24_user-business"></span></a>
				</li>
			</ul>-->
			<!--<input type="search" data-source="extras/search.php" placeholder="Search..." autocomplete="off">-->
		</section><!-- End of .toolbar-->

		<!-- The sidebar -->
		<aside>
			<div class="top">

				<!-- Navigation -->
				<nav><ul class="collapsible accordion">

					<li class="current"><a href="{{ URL::to('/admissions') }}"><img src="{{ URL::asset('img/icons/packs/fugue/16x16/dashboard.png')}}" alt="" height=16 width=16>Admissions</a></li>
					 @section('sidebar')

                      @show
<!--
					<li>
						<a class="open" href="javascript:void(0);"><img src="{{ URL::asset('img/icons/packs/fugue/16x16/ui-layered-pane.png')}}" alt="" height=16 width=16>Submenu<span class="badge">4</span></a>
						<ul>
							<li class="current"><a href="#"><span class="icon icon-list"></span>Current</a></li>
							<li><a href="#"><span class="icon icon-table"></span>Another</a></li>
						</ul>
					</li>
-->
				</ul></nav><!-- End of nav -->

			</div><!-- End of .top -->
		</aside><!-- End of sidebar -->

		<!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>

			<!-- Your Boxes Here! -->
			@section('content')

            @show

		</section><!-- End of #content -->

	</div><!-- End of #main -->

	<!-- The footer -->
	<footer class="container_12">
		<ul class="grid_6">
			<li><a href="#">Home</a></li>
		</ul>

		<span class="grid_6">
			Copyright &copy; 2015 BQu
		</span>
	</footer><!-- End of footer -->

	<!-- Spawn $$.loaded -->
	<script>
		$$.loaded();
	</script>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
			@section('script')

            @show
</body>
</html>