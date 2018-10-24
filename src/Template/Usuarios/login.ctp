<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<?= $this->Html->css('login') ?>
<div class="container bootstrap snippet">
    
    <div class="omb_login">
        
        <h3 class="omb_authTitle">Conectate o <!--<a href="#">Sign up</a>-->
            <?= $this->Html->link('Registrate',['controller' => 'Usuarios', 'action' => 'add'], ['class' => 'omb_authTitle']) ?>
        </h3>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs">Twitter</span>
		        </a>
	        </div>	
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
            
			<div class="col-xs-12 col-sm-6">
                <?= $this->Flash->render('auth') ?>
                <?= $this->Form->create() ?>
			    <!--<form class="omb_loginForm" action="" autocomplete="off" method="POST"> -->
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<!--<input type="text" class="form-control" name="username" placeholder="email address">
                        -->
                        <?= $this->Form->input('Usuario',['class' => 'form-control','placeholder' => 'Usuario...', 'label' => false, 'required']) ?>
					</div>
					<span class="help-block"></span>
										
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<!--<input  type="password" class="form-control" name="password" placeholder="Password">
                        -->
                        <?= $this->Form->input('contrasena',['class' => 'form-control','placeholder' => 'Contraseña...', 'label' => false, 'required']) ?>
					</div>
                    <span class="help-block">Password error</span>

					<!--<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>-->
                    <?= $this->Form->button('Ingresar',['class' =>'btn btn-lg btn-primary btn-block']) ?>
                    
				<!-- </form> -->
                <?= $this->Form->end() ?>
			</div>
    	</div>
        <!--
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>
        -->
	</div>



        </div>