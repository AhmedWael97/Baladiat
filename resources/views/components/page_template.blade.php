@props([
    'page_img' => '',
    'doc' => 'doc',
    'page_no' => ''
 ])
<div class="page-sm table">
    <div class="cover-image">
        <img src="{{ $page_img }}" class="full-width-image min_page" />
        <div class="mun_logo">
            <img src="{{ url($doc->mun_logo) }}" class="mun_logo_img" />
        </div>
        <div class="right-header">
            <p class="text-blue f-bold f-size-10">
                كراسة الشروط والمواصفات
            </p>
            <p class="text-blue f-bold f-size-10">
                إنشاء و تشغيل و صيانة <span> {{ $doc->type_name }}</span> ببلدية <span> {{ $doc->mun_name }} </span>
            </p>
        </div>

        <div class="table_content" style="margin-top: 15mm">
            {{ $slot }}
        </div>
        <div class="page-footer text-blue">
            الصفحة رقم (<span dir="ltr"
                style="direction: ltr; margin-right: 5px; margin-left: 5px;">{{ ++$page_no }}</span>)
        </div>
        <div class="text-footer text-blue">
            المنافسة رقم ( .... .... .... ) لعام <span dir="ltr">1446</span> هـ - الإصدار رقم 1
        </div>
    </div>
</div>
