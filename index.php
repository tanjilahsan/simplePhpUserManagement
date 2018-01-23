<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>[Play] Blue Whale Game</title>

    <!-- Bootstrap core CSS -->
    <link href="bluewhale/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="bluewhale/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="bluewhale/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Login CSS -->
    <link href="style.css" rel="stylesheet">
	
	<!-- Login CSS -->
    <link href="background.css" rel="stylesheet">

  </head>

  <body id="page-top">
	<audio src="/bluewhale/files/blue-whale.mp3" autoplay loop>
		<p>If you are reading this, it is because your browser does not support the audio element.     </p>
	</audio>
  
<section id="login">
    <div class="container" style="padding-top:50px">
    	<div class="row">
			<div class="col-md-4">
			</div>
    	    <div class="col-md-4" style="background: rgba(135,206,250,0.3);padding:2em;border-radius:5px">
        	    <div class="form-wrap">
                <h1>Log in to play blue whale!</h1>
                    <form role="form" action="loginController.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
							<?php if(isset($_SESSION['wrongPass']) == 'yes'){?>
								<span style="color:red">Wrong credentials!</span>
							<?php  session_unset('wrongPass');}?>
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-danger btn-lg btn-block" value="Log in ☠">
                    </form>
                    <a href="signup/signup.php" class="forget">Don't have account? Create now!</a>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
			<div class="col-md-4">
			</div>
		</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!-- Bootstrap core JavaScript -->
    <script src="bluewhale/vendor/jquery/jquery.min.js"></script>
    <script src="bluewhale/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="bluewhale/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="bluewhale/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="bluewhale/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="bluewhale/js/creative.min.js"></script>
	<!-- Login JS -->
    <script src="script.js"></script>
  </body>

</html>