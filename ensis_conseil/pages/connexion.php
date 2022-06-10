<?php
session_start();
if(isset($_SESSION['erreurLogin']))
    $erreurLogin=$_SESSION['erreurLogin'];
else{
    $erreurLogin="";
}
session_destroy();
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Aymen Khouchi">
    <meta name="generator" content="Hugo 0.84.0">
    <title>connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="stylesheet" href="fichier.css">
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

     
          h1{
              text-align: center;
              margin-left: 100px;
          }
          .insc{
           text-align: right;
           margin-top: -30px;
          }
          .loginform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
     
      
    </style>
 <link href="navbar-top.css" rel="stylesheet">
    

  </head>
  <body>
    <?php include('menu.php');?>
    <br>
    <h1>Se connecter</h1>
    <br> 
      
    <div class="container">
    
    
  <div class="loginform">
      
     <form class="" id="" name="" method="post" action="seconnecter.php">
      <?php if(!empty($erreurLogin)) {?>     
      <div class="alert alert-danger">
         <?php echo $erreurLogin; ?>
         </div> 
        <?php } ?> 
      <div class="row">
      <div class="form-group col-12">
             <label>Login</label>
            <input type="email" name="email" class="form-control" placeholder="Email">   
         </div>
      </div>
    <div class="row">
      <div class="form-group col-12">
             <label>Mot de passe</label>
            <input type="password" name="motdepasse" class="form-control" placeholder="mot de passe">   
         </div>
      </div>
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" value="Se connecter">
    </div>    
    </div>    
    <a href="motDepasseoublie.php">Mot de passe oublié?</a>
    <div class="insc">
    <a href="inscription.php">s'inscrire</a> 
    </div>
     </form> 
  </div>      
  
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
