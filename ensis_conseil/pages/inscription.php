<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Aymen Khouchi">
    <meta name="generator" content="Hugo 0.84.0">
    <title>inscription</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="stylesheet" href="fichier.css">
    <link rel="stylesheet" href="../css/style.css">
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
  

     
         
    </style>


  </head>
  <body>
    <?php include('menu.php');?>
    <br>
    <h1>Inscrivez-vous</h1>
    <br> 
    
    <div class="container">
   
    
  <div class="inscform">
      
     <form class="" id="" name="" enctype="multipart/form-data" method="post" action="ajouteremployes.php">
      <div class="row">
      <div class="form-group col-12"> 
            <label >Photo</label>
            <input type="file" name="photo" class="form-control" id="photo" placeholder="photo">     
         </div>
      </div>  
      <div class="row">
      <div class="form-group col-6"> 
            <label>Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">     
         </div>
         <div class="form-group col-6"> 
             <label>Date de naissance</label>
            <input type="date" name="date" class="form-control" id="date" placeholder="Date de naissance">      
         </div>
      </div>
    <div class="row">
      <div class="form-group col-6">
              <label>Nom d'utilisateur</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom d'utilisateur">   
         </div>
     <div class="form-group col-6">
             <label>Téléphone</label>
            <input type="number" name="telephone" class="form-control" id="tel" placeholder="Téléphone">   
         </div>
         </div>
     <div class="row">
      <div class="form-group col-6">
              <label>Département</label>
            <input type="text" name="dep" class="form-control" id="dep" placeholder="Département">   
         </div>
     <div class="form-group col-6">
             <label>Poste</label>
            <input type="text" name="poste" class="form-control" id="poste" placeholder="Poste">   
         </div>
         </div>
     <div class="row">
      <div class="form-group col-6">
              <label>Mot de passe</label>
            <input type="password" name="mt" class="form-control" id="password" placeholder="Mot de passe">   
         </div>
     <div class="form-group col-6">
             <label>Confirmer le mot de passe</label>
            <input type="password" name="confirmer le mot de passe" class="form-control" id="confirmpassword" placeholder="Confirmer le mot de passe">   
         </div>
         </div>
     
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" id="inscrire" name="submit" value="S'inscrire">
    </div>    
    </div>    
     </form> 
  </div>      
  
  </div>

<script>
      document.querySelector('#inscrire').onclick = function(){
          var password = document.querySelector('#password').value,
          confirmpassword = document.querySelector('#confirmpassword').value,
          photo = document.querySelector('#photo').value,
          email = document.querySelector('#email').value,
          date = document.querySelector('#date').value,
          nom = document.querySelector('#nom').value,
          tel = document.querySelector('#tel').value,
          dep = document.querySelector('#dep').value,
          poste = document.querySelector('#poste').value;
         if(password=="" || photo=="" || email=="" || date=="" || nom=="" || tel=="" || dep=="" || poste==""){
             alert("vérifier que vous avez bien remplis tous les champs !");
             return false;
         }
         else if(password !=confirmpassword ){
             alert("le mot de passe ne correspond pas réessayez ! ");
             return false;
         }
         else return true;
      }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
