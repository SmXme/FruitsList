var fruits = []
			function addFruits() {
				fruits.push(document.getElementById('inputFruits').value);
				showList();
			}

				function deleteThis(nb){
				fruits.splice(nb,1);
				showList();
			}

			function pressEnter(){
				if (event.keyCode==13){
					addFruits();
					document.getElementById('inputFruits').value="";
					document.getElementById('inputFruits').focus();

				}
			}
			function showList(){
				document.getElementById('fruitsList').innerHTML = "";
				for (j = 0; j < fruits.length ; j++){
				document.getElementById('fruitsList').innerHTML += '<li id="'+fruits[j]+'">'+fruits[j]+'<input type="button" value = "Supprimer" name="inputDelete" onclick ="deleteThis('+ j +');" id="inputDelete"></li>';
				}
			}

			function debug(){
				console.log(fruits);
			}
		
		document.getElementById('inputButton').addEventListener('click',addFruits);
		document.getElementById('inputFruits').addEventListener('keypress',pressEnter);
		document.getElementById('inputDebug').addEventListener('click',debug);