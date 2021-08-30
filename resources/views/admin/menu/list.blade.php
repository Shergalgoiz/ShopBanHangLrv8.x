@extends('admin.home')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>NAME</th>
                <th>ACTIVE</th>
                <th>UPDATE</th>
                <th style="width: 100px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ \App\Helpers\Helpers::menu() }} {{ nó sẽ tạo ra đoạn text}}--}} 
            {{-- {!! \App\Helpers\Helpers::menu() !!} {!! nó sẽ tạo ra đoạn HTML !!} --}}
            {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>
    </table>
@endsection
