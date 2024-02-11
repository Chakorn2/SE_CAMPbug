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
                            echo "$myinput x $i = " . $myinput * $i . '<br/>';
                        }
                        ?>
                    </b>
                </div>
            </div>
        </center>
    </body>
    <style>
        .box{
            background:rgb(156, 192, 156);
            width: 250px;
            height: 450px;
            color: #ffffff;
            border-radius: 20px;
            border: 10px solid white;
            text-align: center;
        }
        h1{
            color: #ffffff;
            font-size:70px;
        }
    </style>
</html>
