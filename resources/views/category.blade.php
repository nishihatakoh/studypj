@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
    <div class="category__alert">
        @if (session('message'))
            <div class="category__alert--success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="category__alert--danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
