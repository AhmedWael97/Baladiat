<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>كراسة الشروط</title>


    {{--
    <link href="{{ public_path('/assets/print.css') }}" rel="stylesheet"> --}}
    <style>
        @font-face {
            font-family: theSans;
            src: public_path('{{ storage_path("/app/public/TheSansArabic-Light.ttf") }}') format('truetype');
        }

        @font-face {
            font-family: theSansLight;
            src: public_path('{{ storage_path("/app/public/TheSansArabic-Light.ttf") }}') format('truetype');
        }

        * {
            font-family: 'theSansLight' !important;
        }

        body {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: right;
        }

        @page {

            margin: auto;
            padding: 0;

        }

        p {
            line-height: 20px;
        }

        p,
        li {
            font-family: 'theSansLight';
            font-weight: bold;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'theSansLight';
        }

        .mun_logo {
            position: relative;
        }

        .mun_logo_img {
            width: auto;
            height: 100px;
            top: 50px;
            position: absolute;
            margin: auto;
            right: 0;
            left: 0;
        }

        .page {
            width: 210mm;
            height: 297mm;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: 1mm;
            page-break-after: always;
            /* يفصل كل صفحة عند الطباعة */
        }

        .page-sm {
            width: 210mm;
            height: 257mm;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: 1mm;
            page-break-after: always;
            position: relative;
        }

        .full-width-image {
            position: absolute;
            left: 0;
            right: 0;
            align-items: center;
            margin: auto;
            width: 210mm;
            height: 297mm;
        }

        .min_page {
            height: 295mm !important;
        }

        .header {
            position: relative;
            margin: auto;
            text-align: center;
            padding-top: 85mm;
        }

        .right-header {
            position: relative;
            top: 10mm;
            right: 10mm;
        }

        .table_content {
            position: relative;
            top: 20mm;
            padding-right: 10mm;
            width: 180mm;
        }

        table {
            width: 190mm;
            font-family: 'theSansLight';
            font-size: 11px;
            border-collapse: collapse;
        }

        th {
            border: solid;
            border-width: 1px;
            height: 30px;
            background-color: #28889E;
            color: white;
            border-color: black;
            border-width: 1px;
        }

        tr,
        td {
            border: solid;
            border-width: 1px;
            height: 30px;
            border-color: black;
        }

        .pr-1 {
            padding-right: 1mm;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .text-white {
            color: white !important;
        }

        .text-blue {
            color: #28889E !important;
        }

        .p-sm {
            font-weight: lighter;
        }

        .mt-10 {
            margin-top: 10mm;
        }

        .desc {
            position: relative;
            padding-right: 10mm;
            width: 170mm;
        }

        ul li {
            color: white;
            padding-top: 2mm;
            padding-bottom: 2mm;
            font-size: 9px;
        }

        .f-size-9 {
            font-size: 9px;
        }

        .f-size-10 {
            font-size: 9px;
        }

        .f-size-12 {
            font-size: 12px;
        }

        .f-size-14 {
            font-size: 14px;
        }

        .f-bold {
            font-weight: bold;
        }

        h3 {
            font-size: 22.5px;
        }

        h2 {
            font-size: 23.5px;
        }

        .pr-8 {
            padding-right: 8mm;
        }

        .prePageTitle {
            text-align: center;
            vertical-align: middle;
            line-height: 220mm;
        }

        .sec_title {
            font-size: 14px;
        }

        .sec_desc {
            font-size: 11px;
        }

        .sub_sec {
            font-size: 14px;
        }

        p {
            font-size: 11px !important;
        }

        table tr {
            text-align: center;
        }

        .spec_right {
            position: absolute;
            left: 0;
            top: 0px;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .page,
            .page-sm {
                box-shadow: none;
                page-break-after: always;
            }

            .full-width-image,
            .cover-image {
                page-break-before: always;
            }

            thead {
                print-color-adjust: exact;
            }
        }
    </style>
</head>

<body>
@php

    $cover_img = "data:image/png;base64," . base64_encode(file_get_contents(public_path($doc->cover_img)));
                $page_img =  "data:image/png;base64,".base64_encode(file_get_contents(public_path($doc->page_img)));
                //                    $cover_img = public_path('uploads/cover_bg1.svg');
//                     $page_img = public_path('uploads/background_w 1.svg');
@endphp
<div class="page cover">
    <div class="cover-image">
        <img src="{{ $cover_img }}" class="full-width-image"/>
        <div class="header">
            <h3 class="text-white">
                {{ $doc->first_title }}
            </h3>
            <h3 class="text-white">
                {{ $doc->mun_name }}
            </h3>
            <h2 class="text-blue">
                كراسة الشروط و المواصفات
            </h2>
            <h2 class="text-white">
                إنشاء و تشغيل وصيانة
            </h2>
            <h2 class="text-blue">
                {{ $doc->type_name }}
            </h2>
            @php
                $land = json_decode($doc->land_spec);
            @endphp
            <p class="text-white f-size-14 f-bold">
                اسم الحي ({{ $land->district }}) - رقم المخطط ({{ $land->planned }}) - رقم القطعة ({{ $land->no }})
            </p>

            <p class="text-white p-sm mt-10 f-size-12">
                المساحة ( {{ $land->area }} ) م2
            </p>

            <p class="text-white p-sm mt-10 f-size-12">
                رقم المنافسة ( ...................................... ) لعام 1446 هـ
            </p>
        </div>
        <div class="desc mt-10">
            <p class="text-white f-size-9">
                يقدم المستثمر عطاءه في المنافسة بإحدى الطرق الآتية:
            </p>
            <ul>
                <li>
                    عن طريق الموقع الإلكتروني Furas.momra.gov.sa
                </li>
                <li>
                    عن طريق تطبيق الأجهزة الذكية "فرص"
                </li>
                <li>
                    لن يقبل أي عطاء لم يتم تقديمه إلكترونياً
                </li>
            </ul>

            <p class="text-white f-size-9 pr-8 ">
                وفي حال تعذر تقديم العطاء عن طريق المنافسة الإلكترونية لأسباب فنية فيقدم العطاء عن طريق الظرف
                المختوم باليد في موعد وتاريخ فتح المظاريف المعلن عنه شريطة تقديم ما يثبت وجود مشكلة فنية أثناء
                التقديم على المنافسة الإلكترونية مع ضرورة تقديم بلاغ من خلال التواصل مع مركز الاتصال الوطني على
                الرقم (١٩٩040) .
            </p>
        </div>
    </div>

</div>
@php
    $array_chunks = [];
    $total_sections = \App\Models\DocumentSection::where('document_id', $doc->id)->get();
    $sections_count = count($total_sections);
    $sections = [];
    foreach ($total_sections as $section) {
        $sec_arr = ['title' => $section->title, 'table_no' => $section->table_no, 'page_no' => $section->page_no];
        array_push($sections, $sec_arr);
        if (!empty($section->sub_sections)) {
            $sub_secs = json_decode($section->sub_sections);
            $sections_count += count($sub_secs);
            foreach ($sub_secs as $key => $subSec) {
                array_push($sections, ['title' => $subSec->title, 'table_no' => $section->table_no . '.' . ++$key, 'page_no' => $section->page_no + $key]);
            }
        }
    }

    if (count($sections) >= 23) {
        $array_chunks = array_chunk($sections, 23);
    } else {
        $array_chunks[] = $sections;
    }
@endphp
@foreach($array_chunks as $factory => $array)
    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $page_img }}" class="full-width-image min_page"/>
            {{-- <div class="mun_logo">
                <img src="{{ public_path($doc->mun_logo) }}" class="mun_logo_img" />
            </div> --}}
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>

            <div class="table_content">
                <div class="sec_title">
                    <h4 class="text-blue table-header">
                        فهرس محتوي الكراسة :
                    </h4>
                </div>
                <table>
                    <thead>
                    <th class="text-center" style="width: 10%">
                        م
                    </th>
                    <th class="text-right pr-1" style="width: 80%">
                        المحتوي
                    </th>
                    <th class="text-center" style="width: 10%">
                        الصفحة
                    </th>
                    </thead>
                    <tbody>
                    @foreach($array as $key => $element)
                        <tr>
                            <td class="text-center" style="width: 10%">
                                {{ $element['table_no'] }}
                            </td>
                            <td class="text-right pr-1" style="width: 80%">
                                {!!  str_replace(':', ' ', $element['title']) !!}
                            </td>
                            <td class="text-center" style="width: 10%">
                                {{ $element['page_no'] }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endforeach


</body>

</html>
