<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Locked Cabinet | Escape Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   </head>
   <body style="background-color:#DDFFBB;">
    <center>
        <br><br><br><br>
    <img src="http://romeojuliet.heniak.com/wp-content/uploads/2020/04/Prueba-51.jpg"><br>
    <div style="position:relative;right:40px;">
    <strong style="font-family:Tahoma;">CLUE 1</strong>
    <audio controls style="position:relative;top:20px;left:50px;">
  <source src="All_images\Clue-1-t5.m4a" type="audio/mpeg">
    </audio><br><br>
    <strong style="font-family:Tahoma;">CLUE 2</strong>
    <audio controls style="position:relative;top:20px;left:50px;">
  <source src="All_images\Clue-2-t5.m4a" type="audio/mpeg">
    </audio><br><br>
    <strong style="font-family:Tahoma;">CLUE 3</strong>
    <audio controls style="position:relative;top:20px;left:50px;">
  <source src="All_images\Clue-3-t5.m4a" type="audio/mpeg">
    </audio></div><br><br><br><br>
    <strong><center style="font-family:Tahoma;">Enter Code</center></strong><br><br><br>
	<label for="inputField" style="font-family:Tahoma;">Enter the fixed value :</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" id="inputField" name="inputField" required><br><br>
    <input type="submit" value="Check" onclick="checkInput()" required>
</center>
<script>
		function checkInput() {
			var inputField = document.getElementById("inputField");
			if (inputField.value != "250") {
				alert("Error: This is not the code, please enter the correct password!");
			}
            else{
                location.href="wall2.php";
                alert(location.href);
            }
		}
	</script>
</body>
</html>