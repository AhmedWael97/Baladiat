@extends('admin.layouts.layout')
@section('page-title')
إنشاء بلدية
@endsection
@section('content')
<div class="container mt-4">
<div class="p-4 border-none">
            <div class="card-title">
                إنشاء بلدية جديدة
            </div>
            <div class="card-body">
                <form action="{{ route('mun.store') }}" class="container" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">اسم البلدية</label>
                                <input type="text" class="form-control m-4" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">لوجو البلديه</label>
                                <input type="file" class="form-control m-4" name="logo" />
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