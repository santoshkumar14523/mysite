<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- FontAwesome Script -->
		<script src="https://kit.fontawesome.com/7b3e632a6c.js"></script>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	   	<!-- Custom CSS -->
	   	<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>
	<body>
		<div class="main-container">
				<div class="intro">
					<h2 class="mt-5"><i class="fas fa-meteor mr-2"></i>MySite - Untitled</h2>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae auctor eu augue ut lectus arcu bibendum at. Nunc faucibus a pellentesque sit amet porttitor eget dolor morbi. Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Nibh praesent tristique magna sit amet purus. Orci ac auctor augue mauris augue neque gravida. Sapien nec sagittis aliquam malesuada bibendum arcu. Sed euismod nisi porta lorem mollis aliquam. Eget duis at tellus at urna condimentum mattis pellentesque id. Quam id leo in vitae turpis. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Sed risus ultricies tristique nulla. Ut placerat orci nulla pellentesque. Sit amet venenatis urna cursus eget nunc scelerisque. Volutpat consequat mauris nunc congue. Sit amet purus gravida quis blandit turpis cursus in hac.</p>
					
					<h4 class="my-2">Our New Projects</h4>
					<div class="container projects-container mt-2">
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Description</a>
						    <a href="#" class="card-link">GitHub Repo</a>
						  </div>
						</div>
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Description</a>
						    <a href="#" class="card-link">GitHub Repo</a>
						  </div>
						</div>
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="card-link">Description</a>
						    <a href="#" class="card-link">GitHub Repo</a>
						  </div>
						</div>
					</div>
					<form class="form-inline my-3">
						<a href="#" class="btn btn-primary mr-3 my-2" role="button"><i class="fab fa-github mr-2"></i>GitHub</a>
						<a href="#" class="btn btn-primary mr-3 my-2" role="button"><i class="fas fa-user-astronaut mr-2"></i>About Me</a>
						<a class="btn btn-primary mr-3 my-2" href="#" role="button"><i class="far fa-handshake mr-2"></i>Join Me</a>
						<a href="#" class="btn btn-primary mr-3 my-2" role="button"><i class="far fa-comment-alt mr-2"></i>Feedback</a>
					</form>
				</div>
				<div class="forms">
					<div class="card ">
						<div class="card-header">
						    <ul class="mx-auto nav nav-tabs card-header-tabs">
						      <li class="nav-item">
						        <a class="nav-link login-tab active" href="#"><i class="fas fa-sign-in-alt mr-2"></i>Log In</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link signin-tab" href="#"><i class="fas fa-user-plus mr-2"></i>Sign In</a>
						      </li>
						    </ul>
						 </div>
						<div class="card-body">
							<form class="login-form" method="POST" action="config/login.php">
								<div class="form-group">
								    <label for="username">Username</label>
								    <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Select Username" required>
								</div>
								<div class="form-group">
									<label for="pswd">Password</label>
									<input type="password" class="form-control" id="login-pswd" name="login-pswd" placeholder="Password" required>
								</div>
								<div class="form-group form-check">
								    <input type="checkbox" class="form-check-input" id="rmbrme">
								    <label class="form-check-label" for="rmbrme">Remember me</label>
								 </div>
								<button type="submit" name="login-btn" class="btn btn-primary mb-3">Log In</button>
								<div class="form-group">
									<a href="#" class="signin-link">New User! Need an account?</a>
									<br>
									<a href="#" class="frgt-pswd" role="button">Forgot my password?</a>
								</div>
							</form> 	
							<form class="signin-form" method="POST" action="config/signin.php">
								<div class="form-group">
								    <label for="username">Username</label>
								    <input type="text" class="form-control" name="username" id="signin-username" placeholder="Select Username" required>
								</div>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" name="email" id="signin-email" placeholder="Enter email" required>
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="pswd">Password</label>
									<input type="password" name="pswd" class="form-control" id="signin-pswd" placeholder="Password" required>
								</div>
								<div class="form-group">
								    <label for="descrptn">Description about your self.</label>
								    <textarea class="form-control" name="descrptn" id="descrptn" rows="2"></textarea>
								  </div>
								<div class="form-group">
									<label for="link">Link of your site / Github page.</label>
									<input type="text" class="form-control" name="link" id="link" placeholder="https://yoursite.com/">
								</div>
								<button type="submit" name="signin-btn" class="btn btn-primary mb-3 mt-1">Create Account</button>
								<div class="form-group">
									<a href="#" class="login-link">Already have account!</a>
									<br>
									<a href="#" class="frgt-pswd" role="button">Forgot my password?</a>
								</div>
							</form>
						</div>
					 </div>	
				</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			function toggleforms(){
				$('.login-form').toggle();
				$('.signin-form').toggle();
			}
			$('.signin-tab').on('click', function(){
				$(this).addClass('active');
				$('.login-tab').removeClass('active');
				toggleforms();
			})
			$('.login-tab').on('click', function(){
				$(this).addClass('active');
				$('.signin-tab').removeClass('active');
				toggleforms();
			})
			$('.signin-link').on('click', function(){
				$('.login-tab').removeClass('active');
				$('.signin-tab').addClass('active');
				toggleforms();
			})
			$('.login-link').on('click', function(){
				$('.signin-tab').removeClass('active');
				$('.login-tab').addClass('active');
				toggleforms();
			})
		})
	</script>
</html>
