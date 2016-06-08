@extends('admin.appAdmin')

@section('content')

    <button class="btn btn-success" data-toggle="modal" data-target="#modal-1">Открыть модальное окно</button>
    <button class="btn btn-success" data-toggle="modal" data-target="#modal-2">Открыть модальное окно</button>
    <button class="btn btn-success" data-toggle="modal" data-target="#modal-3">Открыть модальное окно</button>



@endsection
@section('modal')
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button class="close" type="button" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <p>Это модал1321ьное окно</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">X</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button class="close" type="button" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <p>Это123123 модальное окно</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">X</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button class="close" type="button" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <p>Это модальное окно4234234</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">X</button>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success" id="getRequest">Get ajax</button>
    <div id="getRequestData"></div>
@endsection