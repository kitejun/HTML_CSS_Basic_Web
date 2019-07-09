<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOX</title>
    <!--
        overflow: 내용 많으면 가려짐
                scroll: 스크롤이 생김
       
        border-style: 경계선 지정(위치에 따라 위,아래,왼,오 위치를 지정 가능->시계 방향)
        border-width: 경계선 두께
        border-color: 경계선 색
        ex)
        border-style: dashed solid dotted double;
        border-width: 6px 8px 10px 12px;
        border-color: red blue yellow green;
        -> border: 4px solid lemonchiffon;
            이렇게 한 번에 쓸 수 있다.

        border-radius: 경계선 둥글게
                border-top-left-radius 등 타원의 디테일한 모양 설정 가능
        
        margin끼리는 서로 붙으면 큰 쪽으로 상쇄

        box-sizing: contnet-box;
            width(height)=content size
        box-sizing: border-box;
            width(height)=content size + padding + border
    -->
    <style>
    body{background-color: skyblue;}
    #inner{
        width:200px;
        height: 100x;
        background-color:pink;
        margin: 20px;
        padding: 20px 10px 5px 1px;
        border: 4px solid yellow;
        border-radius:12px;
    }
    #top{
        width:200px;
        height: 100x;
        background-color:red;
        box-sizing:content-box;
        padding: 20px;
    }
    #bottom{
        width:200px;
        height: 100x;
        background-color:yellow;
        box-sizing:border-box;
        padding: 20px;
    }
        
    </style>
</head>
<body>
    <div id="main">
        <div id="inner">
        가슴에 꿈을 품고 있는 사람은 걱정하지 않습니다
        지금은 비록 실패와 낙심으로 힘들어해도
        곧 일어나 꿈을 향해
        힘차게 달려갈테니까요
        </div>
        <div id="top">
        가슴에 꿈을 품고 있는 사람은 걱정하지 않습니다
        지금은 비록 실패와 낙심으로 힘들어해도
        곧 일어나 꿈을 향해
        힘차게 달려갈테니까요
        </div>
        <div id="bottom">
        가슴에 꿈을 품고 있는 사람은 걱정하지 않습니다
        지금은 비록 실패와 낙심으로 힘들어해도
        곧 일어나 꿈을 향해
        힘차게 달려갈테니까요
        </div>
    </div>
</body>
</html>