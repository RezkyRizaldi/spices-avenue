<head>
	{{--  Required Meta Tags --}}
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">

	{{-- CSRF --}}
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	{{-- Primary --}}
	<title>@yield('title')</title>
	{{-- <meta name="image" content="{{ asset('assets/img/favicon/kpu_summary.jpg') }}" /> --}}
	<meta name="HandledFriendly" content="true" />
	<meta name="MobileOptimized" content="320" />
	<meta name="copyright" content="{{ config('app.name') }}" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="topic" content="{{ config('app.name') }}" />
	<meta name="summary" content="{{ config('app.name') }}" />
	<meta name="Classification" content="Business" />
	<meta name="author" content="Muhamad Rezky Rizaldi, rezkyrizaldi30@gmail.com" />
	<meta name="designer" content="Muhamad Rezky Rizaldi, rezkyrizaldi30@gmail.com" />
	<meta name="reply-to" content="rezkyrizaldi30@gmail.com" />
	<meta name="url" content="{{ url()->current() }}" />
	<meta name="identifier-URL" content="{{ config('app.url') }}" />
	<meta name="directory" content="submission" />
	<meta name="pagename" content="{{ config('app.name') }}" />
	<meta name="revisit-after" content="1 day" />
	<meta name="subtitle" content="{{ config('app.name') }}" />
	<meta name="target" content="all" />
	<meta name="medium" content="blog" />
	<meta name="category" content="Official Website" />
	<meta name="owner" content="{{ config('app.name') }}" />
	<meta name="coverage" content="Worldwide" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />

	{{-- Open Graph/Facebook --}}
	{{-- <meta property="og:image" content="{{ asset('assets/img/favicon/kpu_summary.jpg') }}" /> --}}

	{{-- Twitter --}}
	{{-- <meta property="twitter:image" content="{{ asset('assets/img/favicon/kpu_summary.jpg') }}" /> --}}

	{{-- Tweetmeme --}}
	<meta name="tweetmeme-title" content="{{ config('app.name') }}" />
	{{-- <meta name="blogcatalog" /> --}}

	{{-- Pinterest --}}
	<meta name="pinterest" content="nopin" description="Sorry, you can't save from my website!" />

	{{-- Google --}}
	<meta name="google" content="notranslate, nositelinkssearchbox, nopagereadaloud" />
	<meta name="googlebot" content="index,follow" />
	<meta name="news_keywords" content="{{ config('app.name') }}" />
	<meta name="mobile-web-app-capable" content="yes" />

	{{-- Apple --}}
	<meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="apple-moblie-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />

	{{-- Windows 8 --}}
	<meta name="application-name" content="{{ config('app.name') }}" />
	<meta name="msapplication-TileColor" content="#FCAC11" />
	{{-- <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/mstile-144x144.png') }}" />
	<meta name="msapplication-square70x70logo" content="{{ asset('assets/img/favicon/mstile-70x70.png') }}" />
	<meta name="msapplication-square150x150logo" content="{{ asset('assets/img/favicon/mstile-150x150.png') }}" />
	<meta name="msapplication-wide310x150logo" content="{{ asset('assets/img/favicon/mstile-310x150.png') }}" />
	<meta name="msapplication-square310x310logo" content="{{ asset('assets/img/favicon/mstile-310x310.png') }}" /> --}}

	{{-- IE --}}
	<meta http-equiv="Page-Enter" content="RevealTrans(Duration=2.0, Transition=2)" />
	<meta http-equiv="Page-Exit" content="RevealTrans(Duration=3.0, Transition=12)" />
	<meta http-equiv="cleartype" content="on" />
	<meta name="mssmarttagspreventparsing" content="true" />
	<meta name="msapplication-starturl" content="{{ config('app.url') }}" />
	<meta name="msapplication-window" content="width=800;height=600" />
	<meta name="msapplication-navbutton-color" content="blue" />
	<meta name="application-name" content="{{ config('app.name') }}" />
	<meta name="msappliaction-tooltip" content="{{ config('app.name') }}" />
	<meta name="theme-color" content="#FCAC11" />
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible" />
	{{-- <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}" /> --}}

	{{--  Other Browsers  --}}
	<meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="x5-orientation" content="landscape/portrait" />
	<meta name="x5-fullscreen" content="true" />
	<meta name="x5-page-mode" content="app" />
	<meta name="screen-orientation" content="landscape/portrait" />
	<meta name="full-screen" content="yes" />
	<meta name="imagemode" content="force" />
	<meta name="browsermode" content="application" />
	<meta name="nightmode" content="disable" />
	<meta name="layoutsmode" content="fitscreen" />
	<meta name="wap-font-scale" content="no" />

	{{--  Favicon  --}}
	{{-- <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
	<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#FCAC11" />
	<link rel="author" href="https://authenticguards.com" />
	<link rel="fluid-icon" href="{{ asset('assets/img/favicon/kpu_summary.jpg') }}" type="image/jpeg" /> --}}
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
	{{-- <link rel="logo" href="{{ asset('assets/img/favicon/kpu_logo.png') }}" /> --}}
	{{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}" />
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}" />
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}" />
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}" />
	<link rel="apple-touch-startup-image" href="{{ asset('assets/img/favicon/kpu_logo.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-196x196.png') }}" sizes="196x196" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-128.png') }}" sizes="128x128" /> --}}

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	@stack('styles')
	<link rel="stylesheet" href="{{ asset('assets/css/floating-wpp.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
</head>
