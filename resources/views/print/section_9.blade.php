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
                الترسية والتعاقد وتسليم الموقع
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
            <div class="number-main">6</div>
            <h2 class="text">الترسية والتعاقد وتسليم الموقع:</h2>
        </div>
        <div class="list-item">
            <div class="number-main">1.6</div>
            <h2 class="text">الترسية والتعاقد:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.1.6</div>
            <div class="text">بعد أن تستكمل لجنة فتح المظاريف إجراءاتها تقدم العروض إلى لجنة الاستثمار لدراستها، وتقديم التوصية لصاحب الصلاحية بما تراه. </div>
        </div>
        <div class="list-item">
            <div class="number">2.1.6</div>
            <div class="text">في حال تأخر المستثمر الذي رست عليه المنافسة عن مراجعة البلدية لإكمال إجراءات التعاقد أو التأخر على منصة فرص لإكمال إجراءات التعاقد لمدة شهر من تاريخ إشعاره بالترسية يتم إلغاء حقه في التأجير ومصادرة الضمان البنكي، ويجوز بموافقة الوزير ترسية المنافسة على العرض الذي يليه بنفس قيمة العرض الأول أو إلغاء المنافسة وإعادة طرحها وفق أحكام المادة (<span class="ltr-dir">24</span>) من لائحة التصرف بالعقارات البلدية </div>
        </div>
        <div class="list-item">
            <div class="number">3.1.6</div>
            <div class="text">يجوز للبلدية بعد أخذ موافقة صاحب الصلاحية ترسية المنافسة على صاحب العطاء الثاني بنفس قيمة العطاء الأول، الذي رست عليه المنافسة، ولم يستكمل الإجراءات خلال المدة المحددة.</div>
        </div>
        <div class="list-item">
            <div class="number">4.1.6</div>
            <div class="text">يجوز للبلدية التفاوض مع أصحاب العروض الأعلى إذا تساوى عرضان أو أكثر وكانا أعلى العروض، أو إذا اقترن أعلى العروض بتحفظ أو تحفظات، أو إذا كانت العروض غير مناسبة مالياً.</div>
        </div>
        <div class="list-item">
            <div class="number">5.1.6</div>
            <div class="text">في حال طرأ بعد الترسية أي عوائق تحول دون تنفيذ المشروع فإن على البلدية إعادة ما دفعة المستثمر واتخاذ الإجراءات النظامية لإلغاء المنافسة أو العقد وفي هذه الحالة يتم تعويض المستثمر عن قيمة المنشأت المقامة بالموقع بعد احتساب مدة سنوات انقضاء العقد ونسبة إهلاك المباني وإعادة القيمة الإيجارية المتبقية من تاريخ إلغاء العقد إلى تاريخ إنتهاء السنة التعاقدية وذلك إعمالاً بما جاء بتعميم سمو وزير الشؤون البلدية والقروية (وزير البلديات والإسكان حالياً) رقم (<span class="ltr-dir">28651</span>) وتاريخ <span class="ltr-dir">01/06/1435</span> هـ الخاص بوجود عوائق تحول دون تنفيذ العقد أو المشروع وعلى المستثمر أن يقبل بذلك وبمجرد دخول المنافسة أنه اطلع على التعميم وتعديلاته وما يترتب عليه من إجراءات قبل وبعد ذلك.</div>
        </div>
    </div>

    
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">2.6</div>
            <h2 class="text">تسليم الموقع:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.2.6</div>
            <div class="text">يتم تسليم الموقع للمستثمر بموجب محضر تسليم موقع من الطرفين، وذلك بعد توقيع العقد مباشرة ما لم يكن هناك عائق لدى البلدية يحول دون ذلك، وبشرط ألا تزيد المدة من تاريخ توقيع العقد وتاريخ الاستلام عن شهر واحد.</div>
        </div>
        <div class="list-item">
            <div class="number">2.2.6</div>
            <div class="text">في حال تأخر المستثمر عن التوقيع على محضر تسلم الموقع تقوم البلدية بإرسال إشعار خطي للمستثمر على عنوانه المسجل في نموذج العطاء المقدم في بوابة الاستثمار في المدن السعودية "<span class="bold">فرص</span>"، وتحسب بداية مدة العقد من تاريخ الإشعار ما لم توجد عوائق تمنع تسليم العقار من قبل البلدية.</div>
        </div>
    </div>
</x-page_template>