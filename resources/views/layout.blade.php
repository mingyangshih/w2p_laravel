<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-KH6185Z6CV"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-KH6185Z6CV');
	</script>
    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WNRN29J');</script>
	<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新雲端印刷網-@yield('title')</title>
    <link rel="icon" type="image/png" href="/static/favicon.ico">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/774f392016.js" crossorigin="anonymous"></script>
    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/774f392016.js" crossorigin="anonymous"></script>
    
    {{-- TAOPIX檔案 --}}
    <link rel="stylesheet" href="/tpx-includes/tpxReset.css">
    <link rel="stylesheet" href="/tpx-includes/tpxMultilineBasketAPI.css">
    <link rel="stylesheet" href="/tpx-includes/basicModal.min.css">
    <script src="/tpx-includes/tpxMultilineBasketAPI.js"></script>
    <script src="/tpx-includes/basicModal.min.js"></script>
    {{-- 自己寫的css --}}
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body onLoad="tpxHighLevelBasketInitialise()">
    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNRN29J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    @yield('content')
    
    @section('copyright')
      @include('./component/copyright')
    @show
  </body>
</html>