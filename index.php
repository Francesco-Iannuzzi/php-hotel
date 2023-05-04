<?php
/*

Descrizione:

Partiamo da questo array di hotel:
https://www.codepile.net/pile/OEWY7Q1G

Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate per steps:
- Prima stampate in pagina i dati, senza preoccuparvi dello stile.
- Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus: 1
- Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
- Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

*/

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

echo '<pre>';

// var_dump($hotels);

foreach ($hotels as $hotel) {
    // var_dump($hotel['name']);
    // var_dump($hotel['description']);
    // var_dump($hotel['parking']);
    // var_dump($hotel['vote']);
    // var_dump($hotel['distance_to_center']);
    // foreach ($hotel as $key => $value) {
    //     // var_dump($key);
    //     // var_dump($value);
    // }
};

echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap style -->
    <title>PHP Hotel</title>
</head>

<body>

    <div class="container">
        <table class="table table-dark table-striped mt-5">
            <thead>
                <tr>
                    <?php foreach ($hotel as $key => $value) :  ?>
                        <th class="text-warning" scope="col"><?= $key ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) :  ?>
                    <tr>
                        <th scope="row"><?= $hotel['name'] ?></th>
                        <td><?= $hotel['description'] ?> </td>
                        <td><?= $hotel['parking'] ?> </td>
                        <td><?= $hotel['vote'] ?> </td>
                        <td><?= $hotel['distance_to_center'] ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- /Bootstrap script -->
</body>

</html>