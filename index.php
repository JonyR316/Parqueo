<?php include('app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     
    <title>Document</title>
</head>
<body style="background-image: url('public/imagenes/piso.jpg');
            background-repeat: no-repeat;
            z-index: -3;
            background-size: 150vw 150vh;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
    PARQUEO
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          PROMOCIONES
        </a>
        <div class="dropdown-menu bg-dark">
    <a class="dropdown-item" href="#" style="color: white; background-color: transparent;" 
       onmouseover="this.style.color='black'; this.style.backgroundColor='white';" 
       onmouseout="this.style.color='white'; this.style.backgroundColor='transparent';">
      DIARIO
    </a>
    <a class="dropdown-item" href="#" style="color: white; background-color: transparent;" 
       onmouseover="this.style.color='black'; this.style.backgroundColor='white';" 
       onmouseout="this.style.color='white'; this.style.backgroundColor='transparent';">
      SEMANAL
    </a>
    <a class="dropdown-item" href="#" style="color: white; background-color: transparent;" 
       onmouseover="this.style.color='black'; this.style.backgroundColor='white';" 
       onmouseout="this.style.color='white'; this.style.backgroundColor='transparent';">
      MENSUAL
    </a>
    <a class="dropdown-item" href="#" style="color: white; background-color: transparent;" 
       onmouseover="this.style.color='black'; this.style.backgroundColor='white';" 
       onmouseout="this.style.color='white'; this.style.backgroundColor='transparent';">
      ANUAL
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#" style="color: white; background-color: transparent;" 
       onmouseover="this.style.color='black'; this.style.backgroundColor='white';" 
       onmouseout="this.style.color='white'; this.style.backgroundColor='transparent';">
      FICHAS
    </a>
  </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">NOSOTROS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">CONTACTANOS</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
  <table>
    <tr>
      <td width="25px">
        <p>
          <center>
          <h4><b>1</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>2</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>3</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>4</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>5</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>6</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>7</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>8</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>9</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
      <td width="100px">
        <p>
          <center>
          <h4><b>10</b></h4>
          <img src="public/imagenes/auto.png" width="75px" alt="">
          </center>
        </p>
      </td>
    </tr>
    <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>1</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>2</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>3</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>4</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>5</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>6</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>7</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  <tr>
    <td width="100px" style="display: flex; align-items: center; margin-bottom: 10px;">
      <h4 style="margin: 0; font-size: 18px;"><b>8</b></h4>
      <img src="public/imagenes/auto.png" width="75px" alt="" style="transform: rotate(-90deg); margin-left: 10px;">
    </td>
  </tr>
  
  
  
  
</table>




</div>

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="public/js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="public/js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
</body>
</html>