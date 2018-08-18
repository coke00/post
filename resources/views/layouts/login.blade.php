<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
	<ul id="login-dp" class="dropdown-menu">
		<li class="col-md-12">
			<div class="row">
				 <div class="col-md-12">
					 Ingresar Vía
					 <div class="social-buttons">
						 <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
						 <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
					 </div>
						o
						<form class="w3-container" action="admin/process_login.php" method="post">
							<p>
								<label class="w3-label">
									Usuario
								</label>
								<input class="w3-input w3-border " type="text" name="username">
							</p>
							<p>
								<label class="w3-label">Password</label>
								<input class="w3-input w3-border" type="password" name="password">
							</p>
							<p>
								<input type="hidden" name="entrar" value="entrar">
								<button class="w3-btn w3-green">Aceptar</button>
							</p>
							<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a>
							</p>
						</form>
				 </div>
				 <div class="bottom text-center">
					 Eres Nuevo ? <a href="#Publicate"><b>Publicate</b></a>
				 </div>
			</div>
		</li>
	</ul>
</li>
