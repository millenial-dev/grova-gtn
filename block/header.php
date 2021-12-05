	
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
			
            
            <link rel="stylesheet" href="/css/inuit.css" />
            <link rel="stylesheet" href="/css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="/css/eve-styles.css" />
            <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
            
            <script src="js/respond-min.js" type="text/javascript"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
			<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="css/flexslider.css" />
            
            <script type="text/javascript">
				  $(window).load(function() {
					$('.flexslider').flexslider({
						  animation: "slide",<!--you can also choose fade here-->
						  directionNav: false,<!--Attention: if you choose true here, the nav-buttons will also appear in the ticker! -->
						  keyboardNav: true,
						  mousewheel: true
					});
				  });
				</script>
               
                    <!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->
                    <!--[if lte IE 7]>

                        <style>
                    		hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
                            .grid-4{ width:22% }
                        </style>
                    <![endif]-->

</head>
<!--===============================================================  Logo, social and menu =====================================================================================--> 

<body>
	<div class="wrapper">	
                    <a href="index.html" id="logo"><img src="img/logo.jpg" alt="something" /></a>
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in.
                       Dont´t forget to place your links -->
                    <div class="social">
					
                    <a href="https://vk.com/drova_gatchina" title="Наша группа в VK.COM"><img src="img/vk.png" width="40" height="40" alt="vk.com"></a>
                   <!-- <a href="http://twitter.com/#!/sg_layout" title="twitter"><img src="img/twitter.png" width="20" height="20" alt="twitter"></a>
                    <a href="#" title="linkedin"><img src="img/linkedin.png" width="20" height="20" alt="linkedin"></a>
                    <a href="#" title="vcard"><img src="img/vcard.png" width="20" height="20" alt="vcard"></a>
                    <a href="#" title="picasa"><img src="img/picasa.png" width="20" height="20" alt="picasa"></a>-->
					<div class="tel_head">+7(921)342-24-54</div>
				  </div>
                 
                    
                    <ul id="nav" class="main">
                        <li><a href="/" <?php if($page=="index"){echo 'class="active"';}?>>Главная</a></li>
                        <li><a href="o_nas.php" <?php if($page=="o_nas"){echo 'class="active"';}?>>О компании</a></li>
						<li><a href="ceni.php" <?php if($page=="ceni"){echo 'class="active"';}?>>Цены</a></li>
                		<li><a href="calculator.php" <?php if($page=="calculator"){echo 'class="active"';}?>>Калькулятор</a></li>
                        <li><a href="blog.php" <?php if($page=="blog"){echo 'class="active"';}?>>Статьи</a></li>
                        <li><a href="contact.php" <?php if($page=="contact"){echo 'class="active"';}?>>Контакты</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 