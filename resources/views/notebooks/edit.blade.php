@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Edit Notebooks</h1>

        <form action="/notebooks/{{$notebook->id}}" method="post">
            {{csrf_field()}}
            {{method_field('put')}}

            <div class="form-group">

                <label for="name">Notebook Name</label>
                <input type="text" name="name">

                <input class= 'btn btn-primary' type="submit" value="Update">

            </div>


        </form>
    </div>
@endsection