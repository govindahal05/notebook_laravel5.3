@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>

        <form action="{{route('notes.update', $note->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}

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

            <input class='btn btn-primary' type="submit" value="Submit">


        </form>
    </div>
@endsection