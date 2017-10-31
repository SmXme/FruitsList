<!DOCTYPE html>
<html>
	<head>
		<title>Exo Array</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body class="text-center">
		<div class="container">
			<input type="button" name="inputDebug" id="inputDebug" value="Debug" onclick="debug();">
			<input type="text" name="inputFruits" id="inputFruits">
			<input type="button" value = "Ajouter Fruit" name="inputButton" onclick="addFruits();">
		<ul id="fruitsList"></ul>
		<script>


			var fruits = []

			function addFruits() {
				document.getElementById('fruitsList').innerHTML = "";
				fruits.push(document.getElementById('inputFruits').value);
				for (i = 0; i < fruits.length ; i++){
					document.getElementById('fruitsList').innerHTML += '<li id="'+fruits[i]+'">'+fruits[i]+'<input type="button" value = "Supprimer" name="inputDelete" onclick ="deleteThis('+ i +');" id="inputDelete"></li>';
					}
				}

				function deleteThis(nb){
					fruits.splice(nb,1);
					document.getElementById('fruitsList').innerHTML = "";
						for (j = 0; j < fruits.length ; j++){
						document.getElementById('fruitsList').innerHTML += '<li id="'+fruits[j]+'">'+fruits[j]+'<input type="button" value = "Supprimer" name="inputDelete" onclick ="deleteThis('+ j +');" id="inputDelete"></li>';;
						}
					}

					function debug(){
						console.log(fruits);
					}

				</script>
			</div>
			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		</body>
	</html>