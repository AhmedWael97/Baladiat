@extends('admin.layouts.layout')
@section('page-title')  
    @if($doc->id)
        تعديل نوع ملف
    @else
        إنشاء نوع ملف
    @endif  
@endsection
@section('content')     
<div class="container mt-4">
    <div class="p-4 border-none">
        <div class="card-title">
            @if($doc->id)
                تعديل نوع ملف
            @else
                إنشاء نوع ملف جديد
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('doc.update') }}" class="container" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $doc->id }}" />
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">اسم نوع الملف</label>
                            <input type="text" class="form-control m-4" name="name" value="{{$doc->name}}"/>
                        </div>
                    </div>      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">يحتوي علي شكل معين ؟</label>
                            <select name="has_theme" id="" class="form-control m-4">
                                <option value="0" @if($doc->has_theme == 0) selected @endif>لا يحتوي علي اي اشكال معينه</option>
                                <option value="1" @if($doc->has_theme == 1) selected @endif>يحتوي علي شكل معين</option>
                            </select>
                        </div>
                    </div>  
                </div>
                <input type="submit" value="حفظ" class="btn btn-success float-start col-md-3" />
            </form> 
        </div>
    </div>
</div>
@endsection