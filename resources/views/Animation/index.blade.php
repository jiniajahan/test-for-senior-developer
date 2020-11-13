<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #animated_div {
            width: 70px;
            height: 47px;
            background: #92B901;
            color: #ffffff;
            position: relative;
            font-weight: bold;
            font-size: 20px;
            padding: 10px;
            animation: animated_div 5s 1;
            -moz-animation: animated_div 5s 1;
            -webkit-animation: animated_div 5s 1;
            -o-animation: animated_div 5s 1;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            animation-direction: alternate;

            }

        @keyframes animated_div {

            0%   {transform: rotate(0deg); left:0%; top:0%;}
            25%  {transform: rotate(20deg); left:90%; top:100px;}
            50%  {transform: rotate(0deg);left:90%; top:500px;}
            75%  {transform: rotate(0deg); left:0%; top:500px;}
            100% {transform: rotate(-360deg); left:0%; top:0px;}
        }

        </style>
</head>
<body>
    <h5>Box Animation</h5>

    <div id="animated_div">Hello</div>

</body>
</html>
