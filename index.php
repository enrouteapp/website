<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title>enRoute</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<link rel="stylesheet" href="stylesheets/enroute.css">
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/jquery.js"></script>
	<script src="javascripts/jquery.foundation.orbit.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="container">
	<img src="images/enroute.png" width="801px" />
	
	<div id="store">
		<a href="#"><img src="images/android_badge.png" width="150px" /></a>
	</div>
	
	<p>EnRoute is a suite of applications for Android mobile phones, vehicles, and web clients that is designed to facilitate real time 
	communication between drivers and passengers. By improving communication between these two parties, we believe that the 
	carpooling experience can be made safer and more enjoyable.</p>
	
	<p>While fully operational, EnRoute was developed as a proof of concept application. There are no plans to launch publicly at this time.</p>
	
	<div id="slider">
		<img src="images/slides/slide1.jpg" alt="slide image" data-caption="#caption-01"/>
		<img src="images/slides/slide2.jpg" alt="slide image" data-caption="#caption-02"/>
		<img src="images/slides/slide3.jpg" alt="slide image" data-caption="#caption-03"/>
		<img src="images/slides/slide4.jpg" alt="slide image" data-caption="#caption-04"/>
		<img src="images/slides/slide5.jpg" alt="slide image" data-caption="#caption-05"/>
		<img src="images/slides/slide6.jpg" alt="slide image" data-caption="#caption-06"/>
		<img src="images/slides/slide7.jpg" alt="slide image" data-caption="#caption-07"/>
		<img src="images/slides/slide8.jpg" alt="slide image" data-caption="#caption-08"/>
	</div>
	<span class="orbit-caption" id="caption-01">The enRoute development team.</span>
	<span class="orbit-caption" id="caption-02">The enRoute dahboard destinations screen.</span>
	<span class="orbit-caption" id="caption-03">The enRoute dashboard inbox screen.</span>
	<span class="orbit-caption" id="caption-04">The enRoute dashboard route map view screen.</span>
	<span class="orbit-caption" id="caption-05">The enRoute dashboard home screen.</span>
	<span class="orbit-caption" id="caption-06">The enRoute dashboard communication screen.</span>
	<span class="orbit-caption" id="caption-07">Early enRoute concept planning storyboard.</span>
	<span class="orbit-caption" id="caption-08">Early enRoute mobile application mockup.</span>
	
	<p>Portions of the enRoute source code have been released on <a href="https://github.com/mattcolf/enroute-service">github</a>.</p>
	
	<p>This application was developed by engineering and School of Information students at the University of Michigan as part of
	the Cloud Computing in the Commute course. More information can be found on the <a href="press_sheet.pdf">press sheet</a>.</p>
	
</div>

<p id="powered">&#169; 2011-<?=date("Y")?> enRoute development group</p>

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').orbit({
			animation: 'horizontal-push',
			animationSpeed: 800,
			timer: true,
			captions: true
		});
	});
</script>

<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-9117449-19']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<script type="text/javascript">
	var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.mattcolf.com/" : "http://stats.mattcolf.com/");
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 7);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch( err ) {}
</script>
<noscript>
	<p><img src="http://stats.mattcolf.com/piwik.php?idsite=7" style="border:0" alt="" /></p>
</noscript>

</body>
</html>