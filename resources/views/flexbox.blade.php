<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flexbox</title>
    <!--
        가로 세로를 기준으로 배치
        - flex-direction: flex 컨테이너안에 item들의 방향을 정함
                row, row-reverse, column, column-reverse
        - flex-wrap: flex 아이템이 flex 컨테이너를 벗어 났을 때 줄을 바꾸는 속성
                nowrap
                wrap
        -> flex-flow: row wrap 으로 한 번에 지정도 가능
        - justify-content: flex-direction으로 정해진 방향을 기중으로
                        수평으로 item을 정렬하는 방법을 정함
                - `justify-content: flex-start;` - flex-direction 기준, 앞쪽부터 정렬
                - `justify-content: center;` - flex-direction 기준, 가운데 정렬
                - `justify-content: flex-end;` - flex-direction 기준, 뒤쪽부터 정렬
                - `justify-content: space-around;` - flex-direction 기준, 고르게 정렬
                - `justify-content: space-between;` - flex-direction 기준, 양쪽 정렬
        - align-items: 위치 지정
        - align-content: 많은 위치 지정

        - flex: flex-grow, flex-shrink, flex-basis의 축약형


    -->
    <style>
        body{margin: 0;}
        #container{
            background-color: skyblue;
            display: flex;
            flex-flow: column wrap;
            width: 250px;
            height: 250px;
            justify-content: space-between;
            align-items: center;
            flex-wrap:wrap;
            align-content: flex-start;
        }
        .item{
            border-radius: 4px;
            background-color: pink;
            height: 36px;
            width: 36px;
        };
        #one{
            flex: 1 0 auto;
        }
        #two{
            flex: 3 0 auto;
        }
        #three{
            flex-shrink: 1;
        }
        #four{
            flex-shrink: 2;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="one" class="item">1</div>
        <div id="two" class="item">2</div>
        <div id="three" class="item">3</div>
        <div id="four" class="item">4</div>
        <div id="three" class="item">5</div>
    </div>
</body>
</html>