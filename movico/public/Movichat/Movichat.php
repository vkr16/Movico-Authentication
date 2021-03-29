<?php 
	// require '/views/includes/head.php'; 
session_start();
	$base = 'http://localhost/movico';

	if (!isset($_SESSION['username'])) {
		header("Location: $base/users/login");
	}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta htttp-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movichat</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
    <!-- mygfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&family=Montserrat:wght@300&family=Raleway:wght@200&family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
    <!-- mybs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&family=Lobster&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="<?= $base ?>/public/img/icon.png">

    <style type="text/css">	
    @font-face {
		font-family: code;
			src: url('../font/code.TTF');
		font-family: consolas;
			src: url('../font/consola.ttf');
		}

		textarea:focus,input:focus{
			outline:0px !important;
		    -webkit-appearance:none;
		    box-shadow: none !important;
		}
</style>
</head>
	<script type="text/javascript">
		function update()
		{
		  $.post("moviServer.php", { code: $("#code").val()}, 
		    function(data) {
		      $("#chatField").html(data);
		    }
		  );
		 
		    setTimeout('update()', 1000);
		}
		 
		$(document).ready(
		    function() {
		        update();
		       

		        $("#message").on('keypress',function(e) {
				    if(e.which == 13) {
				        
		                $.post("moviServer.php", {
		                        message: $("#message").val(),
		                        code: $("#code").val()
		                    },
		                    function(data) {
		                        $("#chatField").html(data);
		                        $("#message").val("");
		                    }
		                );
				    }
				});

		        $("#send").click(
		            function() {
		                $.post("moviServer.php", {
		                        message: $("#message").val(),
		                        code: $("#code").val()
		                    },
		                    function(data) {
		                        $("#chatField").html(data);
		                        $("#message").val("");
		                    }
		                );
		            }
		        );
		    }
		);



	</script>




<body style="background-image: url('<?= $base ?>/public/img/banner.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<nav class="navbar navbar-expand-lg navbar-light container text-light" style="font-family: Titillium Web">
  <a class="navbar-brand text-light" href="<?php echo $base; ?>/index">Movico</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-light" id="navbarNav">
    <ul class="navbar-nav text-light">
        <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo $base; ?>/pages/index">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?=URLROOT?>/public/Movichat/Movichat.php">MoviChat <span class="sr-only">(current)</span></a>
          </li>
        <?php endif; ?>
    </ul>
    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link disabled text-warning"><?=$_SESSION['username'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo $base; ?>/users/logout">Logout <span class="sr-only">(current)</span></a>
            </li>
    </ul>
  </div>
</nav>



<!-- Main Content -->
<div class="container text-white d-flex" style="font-family: Titillium Web; height: 80vh">
  <div class="col-md-9 align-self-center ">
   <!--  <h1 class="text-center" style="filter: drop-shadow(2px 2px 3px grey);" >
     Home Movichat
    </h1><br> -->
    <div class="card p-3" style="background-color: rgba(0,0,0,0.5);">
    	<div style="overflow-y: auto;height: 60vh;display: flex;flex-direction: column-reverse;" id="chatField">
	    	<p style="font-family: monospace;color:#eee" class="mt-3 mb-0"><span class="text-info">PisangBenyek~</span> Halo gaes apa kabar kaliannn. . . .</p>
	    	
	    	<p style="font-family: monospace;color: #eee" class="mt-3 mb-0"><span class="" style="color:#e83e8c">PisangBenyek~</span> Mesageeee</p>
    	</div>
    	
    	<code class="mt-3">Movichat:\<?= $_SESSION['username']?>>
    		<input type="text" id="code" name="code" class="bg-transparent text-info" style="border: none;width: 50%" placeholder="Input Your Channel Code"><input type="text" id="message" name="message" class="form-control bg-transparent text-warning p-0" style="border: none!important; font-family: monospace; " autofocus="" placeholder="Type your message . . ."></code>
    </div>
    <div>
    </div>
  </div>
</div>

<!-- Footer as Copyright Declaration -->
  <footer class="footer bg-black small text-center text-white-50 mb-4 fixed-bottom sticky-bottom">
    <div class="container">
      Copyright © Fikri Miftah 2021
    </div>
  </footer>