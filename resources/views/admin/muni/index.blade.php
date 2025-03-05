@extends('admin.layouts.layout')
@section('page-title')
جميع البلديات
@endsection
@section('page-header')
    الرئيسية / جميع البلديات
@endsection
@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{ route('mun.create') }}" class="btn btn-primary float-end">
                <i class="fas fa-plus-circle"></i> إنشاء بلدية جديدة
            </a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>اسم البلدية</th>
            <th> الشعار </th>
            <th> العمليات </th>
        </thead>
        <tbody>
            @foreach($muns as $key => $mun)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $mun->name }}
                    </td>
                    <td>
                        <img src="{{  !empty($mun->logo) ? url($mun->logo) : '' }}" style="width: auto; height: 100px;" />
                    </td>
                    <td>
                        <a href="{{ route('mun.edit', $mun->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('mun.delete', $mun->id) }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
              
            @endforeach
        </tbody>
    </table>
</div>


@endsection