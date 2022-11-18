<?php
	// error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Vurma cədvəli</title>
  </head>
  <body>
    <h1 class="text-center text-capitalize font-weight-bold text-monospace" style="background: -webkit-linear-gradient(yellow, red);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">Vurma cədvəli</h1><br>

    <form class="form-inline" method="get">
    	<div class="container">
    		<div class="row">

    			<div class="col">
    				<div class="form-group">
    					<label for="ifrom">Hansı ədədin vurma cədvəlindən başlasın?&nbsp;</label>
    					<input type="number" class="form-control" name="ifrom" id="ifrom" style="width:100%;" placeholder="">
    				</div>
    			</div>

    			<div class="col">
    				<div class="form-group">
    					<label for="ito">Hansı ədədin vurma cədvəlinə qədər davam etsin?&nbsp;</label>
    					<input type="number" class="form-control" name="ito" id="ito" style="width:100%;" placeholder="">
    				</div>
    			</div>

    			<div class="col">
    				<div class="form-group">
    					<label for="xfrom">Hər cədvəldə hansı ədəddən vurmağa başlasın?&nbsp;</label>
    					<input type="number" class="form-control" name="xfrom" id="xfrom" style="width:100%;" placeholder="">
    				</div>
    			</div>

    			<div class="col">
    				<div class="form-group">
    					<label for="xto">Hər cədvəldə hansı ədədə qədər vursun?&nbsp;</label>
    					<input type="number" class="form-control" name="xto" id="xto" style="width:100%;" placeholder="">
    				</div>
    			</div>
    		</div>
    			<button type="submit" class="btn btn-primary btn-block mt-2">Vur</button>
    </form>


<div style="margin-top:10px; margin-bottom: 20px;">
<?php 

	for ($i = $_GET['ifrom']; $i <= $_GET['ito']; $i++) { 
		for ($x = $_GET['xfrom']; $x <= $_GET['xto']; $x++) { 
			if (isset($_GET['ifrom']) && isset($_GET['ito']) && isset($_GET['xfrom']) && isset($_GET['xto'])) {
				echo "<b>$i &#215; $x = ".$i*$x."</b><br>";
			}
		}
		echo "<br>";
	}

?>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>