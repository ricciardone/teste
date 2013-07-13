<?php // include "inc/topo.php"; ?>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>Página de Teste</p>
		<p>Se aparecer está funcionando corretamente</p>
		<p>a mensagem foi <?php echo(isset($msg)) ? $msg : "NADA"; ?></p>
	</div>
	<div>
		<form action="" class="form-signin">
		<label for="nome" >Nome</label><input type="text" class="input-block-level" name="nome" />
		<button class="btn btn-large btn-primary" type="submit">Sign in</button>
		</form>
	</div>
<hr />
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
<script src="application/views/inc/bootstrap/js/jquery.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-transition.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-alert.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-modal.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-tab.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-popover.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-button.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="application/views/inc/bootstrap/js/bootstrap-typeahead.js"></script>
</body>
</html>