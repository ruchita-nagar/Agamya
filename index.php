<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script  src="js/index.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js'></script>
</head>
<body>
   <div class="banner">
     <header>
        <div class="row">
          <div class="col-md-2">
            <a href="#" onclick="window.open('https://www.nitt.edu/')"><img src="images/newnittfulllogo2018.png" class="logo1"></a>
          </div>
          <div class="col-md-8"></div>
          <div class="col-md-2" style="color: #fff;font-weight: bold;"><a href="#" onclick="window.open('http://osoc.nitt.edu/')"><img src="images/imageedit_2_8107947763.png" class="logo"></a>
            <h5>OSOC</h5>
            <p class="logotext">Open Source Open Community</p>
          </div>
        </div>
     </header>
     <div class="home" id="home">
       <div id="wrapper">
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
          <div class="text">AGAMYA</div>
        </div>
        <a href="#login" class="fancy-btn">To Submit Project click shere..</a>
     </div>
     <div class="login" id="login">
       <form>
         <h4> Login Information </h4>
         <input class="name" type="text" placeholder="Enter Username"/>
         <input class="pw" type="password" placeholder="Enter Password"/>
         <li><a href="#">Forgot your password?</a></li>
         <input class="button" type="submit" value="Log in" onclick="location.href = 'upload.php';"/>
       </form>
  
     </div>
  
     
<script type="text/javascript">
  // dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
   // of the mouse, set with a mousemove event listener below
var dots = [],
    mouse = {
      x: 0,
      y: 0
    };

// The Dot object used to scaffold the dots
var Dot = function() {
  this.x = 0;
  this.y = 0;
  this.node = (function(){
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  }());
};
// The Dot.prototype.draw() method sets the position of 
  // the object's <div> node
Dot.prototype.draw = function() {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 12; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
    // draw() is called.
  var x = mouse.x,
      y = mouse.y;
  
  // This loop is where all the 90s magic happens
  dots.forEach(function(dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];
    
    dot.x = x;
    dot.y = y;
    dot.draw();
    x += (nextDot.x - dot.x) * .6;
    y += (nextDot.y - dot.y) * .6;

  });
}

addEventListener("mousemove", function(event) {
  //event.preventDefault();
  mouse.x = event.pageX;
  mouse.y = event.pageY;
});

// animate() calls draw() then recursively calls itself
  // everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();
</script>



</body>
</html>
