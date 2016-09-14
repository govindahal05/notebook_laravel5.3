@extends('layouts.base')

@section('content')
<div class="container">
    <h1>Create Notebooks</h1>

    <form action="/notebooks" method="post">
        {{csrf_field()}}

        <div class="form-group">

            <label for="name">Notebook Name</label>
            <input type="text" name="name">

            <input class= 'btn btn-primary' type="submit" value="Submit">

        </div>


    </form>
</div>
@endsection