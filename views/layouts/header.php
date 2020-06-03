<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Raleway'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="/template/css/login.css">
	<link rel="stylesheet" href="/template/css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	<link href="/template/css/bootstrap.min.css" rel="stylesheet">
	
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
                
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="/template/js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="/template/js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="/template/js/jquery-func.js" type="text/javascript"></script>	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- End JS -->
	<!-- Fotorama from CDNJS, 19 KB -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
<div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!--/header-middle-->
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="/">AutoParser</a></h1>	
		
		<!-- Cart -->
		<div id="cart">
			<a href="/cart" class="cart-link">
			Выбранные авто (<span id="cart-count"><?php echo Cart::countItems();?></span>)
            </a>
			<div class="cl">&nbsp;</div>
			<?php if (User::isGuest()): ?>                                        
            	<span><a href="/user/login/" class="cart-link2"> Вход</a></span>
				<span><a href="/user/register/" class="cart-link2"> Регистрация</a></span>
            <?php else: ?>
            	<span><a href="/cabinet/" class="cart-link2"> Аккаунт</a></span>                                    
            	<span><a href="/user/logout/" class="cart-link2"> Выход</a></span>                                        
            <?php endif; ?>
			
			&nbsp;&nbsp;
			
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="/" class="active">Главная</a></li>
			    
			    <li><a href="/cabinet/">Аккаунт</a></li>
			   
			    <li><a href="/contact/">Контакты</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->