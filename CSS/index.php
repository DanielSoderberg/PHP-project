<!DOCTYPE html>
<?php include("header.php");?>
</head>
<body>

    <h1>Välkommen till min PHP-sida</h1>
    

<title>
        <?php
        if(empty($title))
        echo "Min sida!";
        else
        echo $title;?>
        </title>



    <?php include("footer.php");?>

</body>
</html>