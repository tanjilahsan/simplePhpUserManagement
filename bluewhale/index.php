<?php session_start();
//var_dump($_SESSION['loggedin']);
//exit();
if($_SESSION['loggedin'] != 'yes')
{
	header("Location: ../index.php"); /* Redirect browser */
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>[Play] Blue Whale Game</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
	<style type="text/css">
	#mainNav .container a{
		color:'#BCDEE8';
	}
	#mainNav .container a img{
		margin-top:-10px;
		-webkit-transform: scaleX(-1);
		transform: scaleX(-1);
	}
	p.warning-msg{
		color:red;
		
	}
		
	</style>
	<link rel="stylesheet" href="fonts/buffiedregular/stylesheet.css" type="text/css" charset="utf-8" />

	<style type="text/css">
		body{
			font-family: 'buffiedregular' !important;
		}
	</style>
	
	<!-- Background CSS -->
    <link href="../background.css" rel="stylesheet">
	
	<!-- Plugin CSS -->
	<link href="../play/style.css" rel="stylesheet"> 

  </head>

	<body id="page-top">
	<audio src="./files/blue-whale.mp3" autoplay loop>
		<p>If you are reading this, it is because your browser does not support the audio element.     </p>
	</audio>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" height="30"/> Blue Whale</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">			
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../sessionkill.php">Logout</a>
            </li>
			<li class="nav-item" style="color:red">
              <a class="nav-link js-scroll-trigger" href="#"> User: <?php echo $_SESSION['loggedUser'];?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading" style="color:red;font-family: 'buffiedregular'">This game may cause death! Play it at your own risk!</h1>
          <hr>
          <p style="color:'#BCDEE8';font-size:2em">Think before you start. You can't escape in the middle of the game.</p>
		  
          <!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModal"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> I'm Ready To Go!</button>

			<!-- Modal -->
			<div id="myModal" class="modal" role="dialog">
			  <div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content" style="color:#000">
				  <div class="modal-header">
					<h4 class="modal-title">Pay By Bitcoin</h4>
				  </div>
				  <div class="modal-body">
					<input style="color:blue;font-family:'arial';width:100%" id="wallet" name="wallet" type="text"  onclick="copyToClipBoard()" value="1LBRaekxvvD8UJGRHX3jT1YAiNXjzbnwyc"/>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
        </div>
      </div>
    </header>

    <!-- Login JS -->
    <script src="./js/script.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
