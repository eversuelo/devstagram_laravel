@extends('layouts.app')

@section('title')
    Pagina Principal
@endsection


@section('content')
    <x-listar-post :posts="$posts" />
@endsection
