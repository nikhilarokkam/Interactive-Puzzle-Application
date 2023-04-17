<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<title>Escape Room</title>
<style>
    body {
  margin: 0 auto;
  height: 100vh;
  perspective: 600px;
  transition: ease all 2s;
  overflow: hidden;
  background:black;
}
div {
  position: absolute;
}
.assembly {          
  top: 50%;
  left: 50%;
  width:400px;
  height:400px;
  margin: -200px 0 0 -200px;

  transform-style: preserve-3d;
  transform-origin:center center 200px;
  transition:ease all 2s;
}
.plane {
  margin: 0;
  width: 400px;
  height: 400px;
  background: #ee8c25; 
}
.plane1 {
  transform: rotateY(90deg);
  background: #d14730;
/*   display:none; */
  transform-origin:right center;          
}
.plane3 {
  transform: rotateY(-90deg);
  background: #345634;

  transform-origin:left center;          
}
.plane2 {
  transform: rotateY(180deg) translateZ(-400px);
  background: #ccc;
  /*display:none;*/ 

   backface-visibility: hidden;
  transform-origin:center center ;          
}
.rotate{
  transform:rotateY(90deg);
  transition:ease all 2s;
}
.untouchable{
  pointer-events:none;
}
.turnleft{
  margin: 0;
  width: 400px;
  height: 400px;
  background: blue;
  transform: rotateY(-90deg);
  transform-origin:left center;  
  opacity:0;
  pointer-events:all;
}
.turnright{
  transform: rotateY(90deg);
  background: #d14730;
  transform-origin:right center; 
  margin: 0;
  width: 400px;
  height: 400px;
  background: blue;
  opacity:0;
  pointer-events:all;
 }
.fakeassembly{      
  top: 50%;
  left: 50%;
  width:400px;
  height:400px;
  margin: -200px 0 0 -200px;
  transform-style: preserve-3d;
  transform-origin:center center 200px;
  transition:ease all 2s;
  pointer-events:none;
}
  
/* FURNITURE */
  .door{
    height:75%;
    width:30%;
    bottom:0;
    left:35%;
    background:#452209;
  }
  .doorknob{
    width:35px;
    height:35px;
    background:white;
    border-radius:35px;
    right:5px;
    top:45%;
    cursor:pointer;
  }
  .key{
    width:30px;
    height:30px;
    bottom:0;
    left:30%;
    background: url(http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/key-icon.png);
    background-size:contain;
    cursor:pointer;
  }
</style>
</head>  
<body>
    <div class='assembly'>
      <div class='plane plane0'>
        <div class='door'>
          <div class='doorknob'></div>
        </div>
      </div>
      <div class='plane plane1'></div>
      <div class='plane plane2'><div class='key'></div></div>
      <div class='plane plane3'></div>
    </div>
    <!-- An invisible overlay to catch hover events -->
    <div class='fakeassembly'>
      <div class='turnleft'></div>
      <div class='turnright'></div>
    </div>
    <script>
        $(()=>{
  
  let rotation = 0;
  let faded = 2;
  let hasKey = false;
  
  $('.turnright').on('mouseover',function(){
    rotation += 90;
    $('.assembly').css('transform','rotateY('+rotation+'deg)');
    $('.plane'+faded).delay(800).fadeIn();
    faded += 1;
    faded = faded % 4;
    $('.plane'+faded).fadeOut();   
  });
  
  $('.turnleft').on('mouseover',function(){
    rotation -= 90;
    $('.assembly').css('transform','rotateY('+rotation+'deg)');
    $('.plane'+faded).delay(800).fadeIn();
    faded -= 1;
    if(faded == -1){faded = 3; console.log('if');}
    $('.plane'+faded).fadeOut();
  });
  
  $('.doorknob').on('click',function(){
    if(hasKey === true){
      alert('Congratulations!Flappy Has Escaped 🥳');
      location.href="escaped_pen.php";
      alert(locatiom.href);
    }else{
    alert('The door is locked.');
  }
  });
  $('.key').on('click',function(){
    $(this).fadeOut();
    hasKey = true;
  });

});
    </script>
  </body>
</html>