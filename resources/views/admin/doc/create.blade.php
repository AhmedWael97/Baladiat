@extends('admin.layouts.layout')
@section('page-title')
إنشاء نوع ملف
@endsection
@section('content')
<div class="container mt-4">
<div class="p-4 border-none">
            <div class="card-title">
                إنشاء  نوع ملف جديد
            </div>
            <div class="card-body">
                <form action="{{ route('doc.store') }}" class="container" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">اسم نوع الملف</label>
                                <input type="text" class="form-control m-4" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">يحتوي علي تصميم ؟</label>
                                <select name="has_theme" id="" class="form-control m-4">
                                    <option value="0">لا يحتوي </option>
                                    <option value="1">يحتوي</option>
                                </select>
                            </div>
                        </div> 
                        </div>
                    </div>                    
                    <input type="submit" value="حفظ" class="btn btn-success float-start col-md-3" />
                </form>
            </div>
    </div>
</div>
   
@endsection