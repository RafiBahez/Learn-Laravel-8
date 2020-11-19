@extends('layouts.app')

@section('title')
    {{$article->title}}
@endsection

@section('content')

    <h2 class="text-2xl pb-10 uppercase">{{$article->title}}</h2>
    <table class="w-full text-left">
        <tr class="py-2 px-4 bg-gray-900 text-white">
            <th class="pr-10">{{$article->title}}</th>
        </tr>
        <tr>
            <td>{{$article->content}}</td>  
        </tr>
        <tr>
            <td class="text-right">
                <form class="inline" action="{{route('articles.destroy', $article->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                    <button class="text-blue-700 hover:text-blue-400">Delete</button>
                </form>
                <b class="mx-5">|</b>
                <a class="text-blue-700 hover:text-blue-400" href="{{route('articles.index')}}">Browse All</a>

            </td>
        </tr>
    </table>
@endsection