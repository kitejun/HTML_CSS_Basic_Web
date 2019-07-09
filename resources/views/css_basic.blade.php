<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 1. Link styler -->
    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
    <!-- 2. Embedding style -->
    <style>
        h2{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>1. Link styler</h1>
    <h2>2. Embedding style</h2>
    <!-- 3. Inline style -->
    <h3 style="color: yellow";>3. Inline style</h3>
</body>
</html>