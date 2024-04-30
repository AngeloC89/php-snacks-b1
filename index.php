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

//function of first snack for print the result...
  function getMatches($matches) {
    foreach($matches as $match) {
        echo $match["squadraCasa"] . " - " . $match["squadraOspite"] . " | " . $match["puntiCasa"] . " - " . $match["puntiOspite"] . "<br>";
      }
  }

//snack 3 \********************************************************
 
$posts = [

    '10/01/2024' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'ciao'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'come stai?'
        ],
    ],
    '10/02/2024' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'ci 6?'
        ]
    ],
    '15/05/2024' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'buondì'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'tutto ok?'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'ok...'
        ]
    ],
];

//var_dump($posts);


function getPosts($posts) {
    foreach($posts as $date => $post) {
        echo $date . "<br>";
        foreach($post as $posts) {
            echo $posts["title"] . " : ". "<br>";
            echo $posts["author"] . " - " ;
            echo $posts["text"] . "<br><br>";
        }
    }
};




//snack 4 \********************************************************
function getRand($min, $max, $range) {

    $arrayN = [];

    while(count($arrayN) < $range) {
        $num = rand($min, $max);
        if(!in_array($num, $arrayN)) {
            $arrayN[] = $num;
        }
    }
    return $arrayN;
    
}
    
function printArray(){
    $arrayNumber = getRand(1, 100, 15);
    foreach($arrayNumber as $num) {
        echo $num ."<br>";
    }

}
 

//snack 5 \********************************************************
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
        <h3 class="text-uppercase">Snack 2</h3>Snack 1</h3>
        <div> <?php getMatches($matches) ?> </div>
        <br>

        <h3 class="text-uppercase">Snack 3</h3>
        <div> <?php getPosts($posts)  ?></div>
        <br>

        <h3 class="text-uppercase">Snack 4</h3>
        <div> <?php printArray()  ?> </div>
       
       
        <br>

    </div>


    
</body>
</html>