 <?php

 if(isset($_GET['length']) && is_numeric($_GET['length']) && $_GET['length'] != ''){
    var_dump(is_numeric($_GET['length']));
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
            <div class="form-container">
                <form action="./index.php" method="get">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Inserisci lunghezza password</label>
                            <input type="number" min="6" name="lenght" id="lenght" placeholder="Lunghezza Password" class="form-control form-control-sm ">
                        </div>
                        <div class="col-12 col-">
                            <button type="submit" class="btn btn-sm btn-primary">Genera Psw</button>
                        </div>
                    </div>
            </div>
         </div>
    </div>
    </div>

</body>
</html>
