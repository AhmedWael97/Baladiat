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

    
@endsection