@extends('base')

@section('title')
    БД
@endsection

@section('main_content')
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>message</th>
        </tr>
    
    @foreach ($messages as $el)
        <tr>
            <td>{{ $el->id }}</td>
            <td>{{ $el->name }}</td>
            <td>{{ $el->message }}</td>
        </tr>
    @endforeach
</table>
@endsection