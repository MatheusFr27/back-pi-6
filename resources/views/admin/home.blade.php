@extends('layouts.auth')

@section('content')
    <h1>Estou Autenticado como adm</h1>

    {{ Auth::guard('admins')->user() }}
@endsection
