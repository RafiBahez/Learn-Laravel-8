@extends('layouts.app')

@section('title')
    New Article
@endsection

@section('content')

    <h2 class="text-2xl pb-10 uppercase">Create New Article</h2>
    <table class="w-full text-left">
        <tr class="py-2 px-4 bg-gray-900 text-white">
            <th class="pr-10">Title</th>
            <th class="pr-10">Content</th>
                
        </tr>
        <form action="{{route('articles.store')}}" method="POST">
            @csrf
            <tr>
                <td
                ><input class="bg-gray-200 w-full py-2" type="text" name="title" value=""></td>
                <td><input class="bg-gray-200 w-full py-2" type="text" name="content" value=""></td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">
                    <button type="submit" class="text-blue-700 hover:text-blue-400">Save</button>
                    <b class="mx-5">|</b>
                    <a class="text-blue-700 hover:text-blue-400" href="{{route('articles.index')}}">Cancel</a>
                </td>
            </tr>
        </form>
    </table>
@endsection