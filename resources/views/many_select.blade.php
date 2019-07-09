<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 1. Link styler -->
    <link rel="stylesheet" href="{{ asset('/css/select.css') }}">
    
    <!-- 전체 선택자(쓰지 말자) -->
    <!--
    <style>
        *{color: red;}
    </style>
    -->
   
</head>
<body>
    <!-- 여러 개 지정 -->
    <p>Hello World</p>
    <br>
    <b>Hello World</b>
    <!-- Id 지정 -->
    <h1 id="snow">Hello World</h1>
    <!-- 클래스 선택자(단체 기능 묶기 편함) -->
    <p class="contents">Hello World</p>
    <!-- 전체 선택자(쓰지 말자) -->
    <a href="http://www.google.com" target="_blank" id="new_link">
            구글
    </a>
    
</body>
</html>