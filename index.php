<?php 
    require_once __DIR__ . '/models/Movie.php'

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP</title>
    </head>

    <body>
        <h1>test</h1>
        <?php 
        
            $harry = new Movie('Harry potter', 'Fantasy', 'lorem ipsu ecc ecc ecc', 4);
            var_dump($harry);
            echo "<h1>$harry->title</h1>
                <p>$harry->category</p>
                <p>$harry->description</p>";
            echo $harry-> getTopFilm();
        
        ?>

    </body>
</html>