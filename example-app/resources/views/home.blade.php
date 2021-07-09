@extends('base')

@section('title')
    Главная
@endsection

@section('main_content')
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>   
        @endforeach
        </ul>
        {{-- <p>{{ $errors }}</p> --}}
    </div>
    @endif
    {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="/message/check" method="post">
        @csrf
        <input class="form-control mb-2" type="text" name="name_field" id="name_field" placeholder="Введиет имя" >
        <textarea class="form-control" name="message_field" id="message_field" placeholder="Введите сообщение" ></textarea><br>
        <button class="btn btn-success" type="submit">Отправить</button>
    </form>
@endsection