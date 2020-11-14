<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel</title>

</head>
<body class="bg-gray-300 container mx-auto py-20">
<h2 class="text-2xl">Single Post</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Content</td>
    </tr>
    <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['content']}}</td>
    </tr>
</table>
</body>
</html>
