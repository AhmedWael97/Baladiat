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
                ما يحق للبلدية وللمستثمر قبل وأثناء فتح المـظاريف
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
            <div class="number-main">5</div>
            <h2 class="text">ما يحق للبلدية وللمستثمر قبل وأثناء فتح المـظاريف:</h2>
        </div>
        <div class="list-item">
            <div class="number-main">1.5</div>
            <h2 class="text">إلغاء المنافسة وتعديل الشروط والمواصفات:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <dev class="text">يحق للبلدية إلغاء المنافسة قبل فتح المظاريف بعد أخذ موافقة صاحب الصلاحية إذا اقتضت المصلحة
                العامة ذلك أو لدواعي التخطيط، ويحق لها الإضافة أو الحذف أو التعديل لمضمون أي بند من بنود كراسة الشروط
                والمواصفات بموجب خطاب أو إخطار إلى جميع الشركات أو المؤسسات التي قامت بشراء كراسة الشروط والمواصفات،
                وذلك قبل فتح المظاريف، على أن تعتبر أية إضافة أو حذف أو تعديل تم إخطار الشركات أو المؤسسات به جزء لا
                يتجزأ من هذه الشروط والمواصفات وملزماً لجميع المتنافسين.</dev>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <dev class="text bold">كما يجوز للجنة الاستثمار التوصية بإلغاء المنافسة العامة في أي من الحالات الآتي
                بياناتها:</dev>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <dev class="text"><span class="bold">الأولى</span>: إذا اقتضت المصلحة العامة وفقا للائحة التصرف بالعقارات
                البلدية.</dev>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <dev class="text"><span class="bold">الثانـية</span>: إذا تبين للجنة أن جميع العروض المقدمة غير مناسبة.
            </dev>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <dev class="text"><span class="bold">الثالثـة</span>: إذا لم يتوصل إلى نتيجة عن طريق المفاوضة مع المتنافسين.
            </dev>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">2.5</div>
            <h2 class="text">تأجيل موعد فتح المظاريف:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يحق للبلدية تأجيل تاريخ وموعد فتح المظاريف إذا ما دعت الضرورة إلى ذلك، على أن يكون ذلك قبل
                موعد فتح المظاريف، وإذا تم ذلك فإن البلدية ستخطر جميع مقدمي العطاءات بالتأجيل إلكترونياً عبر بوابة
                الاستثمار في المدن السعودية "<span class="bold">فرص</span>".</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">3.5</div>
            <h2 class="text">سحب العطاء:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">لا يحق للمستثمر سحب عطاءه قبل موعد فتح المظاريف.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">4.5</div>
            <h2 class="text">تعديل العطاء:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">لا يجوز للمستثمر إجراء أي تعديل في عطائه بعد تقديمه، ولن يلتفت إلى أي ادعاء من صاحب العطاء
                بوجود خطأ في عطائه بعد تقديمه.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">5.5</div>
            <h2 class="text">حضور جلسة فتح المظاريف:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يحق لمقدم العطاء (المستثمر) أو مندوبة حضور جلسة فتح المظاريف في الموعد المحدد لذلك، ويجب
                أن يكون المندوب المفوض لحضور جلسة فتح المظاريف سعودي الجنسية، مصحوباً بوكالة شرعية أو تفويض من مدير
                الشركة أو المؤسسة مصدقاً من الغرفة التجارية ولا يحق الاعتراض لمن لم يحضر الجلسة على الإجراءات التي تقوم
                بها اللجنة وفقاً للنظام.</div>
        </div>
    </div>
</x-page_template>