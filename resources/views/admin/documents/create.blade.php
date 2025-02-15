@extends('admin.layouts.layout')
@section('page-title')
إنشاء نوع الكراسة
@endsection
@section('content')
<div class="container mt-4">
    <form method="post" action="{{ route('tcd.store') }}" enctype="multipart/form-data" >
        @csrf
        <div class="p-4 border-none">
            <div class="card-title">
                إنشاء كراسة جديدة
            </div>
            <div class="card-body">
                @if(false)
                <div class="card p-4">
                    <div class="card-title">
                        صور الكراسة
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <x-input name="cover_img" type="file" title="صورة الغلاف" />
                            </div>
                            <div class="col-md-3">
                                <x-input name="page_img" type="file" title="صورة باق الصفحات" />
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="card mt-2 p-4">
                    <div class="card-title">
                        البيانات الاساسية
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-md-3">
                                @php
                                    $baladiat = \App\Models\Municipalities::get();
                                @endphp
                                <label class="form-label">
                                    البلدية
                                </label>
                                <select name="baladia_id" class="form-control form-select">
                                    <option> إختر البلدية </option>
                                    @foreach($baladiat as $baladia)
                                        <option value="{{ $baladia->id }}">
                                            {{ $baladia->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                          
                            <div class="col-md-2">
                                @php
                                    $docTypes = \App\Models\DocTypes::get();
                                @endphp
                                <label class="form-label">
                                    نوع الكراسة
                                </label>
                                <select name="type_id" class="form-control form-select">
                                    <option> إختر النوع </option>
                                    @foreach($docTypes as $type)
                                        <option value="{{ $type->id }}">
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-1">
                                <x-input type="text" name="year" title="لعام" value="1446" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2 p-4">
                    <div class="card-title">
                        بيانات قطعة الارض
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <x-input type="text" name="land[district]" title="اسم الحي" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[no]" title="رقم قطعة الارض" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[planned]" title="اسم المخطط" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="number" name="land[area]" title="المساحة" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[areaInWords]" title="المساحة كتابيا" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <x-input type="text" name="land[city]" title="المدينة" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[street]" title="الشارع" />
                            </div>
                           
                        
                            <div class="col-md-2">
                                <x-input type="file" name="land[qr_code]" title="صورة الـ Qr" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <x-input type="text" name="land[north]" title="شمالا" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[north_len]" title="بطول" />
                            </div>

                            <div class="col-md-2">
                                <x-input type="text" name="land[south]" title="جنوبا" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[south_len]" title="بطول" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <x-input type="text" name="land[east]" title="شرقا" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[east_len]" title="بطول" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[west]" title="غربا" />
                            </div>
                            <div class="col-md-2">
                                <x-input type="text" name="land[west_len]" title="بطول" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <x-input type="text" name="land[long]" title="خط طول" />
                            </div>
                            <div class="col-md-4">
                                <x-input type="text" name="land[lat]" title="دائرة عرض" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <x-input type="file" name="land[plan_img]" title="صورة كروكي الموقع" />
                            </div>
                            <div class="col-md-4">
                                <x-input type="file" name="land[card_img]" title="بطاقة وصف الموقع" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card-footer">
                <input type="submit" value="حفظ" class="btn btn-success float-start" />
            </div>
        </div>
    </form>
</div>
@endsection