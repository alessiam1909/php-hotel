<?php

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


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotels</title>
</head>
<body>
    <div class="container">
        <form action="" method="GET">
            <h2>Scegli se preferisci hotel con parcheggio o senza :</h2>
            <input type="radio" name="park" value="siPark"> Hotels con parcheggio
            <input type="radio" name="park" value="noPark"> Hotels senza parcheggio
            <button type="submit">Invio</button>
        </form>
        <table class="table table-success table-striped mt-5 text-center">
                <thead >
                        <th class="col-2">Nome</th>
                        <th class="col-2">Descrizione</th>
                        <th class="col-2">Parcheggio</th>
                        <th class="col-2">Voto</th>
                        <th class="col-2">Distanza dal centro</th>
                </thead>
                <tbody>
                    <?php if($_GET['park'] == 'siPark'){ ?>
                        <?php foreach($hotels as $hotel){?>
                           <?php if($hotel['parking'] == true){ ?>
                            <tr>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td>
                                    <?php echo 'Si' ?>
                                </td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center']." Km" ?></td>
                            </tr>
                            <?php } ?>
                        <?php }?>
                    <?php } elseif($_GET['park'] == 'noPark'){?>
                        <?php foreach($hotels as $hotel){?>
                           <?php if($hotel['parking'] == false){ ?>
                            <tr>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td>
                                    <?php echo 'No' ?>
                                </td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center']." Km" ?></td>
                            </tr>
                            <?php } ?>
                        <?php } ?>
                    <?php } else{ ?>
                        <?php foreach($hotels as $hotel){?>
                            <tr>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td>
                                    <?php if($hotel['parking'] == true){
                                        echo 'Si';
                                    }else{
                                        echo 'No';
                                        }; ?>
                                </td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center']." Km" ?></td>
                            </tr>
                        <?php }?>
                    <?php } ?>

                

                </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
