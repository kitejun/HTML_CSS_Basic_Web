<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 1. Link styler -->
    <link rel="stylesheet " href="{{ asset('/css/sm_select.css') }}">
    <!-- 직계일 경우 > 이고 모든 후손은 표시 X -->
    <!--
        <style>
        article > p {
            color: red;
        }   
        </style>
    -->
</head>
<body>
    <article>
        <div>자식1
            <p>후손1</p>
        </div>
        <div>자식2
            <p>후손2</p>
        </div>
            <p>자식3</p>
    </article>
    
</body>
</html>