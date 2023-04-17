<!DOCTYPE html>
<html>
<head>
	<title>Scenario | Escape Room</title>
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
        <h2 style="font-size:2.4rem;position:relative;top:150px;right:500px;">SCENARIO</h2>
        <img src="https://img.freepik.com/free-vector/scene-with-penguins-snow_1308-38296.jpg?size=626&ext=jpg&ga=GA1.1.624850403.1678896008&semt=ais" style="position:relative;right:200px;top:100px;" height="220" width="300">
        <h3 style="position:relative;top:150px;right:130px;">You have been selected to assist Flappy the Penguin 🐧 in his mission to explore the icy terrain of Antarctica 🧊. However, during your expedition, a sudden snowstorm hits 🥶, and you find flappy trapped inside a research station.
Your mission is to help Flappy find a way out of the station before the snowstorm becomes too severe to continue.</h3>
        </div>
        <form action="puzzle1.php">
            <input type="submit" class="btn" value="Enter the Game" style="position:relative;left:1100px;top:20px;">
</form>
        
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