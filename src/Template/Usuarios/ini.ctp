<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); ?>	
<?= $this->Html->css('ini') ?>

<body>
<div class="sidebar">
	<h2>MENU</h2>
	<ul>
		<li><a href="">Inicio</a></li>
		<li><a href="">Iniciar Sesión</a></li>
		<li><a href="">Registrarse</a></li>
		<li><a href="">Contactenos</a></li>
        <li><a href="">Siguenos</a></li>
	</ul>
</div>
<div class="contenido">
	<?= $this->Html->image('menu.png',array('Class'=>'menu-bar','alt'=>'')) ?>
</div>

</body>
<?php echo $this->fetch('script'); ?>