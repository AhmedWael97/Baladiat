@extends('admin.layouts.layout')
@section('page-title')
تعديل بلدية
@endsection
@section('content')
<div class="container mt-4">
<div class="p-4 border-none">
            <div class="card-title">
                تعديل البلديه 
            </div>
            <div class="card-body">
                <form action="{{ route('mun.update') }}" class="container" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $mun->id }}" />
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">اسم البلدية</label>
                                <input type="text" class="form-control m-4" name="name" value="{{$mun->name}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="">شعار البلدية</label>
                                        <input type="file" class="form-control m-4" name="logo" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <img src="{{url('/')}}/{{$mun->logo}}" alt="" style="width: 100%; height: 100px;" />
                                </div>
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