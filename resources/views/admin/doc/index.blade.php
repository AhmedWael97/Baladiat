@extends('admin.layouts.layout')
@section('page-title')
جميع الانواع
@endsection
@section('page-header')
    الرئيسية / جميع الانواع
@endsection
@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{ route('mun.create') }}" class="btn btn-primary float-end">
                <i class="fas fa-plus-circle"></i> إنشاء نوع جديد
            </a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>اسم نوع الملف</th>
            <th> لديه شكل </th>
            <th> العمليات </th>
        </thead>
        @foreach($docs as $key => $doc)
        <tbody>
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $doc->name }}
                    </td>
                    <td>
                        @if($doc->has_theme)
                            <span class="badge bg-success">نعم</span>
                        @else
                            <span class="badge bg-danger">لا</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('doc.edit', $doc->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('doc.delete', $doc->id) }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
              
            @endforeach
        </tbody>
    </table>
</div>


@endsection