<!DOCTYPE html>
<html>
<head>
<title>OL'DAYS</title>
 <link rel="stylesheet" type="text/css" href="css/style.css"/>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
	<header>
		<div class="navbar-wrapper">
					<nav class="navbar-custom-uno navbar-inverse navbar-static-top">
						<div class="navbar-inner">
							<div class="container-fluid">
								<!-- Title or logo --> 
								<div class='navbar-header'>
									<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#main_navbar'>
										<span class='icon-bar'></span>
										<span class='icon-bar'></span>
										<span class='icon-bar'></span>
									</button>
									<a href='#' class='navbar-brand'><img src="./images/oldays5.png" style="max-width:200px; margin-top: -7px;" alt="oldays logo"/></a>
								</div>

								<!-- menu items -->
								<div class='collapse navbar-collapse navHeaderCollapse navbar-right' id="main_navbar">
									<ul class='nav navbar-nav'>
										<li><a href='#'>Tickets</a></li>
										<li><a href='#'>Favorites</a></li>
										<li class='dropdown'>
											<a href='#' class='dropdown-toggle' data-toggle='dropdown'>New <span class='caret'></span></a>
											<ul class='dropdown-menu'>
												<li><a href='#'>Tickets</a></li>
												<li><a href='#'>Favorites</a></li>
											</ul>
										</li>
										<li><a href='update.php'>Logged in: <?php //echo escape($user->data()->username)?></a></li>
												<li><a href='logout.php'>Log out</a></li>
									<ul>
								</div>
							</div>
						</div>
					</nav>
				</div>
        <div id="mainJumbotron" class="jumbotron text-center">
			   <div class="container">
				   <div id="oldays1-text-block" class="col-md-6">
					    <h1>El mejor <span class="cursive">Cafe</span> en el Puerto</h1>
					   <div class="line-separator"></div>
					   <h2>Cosas buenas todos los dias a todas horas</h2>
					   <button class="btn btn-clear cursive">follow us!!    <span class="icon-facebook"></span></button>
				   </div>
				   <div id="oldays1-image-block" class="col-md-6">
					   <img src="./images/flower.png" id="jumboImage1"/>
				   </div>
				   
			   </div>
				
			</div>
		
	</header>
	<div id="contentBanner" class="">
			<div class="container top-bottom-buffer">
				<div class="col-md-12">
					<h2 id="banner_title">Come share a good time with our baristas!!</h2>
				</div>
				<div class="col-md-6 text-center">
						<img src="images/alex.jpg" class="img-circle baristaMain"/>
				</div>
				<div class="col-md-6 titTxtBtn-1">
					<h3 class="tit">The Homeboy</h3>
						<p class="txt">
							This is our straigh OG barista. When he aint hustling some coffee beans on da streets, he out here whippingn.
						</p>
				</div>
			</div>
	</div>
	<div id="fadedWindows" class=" top-bottom-padding">
		<div class="container">
			<div class="col-sm-6 titTxtBtn-1">
				<h1 class="tit">
					Our Menu
				</h1>
				<p class="txt">
					check out our menu that is very creatvely created by our pros.
				</p>
				<a href="#" class="btn btn-primary">Menu</a>
			</div>
			<div class="col-sm-6">
				<div class="half-block">
					
							<div class="fadedWindowLabel">
								<div class="cell">
									<div class="text">
										<h3>Menu</h3>
										<p>
											Our summer menu!!
										</p>
									</div>
								</div>
							</div>
							<img src="./images/menu.jpg">
				</div>
			</div>
		</div>	
	</div>
	<!--<div class=" top_menu">
			<div class="well">
				<a class="btn" href="#">Button</a>
				<a class="btn btn-primary" href="">Button</a>
				<a class="btn btn-success" href="#">Button</a>
				<a class="btn btn-info" href="#">Button</a>
				<a class="btn btn-danger" href="#">Button</a>
				<a class="btn btn-link" href="#">Button</a>
				
				<a class="btn btn-success btn-lg" href="#">Button</a>
				<span class="glyphicon glyphicon-glass"></span>
			</div>
		</div>-->
	<div id="delivery" class="">
		<div class="full-block">
					
							<div class="fadedWindowLabel2">
								<div class="cell">
									<div class="text">
										<h3>Ahora Delivery</h3>
										<p>
											Click for MAP!!
										</p>
									</div>
								</div>
							</div>
							<img src="./images/delivery.jpg">
		</div>	
	</div>
	<div id="contanos" class="">
			<div class="container">
				<form action="#" method="post">
					<div class="form-group col-md-4">
						<h3>
							Contanos lo que pensas!!!
						</h3>
						<p>
							Esta es una descripcion.
						</p>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">	
									<label for="nombre">Nombre(no es necesario): </label>
									<input type="text" class="form-control" name="username" value="">
								</div>	
								<div class="col-md-4">	
									<label for="first">First: </label>
									<input type="text" class="form-control" name="first" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">	
									<label for="Contanos">Contanos!! </label>
									<textarea class="form-control" rows="5" name="contanos" required="required"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<input type='hidden' name="token" value="<?php //echo $main_token; ?>">
									<input type="submit" class="btn btn-primary" value="update">
									<p class="help-block">
									**change the information to update your information
									</p>
								</div>
							</div>
						</div>
					</div>
						
				</form>
			</div>
		</div>
	<div id="Legal_info" class="container">
		<div class="col-md-4">
			<ul>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
			</ul>
		</div>
		<div class="col-md-4">
			<ul>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
			</ul>
		</div>
		<div class="col-md-4">
			<ul>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
				<a href="#"><li></li></a>
			</ul>
		</div>
	</div>
	<footer>
        <h6>&copy; 2015 by Jose Sebastian Manunta. All rights Reserved.</h6>
        <h6>This is a site showing my work</h6>
        <address>Contact me at <a href="mailto:smanunta@yahoo.com">smanunta@yahoo.com</a></address>
    </footer>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="javascript/bootstrap-3.3.5-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="javascript/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

</html>
