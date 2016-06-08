@extends('admin.appAdmin')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Томирис</h1>
            @foreach($errors->all() as $error)
                @if($error == 'The password field is required.')
                    <div class="alert alert-success">
                        Вы не ввели пароль
                    </div>
                @endif
                @if($error == 'The email field is required.')
                    <div class="alert alert-success">
                        Вы не ввели логин
                    </div>
                @endif

            @endforeach
{!! Form::open(array('route'=>'postLogin','method'=>'post')) !!}
                <label for="email">Логин</label>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="email" class="form-control">
                <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control">
            <br>
{!! Form::submit('Войти',['class'=>'btn btn-info']) !!}
            {!! Form::close() !!}
             </div>
        </div>
    </div>
</div>
@endsection
