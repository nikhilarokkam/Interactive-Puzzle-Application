<!DOCTYPE html>
<html>
<head>
	<title>Puzzle 1 | Escape Room</title>
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
        <h2 style="font-size:3.4rem;position:relative;top:80px;right:250px;">Puzzle 1 : The Lock&nbsp;&nbsp;<img src="All_images\solution.png" height="40" width="40"> </h2>
        <h2 style="font-size:1.8rem;position:relative;top:180px;right:180px;color:#303E30;">You arrive at the door of the station where Flappy 🐧 is being held, but it's locked 🔐.Using the clues you have been provided, try different combinations of numbers to see if any of them work 🔍. As you try different combinations, pay attention to any feedback you receive 🕵️. The code lock may give you signals to indicate that you have entered the correct ✅ or incorrect combination ❌.</h2>
        </div>
        <div>
        <a href="lock.html"><img src="All_images\right-arrow.png" height="55px" width="55px" style="position:relative;left:600px;top:20px;"></a>
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