@extends('admin.layouts.layout')
@section('page-title')
    إنشاء نوع الكراسة
@endsection
@section('content')
    <div class="container mt-4">
        <h4>
            تعديل كراسة 
        </h4>
        <div class="card">
            <div class="card-header">
                البيانات الاساسية للكراسة
            </div>
        </div>
        <br />

        @if(!empty($section->sub_sections))
            @php
                $sub_secs = json_decode($section->sub_sections);
            @endphp

            @foreach($sub_secs as $sub_sec)
            <div class="row">

                <textarea rows="10" class="form-custom-control text-area" name="sec_title[]" >{{ $sub_sec->title }}</textarea>

            </div>
            <div class="row">

                
                <textarea rows="10" class="form-custom-control text-area" name="sec_content[]" >{{ $sub_sec->content }}</textarea>

            </div>
            @endforeach
        @endif

    </div>
@endsection