@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
                <h2>{{ $title }}</h2>
            </header>
            <hr>
            @foreach ($articles as $key => $article)
                @if($key != 0)
                    <hr>
                @endif
                <div class="col-12">
                    <h4 class=""><Strong>{{ $article->title }} </Strong></h5>
                </div>
                <div class="col-12">
                    {!!  $article->content !!}
                </div>
                <div class="col-12">
                    <img class="mb-1"height="200" src="{{ url(''.$article->image.'') }}" alt="">
                    
                </div>
                <div class="col-12">

                    <h4 class=""><Strong>Teacher: {{ $article->teacher_id }}</Strong></h5>
                </div>
                <div class="col-12">

                    <h4 class=""><Strong>Student: {{ $article->student_id }}</Strong></h5>
                </div>

            @endforeach
        </div>
    </div>
@endsection
