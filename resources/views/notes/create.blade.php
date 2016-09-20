@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Create Note</h1>

        @if(count($errors)>0)
            <ul>
                @foreach($errors->all() as $error)

                <li class="alert alert-danger">{{$error}}</li>

                @endforeach
            </ul>

        @endif

        <form action="{{route('notes.store')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">

                <label for="title">
                    Note Title
                </label>
                <input type="text" name="title" class="form-control">

            </div>

            <div class="form-group">

                <label for="body">
                    Note Body
                </label>
                <input type="text" name="body" class="form-control">

            </div>
                <input type="hidden" name="notebook_id" value="{{$id}}">

                <input class= 'btn btn-primary' type="submit" value="Submit">




        </form>
    </div>
@endsection