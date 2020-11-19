@extends('layouts.app')

@section('title')
    All Articles
@endsection

@section('content')

    <h2 class="text-2xl pb-10 uppercase">All List of Articles</h2>
    <table class="w-full text-left">
        <tr class="py-2 px-4 bg-gray-900 text-white">
            <th class="pr-10">ID</th>
            <th class="pr-10">Article Title</th>
            <th class="pr-10">Last Update</th>
            <th class="pr-10">Actions</th>
        </tr>
  
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{\Carbon\Carbon::parse($article->updated_at)->diffForHumans()}}</td>
            <td class="space-x-5">
                <a class="text-blue-700 hover:text-blue-400" href="{{route('articles.show', $article->id)}}">Read</a>
                <a class="text-blue-700 hover:text-blue-400" href="{{route('articles.edit', $article->id)}}">Edit</a>
            </td>    
        </tr>
        @endforeach
        <tr class="text-right">
            <td colspan="4">
                <a  class="text-blue-700 hover:text-blue-400" href="{{route('articles.create')}}">
                <svg class="w-10 h-10 float-right" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </a>
            </td>
        </tr>
    </table>
@endsection