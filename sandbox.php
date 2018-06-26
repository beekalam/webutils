<?php
require_once __DIR__."/utils/utils.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>
  <body>
    <h1>Hello, world!</h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
				  <h4 id="fat">@fat</h4>
				  <p>...</p>
				  <h4 id="mdo">@mdo</h4>
				  <p>...</p>
				  <h4 id="one">one</h4>
				  <p>...</p>
				  <h4 id="two">two</h4>
				  <p>...</p>
				  <h4 id="three">three</h4>
				  <p>...</p>
				</div>
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
    	
    	$("document").ready(function()
    	{
    		$('[data-spy="scroll"]').each(function () {
			  // var $spy = $(this).scrollspy('refresh')
			  $(this).css('background','green');
			})
    	});
    </script>
  </body>
</html>