<title><?php echo $data['page_tag']; ?></title>

    
<?php header_ppal($data) ?>
    
    
<h1><?php echo $data['page_title']; ?></h1>


<form class="container mt-5 bg-info text-light text-center p-3">

    <h3>Numero de Contacto:  316 498 45 95</h3>
    <h3 class="p-3">Whatsapp: </h3>
    <h3>Correo Electronico: doctoreeedevelop@gmail.com </h3>


    <br>
    <br>

    <h2>Dejenos sus Datos o escriba la inquietud:</h2>
    <p>Nombre:</p>
    <p>Correo:</p>
    <p>mensaje: </p>


    <div class="layer-slick1 animated d-inline" data-appear="zoomIn" data-delay="1600">
		<a href="<?php echo BASE_URL(); ?>/contacto" class="d-inline flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
		Enviar
		</a>
	</div>


</form>

<?php footer_ppal($data) ?>




