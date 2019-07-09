<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Font</title>
    <!--
        구글 폰트 
        https://fonts.google.com/selection?selection.family=Nanum+Myeongjo|Nanum+Pen+Script
    -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo|Nanum+Pen+Script&display=swap" rel="stylesheet">
    <!--
        font-family: 차례대로 폰트 적용
        font-style: 폰트에 스타일 적용
                    oblique: 기울임
                    italic: 약간 기울임
                    normal: 기본
        font-weight: 폰트 굶기 조절
        line-height: 라인의 높이
        letter-spacing: 글자와 글자 사이의 간격을 조정함, 자간
        text-indent: 문단의 시작부에 들여쓰기를 함
     -->
    <style>
        #main{
            font: oblique 900 35px 'Nanum Pen Script', cursive;
        }
        #up{
            line-height:24px;
            text-indent: 15px;
        }
        #down{
            letter-spacing: 5px;
        }
    </style>
    <!--
            위랑 같은 뜻
            font-size: 48px;
            font-family: 'Nanum Myeongjo', serif;
            font-family: 'Nanum Pen Script', cursive;
            font-style: oblique;
            font-weight:900;
    -->
    <style>
        #witch{
        }
        h1{
            background-color: red;
            text-align: center;
            }
        h3{
            text-align: left;
            background-color: blue;
        }
        p{
            background-color: yellow;
            text-align: right;
        }
    </style>
</head>
<body>

<div id="main"> 
    <p id="up">
    가슴에 꿈을 품고 있는 사람은 걱정하지 않습니다
    지금은 비록 실패와 낙심으로 힘들어해도
    곧 일어나 꿈을 향해
    힘차게 달려갈테니까요
    </p>
    <p id="down">
    가슴에 꿈을 품고 있는 사람은 걱정하지 않습니다
    지금은 비록 실패와 낙심으로 힘들어해도
    곧 일어나 꿈을 향해
    힘차게 달려갈테니까요
    </p>
</div>
<h1>Hello World</h1>
<h3>Hello World</h3>
<p>Hello World</p>
</body>
</html>