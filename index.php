<?php

$matches = [
    [
      "squadraCasa" => "Milano",
      "squadraOspite" => "Treviso",
      "puntiCasa" => 85,
      "puntiOspite" => 72
    ],
    [
      "squadraCasa" => "Bologna",
      "squadraOspite" => "Padova",
      "puntiCasa" => 78,
      "puntiOspite" => 83
    ],
    [
      "squadraCasa" => "Napoli",
      "squadraOspite" => "Brindisi",
      "puntiCasa" => 63,
      "puntiOspite" => 75
    ],
    [
      "squadraCasa" => "Salerno",
      "squadraOspite" => "Sassari",
      "puntiCasa" => 82,
      "puntiOspite" => 90
    ],
    [
      "squadraCasa" => "Trento",
      "squadraOspite" => "Roma",
      "puntiCasa" => 66,
      "puntiOspite" => 88
    ],
    [
      "squadraCasa" => "Ternana",
      "squadraOspite" => "pisa",
      "puntiCasa" => 59,
      "puntiOspite" => 76
    ]
  ];

  function getMatches($matches) {
    foreach($matches as $match) {
        echo $match["squadraCasa"] . " - " . $match["squadraOspite"] . " | " . $match["puntiCasa"] . " - " . $match["puntiOspite"] . "<br>";
      }
  }

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="module"></script>
    <title>PHP-Snacks</title>

</head>


<body>
    <h1 class="text-uppercase text-center ">php snacks</h1>

    <div class="container text-center my-4 ">
        <?php  getMatches($matches) ?>
        <br>
        
    </div>


    
</body>
</html>