<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Products</title>
</head>
<body class="bg-gray-300 container mx-auto py-10">
<h2 class="text-2xl text-blue-900 uppercase"> show product</h2>
<ul class="text-lg">
    <li>{{$products[--$id]}}</li>
</ul>
</body>
</html>