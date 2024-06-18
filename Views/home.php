

	<?php //require_once('../Views/header.php'); ?>
	<?php header_ppal($data); ?>
	<?php //include('../Views/Template/Modals/modalImagenes.php');  ?>


	<?php //require_once('./Libraries/Core/load.php'); ?>
	
	
	
	
	<?php 
	

	
	
	$pasarvar = new Home();
	$arrData = $pasarvar->getbuscaImgtds(); //MUESTRA TODAS LAS IMAGENES DE LA SECCION 4 DEL HOME Pertenece al foreach
	//$arrData1Img = $pasarvar->getbusca1Img;
	
	
	 
	
	?>

	
		
		
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url(<?= media(); ?>/paginappal/images/doctoreee2.jpg);" data-thumb="<?= media(); ?>/paginappal/images/thumb-01.jpg" data-caption="Principal">
					<div class="container h-full">
						<div class="flex-col-c-m h-full respon5">
							<!-- <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									DoctoreeeDevelop
								</span>
							</div> -->
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="1800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									<img style="height: 300px; width: 300px;" src="<?= media(); ?>/paginappal/images/docsinfondo2.png" alt="IMG-BANNER">
								</h2>
							</div>


							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="1800">
								<span class="ltext-202 txt-center cl0 respon2">
									Apps , Paginas Web Y Programas de Escritorio
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false mt-4" data-appear="zoomIn" data-delay="1800">
								<a href="https://wa.me/+57 322 573 61 52?text=Hola quiero info de los servicios de las paginas web" class="flex-c-m stext-101 cl0 size-101 bg10 bor1 hov-btn4 p-lr-15 trans-04" target=	"_blank"> 
									Whatsapp
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(<?= media(); ?>/paginappal/images/sec1-slider-2.jpg);" data-thumb="<?= media(); ?>/paginappal/images/thumb-02.jpg" data-caption="DoctoreeeDevelop">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Nuestra Empresa 
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									DoctoreeeDevelop
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="<?php echo BASE_URL(); ?>/nosotros" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									¡Lo Que Somos.!!!
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(<?= media(); ?>/paginappal/images/sec1-slider-3.jpg);" data-thumb="<?= media(); ?>/paginappal/images/thumb-03.jpg" data-caption="Nuestros Proyectos">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Lo Nuevo.!!!
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									Nuestros Proyectos
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Miralos Ahora
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>
	</section>
	<!-- Fin Slider -->

	<!-- Banner -->
	<section>
		<div class="sec-banner bg0 p-t-95 p-b-55">
			<div class="container">

				<h3 class="ltext-103 cl5 mb-5" id="proyect-r">
							Proyectos Realizados
				</h3>
				<div class="row">
					<div class="col-md-6 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="<?= media(); ?>/paginappal/images/qmerengones.png" alt="IMG-BANNER">

							<a href="https://qmerengones.doctoreeedevelop.com" target="_blank" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Tienda en Linea de Merengones
									</span>

									<span class="block1-info stext-102 trans-04">
										Creacion de categorias , roles , login inventarios y muchas mas caracteristicas
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										<p>HTML CSS Javascript</p>
										<p>Laravel</p>
										<p>Vue.js</p>
										<p>Boostrap</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="<?= media(); ?>/paginappal/images/vuelistado.jpg" alt="IMG-BANNER">

							<a href="<?php echo base_url(); ?>/vuetareas" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Listado de Tareas
									</span>

									<span class="block1-info stext-102 trans-04">
										Recordatorio de cosas por hacer
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										<p>HTML CSS Javascript</p>
										<p>Laravel</p>
										<p>Vue.js</p>
										<p>Boostrap</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="<?= media(); ?>/paginappal/images/banner-07.jpg" alt="IMG-BANNER">

							<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Watches
									</span>

									<span class="block1-info stext-102 trans-04">
										Spring 2018
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="<?= media(); ?>/paginappal/images/banner-08.jpg" alt="IMG-BANNER">

							<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Bags
									</span>

									<span class="block1-info stext-102 trans-04">
										Spring 2018
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="<?= media(); ?>/paginappal/images/banner-09.jpg" alt="IMG-BANNER">

							<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										Accessories
									</span>

									<span class="block1-info stext-102 trans-04">
										Spring 2018
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Shop Now
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>







	
	<!-- SECCION TIPOS DE SERVICIOS -->
	<section>
	
		<main class="sectiontipos">
			
			<div class="titext">

				<span class="titservicios ltext-103" id="proyect-r">
					Nuestros Servicios,  Escoja su Paquete ?
				</span>
			</div>
		
		
			<div class="boxext">
				
				
				<div class="box box1">
						<h6 class="ltext-102 cl5 mb-3 mt-3">$0</h6>
						<p>Este valor se Suma a el valor de los otros paquetes +</p>
						<h6 class="ltext-102 cl5 mb-3 mt-3">Paquete - 1  -</h6>
						<h6 class="ltext-101 trans-04 mb-2">Todas Nuestras paginas Incluyen: </h6>
						<p class="stext-102 trans-04">Hosting - Dominio</p>
						<p class="stext-115 trans-04">Soporte 24/7</p>
						<p class="stext-115 trans-04">Chat - Whatsapp</p>
						<p class="stext-115 trans-04">Mapas - Ubicacion</p>
						<p class="stext-115 trans-04">Redes Sociales</p>
						<p class="stext-115 trans-04">Certificado de Seguridad SSL</p>
						<p class="stext-115 trans-04">Correo Empresarial</p>
						<p class="stext-115 trans-04">Optimizacion SEO</p>
						<p class="stext-115 trans-04">Formularios  - Contactos</p>
						<p class="stext-115 trans-04">Totalmente administrable</p>
						<p class="stext-115 trans-04">NO se paga ADMIN</p>
				</div>
				
				<div class="box box2">
						<h6 class="ltext-102 cl5 mb-3 mt-3">$390.000</h6>
						<h6 class="m-0 h6 ltext-102 cl5 mb-3 mt-3">Paquete - 2  -</h6>
						<h6 class="ltext-101 trans-04 mb-2">Pagina Informativa: </h6>
						<p class="stext-102">Todo lo del Paquete Tipo 1 + </p> 

						<p class="stext-102 trans-04">Formularios  - Contactos</p> 
						<p class="stext-102 trans-04">Landing page</p> 
				</div>
				
				<div class="box box3">

						<h6 class="ltext-102 cl5 mb-3 mt-3">$590.000</h6>
						<h6 class="m-0 h6 ltext-102 cl5 mb-3 mt-3">Paquete - 3  -</h6>						
						<h6 class="ltext-101 trans-04 mb-2">Pagina Catalogo: </h6>
						<p class="stext-102">Todo lo del Paquete Tipo 1 + </p> 

						<p class="stext-102 trans-04">Pago contraentrega - Transferencia</p>
						<p class="stext-102 trans-04">Productos indefinidos</p>
						<p class="stext-102 trans-04">Landing page</p>						
				</div>
				
				<div class="box box4">
						<h6 class="ltext-102 cl5 mb-3 mt-3">$540.000</h6>
						<h6 class="m-0 h6 ltext-102 cl5 mb-3 mt-3">Paquete - 4  -</h6>						
						<h6 class="ltext-101 trans-04 mb-2">Pagina Citas: </h6>
						<p class="stext-102">Todo lo del Paquete Tipo 1 + </p> 

						<p class="stext-102">Modulo de creditos</p>
						<p class="stext-102">Pago contraentrega - Transferencia</p>
						<p class="stext-102">Modulo de citas</p>

				</div>
				
				<div class="box box5" style="background-image: url(localhost/doctoreeedevelop/Assets/paginappal/images/fondo4.jpg);">

						<h6 class="ltext-102 cl5 mb-3 mt-3">$890.000</h6>
						<h6 class="m-0 h6 ltext-102 cl5 mb-3 mt-3">Paquete - 5  -</h6>						
						<h6 class="ltext-101 trans-04 mb-2">Pagina Tienda en linea : Ecommercce </h6>
						<p class="stext-102">Todo lo del Paquete Tipo 1 + </p> 

						<p class="stext-102">Inventarios -  Stock</p>
						<p class="stext-102">Pago contraentrega - Transferencia</p>
						<p class="stext-102">Productos indefinidos</p>
						<p class="stext-102">Pasarela de Pagos</p>
						<p class="stext-102">Sistema de contabilidad</p>
						<p class="stext-102">Landing page</p>
				</div>


				<div class="box box6" style="background-image: url(localhost/doctoreeedevelop/Assets/paginappal/images/fondo4.jpg);">

						<h6 class="ltext-102 cl5 mb-3 mt-3">$490.000</h6>
						<h6 class="m-0 h6 ltext-102 cl5 mb-3 mt-3">Paquete - 6  -</h6>						
						<h6 class="ltext-101 trans-04 mb-2">Pagina Comidas: </h6>
						<p class="stext-102">Todo lo del Paquete Tipo 1 + </p> 

						<p class="stext-102">Carta Digital</p>
						<p class="stext-102">Menu Interactivo</p>
						<p class="stext-102">Reservaciones</p>
				</div>


			</div>



			<!-- <div class="error" style="background-image: url(localhost/doctoreeedevelop/Assets/paginappal/images/fondo4.jpg);">
					
			</div>

			<div class="error2">
					
			</div> -->




		</main>
	


	</section>
	<!--fin  SECCION TIPOS DE SERVICIOS fin -->



	<!-- nueva container efecto paralax seccion descripcion  -->
	<div class="container" id="descripcion-1">
			<div class="extparalax" >
				
				<div class="textopre ltext-102">
					<p class="textoint ltext-102 text-center ">Soy Desarrollador Full Stack muy creativo y comprometido con el detalle.<br> 
					Me gusta sacar el maximo provecho de las herramientas tecnologicas. 
					</p> 
				</div> 
			
			</div>
	</div>	
		<!--  fin  container efecto paralax seccion descripcion  -->


	


	



	<!-- seccion de descripciones varias sistema mobile first -->
	<div class="container">
	<a href="http://127.0.0.1:8000/">ir a pagina </a>
	<h1 class="mt-5 ltext-103 cl0" id="experi-3">Mi Experiencia...</h1>
	</div>

	
	<section class="sectvarias d-flex align-items-center justify-content-center vh-100">
	
		<div class="container">
			<main class="row">
				
				<div class="row">

					<!-- columna izquierda  -->
					<div class="col-12 col-lg-9">
						<div class="row">

							<div class="col-12 col-lg-8 p-2">
								<article class="card h-100 bd-dark stext-106">
									<div class="card-body">
										<div class="d-flex mb-3">
											<img class="imgsec3-1" src="<?= media(); ?>/paginappal/images/icons/sec3.png" alt="" class="border border-secondary border-5 rounded-circle">
											<div class="ps-5">
												<h6 class="m-0 h6 ltext-102 c15">Desarrollo de esta Pagina</h6>
												<p class="m-0 h6">P.O.O - M.V.C</p>
											</div>

										</div>
										<div>
											<p class="p-3">Esta pagina esta realizada en base a la arquitectura de Programacion Orientada a Objetos y el Modelo Vista Controlador . Con su sistema Mobile First que se adapta a todos los dispositivos. </p>
										
										</div>

									</div>
								
								</article>

							</div>
							<div class="col-12 col-lg-4 p-2 ">
								<article class="card h-100 stext-106">
									<div class="card-body">
										<div class="d-flex mb-3">
										<img class="imgsec3-1" src="<?= media(); ?>/paginappal/images/icons/sec3-tienda.png" alt="" class="border border-secondary border-5 rounded-circle">
											<div class="ps-5">
												<h6 class="m-0 h6 ltext-102 c15">Tiendas en Linea</h6>
												<p class="m-0 h6">Laravel</p>
											</div>

										</div>
										<div>
											<p>Desarrollo de tiendas en linea con Framework de Laravel y tecnologias agiles. </p>
										
										</div>

									</div>
								
								</article>

							</div>
							<div class="col-12 col-lg-4 p-2">
								<article class="card h-100 m-100 stext-106 shadow-lg p-3 mb-5 bg-body rounded">
									<div class="card-body">
										<div class="d-flex mb-3">
										<img class="imgsec3-1"src="<?= media(); ?>/paginappal/images/icons/sec3-estudia2.png" alt="" class="border border-secondary border-5 rounded-circle">
											<div class="ps-5">
												<h6 class="m-0 h6 ltext-102 c15">En Lo que Estoy</h6>
												<p class="m-0 h6">Actualmente</p>
											</div>

										</div>
										<div>
											<b><em><p>Aprendo:</p></em></b>
											<p>React Hooks</p>
											<p>Angular</p>
											<p>Ingles</p>
										</div>

									</div>
								
								</article>

							</div>
							<div class="col-12 col-lg-8 p-2">
								<article class="card h-100 w-100 stext-106">
									<div class="card-body">
										<div class="d-flex mb-3">
										<img class="imgsec3-1" src="<?= media(); ?>/paginappal/images/icons/sec3-admin2.png" alt="" class="border border-secondary border-5 rounded-circle">
											<div class="ps-5">
												<h6 class="m-0 h6 ltext-102 c15">Sistema de Administracion</h6>
												<p class="m-0 h6">Completo</p>
											</div>

										</div>
										<div>
											<p>Aca hago un demo de un sistma completo de administracion para una pagina Web con todos sus componentes:</p>
											<p>Usuarios</p> 
											<p>Login</p>
											<p>Consultas</p>
											<p>Roles de Usuarios</p>
											<p>Permisos</p>
											<p>Vistas Con Datatables</p>
											<p>Vea el demo aca <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
											<a class="stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" href="<?php echo base_url(); ?>/dashboard">Demo Admin</a> 
										</div>

									</div>
								
								</article>

							</div>


						</div>	
					
					</div>

					

					<!-- columna derecha  -->
					<div class="col-12 col-lg-3 p-2">
								<article class="card h-100 stext-106">
									<div class="card-body">
										<div class="d-flex mb-3">
										<img class="imgsec3-1"src="<?= media(); ?>/paginappal/images/icons/sec3-skill.png" alt="" class="border border-secondary border-5 rounded-circle">
											<div class="ps-5">
												<h6 class="m-0 h6 ltext-102 c15">Habilidades</h6>
												<p class="m-0 h6">-Skills-</p>
											</div>

										</div>
										<div>
											<p>HTML CSS Javascript</p>
											<p>SASS, SQL , Mysql</p>
											<p>PHP ,  Java,  GIT , Github</p>
											<hr>
											
											<b><em><p>Frameworks:</p></em></b>
											<p>Laravel</p>
											<p>Vue.js</p>
											<p>Bootstrap</p>
											<p>Tailwind</p>
											
											<hr>

											<b><em><p>Arquitectura De Programacion:</p></em></b>
											<p>P.O.O Programacion Orientada a Objetos</p>
											<p>M.V.C Modelo Vista Controlador </p>
											<p>Rest Full</p>
											<p>Responsive Design</p>
											<p>Mobile First</p>

											<hr>
											<b><em><p>Diseño:<p></em></b>
											<p>Corel</p> 
											<p>Photoshop</p>
											
										</div>

									</div>
								
								</article>

					</div>

				</div>

			</main>

			

			


		</div>
	</section>














	<!-- Product -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5" id="otros-4">
					Otros Proyectos 
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos Los Proyectos
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Bases de Datos
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Tienda online
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Paginas Estaticas
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Enlaces a Proyectos 
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Watches
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- SECCION 4 --><!-- SECCION 4 --><!-- SECCION 4 -->

			<div class="form-group">
                                        <label class="control-label">Idimgjava</label>
                                        <input  type="text" id="idImg" name="idImg" value=""> 
                                    </div>


			<div class="row isotope-grid">

							

				<?php foreach($arrData as $item): ?>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0 label-new" data-label="New">
							<img src="<?= media(); ?>/paginappal/images/<?php echo $item['nombreimg']; ?>" alt="IMG-PRODUCT">

							
							<!-- href="http://localhost/doctoreeedevelop/Home/getbusca1Img" -->

							<input type="text" name="idimg" value="<?php echo $item['idimg'] ?>">
							<button
								
								id="btn<?php echo $item['idimg']; ?>" 
								class="btnimg btnmbdl1 block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 imagenes" 
								rl="<?php echo $item['idimg']; ?>" 
								title="Detalle"
							>								
								<i class="fa fa-key"></i>Más Info

							</button>

						
								
						</div>
								<!-- onclick="openModalsec4()"  -->
							<!-- <a 	href="http://localhost/doctoreeedevelop/imgmodals/imgmodals/<?php //echo $item['idimg'] ?>"   -->
								<!-- class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04  imagenes" -->


							<!-- <a 	href="#"   -->
							<!-- <a 	href="http://localhost/doctoreeedevelop/home/getbusca1Img/<?php //echo $item['idimg']; ?>"   

						class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 imagenes"
						id="img_sec4-<?php //echo $item['idimg']; ?>"
						rl="<?php //echo $item['idimg']; ?>"	
					> -->								
					<!-- Quick View -->
					<?php //print_r($item['idimg']); ?>
					<!-- </a> -->
								<!-- class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 imagenes" -->
							<?php //getModal('modalImagenes', $data=$item['idimg'], $key=null, $value=null ); ?>
								<?php //var_dump($item['idimg']); 
								
								
								
								
								?>


								

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Esprit Ruffle Shirt
								</a>

								<span class="stext-105 cl3">
									$16.64
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="<?= media(); ?>/paginappal/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?= media(); ?>/paginappal/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
								<?php 
								
								
								//$data = $item['idimg'];
								
								?>

			

				<?php endforeach; 
				
				//$id = $_POST['idimg'];
				//echo $id;	
				
				//getModal('modalImagenes', $data);
				
				//$pasarvar = new Home();
				//$variablepasada = $pasarvar->getbusca1Img($item['idimg']);
				//var_dump($variablepasada);
				?>



				

				
				
				
				

			

				
			</div>
			
			<!--FIN  SECCION 4 --><!-- SECCION 4 --><!-- SECCION 4 -->

			<!-- Pagination -->
			<div class="flex-c-m flex-w w-full p-t-38">
				<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
					1
				</a>

				<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
					2
				</a>
			</div>



				

				
			

			
		</div>
	

	<!--SECCION EQUIPO DE TRABAJO -->

	<section>

	<div class="extequipo">

				<div class="container">
					<div class="p-b-10">
						<h3 class="ltext-103 cl5">
							Team Developer
						</h3>
					</div>

					<div class="extequipo1">


						<!-- EQUIPO1 -->
						<div class="fotoequipo1">
							
						
							<img class="imgequi1 " src="<?= media(); ?>/paginappal/images/mia1.png" alt="IMG-PRODUCT">
							<span class="stext-106 letra" stlyle="margin-right: 20px;">Fullstack Manager</span>
						
						</div>

						<div class="fotoequipo2">
								<p>David Echeverry</p>
								<p class="stext-106 letra" stlyle="margin-right: 20px;">Fullstack Team Leader, Especializado en varias tecnologias.</p>
						</div>
						
						
						
						<!-- EQUIPO2 -->
						<div class="fotoequipo1">
							
							
							<img class="imgequi1" src="<?= media(); ?>/paginappal/images/compa1.jpg" alt="IMG-PRODUCT">
							<span class="stext-106 letra" stlyle="margin-right: 20px;">Marketing Digital</span>
							
						</div>
						
						<div class="fotoequipo2">
							<p>Meliza martinez</p>
							<p class="stext-106 letra" stlyle="margin-right: 20px;">Especialista en Marketing Digital y Ventas por Internet</p>
						</div>
						
						
						<!-- EQUIPO3 -->
						<div class="fotoequipo1">
							<img class="imgequi1" src="<?= media(); ?>/paginappal/images/mailo.png" alt="IMG-PRODUCT">
							<p class="stext-106 letra" stlyle="margin-right: 20px;">Frontend Developer</p>
						</div>


						<div class="fotoequipo2">
								<p>Sofia Florez</p>
								<p class="stext-106 letra" stlyle="margin-right: 20px;">Desarrolladora frontend, REACT Javascript, Diseñadora Ux Ui, S.E.O , Responsive Design</p>
						</div>
						
						
						<!-- EQUIPO4 -->
						
						<div class="fotoequipo1">
							<img class="imgequi1" src="<?= media(); ?>/paginappal/images/compa2.jpg" alt="IMG-PRODUCT">
							<p class="stext-106 letra" stlyle="margin-right: 20px;">QA Testing Lider </p>
						</div>
						
						<div class="fotoequipo2">
							<p>Alexandra Quiroga</p>
							<p class="stext-106 letra" stlyle="margin-right: 20px;">Testing y soporte de aplicaciones , Analisis y Comprobación de errores.</p>
						</div>

					</div>
						
				</div>
		</div>

	</section>




	</section>
	<!--fin................................. FIN SECCION EQUIPO DE TRABAJO................................ fin  -->	




	<!-- Footer -->
	

	

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


	
	<h1 id="modalsec4"></h1> 
	
	
	
	
	
	
	<?php 
								
								//dep($arrData);
								//dep($data);
								//var_dump($data);
								
								
								?>

<?php 


//var_dump($data) 






?>


<div id="modal1img" class="wrap-modal1 js-modal1 p-t-60 p-b-20">
	<div id="js-hide-modal1" class="overlay-modal1 js-hide-modal1"></div>
	
	<div class="container">
		<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
			<button id="js-hide-modal1" class="how-pos3 hov3 trans-04 js-hide-modal1">
				<img src="images/icons/icon-close.png" alt="CLOSE">
			</button>
			
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							
							
							
							
							<div class="slick3 gallery-lb" id="contenido"> 	
								
								<!--				
									<div id="contenidodos" class="item-slick3" data-thumb="http://localhost/doctoreeedevelop/Assets/paginappal/images/3.jpg"></div>
									
										<div id="contenidodos" class="item-slick3" data-thumb="http://localhost/doctoreeedevelop/Assets/paginappal/images/2.jpg"></div>
										
									<div class="item-slick3" data-thumb="http://localhost/doctoreeedevelop/Assets/paginappal/images/1.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								-->

								</div>

								
								
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>








	
	
	
	<!-- <script src="http://localhost/doctoreeedevelop/Assets/paginappal/js/functions_mdlImageneshome.js"></script> -->
	<?php footer_ppal($data); ?>


	
