@extends('admin.layouts.layout')
@section('content')
    <form action="{{ url('json') }}" class="container" method="post">
        @csrf
        <input type="text" class="form-control m-4" name="title" />
        <textarea id="editor" class="editor form-control m-4" ></textarea>
        <input type="hidden" id="content" name="content" />
    
        <input type="submit" />
    </form>
@endsection