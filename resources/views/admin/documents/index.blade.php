@extends('admin.layouts.layout')
@section('page-title')
جميع الكراسات
@endsection
@section('page-header')
    الرئيسية / جميع الكراسات
@endsection
@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{ route('tcd.create') }}" class="btn btn-primary float-end">
                <i class="fas fa-plus-circle"></i> إنشاء كراسة جديدة
            </a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>اسم البلدية</th>
            <th> نوع الكراسة </th>
            <th> رقم القطعة </th>
            <th> المخطط </th>
            <th> المساحة </th>
            <th> تاريخ الانشاء </th>
            <th> طباعة </th>
        </thead>
        <tbody>
            @foreach($tcds as $key => $tcd)
                @php
                    $land = json_decode($tcd->land_spec);
                @endphp
                <tr>
                    <td>
                        {{ ++$key }}
                    </td>
                    <td>
                        {{ $tcd->mun_name }}
                    </td>
                    <td>
                        {{ $tcd->type_name }}
                    </td>
                    <td>
                        {{ $land->no }}
                    </td>
                    <td>
                        {{ $land->planned }}
                    </td>
                    <td>
                        {{ $land->area }}
                    </td>
                    <td>
                        {{ Date('Y-m-d', strtotime($tcd->created_at)) }}
                    </td>
                    <td>
                        <a href="{{ route('tcd.print-doc', $tcd->id) }}" class="btn btn-success btn-sm">
                            <i class="fas fa-print"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection