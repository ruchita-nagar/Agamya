<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
</head>
<body>
   <div class="banner">
     <header>
        <div class="row">
          <div class="col-md-4">
            <a href="#" onclick="window.open('https://www.nitt.edu/')"><img src="images/newnittfulllogo2018.png" class="logo1"></a>
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-2" style="color: #fff;font-weight: bold;"><a href="#" onclick="window.open('http://osoc.nitt.edu/')"><img src="images/imageedit_2_8107947763.png" class="logo"></a>
          <h5>OSOC</h5>
            <p class="logotext">Open Source Open Community</p></div>
        </div>
     </header>
     <div class="nav1">
         <nav class="navbar navbar-expand-lg bg-light navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-lebel="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
  <!-- Links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav m-auto">
                 <li class="nav-item"><a class="nav-link" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
              </ul>
          </div>
        </nav>
     </div>
     <div class="container" align="center">
       <form action="upload.php">
           <h4>Select File to Upload</h4><br>
           <input type="file" name="myFile"><br><br>
           <button type="button" class="btn btncol">Submit</button>
       </form>
     </div>
</body>
</html>


