<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html{
            background-color: skyblue;
            font-size:35px;
        }
        #main{
            background-color:bisque;
            heigh:150px;
        }
        #px{
            background-color:red;
            font-size: 16px;
            heigh:16px;
        }
        #em{
            background-color:blue;
            font-size: 1em;
            heigh:1em;
            font-size:50px;
        }
        #rem{
            background-color:yellow;
            font-size: 1rem;
            heigh:1rem;
        }
        #per{
            background-color:black;
            color:white;
            width:50%
        }
    </style>
</head>
<body>
    <!--
        px: 절대적 길이
        em: 상대적 길이(현재 스타일이 지정된 요소의 font-size기준)
        rem: 상대적 길이(최상위 요소의 font-size기준) -> 자주 씀!!(웹을 폰과 테블릿에서 쓰기 때문)
        -> 1em(rem) = 기준 font-size * 1em(rem)
    -->
    <div id="main">
        단위
        <p id="px">px</p>
        <p id="em">em</p>
        <p id="rem">rem</p>
        <div id="per">per</div>
    </div>
</body>
</html>