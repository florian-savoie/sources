<?php 
$titre="Florian savoie";
require('inc/head.php');
?>
<style>
.button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
  }
  
  .button:hover {background-color: #3e8e41}
  
  .button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
  
  
  
  
  </style>
<div class="container-fluid blockprincipal  " style="height: 75vh;">

<div class="row col-12  lignecard">
 

<div class="col-md-12 col-lg-2 carte">
<div class="card mx-3" style="width:12rem ; background-color: rgba(255, 255, 255, 0.7);"><a href="html.php" >
        <img class="card-img-top" src="assets/img/htmlcss.jpg" alt="Card image" style="height:12rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong> HTML-CSS</strong></h4>
        </div>
    </a></div>
</div>    

<div class="col-md-12 col-lg-2 carte">
   <div class="card mx-3" style="width:12rem ; background-color: rgba(255, 255, 255, 0.7);">
         <a href="javascript.php" ><img class="card-img-top" src="assets/img/js.jpg" alt="Card image" style="height:12rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong> Java script</strong></h4>
        </a></div>
    </div>
    </div>

    <div class="col-md-12 col-lg-2 carte">
   <div class="card mx-3" style="width:12rem ; background-color: rgba(255, 255, 255, 0.7);">
         <a href="ajax.php" ><img class="card-img-top" src="assets/img/ajax.jpg" alt="Card image" style="height:12rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong>AJAX</strong></h4>
       </a> </div>
    </div>
    </div>

    <div class="col-md-12 col-lg-2 carte">
   <div class="card mx-3" style="width:12rem ; background-color: rgba(255, 255, 255, 0.7);">
         <a href="php.php" ><img class="card-img-top" src="assets/img/php.jpg" alt="Card image" style="height:12rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong>PHP</strong></h4>
       </a> </div>
    </div>
    </div>

    <div class="col-md-12 col-lg-2 carte">
   <div class="card mx-3" style="width:12rem ; background-color: rgba(255, 255, 255, 0.7);">
         <a href="mysql.php" ><img class="card-img-top" src="assets/img/mysql.jpg" alt="Card image" style="height:12rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong>MYSQL</strong></h4>
       </a> </div>
    </div>
    </div>

    <div class="col-md-12 col-lg-2 carte">
   <div class="card mx-3" style="width:12rem ; background-color: rgba(255, 255, 255, 0.7);">
        <a href="projet.php" > <img class="card-img-top" src="assets/img/projet.jpg" alt="Card image" style="height:12rem; opacity: 0.7;">
        <div class="card-body">
          <h4 class="card-title text-center" style="opacity:1;color: red;"><strong>PROJET</strong></h4>
        </a></div>
    </div>
    </div>

</div>
</div>
<div class="container">
<div class="row col-12 d-flex justify-content-center">
<div class="col-sm-12 col-lg-3 d-flex justify-content-center">
<button class="button">Pratique</button>
</div>
<div class="col-sm-12 col-lg-3 d-flex justify-content-center">
<button class="button">Cour</button>
</div>
</div>
</div>


<?php require('inc/footer.php');
?>