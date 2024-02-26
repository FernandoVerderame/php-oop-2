<?php

require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Accessory.php';


$cane = 'Cane';
$gatto = 'Gatto';
$uccelli = 'Uccelli';
$pesci = 'Pesci';

// Products category


$dog = new Category($cane);
$cat = new Category($gatto);
$birds = new Category($uccelli);
$fishes = new Category($pesci);

// Products
$croccantini_1 = new Food($dog, 'Croccantini per cane mini-adulto', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 29.99, 'fa-solid fa-dog', 'Royal Canin', 'Manzo e riso');
$croccantini_2 = new Food($dog, 'Croccantini per cane medio-adulto', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 39.99, 'fa-solid fa-dog', 'Almo Nature', 'Pollo e riso');
$scatoletta = new Food($cat, 'Scatoletta per gatto adulto', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 19.99, 'fa-solid fa-cat', 'Almo Nature', 'Vitello');
$mangime = new Food($fishes, 'Mangime per pesci', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 15.99, 'fa-solid fa-fish', 'Tetra', 'Mini fiocchi');
$gabbia = new Accessory($birds, 'Voliera per uccelli', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 39.99, 'fa-solid fa-dove', 'Wilma', 'Gabbia per uccelli');
$filtri = new Accessory($fishes, 'Filtro per pesci', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 9.99, 'fa-solid fa-fish', 'Tetra', 'Cartuccia filtrante');
$giocattolo_1 = new Toy($dog, 'Giocattolo per cani', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 9.99, 'fa-solid fa-dog', 'KONG', 'Gioco robusto e ultraresistente per cani');
$giocattolo_2 = new Toy($cat, 'Giocattolo per gatti', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 5.99, 'fa-solid fa-cat', 'Trixie', 'Giocattolo stimolante per gatti');

// Products array
$products = [$croccantini_1, $croccantini_2, $scatoletta, $mangime, $gabbia, $filtri, $giocattolo_1, $giocattolo_2];

// var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop</title>
    
    <!-- Bootstrap 5 --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous'/>
    
    <!-- Stylesheet --> 
    <link rel='stylesheet' href='css/style.css'>
    
</head>
<body>
    
</body>
</html>