@extends('Layout.web')

@section('main')

    <div>
        <h2 class="text-2xl">All Posts</h2>
            @foreach($posts as $post)
            <div class="flex flex-row py-2">
                <div class="flex px-5">
                    {{$post['id']}}
                </div>
                <div class="flex">
                    <a href="{{route('show', --$post['id'])}}">
                        {{$post['title']}}
                    </a>
                </div> 
            </div>
            @endforeach           
    </div>
@endsection