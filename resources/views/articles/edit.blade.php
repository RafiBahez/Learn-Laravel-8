@extends('layouts.app')

@section('title')
    {{$article->title}}
@endsection

@section('content')

    <h2 class="text-2xl pb-10 uppercase">{{$article->title}}</h2>
    <table class="w-full text-left">
        <tr class="py-2 px-4 bg-gray-900 text-white">
            <th class="pr-10">ID</th>
            <th class="pr-10">Title</th>
            <th class="pr-10">Content</th>
                
        </tr>
        <form action="{{route('articles.update', $article->id)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
            <tr>
                <td><span class="bg-gray-200 w-full block py-2">{{$article->id}}</span></td>
                <td><input class="bg-gray-200 w-full py-2" type="text" name="title" value="{{$article->title}}"></td>
                <td><input class="bg-gray-200 w-full py-2" type="text" name="content" value="{{$article->content}}"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">
                    <button type="submit" class="text-blue-700 hover:text-blue-400">Save</button>
                    <b class="mx-5">|</b>
                    <a class="text-blue-700 hover:text-blue-400" href="{{route('articles.show', $article->id)}}">Cancel</a>
                </td>
            </tr>
        </form>
    </table>
@endsection