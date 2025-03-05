<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>كراسة الشروط</title>

    <style>
        @font-face {
            font-family: 'TheSansArabic';
            src: url("{{ url('fonts/TheSansArabic-Light.ttf') }}") format('truetype');
        }

        @page {
            margin: 0px;
            padding: 0px;

        }

        * {
            font-family: 'TheSansArabic', sans-serif !important;
            
        }

        body {
            direction: rtl !important;
            text-align: right !important;
            margin: 0;
        }


        p {
            line-height: 20px;
        }

        p,
        li {
            font-family: 'TheSansArabic', sans-serif !important;
            font-weight: bold;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'TheSansArabic', sans-serif !important;
        }

        .mun_logo {
            position: absolute;
            right: 0;
            left: 0;
            top: 50px;
            margin: auto;
            text-align: center;

        }

        .mun_logo_img {
            width: auto;
            height: 100px;

        }

        .page {
            width: 210mm;
            height: 297mm;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: auto;
            page-break-after: always;
            /* يفصل كل صفحة عند الطباعة */
        }

        .page-sm {
            width: 210mm;
            height: 257mm;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: auto;
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
            font-family: 'TheSansArabic', sans-serif !important;
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
            margin-top: 35px;
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
                font-family: 'TheSansArabic', sans-serif !important;
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

<body id="body">
    @php
        $path = public_path($doc->cover_img);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $cover_bg = 'data:image/' . $type . ';base64,' . base64_encode($data);

       

        $img_bg = url($doc->page_img);
        


        $mun_logo = ''; //url($doc->mun_logo);
       



        $sketching_img =   url($doc->sketching_img);
        



        $descripeImg =    url($doc->descripe_img);
       

       
      
    @endphp
    <div class="page cover">
        <div class="cover-image">
            <img src="{{ $cover_bg }}" class="full-width-image" />
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
                <img src="{{ $img_bg }}" class="full-width-image min_page" />
                {{-- <div class="mun_logo">
                    <img src="{{ url($doc->mun_logo) }}" class="mun_logo_img" />
                </div> --}}
                <div class="right-header">
                    <p class="text-blue f-bold f-size-10">
                        كراسة الشروط والمواصفات
                    </p>
                    <p class="text-blue f-bold f-size-10">
                        إنشاء و تشغيل و صيانة <span> {{ $doc->type_name }}</span> ببلدية <span> {{ $doc->mun_name }} </span>
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

    @foreach($doc->sections as $section)

        @php
            $chunkSubSecs = [];
            if (!empty($section->sub_sections)) {
                $sub_sec_array = json_decode($section->sub_sections);
                if (count($sub_sec_array) >= 4) {
                    if ($section->prePageTitle == 'الاشتراطات الخاصة') {
                        $firstChunk = array_slice($sub_sec_array, 0, 2);
                        $chunkSubSecs = array_chunk(array_slice($sub_sec_array, 2), 1);

                    } else if ($section->prePageTitle == 'الاشتراطات العامة') {
                        $firstChunk = array_slice($sub_sec_array, 0, 8);
                        $chunkSubSecs = array_chunk(array_slice($sub_sec_array, 8), 8);
                    } else if ($section->prePageTitle == 'الاشتراطات الفنية') {
                        $firstChunk = array_slice($sub_sec_array, 0, 1);
                        $chunkSubSecs = array_chunk(array_slice($sub_sec_array, 1), 1);
                    } else {
                        $firstChunk = array_slice($sub_sec_array, 0, 5);
                        $chunkSubSecs = array_chunk(array_slice($sub_sec_array, 5), 4);

                    }
                    $result = [$firstChunk];
                    $chunkSubSecs = array_merge($result, $chunkSubSecs);
                } else {
                    $chunkSubSecs[] = json_decode($section->sub_sections);
                }
            }

        @endphp

        @if($section->hasPrePage == 1)
            <div class="page-sm table">
                <div class="cover-image">
                    <img src="{{ $img_bg }}" class="full-width-image min_page" />
                    <div class="mun_logo">
                        <img src="{{ $mun_logo }}" class="mun_logo_img" />
                    </div>
                    <div class="right-header">
                        <p class="text-blue f-bold f-size-10">
                            كراسة الشروط والمواصفات
                        </p>
                        <p class="text-blue f-bold f-size-10">
                            (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                        </p>
                    </div>

                    <div class="table_content">
                        <h1 class="prePageTitle text-blue">
                            {{ $section->prePageTitle }}
                        </h1>
                    </div>
                </div>
            </div>
        @endif
        @if($section->contain_table == 1)
            @php
                $table_headers = explode(',', $section->table_headers);
                $tbl = json_decode($section->table_body);
                $secChunks = [];

                if (gettype($tbl) == 'array' && count($tbl) >= 20) {
                    $secChunks = array_chunk($tbl, 20);
                } else {
                    $secChunks[] = $tbl;
                }

            @endphp
            @foreach($secChunks as $key => $chunk)
                <div class="page-sm table">
                    <div class="cover-image">
                        <img src="{{ $img_bg }}" class="full-width-image min_page" />
                        <div class="mun_logo">
                            <img src="{{ $mun_logo }}" class="mun_logo_img" />
                        </div>
                        <div class="right-header">
                            <p class="text-blue f-bold f-size-10">
                                كراسة الشروط والمواصفات
                            </p>
                            <p class="text-blue f-bold f-size-10">
                                (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                            </p>
                        </div>

                        <div class="table_content">
                            <h4 class="sec_title text-blue">
                                {{ $section->table_no }} . {{ $section->title }} :
                            </h4>
                            <p class="sec_desc" style="{{ empty($doc->notes) ? 'line-height: 20px' : '' }}">
                                {!!  $section->description !!}
                            </p>
                            @if($section->contain_table == 1)
                                <table>
                                    <thead>
                                        @foreach($table_headers as $key => $head)
                                            <th style="width:{{ $key == 1 ? '70%' : '10%' }}"
                                                class="{{ $key == 1 ? 'text-right pr-1' : 'text-center' }}">
                                                {{ $head }}
                                            </th>
                                        @endforeach
                                    </thead>
                                    <tbody>

                                        @if(gettype($tbl) == 'array')
                                            @foreach($chunk as $tb)

                                                <tr>
                                                    @foreach($table_headers as $ilt => $header)
                                                        <td class="{{ $ilt == 1 ? 'text-right pr-1' : 'text-center' }}">{!! $tb->$header ?? '' !!}
                                                        </td>
                                                    @endforeach
                                                </tr>

                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            @endif

                            @if(!empty($section->sub_sections))

                                @php 
                                    $sub_sec = $chunkSubSecs[0];

                                @endphp
                                @if(gettype($sub_sec) == 'array')
                                    @foreach($sub_sec as $sec)
                                        <div class="sub_sec">
                                            <h4 class="sec_title text-blue" style="margin: 5px">
                                                {!! $sec->title !!}
                                            </h4>
                                            <div class="sec_desc" style="margin: 5px">
                                                {!! $sec->content !!}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                            @if(!empty($section->notes))
                                <h4 class="sec_title text-blue">
                                    الملاحظات
                                </h4>
                                <p class="sec_desc">
                                    {!! $section->notes !!}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="page-sm table">
                <div class="cover-image">
                    <img src="{{ $img_bg }}" class="full-width-image min_page" />
                    <div class="mun_logo">
                        <img src="{{ $mun_logo }}" class="mun_logo_img" />
                    </div>
                    <div class="right-header">
                        <p class="text-blue f-bold f-size-10">
                            كراسة الشروط والمواصفات
                        </p>
                        <p class="text-blue f-bold f-size-10">
                            (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                        </p>
                    </div>

                    <div class="table_content">
                        <h4 class="sec_title text-blue">
                            {{ $section->table_no }} . {{ $section->title }} :
                        </h4>
                        <p class="sec_desc">
                            {!!  $section->description !!}
                        </p>
                        @if($section->contain_table == 1)
                                @php
                                    $table_headers = explode(',', $section->table_headers);
                                    $tbl = json_decode($section->table_body);
                                @endphp
                                <table>
                                    <thead>
                                        @foreach($table_headers as $head)
                                            <th class="text-center">
                                                {{ $head }}
                                            </th>
                                        @endforeach
                                    </thead>
                                    <tbody>
                                        @if(gettype($tbl) == 'array')
                                            @foreach($tbl as $tb)
                                                <tr class="text-center">
                                                    @foreach($table_headers as $header)
                                                        <td>{{ $tb->$header ?? '' }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                        @endif

                        @if(!empty($section->sub_sections))
                            @php 
                                $sub_sec = $chunkSubSecs[0];

                            @endphp
                            @if(gettype($sub_sec) == 'array')
                                @foreach($sub_sec as $sec)
                                    <div class="sub_sec">
                                        <h4 class="sec_title text-blue">
                                            {!! $sec->title !!}
                                        </h4>
                                        <p class="sec_desc">
                                            {!! $sec->content !!}
                                        </p>
                                    </div>
                                @endforeach
                            @endif
                        @endif

                        @if(!empty($section->notes))
                            <h4 class="sec_title">
                                الملاحظات
                            </h4>
                            <p class="sec_desc">
                                {!! $section->notes !!}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        @if(count($chunkSubSecs) > 1)
            @foreach($chunkSubSecs as $key => $subSec)
                @if($key != 0)
                    <div class="page-sm table">
                        <div class="cover-image">
                            <img src="{{ $img_bg }}" class="full-width-image min_page" />
                            <div class="mun_logo">
                                <img src="{{ $mun_logo }}" class="mun_logo_img" />
                            </div>
                            <div class="right-header">
                                <p class="text-blue f-bold f-size-10">
                                    كراسة الشروط والمواصفات
                                </p>
                                <p class="text-blue f-bold f-size-10">
                                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                                </p>
                            </div>

                            <div class="table_content">

                                <h4 class="sec_title text-blue">
                                    {{ $section->table_no }} . {{ $section->title }} :
                                </h4>


                                @if(!empty($section->sub_sections))


                                    @foreach($subSec as $sec)
                                        <div class="sub_sec">
                                            <h4 class="sec_title text-blue">
                                                {!! $sec->title !!}
                                            </h4>
                                            <p class="sec_desc">
                                                {!! $sec->content !!}
                                            </p>
                                        </div>
                                    @endforeach

                                @endif


                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif



    @endforeach

    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>

            <div class="table_content">
                <h1 class="prePageTitle text-blue">
                    المرفقات
                </h1>
            </div>
        </div>
    </div>

    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>

            <div class="table_content">

                <h4 class="sec_title text-blue">
                    10 . المرفقات
                </h4>
                <p class="sec_title text-blue">
                    1.10 نموذج عطاء يقدم إلكترونيا في المنافسة
                </p>

                <div class="table-content">
                    <p>
                        سعادة رئيس بلدية {{ $doc->mun_name }} المحترم.
                        إشارة إلى إعلانكم المنشور بالصحف بتاريخ / / 14 هـ المتضمن رغبتكم بتأجير موقع لإنشاء وتشغيل
                        {{ $doc->type }} في مدينة {{ $doc->mun_name }} بغرض استثماره من خلال المنافسة.
                        وحيث تم شراؤنا لكراسة شروط ومواصفات المنافسة بموجب الإيصال المرفق صورته واطلعنا على كافة
                        الاشتراطات الخاصة بهذه المنافسة، كما تم معاينة العقار على الطبيعة معاينة تامة نافية للجهالة.
                        نتقدم لسعادتكم بعرضنا لاستئجار العقار الموضح أعلاه بأجرة سنوية قدرها ( ) ( ريال) غير شامل ضريبة
                        القيمة المضافة.

                    </p>

                    <table>
                        <tr>
                            <th colspan="2">
                                قيمة الأجرة السنوية (ريال) غير شامل ضريبة القيمة المضافة
                            </th>
                            <th colspan="2">
                                القيمة الإجمالية لكامل مدة العقد غير شامل ضريبة القيمة المضافة
                            </th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>
                                    رقما
                                </td>
                                <td>
                                    كتابة
                                </td>
                                <td>
                                    رقما
                                </td>
                                <td>
                                    كتابة
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        وتجدون برفقه كراسة الشروط والمواصفات بعد توقيع جميع صفحاتها من قبلنا وضمان بنكي بقيمة لا تقل عن
                        (25 %) من العطاء السنوي وكافة المستندات المطلوبة في كراسة الشروط والمواصفات.
                    </p>
                    <table>
                        <tr>
                            <td style="width: 25%">
                                إسم الشركة
                            </td>
                            <td colspan="5">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                رقم السجل التجاري
                            </td>
                            <td colspan="5">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                صادرة من
                            </td>
                            <td style="width:15%"></td>
                            <td>
                                بتاريخ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                نوع النشاط
                            </td>
                            <td colspan="5">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                هاتف
                            </td>
                            <td style="width: 15%">

                            </td>

                            <td>
                                فاكس
                            </td>
                            <td style="width: 15%">

                            </td>

                            <td>
                                جوال
                            </td>
                            <td style="width: 15%">

                            </td>
                        </tr>
                    </table>
                    <p>
                        العنوان:
                    </p>
                    <p>...........................................................................................</p>
                    <p>...........................................................................................</p>

                    <table style="border-color: white">
                        <tr style="border-color: white">
                            <td style="border-color: white">
                                الاسم
                            </td>
                            <td style="border-color: white">
                                التوقيع
                            </td>
                        </tr>
                    </table>
                </div>


            </div>
        </div>
    </div>



    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">
                <h4 class="text-blue">
                    2.10 المخطط العام للموقع
                </h4>
                <img src="{{ $sketching_img }}" style="width: auto; height: 455px;" />
            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">
                <h4 class="text-blue">
                    بطاقة وصف الموقع
                </h4>
                <img src="{{ $descripeImg }}" style="width: auto;
    height: 750px;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;" />
            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">
                <h4 class="text-blue">
                    3.10 نموذج محضر تسليم عقار للمستثمر:
                </h4>
                <table>
                    <tr>
                        <td colspan="4" class="text-center">
                            محضر تسليم عقار
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            الرقم
                        </td>
                        <td colspan="3">

                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            التاريخ: / / 14 هـ
                        </td>
                        <td colspan="3">

                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            العقار رقم
                        </td>
                        <td colspan="3">

                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            بلدية
                        </td>
                        <td colspan="3">

                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            رقم عقد التأجير
                        </td>
                        <td>

                        </td>
                        <td style="width: 25%">
                            تاريخه
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            اسم المستثمر
                        </td>
                        <td colspan="3">

                        </td>
                    </tr>
                </table>

                <p class="text-center">
                    إقرار
                </p>
                <p>
                    أقر بأنني قد استلمت بموجب هذا المحضر العقار المذكورة بياناته عالية
                    ........................................
                    بتاريخ / / 14 هـ لاستخدامه في إقامة وإدارة وتشغيل سوق تجاري بموجب عقد الإيجار المبرم مع بلدية
                    ............................. وقد قمت بمعاينته معاينه تامة نافية للجهالة شرعاً وبأنني قبلته على
                    حالته في تاريخ استلامه.
                    (ويشمل ذلك الأرض والموقع والمنشآت والملحقات وأية تجهيزات أخري)
                    وعليه أوقع

                </p>

                <p>
                    التوقيع:.........................
                </p>
                <p>
                    رئيس بلدية:..................
                </p>
                <p>
                    التوقيع:.........................
                </p>


            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">
                <p> يقر المستثمر بما يلي: </p>
                <ul>
                    <li style="color:black; padding:0">
                        <p> اطلع على كراسة الشروط والمواصفات ومرفقاتها وأنه ملتزم بما جاء بها. </p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> يحق للبلدية تقدير قيمة العائد الاستثماري للأسواق وفقاً للأسعار السائدة للسوق العقاري.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> اطلع على لائحة التصرف بالعقارات البلدية الصادرة بموجب الأمر السامي الكريم رقم (40152) بتاريخ
                            29/06/1441 هـ وتعليماتها التنفيذية الصادرة بالقرار الوزاري رقم (4100561883) وتاريخ
                            22/12/1441 هـ والقرارات والتعاميم ذات الصلة.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> اطلع على لائحة الغرامات والجزاءات البلدية الصادرة بقرار مجلس الوزارء الموقر رقم (92) وتاريخ
                            05/02/1442 هـ والقرار الوزاري رقم (4300204526) وتاريخ 12/03/1443 هـ المبلغ به القواعد
                            التنفيذية للائحة الجزاءات عن المخالفات البلدية وجدول المخالفات والجزاءات البلدية الصادرة عن
                            وزارة البلديات والإسكان رقم ( 1/٤٤۰۰۹۰٥٨٥٤) وتاريخ 26/11/1444 هـ وما يستجد عليها من تعديلات
                            أو تحديثات.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> اطلع على اشتراطات المجمعات التجارية والأسواق الشعبية وما في حكمها الصادرة بالقرار الوزاري
                            رقم (1/4600315690) وتاريخ 02/06/1446هـ وما يستجد عليها من تعديلات أو تحديثات.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> اطلع على اشتراطات البقالات والتموينات والأسواق المركزية وما في حكمها الصادرة بالقرار الوزاري
                            رقم (57534) وتاريخ 19/11/1440هـ وما يستجد عليها من تعديلات أو تحديثات.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> اطلع على اشتراطات اللوحات التجارية العامة الصادرة بتعميم معالي وزير البلديات والإسكان رقم
                            (1/4200079475) وتاريخ 26/02/1442 هـ وما يستجد عليها من تعديلات مستقبلية.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> عاين الموقع معاينة تامة نافية للجهالة.</p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> الإلتزام بالأنظمة واللوائح والتعليمات الصادرة عن الأجهزة الحكومية ذات العلاقة بالنشاط. </p>
                    </li>
                    <li style="color:black; padding:0">
                        <p> يجب أن تكون جميع الخدمات بالموقع باسم المستثمر ويتم تسليمها للبلدية بعد سداد كافة الفواتير
                            والمستحقات للجهات ذات العلاقة.</p>
                    </li>

                </ul>
                <p>
                    التوقيع :
                </p>
            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">
                <h4 class="sec_title text-blue">
                    5.10 نموذج العقـــد:
                </h4>
                <div class="tex-right spec_right">
                    رقم العقد: ..................................
                    <br>
                    تاريخ العقد: ................................

                </div>
                <br>
                <h4 class="sec_title text-blue text-center">
                    عقد تأجير
                </h4>
                <p>
                    إنه في يوم................................الموافق......./......./.................تم هذا العقد بين
                    كل من:
                </p>
                <p>
                    1. بلدية .......وعنوانها الرئيس الموضح أدناه ويمثلها في التوقيع على هذا العقد .................
                    بصفته ...........
                    <br />والمُشار إليه بعد بالطرف الأول أو البلدية:
                    <br />عنوان الطرف الأول
                    <br />العنوان:
                    <br />هاتف:
                    <br />فاكس:
                    <br />ص.ب:
                    <br />المدينة:
                    <br />الرمز البريدي:
                    <br />البريد الإلكتروني:

                </p>
                <p>
                    2. ........................وهو .........................برقم
                    ............................بتاريخ............... وعنوانه الرئيسي الموضح أدناه ويمثلها في التوقيع
                    على هذا العقد .............برقم هوية ........ والمُشار إليه فيما بعد بالطرف الثاني أو المستثمر.
                    <br />عنوان الطرف الثاني
                    <br />العنوان:
                    <br />هاتف:
                    <br />فاكس:
                    <br />ص.ب:
                    <br />المدينة:
                    <br />الرمز البريدي:
                    <br />البريد الإلكتروني:
                    <br />بناء على الإجراءات الإلكترونية المنتهية بقرار لجنة الاستثمار رقم ...... .......
                    وتاريخ...../...../.........هـ القاضي بقبول الطلب المُقدم من الطرف الثاني لاستثمار العقار الموضحة
                    بياناته، فقد اتفق الطرفان على ما يلي:

                </p>
            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">

                <table>
                    <tr>
                        <th>المادة الأولى</th>
                        <th>تعريف لمفردات العقد.</th>
                    </tr>
                    <tr>
                        <td>الموقع</td>
                        <td>هو الأرض المملوكة للبلدية والمحددة أماكنها في هذا العقد.</td>
                    </tr>
                    <tr>
                        <td>العقار</td>
                        <td>هو الأرض الموضحة بياناتها أدناه في وصف العقار.</td>
                    </tr>
                    <tr>
                        <td>المشروع</td>
                        <td>هو إدارة وتشغيل وصيانة سوق تجاري من قبل المستثمر بالموقع المحدد وحسب النشاط المحدد.</td>
                    </tr>
                    <tr>
                        <td>الجهات ذات العلاقة</td>
                        <td>هي الجهات الحكومية وغير الحكومية ولها علاقة بالمشروع من الناحية التنظيمية، أو الرقابية، أو
                            الفنية، أو التي تقدم الخدمات الأساسية للمشروع.</td>
                    </tr>
                    <tr>
                        <td>الكراسة</td>
                        <td>كراسة الشروط والمواصفات.</td>
                    </tr>
                    <tr>
                        <th>المادة الثانية</th>
                        <th>مستندات العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>1. كراسة الشروط والمواصفات الفنية وملحقاتها.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>2. نموذج العطاء المقدم من الطرف الثاني.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>3. الرسومات والمواصفات والتصاميم المقدمة من الطرف الثاني.</td>
                    </tr>
                    <tr>
                        <th>المادة الثالثة</th>
                        <th>وصف العقار.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>بموجب هذا العقد قام الطرف الأول بتأجير الطرف الثاني العقار الوارد بياناتها فيما يلي:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>المدينة: الحي:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>الشارع: رقم المخطط: رقم القطعة:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>حدود العقار:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>مساحة العقار:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>المساحة الإجمالية: متر مربع مساحة المباني.</td>
                    </tr>
                    <tr>
                        <th>المادة الرابعة</th>
                        <th>الغرض من العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>الغرض من العقد هو استثمار الموقع الموضحة بياناته أعلاه لإنشاء وإدارة وتشغيل سوق تجاري ولا
                            يجوز استخدامه لغير الغرض المخصصة له.</td>
                    </tr>

                    <tr>
                        <th>المادة الخامسة</th>
                        <th>مدة العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>مدة العقد ( ) سنة / سنين تبدأ من تاريخ تسلم المستثمر للعقار من الأمانة / البلدية، بموجب محضر
                            تسليم موقع من الطرفين أو من تاريخ إرسال الإشعار في حالة تأخر المستثمر عن التوقيع على محضر
                            استلام العقار.</td>
                    </tr>
                    <tr>
                        <th>المادة السادسة</th>
                        <th>فترة التجهيز والإنشاء.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>يعطى المستثمر فترة ( ) للتجهيز والإنشاء، وهي تعادل % من المدة المحددة في المادة الخامسة من
                            العقد، وهي فترة زمنية غير مدفوعة الأجرة وإذا لم يكمل المستثمر إنشاء المشروع فعليه في هذه
                            الحالة سداد قيمة عطائه المالي عن هذه الفترة.</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">

                <table>

                    <tr>
                        <th>المادة السابعة</th>
                        <th>الإيجار السنوي وضريبة القيمة المضافة.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>يلتزم المستثمر بسداد الآتي لصالح الطرف الأول:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>أ. مبلغ الإيجار السنوي للعقار ريال ( ريال فقط) على أن يتم سداد إيجار السنة الأولى عند توقيع
                            العقد، أما أجور السنوات التالية، فيتم سدادها في بداية كل سنة، وبحد أقصى عشرة أيام من بداية
                            السنة.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>ب. مبلغ ضريبة القيمة المضافة حسب الأنظمة والتعليمات السارية ذات العلاقة.</td>
                    </tr>

                    <tr>
                        <th>المادة الثامنة</th>
                        <th>التزامات المستثمر.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>يلتزم الطرف الثاني المستثمر بموجب هذا العقد بما يلي:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>1. الحصول على التراخيص اللازمة من البلدية ومن الجهات الأخرى ذات العلاقة قبل البدء فى تنفيذ
                            المشروع.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>2. تنفيذ المشروع خلال المدة المحددة للتجهيز والإنشاء.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>3. توفير وسائل الأمن والسلامة اللازمة لحماية الأشخاص والممتلكات الخاصة والعامة حسب تعليمات
                            الجهات ذات العلاقة.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>4. تنفيذ المشروع وفقاً للشروط والمواصفات والمخططات المرفقة بهذا العقد.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>5. الحصول على موافقة البلدية على اسم الجهة الاستشارية المكلفة بالإشراف على تنفيذ المشروع،
                            والتأكد من تنفيذه وفقاً للشروط والمواصفات والمخططات المتفق عليها.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>6. الحصول على الموافقة الخطية من البلدية قبل عمل أية إضافات أو تعديلات يراها ضرورية للمشروع.
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>7. سداد الرسوم والضرائب المتعلقة بأنشاء وتشغيل المشروع وتحمل تكاليف توصيل الخدمات للموقع.
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>8. تشغيل وصيانة المشروع وفقا للشروط والمواصفات المحددة من البلدية ومن الجهات ذات العلاقة.
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>9. سداد الأجرة السنوية وفق المادة السابعة من هذا العقد.</td>
                    </tr>
                    <tr>
                        <th>المادة التاسعة</th>
                        <th>
                            </td>الرقابة على تنفيذ العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>للبلدية والجهات ذات العلاقة الحق في الرقابة على المشروع في أي وقت خلال مدة العقد. ويلتزم
                            الطرف الثاني بجميع تعليمات الجهة المشرفة على التنفيذ المعينة من الطرف الأول.</td>
                    </tr>
                    <tr>
                        <th>المادة العاشرة</th>
                        <th>الإلتزام بالنشاط المحدد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>لا يجوز للمستثمر استخدام الموقع لغير الغرض المخصص له والوارد فى المادة الرابعة من هذا العقد.
                        </td>
                    </tr>
                    <tr>
                        <th>المادة الحادية عشر</th>
                        <th>التنازل عن العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>لا يحق للمستثمر تأجير الموقع المؤجر له على الغير، أو التنازل عن العقد إلا بموافقة خطية من
                            البلدية.</td>
                    </tr>
                    <tr>
                        <th>المادة الثانية عشر</th>
                        <th>الغرامات والجزاءات.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>في حالة حدوث مخالفات من المستثمر تطبق عليه الجزاءات البلدية والصادرة بموجب لائحة الجزاءات عن
                            المخالفات البلدية الصادرة بقرار مجلس الوزراء رقم 92 في 5/2/1443 هـ، وما يستجد عليها من
                            تعليمات وأوامر ذات صلة.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="page-sm table">
        <div class="cover-image">
            <img src="{{ $img_bg }}" class="full-width-image min_page" />
            <div class="mun_logo">
                <img src="{{ $mun_logo }}" class="mun_logo_img" />
            </div>
            <div class="right-header">
                <p class="text-blue f-bold f-size-10">
                    كراسة الشروط والمواصفات
                </p>
                <p class="text-blue f-bold f-size-10">
                    (إنشاء وتشغيل وصيانة سوق تجاري ببلدية {{ $doc->mun_name }})
                </p>
            </div>
            <div class="table_content">
                <table>

                    <tr>
                        <th>المادة الثالثة عشر</th>
                        <th>فسخ العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>يجوز فسخ العقد مع بقاء حق البلدية في الرجوع إلى المستثمر فيما لحقها من ضرر بسبب ذلك في أي من
                            الحالات التالية:</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>إذا تأخر المستثمر عن البدء في التنفيذ خلال فترة التجهيز والإنشاء المسموح بها.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>إذا استخدم الموقع لنشاط يخالف النشاط المتفق عليه في العقد، أو قام بتأجير النشاط كلياً أو
                            جزئياً، أو تنازل عنه للغير دون موافقة خطية من البلدية، وذلك بعد إنذاره لتصحيح الوضع، ومضى
                            خمسة عشر يوماً من تاريخ إخطاره بالإنذار.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>إذا تأخر في تسديد الأجرة عن المدة المحددة له بعد إنذاره، ومضى خمسة عشر يوماً من تاريخ إخطاره
                            بالإنذار.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>إذا ثبت أن المستثمر قد شرع بنفسه أو بوساطة غيره بطريق مباشر أو غير مباشر في رشوة أحد موظفي
                            البلدية للحصول على العقد.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>إذا أفلس، أو طلب إشهار إفلاسه، أو ثبت إعساره، أو صدر أمر بوضعه تحت الحراسة، أو جرى حل الشركة
                            وتصفيتها.</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>إذا توفى المستثمر، ولم يتقدم ورثته خلال شهرين من وفاته بطلب للاستمرار في تنفيذ العقد.</td>
                    </tr>
                    <tr>
                        <th>المادة الرابعة عشر</th>
                        <th>إلغاء العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>يجوز للبلدية بعد موافقة وزير البلديات والإسكان إلغاء العقد، قبل إنتهاء مدة التأجير أو
                            الاستثمار، لأسباب تتعلق بالمصلحة العامة، بعد إشعار المستأجر أو المستثمر بذلك، وانقضاء ثلاثة
                            أشهر من تاريخ إشعاره.</td>
                    </tr>
                    <tr>
                        <th>المادة الخامسة عشر</th>
                        <th>المنشآت المقامة على العقار.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>تؤول ملكية المنشآت والتجهيزات المقامة على العقار بعد إنتهاء مدة العقد البلدية، وعلى المستثمر
                            تسليمها بحالة جيدة، ويتم الاستلام بعمل محضر تسليم للمنشآت والتجهيزات بكاملها، يثبت فيه
                            صلاحيتها للعمل بشكل جيد ويوقع من الطرفين.</td>
                    </tr>
                    <tr>
                        <th>المادة السادسة عشر</th>
                        <th>مرجع العقد.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>فيما لم يرد فيه نص في هذا العقد تسري أحكام لائحة التصرف بالعقارات البلدية المُحدثة الصادرة
                            بموجب الأمر السامي رقم (40152) وتاريخ 29/06/1441 هـ وتحديثاتها المعدلة بتاريخ 18/07/1442 هـ
                            ورقم (48843) وتاريخ 26/08/1442 هـ وتعليماتها التنفيذية الصادرة بالقرار الوزاري رقم
                            (4100561883) وتاريخ 22/12/1441 هـ.</td>
                    </tr>
                    <tr>
                        <th>المادة السابعة عشر</th>
                        <th>الفصل في النزاع بين الطرفين.</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>في حالة وجود خلاف بين الطرفين فيما يتعلق بتنفيذ بنود هذا العقد فإن ديوان المظالم هو الجهة
                            المختصة بالفصل فيه.</td>
                    </tr>
                    <tr>
                        <th>المادة الثامنة عشر</th>
                        <th>شروط أخرى.</th>
                    </tr>
                    <tr>
                        <th>المادة التاسعة عشر</th>
                        <td>يقر الطرفان أن العنوان الموضح بصدر هذا العقد، هو العنوان الذي يمكن للطرف الأول أن يرسل عليه
                            المراسلات والمكاتبات إلى الطرف الثاني بخصوص هذا العقد، ويكون الطرف الثاني قد استلمها بمجرد
                            إرسالها إليه على العنوان المذكور، وفى حالة تغييره يتم إخطار الطرف الأول بخطاب مسجل.</td>
                    </tr>
                </table>
                <br /><br />
                <p class="text-center" style="font-size: 18px !important">
                    والله ولى التوفيق ،،،
                </p>
                <p style="font-size: 16px !important">
                    حرر هذا العقد بتاريخ <span style="letter-spacing: 18px"> / / </span> من ثلاث نسخ أصلية سُلمت منها
                    نسخة للطرف الثاني
                    واحتفظ الطرف الأول بنسختين.

                </p>
            </div>
        </div>
    </div>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        const element = document.getElementById("body");
        html2pdf().from(element).save('download.pdf');
    });
</script>
</html>