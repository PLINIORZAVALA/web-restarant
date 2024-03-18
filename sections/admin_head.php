<?php
	@session_start();
	include_once 'config/datos.php';
	include_once 'sections/admin_pages.php';
	if(isset($_SESSION['codUsu'])){
		//extraer datos del usuario
		$page_actual = $template['active_page'];
		foreach($pages as $id => $pagina){
			if($page_actual == $id){
				$title = $pagina;
				break;
			}
		}		
		$sql = "SELECT *FROM usuarios WHERE codUsu='".$_SESSION['codUsu']."' AND estUsu=1";
		$query = $conector->query($sql);
		$ver_estado = $query->num_rows;
		if($ver_estado>0){
			$usuario = array();
			while($row = $query->fetch_array()){
				$usuario = $row;
			}
		}else{
			echo "
			<script type='text/javascript'>
				function redireccionar(){
					window.location='index.php'
				}
				setTimeout('redireccionar()',1000);
			</script>
			";
		}
		
	}else{
		//enviar al login
		echo "
			<script type='text/javascript'>
				function redireccionar(){
					window.location='index.php'
				}
				setTimeout('redireccionar()',1000);
			</script>
			";
	}
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $title;?></title>

        <meta name="description" content="ADMIN">
        <meta name="author" content="<?php echo $template['author'];?>">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo $company['icoEmp'];?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="assets/template/admin/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="assets/template/admin/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="assets/template/admin/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="assets/template/admin/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="assets/template/admin/js/vendor/modernizr.min.js"></script>
    </head>