<!DOCTYPE html>
<html>
<head>
	<title>Puzzle 2 | Escape Room</title>
	<link rel="stylesheet" type="text/css" href="scenario.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="All_images/wave.png">
	<div class="container">
		<div class="img">
		</div>
        <div>
        <h2 style="font-size:3.0rem;position:relative;top:80px;right:250px;">Puzzle 2 : Code Breaker&nbsp;&nbsp;<img src="All_images\solution.png" height="40" width="40"> </h2>
        <h2 style="font-size:1.5rem;position:relative;top:180px;right:180px;color:#303E30;">Well done!<br><br> You entered the station but as soon as you go inside you notice a computer 🖥️ on the desk, and as you approach it, you find a message flashing on the screen ✉️. "To exit the room, you must solve the puzzle 🧩. The code is hidden in the room 🛋️." You begin to explore the room and find a notebook 📓 with some strange letters. You have to guess all the letters of some randomly written word . You can also make use of the hints provided to guess the word correctly 🥳.</h2>
        </div>
        <div>
        <a href="codebreaker.php"><img src="All_images\right-arrow.png" height="55px" width="55px" style="position:relative;left:600px;top:20px;"></a>
        </div>
    <script type="text/javascript">
        const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
    </script>
</body>
</html>