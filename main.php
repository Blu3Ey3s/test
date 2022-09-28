<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>S.King</title>
        <link rel='stylesheet' href='style.css' />
    </head>
    <body>
        <div class='flex-container'>
            <div class='header'>
                <?php include 'logo.inc.php' ?>
                <?php include 'menu.inc.php' ?>
            </div>

            <div class='about_me'>

                <h1> <?php echo $p ?> </h1>
            <div class='data'>
                <div class='myImg'>
                    <?php 
                    echo '<img src="C:\OSPanel\domains\test\img">';
                    ?>
            <div> class='fullname'>
                <p>My name is</p>
                <?php echo $name, '', $surname . '<br>';
                      echo 'City', '', $city;?>
                </p>
            
            <p> Me
                <?php echo $age; ?>
                years </p>
                <p>Мы научились создавать различные переменные и прочее</p>            
            </div>
        </div>

        <div class='knowledge'>

            <?php include 'knowledge.inc.php'; ?>
            <?php 
            echo $a, '', $b, '', $c;
            ?> <br>
            <?php 
                echo $d;
                ?>
        </div>

        <div class='article'>
            <p class='text'>
            Американский писатель, работающий в разнообразных жанрах,
            включая ужасы, триллер, фантастику, фэнтези, мистику,
             драму, детектив.
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

