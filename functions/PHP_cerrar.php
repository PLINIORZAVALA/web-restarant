<?php
	@session_start();
	if(isset($_SESSION['codUsu'])){
		session_destroy();
		echo "
			<script type='text/javascript'>
				function redireccionar(){
					window.location='../'
				}
				setTimeout('redireccionar()',0);
			</script>
			";
	}else{
		echo "
			<script type='text/javascript'>
				function redireccionar(){
					window.location='../'
				}
				setTimeout('redireccionar()',0);
			</script>
			";
	}

?>