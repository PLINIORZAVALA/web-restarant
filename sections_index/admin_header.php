<header class="header full-box">
	    <div class="header-brand text-center full-box">
	        <a href="index.html">
	            <img src="./assets/img/logo.png" alt="logo" class="img-fluid">
	        </a>
	    </div>

	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold" >
	            <ul class="list-unstyled full-box">
	                <li>
	                    <a href="index.html" >Inicio<span class="full-box" ></span></a>
	                </li>
	                <li>
	                    <a href="menu.php" >Menú<span class="full-box" ></span></a>
	                </li>
	            </ul>
	        </nav>
	        <div class="header-button full-box text-center btn-login-menu" >
	            <i class="fas fa-user-alt" onclick="show_popup_login()" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Login" ></i>
	            <div class="div-bordered popup-login">

	                <!-- Inicio de sesion -->
	                <span class="text-center poppins-regular font-weight-bold">Inicio de sesión</span>
	                <form id="login" class="full-box" action="">
	                    <div class="form-outline mb-4">
	                        <input type="email" class="form-control" name="email" id="login_email" maxlength="70" required="" placeholder="Email" >
	                    </div>
	                    <div class="form-outline mb-4">
	                        <input type="password" class="form-control" name="password" id="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" placeholder="Contraseña" >
	                    </div>
	                    <p class="text-center">
	                        <button 
							class="btn btn-info btn-sm w-100" 
							type="submit" >Iniciar sesión</button>
	                    </p>
						<div class="col-xs-12" id="datos_ajax"></div>
	                </form>
	                <hr>
	                <p class="text-center full-box">¿No tienes cuenta? <a href="registration.html">Regístrate aquí</a></p>
				
	                <!-- Cerrar sesion --
	                <div class="text-center full-box">
	                    <i class="fas fa-user-circle fa-4x"></i>
	                </div>
	                <span class="poppins-regular font-weight-bold">Nombre de usuario</span>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fas fa-user-cog fa-fw"></i> &nbsp; Mi cuenta</a>
	                </div>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
	                </div>
	                <form class="full-box" action="">
	                    <button class="btn btn-raised btn-primary btn-sm w-100" ><i class="fas fa-door-open fa-fw"></i> &nbsp; Cerrar sesión</button>
	                </form>-->
	                
	            </div>
	        </div>
	        <a href="bag.html" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito" >
	            <i class="fas fa-shopping-bag"></i>
	            <span class="badge bg-warning rounded-pill bag-count" >2</span>
	        </a>
	    </div>
	</header>