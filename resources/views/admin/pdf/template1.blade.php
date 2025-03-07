<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @font-face {
            font-family: theSans;
            src: url('{{ storage_path("/app/public/TheSansArabic-Light.ttf") }}') format('truetype');
        }

        @font-face {
            font-family: theSansLight;
            src: url('{{ storage_path("/app/public/TheSansArabic-Light.ttf") }}') format('truetype');
        }

        @page {
            size: 21cm 29.7cm;
            margin: 0;
            /* change the margins as you want them to be. */
        }

        .cover-page {
            width: 21cm;
            height: 29.7cm;
            direction: rtl;
        }

        * {
            font-family: 'theSansLight';
        }

        body {
            margin: 0;
        }

        .header {
            padding-top: 85mm;
            text-align: center;
        }

        .text-blue {
            color: #28889E !important;
        }

        .text-white {
            color: white !important;
        }

        @media print {
            .page {
                width: 21cm;
                height: 29.7cm;
                margin: 0;
                /* change the margins as you want them to be. */
            }
        }
    </style>
</head>

<body dir="rtl">
    @php

        $cover_img = "data:image/png;base64," . base64_encode(file_get_contents(url($doc->cover_img)));
        // $page_img = "data:image/png;base64," . base64_encode(file_get_contents(url($doc->page_img)));
        // //$page_img = "";
    @endphp
    <div class="page cover-page" style="background-image: url('{{ $cover_img }}'); background-size: cover; background-repeat: no-repeat;background-position: center;">
        <div class="header">
            <h3 class="text-white text-center">
                {{ $doc->first_title }}
            </h3>
            <h3 class="text-white text-center">
                {{ $doc->mun_name }}
            </h3>
            <h2 class="text-blue text-center" style="direction: rtl; margin-bottom: 10px;">
                كراسة الشروط و المواصفات
            </h2>
            <h2 class="text-white text-center" style=" margin-bottom: 10px;">
                إنشاء و تشغيل وصيانة
            </h2>
            <h2 class="text-blue text-center" style=" margin-bottom: 10px;">
                {{ $doc->type_name }}
            </h2>
            @php
                $land = json_decode($doc->land_spec);
            @endphp
            @php
                $text = "اسم الحي ( " .$land->district." ) - رقم المخطط ( ".$land->planned." ) - رقم القطعة ( ".$land->no." )";
            @endphp
            <div style="direction: rtl; display: flex">
                <p class="text-white p-sm mt-10 f-size-12 text-center" style="direction:rtl; display: inline">
                   {{ $text }}
                </p>
               
            </div>

            <p dir="rtl" class="text-white p-sm mt-10 f-size-12 text-center" style="margin-bottom: 10px;">
                المساحة ( {{ $land->area }} ) م2
            </p>

            <p dir="rtl" class="text-white p-sm mt-10 text-center f-size-12" style="margin-bottom: 10px;">
                <span>رقم المنافسة </span>
                <span>( ...................................... )</span>
                <span> لعام 1446 هـ </span>
            </p>
        </div>
    </div>
</body>

</html>