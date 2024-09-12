 <?php

 if(isset($_GET['length']) && $_GET['length'] != ''){

    if(!is_numeric($_GET['length'])){
        $message = "Devi inserire valore numerico";
    }

    if($_GET['length'] < 6){
          $message = "Devi inserire valore numerico maggiore o uguale a 6";

    }
    $baseString = 'abcdefghilmnopqrstuwxyz'.strtoupper('abcdefghilmnopqrstuwxyz').'1234567890!"£$%&/()=?^_*[]@+';

    $password = '';
    while(strlen($password) < $_GET['length']){
        $randomIndex = rand(0, strlen($baseString) - 1);

        $password.=$baseString[$randomIndex];
    }
    var_dump($password);

 }



  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
     <meta name="description" content="PHP Hotel Listing Example">
    <title>PHP Strong Password Generator </title>
</head>
<body>
   
 
<div class="container">
    <div class="row gy-3">
        <div class="col-12">
            <h2>ESERCIZIO PASSWORD </h2>
            <div class="form-container">
                <form action="./index.php" method="get">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Inserisci lunghezza password</label>
                            <input type="number" min="6" name="length" id="length" placeholder="Lunghezza Password" class="form-control form-control-sm ">
                        </div>
                        <div class="col-12 col-">
                            <button type="submit" class="btn btn-sm btn-primary">Genera Psw</button>
                        </div>
                    </div>
                </form>
                <?php if(isset($message)) { ?>
                    <h2 class="text-red"> <?php echo $message; ?></h2>
               <?php } ?>
               <?php if(isset($password)) { ?>
               <h2 class="text-success"> <?php echo $password; ?></h2>
<?php } ?>
            </div>
         </div>
    </div>
    </div>

</body>
</html>
