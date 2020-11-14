<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel</title>

</head>
<body class="bg-gray-300 container mx-auto py-20">

<form action="{{asset('/form')}}" method="POST">
    <label for="">The POST route call</label>
    @csrf
    <input type="hidden" name="_method" value="POST">
    <input class="p-2 bg-blue-900 text-white" type="submit" value="sumbit">
</form>

<form class="my-5" action="{{asset('/form')}}" method="POST">
    <label for="">The PUT route call</label>
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input class="p-2 bg-blue-900 text-white" type="submit" value="sumbit">
</form>

<form class="my-5" action="{{asset('/form')}}" method="POST">
    <label for="">The DELETE route call</label>
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input class="p-2 bg-blue-900 text-white" type="submit" value="sumbit">
</form>

</body>
</html>
