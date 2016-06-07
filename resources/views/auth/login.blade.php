@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
{!! Form::open(array('route'=>'admin','method'=>'post')) !!}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="email">
            <input type="text" name="password">
{!! Form::submit('Войти') !!}
            {!! Form::close() !!}
             </div>
        </div>
    </div>
</div>
@endsection
