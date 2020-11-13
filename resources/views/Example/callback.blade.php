<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <script>
            function logger(data){
                if (data['age'] < 18){
                    console.log('Email is not valid');// If data.age < 18 it'll log as not valid.
                }else{
                    console.log('Email is valid');
                }
            }
             var data = {email:'trump@gmail.com', age:70};
            function checkAge(data,logger){
                logger(data);
                console.log('checkAge is called');
            }

    </script>
</body>
</html>
