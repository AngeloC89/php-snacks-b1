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
function getMatches($matches)
{
    foreach ($matches as $match) {
        echo $match["squadraCasa"] . " - " . $match["squadraOspite"] . " | " . $match["puntiCasa"] . " - " . $match["puntiOspite"] . "<br>";
    }
};

//snack 2 \********************************************************
function getAccess()
{
    if (!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["age"])) {
        if (strlen($_POST["name"]) > 3 && strpos($_POST["mail"], "@") && strpos($_POST["mail"], ".") && is_numeric($_POST["age"])) {
            echo '<section style="border:2px solid green; height: 50px; background-color:green; text-align:center">' . "Accesso riuscito" . '</section>';
        } else {
            echo '<section style="border:2px solid red; height: 50px; background-color:red; text-align:center">' . "Accesso negato" . '</section>';
        }
    }
};


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
function getPosts($posts)
{
    foreach ($posts as $date => $post) {
        echo $date . "<br>";
        foreach ($post as $posts) {
            echo $posts["title"] . " : " . "<br>";
            echo $posts["author"] . " - ";
            echo $posts["text"] . "<br><br>";
        }
    }
};




//snack 4 \********************************************************
function getRand($min, $max, $range)
{

    $arrayN = [];

    while (count($arrayN) < $range) {
        $num = rand($min, $max);
        if (!in_array($num, $arrayN)) {
            $arrayN[] = $num;
        }
    }
    return $arrayN;

};

function printArray()
{
    $arrayNumber = getRand(1, 100, 15);
    foreach ($arrayNumber as $num) {
        echo $num . "<br>";
    }

};


//snack 5 \********************************************************
$paragraph = '1 lorem ipsum dolor sit amet consectetur adipisicing elit. 2 lorem ipsum dolor sit amet consectetur adipisicing elit. 3 lorem ipsum dolor sit amet consectetur adipisicing elit. 4 lorem ipsum dolor sit amet consectetur adipisicing elit. 5 lorem ipsum dolor sit amet consectetur adipisicing elit.';
$singleParagraph = explode('.', $paragraph);
function printP($singleParagraph)
{
    foreach ($singleParagraph as $p) {
        echo $p . '<br>';
    }
};

//snack 6 \********************************************************
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

function printDb($db, $ky)
{
    foreach ($db as $key => $post) {
        if ($key === $ky) {
            echo '<h4>' . $key . '</h4>' . "<br>";
            foreach ($post as $posts) {
                echo $posts["name"] . " ";
                echo $posts["lastname"] . "<br><br>";
                ;

            }
            ;
        }
        ;
    }
    ;
};

//snack 7 \********************************************************

$class_101 = [
    [
        "name" => "Angelo",
        "surname" => "Rossi",
        "grades" => [8, 7, 9, 6, 10],
    ],
    [
        "name" => "Maria",
        "surname" => "Cozza",
        "grades" => [9, 8, 8, 7, 9],
    ],
    [
        "name" => "Giovanni",
        "surname" => "Zilioto",
        "grades" => [9, 6, 2, 4, 7],
    ],
    [
        "name" => "Peppino",
        "surname" => "Caruso",
        "grades" => [7, 4, 5, 8, 2],
    ],
    [
        "name" => "Lucio",
        "surname" => "Gambino",
        "grades" => [4, 7, 2, 3, 1],
    ],
];

function getCard($class_101) {
    foreach ($class_101 as $student) {
        $vote = array_sum($student['grades']) / count($student['grades']);
        echo "<ul><li class='student'> " .$student['name'] . " " . $student['surname'] . ". <br>". "Voto: " . $vote . "</li></ul>" . "<br>";
    }
};


    ?>

<!-- ******************************************** HTML *********************************************** -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-Snacks</title>

</head>


<body>
    <h1 class="text-uppercase text-center ">php snacks</h1>
    <!-- snack 1 \******************************************************** -->
    <div class="container text-center my-4 ">
        <h3 class="text-uppercase">Snack 1</h3>
        <div> <?php getMatches($matches) ?> </div>
        <br>
        <!-- snack 2 \******************************************************** -->
        <h3 class="text-uppercase">Snack 2</h3>
        <div class="my-4 w-25 mx-auto">
            <section if="empty($_POST['name'])">
                <form action="index.php" method="POST">
                    <label for="name">Your name *</label>
                    <br>
                    <input class="my-3" type="text" name="name">
                    <br>
                    <label for="mail">Your e-mail *</label>
                    <br>
                    <input class="my-3" type="mail" name="mail">
                    <br>
                    <label for="age">Your age *</label>
                    <br>
                    <input class="my-3" type="text" name="age">
                    <br>
                    <input class="my-3" type="submit" value="Accedi">
                </form>

            </section>

            <section>
                <div>
                    <h2><?php echo getAccess(); ?></h2>
                </div>
            </section>

        </div>

        <!-- snack 3 \******************************************************** -->
        <h3 class="text-uppercase">Snack 3</h3>
        <div> <?php getPosts($posts) ?></div>
        <br>


        <!-- snack 4 \******************************************************** -->
        <h3 class="text-uppercase">Snack 4</h3>
        <div> <?php printArray() ?> </div>
        <br>


        <!-- snack 5 \******************************************************** -->
        <h3 class="text-uppercase">Snack 5</h3>
        <div> <?php printP($singleParagraph) ?></div>
        <br>


        <!-- snack 6 \******************************************************** -->
        <h3 class="text-uppercase">Snack 6</h3>
        <div class="snack-six-grey"> <?php printDb($db, 'teachers') ?></div>
        <br>
        <div class="snack-six-green"> <?php printDb($db, 'pm') ?></div>
        <br>


        <!-- snack 7 \******************************************************** -->
        <h3 class="text-uppercase">Snack 7</h3>
        <br>
        <div> <?php getCard($class_101) ?></div>
    </div>



</body>

</html>