<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
    <link href="./css/form.css" type="text/css" rel="stylesheet">
    <link href="./css/table.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,800;0,900;1,400;1,500;1,600;1,900&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <title><?php echo $title; ?></title>
</head>
<body class="<?php echo $body;?>" style="<?php echo $bgcolor;?>">
    <header>
        <div class="header-inner">
            <a href="index.php">
                <img id="logo" src="images/phplogo.svg" alt="PHP Logo">
            </a>
            <nav>
                <ul>
                    <?php
                        echo my_nav($nav);
                    ?>
                </ul>
            </nav>
        </div> <!--end header inner-->
    </header>