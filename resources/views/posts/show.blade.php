@extends('Layout.web')

@section('main')
    <div class="p-5 w-full bg-gray-900 text-white">
        <h2 class="text-3xl underline py-5">{{$post['title']}}</h2>
        <p class="text-xl text-light text-justify">{{$post['content']}}</p>
    </div>
@endsection