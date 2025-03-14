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

        <div class="table_content">
            <h1 class="prePageTitle text-blue">
                واجبات المستثمر قبل إعداد العرض
            </h1>
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


<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">4</div>
            <h2 class="text">واجبات المستثمر قبل إعداد العرض:</h2>
        </div>
        <div class="list-item">
            <div class="number-main">1.4</div>
            <h2 class="text">دراسة الشروط الواردة بالكراسة:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">على المستثمر دراسة بنود كراسة الشروط والمواصفات الواردة دراسة وافية ودقيقة، وإعداد العرض وفقا لما تقضي به هذه الشروط والمواصفات، وعدم الإلتزام بذلك يعطي الحق للبلدية في استبعاد العطاء.</div>
        </div>
    </div>
    
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">2.4</div>
            <h2 class="text">الاستفسار حول بيانات المنافسة:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">في حالة غموض أو عدم وضوح أي بند من بنود المنافسة، يجب على مقدم العطاء (المستثمر) الاستفسار من البلدية إلكترونياً عن طريق بوابة الاستثمار في المدن السعودية "<span class="bold">فرص</span>" للحصول على الإيضاح اللازم قبل تقديمه لعطائه، وذلك بمدة لا تقل عن عشرة أيام من التاريخ النهائي المحدد لتقديم العطاءات، وستقوم البلدية بالرد على الاستفسارات كتابة لكل من اشترى كراسة الشروط والمواصفات في موعد أقصاه خمسة أيام قبل الموعد المحدد لفتح المظاريف، ولن يعول على أية استفسارات أو إجابات شفوية، وحيث يمكن لمقدم العطاء تقديم الاستفسارات عن طريق الموقع الإلكتروني: <a href="http://furas.momra.gov.sa" target="_blank" rel="noopener noreferrer">furas.momra.gov.sa</a> أو عن طريق تطبيق الأجهزة الذكية "<span class="bold">فرص</span>" </div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">3.4</div>
            <h2 class="text">معاينة الموقع:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.3.4</div>
            <div class="text">على المستثمر وقبل تقديم عطائه أن يقوم بمعاينة الموقع محل المنافسة معاينة تامة نافية للجهالة، وفق الحدود المعتمدة، وأن يتعرف تعرفاً تاماً على الأوضاع السائدة به، ويعتبر المستثمر قد استوفى هذا الشرط بمجرد تقدمه بعطائه، بحيث لا يحق له لاحقاً الإدعاء أو الاحتجاج بأية جهالة بخصوص الموقع واشتراطاته ونظام البناء والأعمال المتعلقة به.</div>
        </div>
        <div class="list-item">
            <div class="number">2.3.4</div>
            <div class="text">على المستثمر التعرف على الموقع والحصول على كافة المعلومات والبيانات ومدى إمكانيات توصيل الخدمات والتي قد تؤثر على الجدوى الاستثمارية للمشروع قبل تقديم عطائه للمنافسة.</div>
        </div>
        <div class="list-item">
            <div class="number">3.3.4</div>
            <div class="text">يجب على المستثمر معاينة الموقع على الطبيعة والشخوص والوقوف عليه والتعرف عليه، وعليه إزالة الاشغالات على الموقع في حال وجودها، وتمهيده على حسابه دون تحمل البلدية لأي تكاليف مهما كانت.</div>
        </div>
        <div class="list-item">
            <div class="number">4.3.4</div>
            <div class="text">المساحة المذكورة أعلاه تقريبية تخضع للعجز والزيادة حسب استلام الموقع على الطبيعة.</div>
        </div>
    </div>

</x-page_template>
