<html>
    <head>
        <meta charset="utf-8"/>
    </head>

    <body>
        <h1>My Route Page</h1>
        <h1>{{ $myinput }}</h1>
    <h1>ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
    <div>
        <?php for($i = 1; $i <= 24; $i++) {?>
            <?php echo $myinput ?> x <?php echo $i ?> = <?php echo $myinput*$i ?><br>
        <?php } ?>
    </div>
    </body>
</html>
