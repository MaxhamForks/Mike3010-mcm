<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>MCM - Mike's Content Management</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

{!! HTML::style('images/VectorLover.css') !!}

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
	@yield('script')
</script>

</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="index.html" title="">MCM - Mike's Content Management</a></h1>		
		<p id="slogan">content Management the modern way!</p>		
		
		<div id="top-menu">
			<p>	
				{!! Auth::check() ? HTML::Link('logout', 'Logout') : HTML::Link('login', 'Login') !!}
			</p>
		</div>		
					
	<!--header ends-->					
	</div>
		
	<!-- navigation starts-->	
	<div  id="nav">
		<ul>			
			{!! App\Helper\Navigation::getNavigation() !!}
		</ul>
	<!-- navigation ends-->	
	</div>					
			
	<!-- content starts -->
	<div id="content">
	
		<div id="main">
				
			@yield('content')
			
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
		
			@yield('rightSide')
			
			<h3>Sponsors</h3>
			<ul class="sidemenu">
                <li><a href="http://www.dreamtemplate.com" title="Website Templates">DreamTemplate <br />
                <span>Over 6,000+ Premium Web Templates</span></a>
                </li>
                <li><a href="http://www.themelayouts.com" title="WordPress Themes">ThemeLayouts <br />
                <span>Premium WordPress &amp; Joomla Themes</span></a>
                </li>
                <li><a href="http://www.imhosted.com" title="Website Hosting">ImHosted.com <br />
                <span>Affordable Web Hosting Provider</span>
                </a></li>
                <li><a href="http://www.dreamstock.com" title="Stock Photos">DreamStock <br />
                <span>Download Amazing Stock Photos</span></a>
                </li>
                <li><a href="http://www.evrsoft.com" title="Website Builder">Evrsoft <br />
                <span>Website Builder Software &amp; Tools</span></a>
                </li>
                <li><a href="http://www.webhostingwp.com" title="Web Hosting">Web Hosting <br />
                <span>Top 10 Hosting Reviews</span></a>
                </li>
			</ul>
			
		<!-- sidebar ends -->		
		</div>		
		
	<!-- content ends-->	
	</div>
		
	<!-- footer starts -->		
	<div id="footer">
						
			<p>
			&copy; All your copyright info here  
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a> |
			Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | 
			<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
			
   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<a href="index.html">Home</a>&nbsp;|&nbsp;
   		<a href="index.html">Sitemap</a>&nbsp;|&nbsp;
	   	<a href="index.html">RSS Feed</a>
   		</p>				
	
	<!-- footer ends-->
	</div>

<!-- wrap ends here -->
</div>

</body>
</html>
