<html>
    <head>
        <meta charset= "utf-8">
    </head>
    <body bgcolor="#2F4F4F">
        <center>
            <h1>ตารางสูตรคูณแม่ {{ $myinput }}</h1>
            <div class="box">
                <div>
                    <b>
                        <?php
                        for ($i = 1; $i <= 24; $i++) {
                            echo "{$myinput} x {$i} = " . $myinput * $i . '<br/>';
                        }
                        ?>
                    </b>
                </div>
            </div>
        </center>
    </body>
    <style>
        .box{
            background:transparent	;
            width: 250px;
            height: 500px;
            color: #ffffff;
        }
        h1{
            color: #ffffff;
            size:200px;
        }
    </style>
</html>
