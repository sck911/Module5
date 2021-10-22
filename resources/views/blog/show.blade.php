@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2 backwrapper2">
                <a href="/blog" class="btn btn-outline-primary btn-sm wordstyle2">Go back</a>
                <br><br>

                <!-- Display Title of Diary -->
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>

                <!-- Display Description of Diary -->
                <p class="wordstyle5"> {!! $post->body !!} </p><br><br>

                <!-- Display attached Picture -->



                <!--<img src=” asset('public/images/').$post->image }}" class="blogpicsize1"> -->

                <img src="{{ asset('images/').$post->blogpic }}" class="blogpicsize1"> 






                <br>
                <hr>
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary wordstyle2">Edit Post</a>
                <br><br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger wordstyle4">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection