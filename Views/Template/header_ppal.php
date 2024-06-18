<?php //session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php //echo $data['page_tag']; ?></title> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= media(); ?>/paginappal/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/paginappal/css/style.css">
<!--===============================================================================================-->


<link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/admin/vali-admin-master/docs/css/main.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/admin/vali-admin-master/docs/css/style.css"> -->

<!-- CDN DE VUE -->
<!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

</head>
<body class="animsition">


	<div class="redsocial">
        <ul class="menu">
            <li><a 	href="https://www.facebook.com/profile.php?id=100095321299185" class="facebook Ref" target=	"_blank"></a></li>   
            <li>
				<a 	href="https://wa.me/+57 322 573 61 52?text=Hola quiero info de los servicios de las paginas web" 
					target=	"_blank"
					class=	"wasa">
				</a>
			</li>           
            <!-- <li><a href="http://www." class="twitter"></a></li>    -->
            <li><a href="http://www.instagram.com/doctoreeedevelop?igsh=MTBscWZpanF2NzM0dw==" class="instagram" target=	"_blank"></a></li>   
            <!-- <li><a href="http://www." class="google"></a></li>    -->
            <li>
				<a href="<?php echo base_url(); ?>/contacto" class="mail">

				</a>
			</li>           
        </ul>   
    </div>  
	
	<!-- Header -->
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="<?php echo base_url(); ?>" class="logo">
						<img src="<?= media(); ?>/paginappal/images/icons/logo-02.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?php echo base_url(); ?>">Inicio</a>
								<!-- <ul class="sub-menu"> -->
									<!-- <li><a href="index.html">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li> -->
								<!-- </ul> -->
							</li>

							<li class="label1" data-label1="Demo">
								<a href="<?php echo base_url(); ?>/Dashboard">Admin</a>
							</li>

							<!-- <li class="label1" data-label1="hot"> -->
							<li>
								<a href="<?php echo base_url(); ?>/registrarse">Registarse</a>
							</li>

							<li>
								<a href="<?php echo base_url(); ?>/blog">Blog</a>
							</li>

							<li>
								<a href="<?php echo base_url(); ?>/nosotros">Nosotros</a>
							</li>

							<li>
								<a href="<?php echo base_url(); ?>/contacto">Contacto</a>
							</li>
						</ul>
					</div>	

					<div class="usuario-nav flex-w flex-r-m h-full text-center">
						<!-- Usuario : <?php //echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Invitado' ?> -->
						
						<a class="iruserReg" href="http://localhost/doctoreeedevelop/registrarse" title="Registrate...">
							<div class="text-white">
								
								<i class="fa fa-user-md iruserReg" aria-hidden="true"></i>

								<?php echo isset($_SESSION['userData']['nombre']) ? ($_SESSION['userData']['nombre']) : 'Usuario'  ?>	
										<br>			
								<?php echo isset($_SESSION['userData']['nombrerol']) ? ($_SESSION['userData']['nombrerol']) : 'Invitado'?>

							</div>
						</a>						
						
						<div class="usuario-close">
							<a href="<?php echo base_url(); ?>/Registrarse/cerrarSesion">cerrar sesion</a> 
						</div>

					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="5">
								<!-- <i class="zmdi zmdi-shopping-cart"></i> -->
								<i class="fa fa-search-plus" aria-hidden="true"></i>
							</div>
						</div>
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="<?= media(); ?>/paginappal/images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-5">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.html">Inicio</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">Nosotros</a>
				</li>

				<li>
					<a href="contact.html">Contacto</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04">
				<i class="zmdi zmdi-close"></i>
			</button>

			<form class="container-search-header">
				<div class="wrap-search-header">
					<input class="plh0" type="text" name="search" placeholder="Search...">

					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</header>


	<!-- Sidebar -->
	<aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<ul class="sidebar-link w-full">
					<li class="p-b-13">
						<a href="<?php base_url() ?>" class="stext-102 cl2 hov-cl1 trans-04">
							Inicio
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo base_url() ?>/dashboard" class="stext-102 cl2 hov-cl1 trans-04">
							Admin
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo base_url() ?>/registrarse" class="stext-102 cl2 hov-cl1 trans-04">
							Registrarse
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo base_url() ?>/contacto" class="stext-102 cl2 hov-cl1 trans-04">
							Contacto
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo base_url() ?>/nosotros" class="stext-102 cl2 hov-cl1 trans-04">
							Nosotros
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo base_url() ?>/blog" class="stext-102 cl2 hov-cl1 trans-04">
							Blog
						</a>
					</li>
				</ul>

				<div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						doctoreeedevelop@gmail.com
					</span>

					<div class="flex-w flex-sb p-t-36 gallery-lb">
						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-01.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-01.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-02.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-02.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-03.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-03.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-04.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-04.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-05.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-05.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-06.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-06.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-07.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-07.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-08.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-08.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="<?= media(); ?>/paginappal/images/gallery-09.jpg" data-lightbox="gallery" 
							style="background-image: url('<?= media(); ?>/paginappal/images/gallery-09.jpg');"></a>
						</div>
					</div>
				</div>

				<div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						Nuestra Empresa
					</span>

					<p class="stext-108 cl6 p-t-27">
						Somos una empresa de desarrollo de software y Aplicaciones con diseños a la medida, con altos estandares de calidad y
						seguridad, brindandole a nuestros clientes la confianza para desarrollar sus productos y proyectos.  
					</p>
				</div>
			</div>
		</div>
	</aside>


	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Secciones 5
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= media(); ?>/paginappal/images/mia.png" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#descripcion-1" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Descripcion Personal
							</a>

							<span class="header-cart-item-info">
								1 
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= media(); ?>/paginappal/images/menusec-2-2.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#proyect-r" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Proyectos Realizados
							</a>

							<span class="header-cart-item-info">
								2
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= media(); ?>/paginappal/images/menusec-3.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8" >
							<a href="#experi-3" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Mi Experiencia
							</a>

							<span class="header-cart-item-info">
								3
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= media(); ?>/paginappal/images/menusec-4.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#otros-4" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Otros Proyectos
							</a>

							<span class="header-cart-item-info">
								4
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= media(); ?>/paginappal/images/menusec-5.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#footer-5" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Final de Pagina -Footer-
							</a>

							<span class="header-cart-item-info">
								5
							</span>
						</div>
					</li>
				
				</ul>
				
				<div class="w-full">
					<!-- <div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div> -->

					<div class="header-cart-buttons flex-w w-full">
						<a href="<?php echo base_url(); ?>/Dashboard" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Admin
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>









