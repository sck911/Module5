@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm wordstyle2"> Press to Return </a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4"> Create a New entry in Pictogram </h1>
                    <p> Fill and submit this form to create a page in your Life Chapter </p>

                    <hr>

                    <form action="{{ route('blog.create') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">

                            <!-- Title of the User's Page -->
                            <div class="control-group col-12">
                                <label for="title"> Your Diary Title </label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Diary Title" required>
                            </div>

                            <!-- Write User's Diary -->
                            <div class="control-group col-12 mt-2">
                                <label for="body"> Write your personal Diary </label>
                                <textarea id="body" class="form-control" name="body" placeholder=" Enter your entries of the day "
                                          rows="" required></textarea>
                            </div>

                            <!-- Attach User's Picture -->
                            <div class="control-group col-12 mt-2">
                                <label for="body"> Attach a Picture </label>
                                <input type="file" name="blogpic" id="blogpic" required>
                            </div>

                                                   
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary wordstyle2">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection