@extends('admin.layouts.layout')
@section('page-title')
    الصفحة الرئيسية
@endsection
@section('page-header')
    الصفحة الرئيسية
@endsection
@section('content')
    <p class="m-0">
        
        مرحبا بكـ {{ Auth::user()->name }}
    </p>

    <div class="mun_logo">
        <img src="{{ url('/uploads/amana_logo.png') }}" class="mun_logo_img" style="width: auto; height: 150px;" />
    </div>
@endsection