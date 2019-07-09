<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Position</title>
    <!--
        - block element(새로운 줄에서 시작)
        : width, height, margin, padding 가능
        - inline element(작성한 글에서 줄 유지)
        : width, height, margin-top, margin-botton 불가능
        -> 해결책 display: inline-block; 사용하면 위에 가능
        - diplay: none; 옵션을 주면 화면에 아예 출력 X
        - position: 위치 지정
                static: 기본
                relative: 부모기준의 상대적 위치 조정
                absolute: 절대위치, 부모나 조상 중 relative, absolute, fixed가 
                        선언된 곳을 !기준!으로 좌표 프로퍼티 적용
                fixed: 보이는 화면 기준으로 좌ㅛ 프로퍼티를 이용하여 위치 고정
                z-index: 앞 or 뒤에 둘지 결정(큰 숫자가 앞으로 표시)
    -->
    <style>
        body{background-color: skyblue; margin: 0;}
        #block{
            background-color: pink;
            width: 200px;
            height: 100px;
        }
        #inline{
            background-color: lemonchiffon;
            width: 200px;
            height: 100px;
        }
        #inline_block{
            background-color: lemonchiffon;
            width: 200px;
            height: 100px;
            display: inline-block;
        }
        #parent{
            background-color: red;
            width: 200px;
            height: 200px;
            position: relative;
        }
        #child{
            background-color: lemonchiffon;
            width: 200px;
            height: 100px;
            position: relative;
            top: 20px;
            left: 20px;
        }
        #child2{
            background-color: lemonchiffon;
            width: 200px;
            height: 100px;
            position: absolute;
            top: 20px;
            left: 300px;
        }

        #main{
            height: 1200px;
        }
        #fixed{
            background-color: pink;
            height: 60px;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
        }
        
        #top{
            background-color: pink;
            height: 100px;
            width: 100px;
            position: absolute;
            z-index: 1;
        }
        #bottom{
            background-color: lemonchiffon;
            height: 100px;
            width: 100px;
            position: absolute;
            z-index: 2;
        }
    </style>
</head>
<body>
    <div>
        <p id="block">
            block
        </p>
        <span id="inline">
            inline
        </span>
        <br><br>
        <span id="inline_block">
            inline_block
        </span>
    </div>
<br>====================================================<br>
<div id="parent">
        <div id="child">
            child
        </div>
        <div id="child2">
            child2
        </div>
</div>
<div id="main">
        <div id="fixed">Menu 바</div>
        가슴에 꿈을 품고 있는 사람은 걱정하지 않습니다
        지금은 비록 실패와 낙심으로 힘들어해도
        곧 일어나 꿈을 향해
        힘차게 달려갈테니까요
</div>
<br>====================================================<br>
<div>
       <div id="top">
        앞 입니다.
    </div>
    <div id="bottom">
        뒤 입니다.
    </div> 
</div>

</body>
</html>