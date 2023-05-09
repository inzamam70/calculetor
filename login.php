<?php
  $num1 = "";
  $num2 = "";
  $result = "";
  $error = ""; 

  if(isset($_GET['operation'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];
    
    
    if(is_numeric($num1) && is_numeric($num2)){
    switch($operation){
      case 'add' :  $result = $num1 + $num2 ;
      break;
      case 'sub' : $result = $num1 - $num2;
      break;
      case 'pro' : $result = $num1 * $num2;
      break;
      case 'div' : $result = $num1 / $num2;
    }
  }
  else {
    $error = "Enter Numeber First";
  }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculetor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" >
    <link rel="stylesheet" href="./log.css">
</head>
<body>


      <section>
        <div class="login-box">
          <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <h1>calculetor</h1>
            <h3><?= $error?></h3>

            <div class="input-box">
              <input type="number"  placeholder="Enter a first num.." name="num1" id="num1" value="<?= $num1 ?>"/>
            </div>
            <div class="input-box">
              <input type="number"  placeholder="Enter a second number.." name="num2" id="num2" value="<?= $num2 ?>"/>
            </div>
            <div class="input-box">
              <input type="number"  placeholder="Result"  id="result" value="<?= $result ?>" disabled/>
            </div>
            <div >
              <input type="submit" value="add" name="operation">
              <input type="submit" value="sub" name="operation">
              <input type="submit" value="pro" name="operation">
              <input type="submit" value="div" name="operation">
            </div>
         
         
          
          </form>
        

        </div>
        
    
      </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" ></script>
    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>


</body>
</html>