<!DOCTYPE html>

<html lang = "en" dir = "ltr">

	<head>

		<title>Form manipulation | Add and Remove</title>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

		<style type="text/css">


		</style>

	</head>

	<body class = "">

		<div class ="container my-3 p-3">

			<div class = "container text-center text-primary">
				<h1 class = "text-primary"> Formulaire d'enregistrement </h1>
			</div>
<?php

if(isset($_GET['l']))
{

	echo "<div class=\"alert alert-success\">
  <strong>Success!</strong>  personnes are inserted successfilly.
</div>";
}

?>
			<div class="container">
				<form id = "form" action = "insert.php" method="GET">
				  <div class="row my-3" id = "div0">
				    <div class="col">
				      <input type="text" name = "nom[]" class="form-control" placeholder="First name">
				    </div>
				    <div class="col">
				      <input type="text" name = "prenom[]" class="form-control" placeholder="Last name">
				    </div>
				    <div class="col-3">
				      <input type="button" class=" btn btn-danger form-control" value="supprimer" onclick="delete_form(this.parentNode.parentNode.id)">
				    </div>
				  </div>
				  <div class = "row" style="padding-left: 0">
				  	<div class= "col-3">
				  		<input id="add"type="button" class=" btn btn-success form-control" value="ajouter" onclick="add_form(this.parentNode.parentNode.previousElementSibling.id)">
				  	</div>
				  </div>
				  <div class="row my-3" id = "div0">
				    <div class="col">
				      <input type="submit" name = "submit" class="form-control btn btn-primary" placeholder="First name">
				    </div>
				    <div class="col">
				      <input type="reset" name = "reset" class="form-control btn btn-warning" placeholder="Last name">
				    </div>

				  </div>

				</form>
			</div>
		</div>
	</body>


	<script type="text/javascript">
		 var div = 0;
		function delete_form(e)
		{
			div --;
			var u = document.getElementById(e);
			console.log(u.previousElementSibling);
			if( u.previousElementSibling == null && u.nextElementSibling.nextElementSibling.nextElementSibling == null) {
				alert("you are obliged to add one");
			}
			else
			{
			var sup_elem = document.getElementById(e);

			sup_elem.remove();

			console.log(div);
			}
		}

		function add_form(e)
		{
			
			var d = document.getElementById(e);

			var cln = d.cloneNode(true);
			while(div <= 0) div++;
			while(document.getElementById("div" + div) != null) div++;
			cln.id = "div" + div;



			var form = document.getElementById("form");

			form.insertBefore(cln, document.getElementById("add").parentNode.parentNode); 
			console.log(div);
			div++;
		}

	</script>





</html>