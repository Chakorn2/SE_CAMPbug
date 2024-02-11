<html>
    <head>
        <title>Javascript</title>
    </head>

    <body>
        <h1>
            Lavascript
        </h1>
        <button onclick="alert('Hello World')">Click me</button>
        <input type="text" id="my_number">
        <button onclick="myFunction()">submit number</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(dogcument).ready(function(){
                console.log("Helo World - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_number').val())
                $('#myh1').text("Javascript 101")
                $('#my_number').val(100)
            });
            function myFunction(){
                console.log(dogcument.getElementById('my_number').value);
                console.log
                console.log('Click submit number')
            }
            console.log("Hello World")let myval;
            myval='10'
            myval2='2'
            console.log(myval,myval2);
            myval3=myval+myval2;
            console.log(myval3);
            myval3=myval-myval2;
            console.log(myval3);
            myval3=myval*myval2;
            console.log(myval3);
            myval3=myval/myval2;
            console.log(myval3)
        </script>
        <script>

            let myval4=[1,2,3,4];

            myval4[5]=5;
            myval6[6]=[6,5,4,5];
            console.log(myval4)
            for(i = 0; i < myval4.length ; i++){
                console.log(myval4[1])
            }
            myval4.forEach(function(value,index) {
                console.log("in forEach",value,index)
            });

            console.log(dogcument.getElementById('my_number'))
        </script>
    </body>
</html>
