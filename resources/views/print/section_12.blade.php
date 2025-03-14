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
                الاشتراطات الفنية
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
            <div class="number-main">9</div>
            <h2 class="text">الاشتراطات الفنية:</h2>
        </div>
        <div class="list-item">
            <div class="number-main">1.9</div>
            <h2 class="text">كود البناء السعودي ودليل اشتراطات البناء:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">الإلتزام بتطبيق متطلبات كود البناء السعودي، والمعايير والمتطلبات الفنية الموضحة أدناه، مع تنفيذ جميع الأعمال والتجهيزات والمواد طبقاً للمواصفات القياسية السعودية. </div>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">الإلتزام باعتماد كافة أعمال التصميم والإشراف على تنفيذ تلك الأنشطة (سوق تجاري) التي يتم إنشاؤها من قبل مكاتب هندسية ومقاولين معتمدين لدى الوزارة.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">2.9</div>
            <h2 class="text">أعمال مطلوبة من المستثمر:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.2.9</div>
            <div class="text">مراجعة البلدية لاستلام الموقع على الطبيعة وتحديد حدوده الخارجية بواسطة مسامير وبتر على الطبيعة قبل البدء في التنفيذ حسب المخطط المعتمد المرفق.</div>
        </div>
        <div class="list-item">
            <div class="number">2.2.9</div>
            <div class="text">تثبيت البتر الخرسانية للقطع بموجب المخطط وذلك عن طريق المستثمر وذلك بإشراف البلدية.</div>
        </div>
        <div class="list-item">
            <div class="number">3.2.9</div>
            <div class="text">يتحمل المستثمر أتعاب الاستشاري المستحقة عن تبتير قطعة الأرض.</div>
        </div>
        <div class="list-item">
            <div class="number">4.2.9</div>
            <div class="text">القيام بأعمال تمهيد القطعة وسفلتة وإنارة ورصف الشوارع المحيطة بالقطعة حسب المواصفات الفنية وبإشراف البلدية.</div>
        </div>
        <div class="list-item">
            <div class="number">5.2.9</div>
            <div class="text">على المستثمر الذي تتم ترسية العطاء عليه التعاقد مع مكتب استشاري متخصص ومعتمد لدى البلدية وذلك لإعداد مخططات هندسية تنفيذية للموقع وأية مبأني أخرى ملحقه بها وفق أحدث المعايير الهندسية واعتمادها من الجهة المختصة بالبلدية.</div>
        </div>
        <div class="list-item">
            <div class="number">6.2.9</div>
            <div class="text">التقييد بأنظمة البناء المعتمدة من حيث الإرتفاعات والإرتدادات لمثل هذا النشاط.</div>
        </div>
        <div class="list-item">
            <div class="number">7.2.9</div>
            <div class="text">يتم تصميم وتنفيذ المنشآت بالمشروع طبقاً للشروط والمواصفات القياسية الصادرة من الهيئة العربية السعودية للمواصفات والمقاييس وإدارة التشييد والبناء أو المواصفات العالمية المعتمدة من الجهات ذات العلاقة، مع الأخذ في الاعتبار عند تخطيط موقع المشروع إجراءات مواجهة الكوارث والأوبئة واتخاذ الإجراءات الكفيلة بعمليات الإخلاء الجماعي وفقاً لاشتراطات الدفاع المدني ووزارة الصحة.</div>
        </div>
        <div class="list-item">
            <div class="number">8.2.9</div>
            <div class="text">يجب أن تكون الخدمات الأساسية للمشروع مثل الكهرباء والمياه والهاتف والصرف الصحي باسم المستثمر ويلتزم المستثمر بالتنازل عنها بعد إنتهاء العقد.</div>
        </div>
    </div>

    
</x-page_template>


<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no+1">
<div class="list-main-item">
    <div class="list-item">
        <div class="number-main">3.9</div>
        <h2 class="text">الاشتراطات المعمارية:</h2>
    </div>
    <div class="list-item">
        <div class="number">1.3.9</div>
        <div class="text">يجب ألا تقل مساحة المحل داخل الأسواق التجارية عن 24م.</div>
    </div>
    <div class="list-item">
        <div class="number">2.3.9</div>
        <div class="text">لا تزيد مساحة المحل في الموقع المستقل عن (1500 م2) (ألف وخمسمائة متراً مربع).</div>
    </div>
    <div class="list-item">
        <div class="number">3.3.9</div>
        <div class="text">أن يكون المحل من دور أرضي فقط أو أرضي وميزانين، ويمكن أن يكون بالأدوار المتكررة في المجمعات التجارية. </div>
    </div>
    <div class="list-item">
        <div class="number">4.3.9</div>
        <div class="text">يمنع تماماً استخدام خامة الاسبستوس (Asbestos) أو أي مادة يدخل الاسبستوس في تركيبها.</div>
    </div>
    <div class="list-item">
        <div class="number">5.3.9</div>
        <div class="text">الإلتزام بتوفير طريقة وصول امنه للسطح حال وجود معدات لإجراء أعمال الصيانة المطلوبة، مع توفير التجهيزات اللازمة لتصريف مياه الأمطار باللأسواق المركزية والمجمعات والمراكز التجارية.</div>
    </div>
    <div class="list-item">
        <div class="number">6.3.9</div>
        <div class="text">يجب تحديد موقع للخدمات (حاوية النظافة - تحميل وتنزيل البضائع).</div>
    </div>
    <div class="list-item">
        <div class="number">7.3.9</div>
        <div class="text">يلزم توفير حاويات النظافة مخصصة لفرز النفايات.</div>
    </div>
    <div class="list-item">
        <div class="number">8.3.9</div>
        <div class="text">	عدم استخدام الأرصفة العامة أو مناطق الإرتداد لعرض أو بيع المنتجات ما لم يتم الترخيص بذلك.</div>
    </div>
    <div class="list-item">
        <div class="number">9.3.9</div>
        <div class="text">يجب أن تكون الأرضيات مقاومة للإنزلاق ذات سطح مستو خال من التشقق والحفر، من مواد غير منفذه للماء وتكون سهلة التنظيف والغسل ومصنوعة من مواد لا تتأثر بالمنظفات الصناعية.</div>
    </div>
    <div class="list-item">
        <div class="number">10.3.9</div>
        <div class="text">يجب تغطية جميع فتحات تصريف المياه، وان تكون مزودة بغطاء شبكي ومحكمة الغلق.</div>
    </div>
    <div class="list-item">
        <div class="number">11.3.9</div>
        <div class="text">الإلتزام بتشطيب الجدران والأرضيات بالمحلات والممرات بمواد مناسبة لا تؤثر على الصحة العامة وتكون، سهلة التنظيف ومانعة للإنزلاق.</div>
    </div>
    <div class="list-item">
        <div class="number">12.3.9</div>
        <div class="text">يلزم تخصيص مكان للرضاعة الطبيعية وتكون غرف الرضاعة الطبيعية (غرفة، ركن، كابينه) وتكون بمساحة لا تقتل عن (2.7 م2) ويتم تحديد العدد حسب مساحة المكان وعدد السيدات المتوقع استيعابه، بشرط أن تكون قريبة من مكان لغسل الأيدي (يطبق على الأسواق المركزية والمجمعات والمراكز التجارية الجديدة والقائمة).</div>
    </div>
    <div class="list-item">
        <div class="number">13.3.9</div>
        <div class="text">يلزم توفير العزل الصوتي اللازم بالحوائط الخارجية حسب اللائحة التنفيذية للضوضاء الصادرة بموجب المرسوم الملكي رقم (م/165) وتاريخ ,<span class="ltr-dir">19/11/1441</span>هـ الصادرة من وزارة البيئة والمياه والزراعة.</div>
    </div>
    <div class="list-item">
        <div class="number">14.3.9</div>
        <div class="text">يكون الدرج الخارجي للمحل مصنوعا من مواد آمنة ومقاومة للإنزلاق وشديدة التحمل، كالجرانيت والرخام المعالج أو الطلاء الخشن بمادة الإيبوكسي والسراميك والبورسلين وما في حكمها.</div>
    </div>
    <div class="list-item">
        <div class="number">15.3.9</div>
        <div class="text">تكون واجهة محلات بيع المواد الغذائية من الزجاج الشفاف السيكوريت وما في حكمه بسماكة لا تقل عن (12 ملم) وتشمل أبواب بعرض لا يقل عن (٩0 سم) للأبواب المفردة، و (160 سم) للأبواب المزدوجة، خالي من الخدوش واللحامات والتشققات والشروخ أو الثقوب.</div>
    </div>
    <div class="list-item">
        <div class="number">16.3.9</div>
        <div class="text">يكون سقف المحل من الخرسانة او ما يماثلها وناعمة التشطيب ومطلية بدهان فاتح اللون ولا يوجد به بروزات أو ثقوب تسمح بتراكم الأوساخ ومرور الحشرات. </div>
    </div>
    <div class="list-item">
        <div class="number">17.3.9</div>
        <div class="text">يكون السقف المستعار إن وجد - من مواد مقاومة للحريق ولا تتأثر بالرطوبة. </div>
    </div>
    <div class="list-item">
        <div class="number">18.3.9</div>
        <div class="text">تكون الزوايا بين الجدران والأرضيات والأسقف غير حادة ويفضل أن تكون بإستدارة ليسهل تنظيفها وتطهيرها ولمنع تراكم الملوثات.</div>
    </div>
    <div class="list-item">
        <div class="number">19.3.9</div>
        <div class="text">الإلتزام بعدم وضع مكبرات صوت او سماعات صوتية لها تأثير صوتي خارج المحلات.</div>
    </div>
    <div class="list-item">
        <div class="number">20.3.9</div>
        <div class="text">لا يقل عرض الممرات الداخلية عن (١٤٠ سم) بين رصات المواد والسلع.</div>
    </div>
    <div class="list-item">
        <div class="number">21.3.9</div>
        <div class="text">يمنع العرض على الواجهة والأبواب وخلوها من أي ملصقات باستثناء الملصقات التي توضح طريق الدخول والخروج وأوقات العمل والدفع الإلكتروني.</div>
    </div>
    <div class="list-item">
        <div class="number">22.3.9</div>
        <div class="text">يجب وضع لوحة أو ملصق أو شاشة إلكترونية داخل المحل تبين أرقام البلاغات الخاصة بالجهات ذات العلاقة، وطرق استخدام طفاية الحريق.</div>
    </div>
    <div class="list-item">
        <div class="number">23.3.9</div>
        <div class="text">توفير مصائد للحشرات أو القوارض لمحلات الصحة العامة. </div>
    </div>
    <div class="list-item">
        <div class="number">24.3.9</div>
        <div class="text">الإلتزام بتنظيف وتطهير وتعقيم كافة الأدوات والمعدات في محلات الصحة العامة.</div>
    </div>
    <div class="list-item">
        <div class="number">25.3.9</div>
        <div class="text">الإلتزام بنظافة المحل وعدم تراكم الأوساخ والنفايات. </div>
    </div>
    <div class="list-item">
        <div class="number">26.3.9</div>
        <div class="text">عدم إغلاق المواقف أو وضع لوحات تمنع الوقوف لغير الزبائن.</div>
    </div>
</div>

</x-page_template>

<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no +2">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">3.9</div>
            <h2 class="text"> تابع الاشتراطات المعمارية:</h2>
        </div>
        <div class="list-item">
            <div class="number">27.3.9</div>
            <div class="text">يلزم تخصيص غرفة للقياس ضمن محلات الملابس النسائية والعباءات على أن يتوفر بها ما يلي:</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">لوحة على المدخل توضح أن الغرفة مخصصة للقياس فقط.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">لاتقل مساحتها عن (2.5 م2) وتكون متصلة بالسقف.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">توفر الخصوصية التامة ذات أبواب تفتح للخارج ويمكن قفلها من الداخل.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">أن تكون المرايا مثبته على الباب فقط لضمان عدم وجود مرايا ذات وجهين.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">أن تكون جدران الغرفة من الداخل مصمتة وخالية من أفياش الكهرباء ولوح الزينة.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">لا تزيد فتحة أسفل الباب عن (٥ سم).</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">ألا تكون معزولة عن المحل.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">نظافة الغرفة بشكل دوري.</div>
        </div>
        <div class="list-item">
            <div class="number">28.3.9</div>
            <div class="text">يجب وضع مداخل ومخارج بالأسواق المركزية والمجمعات والمراكز التجارية على الشوارع التجارية فقط ويسمح بفتح مخارج الطوارئ على الشوارع الجانبية، وإلا تقل المسافة بين ركن الموقع عند التقاطعات الرئيسية إلى محور الدخول والخروج عن (35 م).</div>
        </div>
        <div class="list-item">
            <div class="number">29.3.9</div>
            <div class="text">يجب أن يحقق التصميم المعماري للمشروع أكبر قدر من المرونة التصميمية من خلال إمكانية الدمج أو تعديل الاستعمالات للفراغات والأنشطة لمواجهة حركة العرض والطلب المتغيرة.</div>
        </div>
        <div class="list-item">
            <div class="number">30.3.9</div>
            <div class="text">يجب أن يكون التصميم المعماري للمشروع متميزاً ويشكل نموذجاً ومعلماً معمارياً حضارياً يعكس التطور والطابع العمراني للمنطقة.</div>
        </div>
        <div class="list-item">
            <div class="number">31.3.9</div>
            <div class="text">يلزم تخصيص أماكن للصلاة في الأسواق المركزية والمجمعات والمراكز التجارية تتناسب مع مساحتها وعدد المستخدمين المتوقع ويخصص قسم منفصل منها للنساء مع توفير دورات مياه وأماكن وضوء مناسبة ومنفصله للرجال والنساء طبقاً لما يحدده كود البناء السعودي من أعداد ونسب. </div>
        </div>
        <div class="list-item">
            <div class="number">32.3.9</div>
            <div class="text">يلزم تخصيص مراكز ضيافة أطفال في الأسواق المركزية والمجمعات والمراكز التجارية التي تكون مساحة البناء أكثر من (40.000 م2)</div>
        </div>
        <div class="list-item">
            <div class="number">33.3.9</div>
            <div class="text">يلزم تأمين غرفة للأمن والسلامة مجهزة بالإسعافات الأولية وجميع ما يلزم من أدوات.</div>
        </div>
        <div class="list-item">
            <div class="number">34.3.9</div>
            <div class="text">يجب أن يفصل مداخل تنزيل وتحميل البضائع عن مداخل المتسوقين مع توفير مصاعد تحميل البضائع تكون بعيدة عن المصاعد التي يستخدمها المتسوقين.</div>
        </div>
        <div class="list-item">
            <div class="number">35.3.9</div>
            <div class="text">يجيب تركيب كاميرات للمراقبة الأمنية وفقتاً للمواصفات المعتمدة من الأمن العام.</div>
        </div>
    </div>
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">4.9</div>
            <h2 class="text">المتطلبات الإنشائية:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.4.9</div>
            <div class="text">الإلتزام بتطبيق متطلبات كود البناء السعودي وفق مجموعة الأكواد الإنشائية ( 306-301 (SBCفيما يخص جميع أعمال التصميم والجودة لجميع أعمال التربة والأساسات والأعمال الإنشائية وإرفاق التقارير المعتمدة.</div>
        </div>
        <div class="list-item">
            <div class="number">2.4.9</div>
            <div class="text">مراعاة أثر تحرك مجموعات المستخدمين على الأسقف ذات البحور الواسعة حال تواجدها (Crowed synchronized movement).</div>
        </div>
        <div class="list-item">
            <div class="number">3.4.9</div>
            <div class="text">يتم التأكد من كفاءة نظم مقاومة الأحمال العرضية للمنشآت المعدنية.</div>
        </div>
        <div class="list-item">
            <div class="number">4.4.9</div>
            <div class="text">مراعاة أحمال الزلازل للنظم الإنشائية الغير تقليدية والغير منتظمة حسب الكود السعودي للأحمال والقوى (301 (SBC التي تستخدم في المباني التجارية، كما يتم التأكد من أمان تثبيت المعدات والعناصر الغير الإنشائية.</div>
        </div>
        <div class="list-item">
            <div class="number">5.4.9</div>
            <div class="text">مراعاة المتطلبات الإنشائية للفتحات داخل العناصر الإنشائية وزيادة التسليح حولها حسب كود البناء السعودي عند عمل فتحات ممرات التكييف والتمديدات الصحية داخل العناصر الإنشائية.</div>
        </div>
        <div class="list-item">
            <div class="number">6.4.9</div>
            <div class="text">مراعاة فصل الأجزاء ذات الإرتفاعات والأحمال الكلية المختلفة في المباني بفواصل حركة إنشائية.</div>
        </div>
        <div class="list-item">
            <div class="number">7.4.9</div>
            <div class="text">عدم الإضرار بالطرق والمرافق والبيئة المحيطة بالموقع (ممرات المشاة، المسارات المخصصة للدراجات الهوائية) أو المجاورين، وإرجاع الشيء إلى أصله حال حدوث أي تلفيات، وسد جوانب الحفر وتأمينها، مع ضرورة الإشراف الهندسي على كافة الأعمال.</div>
        </div>
        <div class="list-item">
            <div class="number">8.4.9</div>
            <div class="text">في حالة إدخال أية تعديلات مستقبلاً على المشروع فإنه يلزم تقديم دراسة إنشائية ومعمارية لهذه التعديلات، يقوم بإعدادها واعتمادها مكتب هندسي استشاري، وتسري على هذه التعديلات كافة بنود الاشتراطات الإنشائية، على أن تعتمد من الإدارة المختصة بالبلدية.</div>
        </div>
        <div class="list-item">
            <div class="number">9.4.9</div>
            <div class="text">اعتماد جميع أعمال التصميم والتنفيذ من مكتب استشاري مؤهل ومعتمد من قبل وزارة البلديات والإسكان.</div>
        </div>
    </div>
</x-page_template>


<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no + 3">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">5.9</div>
            <h2 class="text">اشتراطات الأعمال الكهربائية:</h2>
        </div>
        <div class="list-item">
            <div class="number-main"></div>
            <div class="text bold">تطبق أحكام هذه الاشتراطات عند تصميم وتنفيذ وتركيب وتشغيل وصيانة كل الأنظمة والأجهزة والتركيبات الكهربائية وأنظمة التيار الخفيف للمواقع والمباني والمنشآت المحددة ضمن نطاق المشروع:</div>
        </div>
        <div class="list-item">
            <div class="number">1.5.9</div>
            <div class="text ">الإلتزام بتطبيق كل المتطلبات الكهربائية في كود البناء السعودي مشتملاً على:</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">المتطلبات الكهربائية للأمن والسلامة الواردة في كود البناء السعودي العام ((SBC-201 بما يشمل البند رقم )907 (الخاص بنظام الكشف وإنذار الحريق، والبند رقم )1008 (الخاص بإضاءة مسارات الهروب، والفقرات رقم) 1013.3) و(1013.5) و (1013.6(الخاصة بإضاءة علامات الهروب والفصل رقم (27) الخاص بالمتطلبات الكهربائية، والفقرة رقم (1205.3) الخاصة بالإضاءة الاصطناعية.</div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">	متطلبات الكود الكهربائي ( (SBC-401بما يشمل البند الفصل رقم (54) الخاص بنظام التأريض، والفصل رقم (82) الخاص بنظام الحماية من الصواعق، والفصل رقم (83) الخاص بمتطلبات التركيبات الكهربائية لأنظمة الكشف والحماية من الحريق والقسم الرابع الخاص بمتطلبات الحماية والسلامة، والقسم الخامس الخاص بتصميم وتنفيذ الأعمال والتركيبات الكهربائية مشتملاً على متطلبات العزل اللازمة للكابلات والأسلاك. </div>
        </div>
        <div class="list-item">
            <li class="number bold end"></li>
            <div class="text">الأخذ في الاعتبار متطلبات كفاءة الطاقة للأنظمة الكهربائية الواردة في الكود السعودي لترشيد الطاقة للمباني غير السكينة (SBC- 601) بما يشمل الفصول رقم (9و9 UM-SECTION) الخاص بنظام الإضاءة. </div>
        </div>
        <div class="list-item">
            <div class="number">2.5.9</div>
            <div class="text">الإلتزام بأن تصمم كافة الأعمال والأنظمة الكهربائية وأنظمة التيار الخفيف لتحمل العمل المستمر في الظروف المناخية المحيطة، وحسب متطلبات القسم الخامس من كود البناء السعودي (SBC- 401) مع الاسترشاد بالجدول رقم (11.1) بالفصل الحادي عشر من كود البناء السعودي (SBC-601) بخصوص درجات حرارة الهواء المحيطة على أن يتم توضيح ذلك في المستندات الكهربائية المقدمة.</div>
        </div>
        <div class="list-item">
            <div class="number">3.5.9</div>
            <div class="text">الإلتزام بأن تكون المواصفات الفنية للمواد والأعمال الكهربائية مطابقة لأحدث إصدار من مواصفات الهيئة السعودية للمواصفات والمقاييس والجودة (SASO)، وأن يتم توضيح ذلك في المواصفات المقدمة.</div>
        </div>
        <div class="list-item">
            <div class="number">4.5.9</div>
            <div class="text">الإلتزام بتوفير وسائل فصل الكهرباء (وتشمل مفاتيح الفصل وقواطع الدائرة الكهربائية وغيرها) عن المعدات الميكانيكية والمصاعد والسلالم الكهربائية، بغرض توفير الأمان للأفراد عند إجراء الصيانة الميكانيكية اللازمة لها، طبقاً لمتطلبات البند رقم (53-6.3) من كود البناء السعودي ( .(SBC- 401</div>
        </div>
        <div class="list-item">
            <div class="number">5.5.9</div>
            <div class="text">الإلتزام بأن تكون لوحات وغرف ومحطات الكهرباء الخارجية المخصصة لتغذية المشروع، داخل حدود الموقع الخاص بالمشروع وتحديد أماكنها بما لا يشوه المشهد الحضري.</div>
        </div>
        <div class="list-item">
            <div class="number">6.5.9</div>
            <div class="text">الإلتزام بأن تكون لوحات توزيع الكهرباء الرئيسية ولوحات التحكم مقفلة، ولا يتم فتحها إلا عن طريق أدوات أو مفاتيح خاصة، أو أن تكون بداخل غرف مقفلة، على أن يراعى وجود اللوحات الكهربائية في أماكن مخصصة ومحمية من التلف، أما اللوحات الخارجية فينبغي أن تكون بداخل صناديق مناسبة ومحمية من استخدام الأفراد غير المصرح لهم. </div>
        </div>
        <div class="list-item">
            <div class="number">7.5.9</div>
            <div class="text">الإلتزام بتأريض المقابس الكهربائية وكل الأجزاء المعدنية الظاهرة مثل المواسير المعدنية وحاويات الأجهزة واللوحات الكهربائية وحوامل الكابلات والمحولات والمولدات الكهربائية إن توفرت طبقاً لمتـطلبات كود البناء السعودي .(SBC- 401)</div>
        </div>
        <div class="list-item">
            <div class="number">8.5.9</div>
            <div class="text">الإلتزام بفصل اللوحات والتمديدات الخاصة بأنظمة الطوارئ (بما يشمل إضاءة مسارات وعلامات الهروب ونظام كشف وإنذار الحريق وتغذية مضخة الحريق ومصعد مكافحة الحريق) عن باقي الأنظمة الأخرى، مع الإلتزام بتوفير مصدر كهرباء احتياطي مؤمن مثل المولدات والبطاريات الكهربائية وغيرها في حالة انقطاع مصدر الكهرباء العام طبقاً لمتطلبات كود البناء السعودي.</div>
        </div>
        <div class="list-item">
            <div class="number">9.5.9</div>
            <div class="text">	الإلتزام بالمحافظة على فاعلية أنظمة الطوارئ والتحقق الدوري من صلاحية المعدات الخاصة به وعدم فصل التيار الكهربائي عنها في أي وقت من الأوقات.</div>
        </div>
    </div>

</x-page_template>

<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no +4">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">6.9</div>
            <h2 class="text">متطلبات السلامة الكهربائية:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.6.9</div>
            <div class="text">يجب أن تكون التوصيلات الكهربائية من النوع القطبي أو النوع الأرضي ومحمية من التيارات العالية ومدرجة حسب. .(UL 1363) </div>
        </div>
        <div class="list-item">
            <div class="number">2.6.9</div>
            <div class="text">يجب أن تكون التمديدات الكهربائية موصلة بشكل مباشر وآمن بمقبس مثبت بشكل دائم (في الجدار.(</div>
        </div>
        <div class="list-item">
            <div class="number">3.6.9</div>
            <div class="text">عدم استخدام التمديدات الكهربائية كبديل عن الأسلاك الدائمة. </div>
        </div>
        <div class="list-item">
            <div class="number">4.6.9</div>
            <div class="text">عدم لصق التمديدات الكهربائية في المباني والمنشآت أو تمديدها عبر الجدران والأسقف والأرضيات وتحت الأبواب أو الأثاث أو السجاد وحمايتها من أي أضرار يمكن أن تتعرض لها سواء كانت بيئية أو مادية.</div>
        </div>
        <div class="list-item">
            <div class="number">5.6.9</div>
            <div class="text">يجب المحافظة على التمديدات الكهربائية في حالة جيدة وتجنب عقدها.</div>
        </div>
        <div class="list-item">
            <div class="number">6.6.9</div>
            <div class="text">يجب أن تكون التمديدات الكهربائية موصلة بشكل مباشر في مقبس معتمد.</div>
        </div>
        <div class="list-item">
            <div class="number">7.6.9</div>
            <div class="text">يجب أن تكون التمديدات الكهربائية من التمديدات التي يتوفر بها خطوط أرضية حتى تتوافق مع الأجهزة الكهربائية المحمولة التي تحتوي على خطوط أرضية أيضا. </div>
        </div>
        <div class="list-item">
            <div class="number">8.6.9</div>
            <div class="text">يجب استخدام التمديدات الكهربائية في توصيل الأجهزة الكهربائية المحمولة فقط باستثناء الدفايات الكهربائية المحمولة حيث يجب أن توصل مباشرة في مقبس معتمد. </div>
        </div>
        <div class="list-item">
            <div class="number">9.6.9</div>
            <div class="text">يجب ألا تقل مساحة مقطع سلك التوصيلة الكهربائية عن السعة المقدرة للجهاز الكهربائي المحمول.</div>
        </div>
        <div class="list-item">
            <div class="number">10.6.9</div>
            <div class="text">يجب أن تكون مساحة العمل الخاصة بصيانة معدات الخدمات الكهربائية مطابقة للأبعاد المطلوبة.</div>
        </div>
        <div class="list-item">
            <div class="number">11.6.9</div>
            <div class="text">يجب توفير أغطية معتمدة لجميع علب التوزيع والمفاتيح والمآخذ الكهربائية ويحظر الكود استخدام العلب الكهربائية المكشوفة. </div>
        </div>
        <div class="list-item">
            <div class="number">12.6.9</div>
            <div class="text">يسمح باستخدام الأسلاك المؤقتة لتركيبات الطاقة الكهربائية وتجهيزات الإضاءة لمدة لا تتجاوز 90 يومًا على أن تتوافق هذه التمديدات مع متطلبات ( .(NFPA 70  </div>
        </div>
        <div class="list-item">
            <div class="number">13.6.9</div>
            <div class="text">يحظر استخدام المحولات متعددة المآخذ بكافة أنواعها ما لم تكن متوافقة مع متطلبات (NFPA70).</div>
        </div>
        <div class="list-item">
            <div class="number">14.6.9</div>
            <div class="text">يجب تمييز أبواب غرف لوحة التحكم الكهربائية بلوحة مقروءة وواضحة للعيان مكتوب عليها "غرفة كهربائية " أو "Electrical Room"</div>
        </div>
        <div class="list-item">
            <div class="number">15.6.9</div>
            <div class="text">يجب أن تكون أبواب الغرف الكهربائية مزودة بذراع فتح بالدفع يفتح باتجاه خروج الأشخاص.</div>
        </div>
    </div>
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">7.9</div>
            <h2 class="text">الاشتراطات الميكانيكية:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.7.9</div>
            <div class="text">التأكد من كفاءة أنظمة التهوية والسلامة للعمل المستمر (24) ساعة عند درجة حرارة لا تقل عن درجات الحرارة (DB MAX) المدرجة بالجدول رقم (11.1) بالفصل الحادي عشر من كود البناء السعودي ((SBC-601.</div>
        </div>
        <div class="list-item">
            <div class="number">2.7.9</div>
            <div class="text">الإلتزام بتصميم وتنفيذ الأرضيات والقواعد للمعدات الميكانيكية تحت مسؤولية واعتماد استشاري مؤهل ومعتمد لتكون بالمقاومة الكافية لتحمل أوزان وقوى المعدات المثبتة عليها ويوصى أن تكون من الخرسانة المسلحة، ويجب تحديد قوى وحالات التحميل وعمل عوازل الاهتزازات اللازمة لكل معدة حسب كتالوجات أو شهادات الجهة المنتجة.</div>
        </div>
        <div class="list-item">
            <div class="number">3.7.9</div>
            <div class="text">الإلتزام بأن تكون جميع المواصفات الفنية للأنظمة الميكانيكية مطابقة لمواصفات الهيئة السعودية للمواصفات والمقاييس والجودة (SASO).</div>
        </div>
        <div class="list-item">
            <div class="number">4.7.9</div>
            <div class="text">الإلتزام بأن تحتوي المستندات الميكانيكية المقدمة على تفاصيل ومعلومات التصميم والمواد المستخدمة لكافة الأنظمة الميكانيكية.</div>
        </div>
    </div>
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">8.9</div>
            <h2 class="text">اشتراطات التبريد والتهوية والتكييف:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.8.9</div>
            <div class="text">تطبق أحكام هذه الاشتراطات على تصميم وتنفيذ وتركيب وتشغيل وصيانة كل الأنظمة والأجهزة والتركيبات الخاصة بالتهوية والتكييف والتدفئة.</div>
        </div>
        <div class="list-item">
            <div class="number">2.8.9</div>
            <div class="text">	الإلتزام بتطبيق متطلبات كود الميكانيكا السعودي (501 (SBC وخاصة الباب رقم 4، والجدول رقم (403.3.1.1) متضمناً الحد الأدنى للتهوية للفراغات بالمباني التجارية.</div>
        </div>
        <div class="list-item">
            <div class="number">3.8.9</div>
            <div class="text">يوصى بتجميع مياه التكثيف في المباني الجديدة التي تزيد حمولة التبريد بها عن (350 (KW واستخدامها لأغراض الري أو صناديق طرد المراحيض.</div>
        </div>
        <div class="list-item">
            <div class="number">4.8.9</div>
            <div class="text">التأكد من كفاءة أنظمة التهوية والسلامة للعمل المستمر (24) ساعة عند درجة حرارة لا تقل عن درجات الحرارة (DB MAX) المدرجة بالجدول رقم (11.1) بالفصل الحادي عشر من كود البناء السعودي ((SBC-601.</div>
        </div>
    </div>
</x-page_template>

<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no +5">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">9.9</div>
            <h2 class="text">متطلبات الأمن والصحة والسلامة:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.9.9</div>
            <div class="text">يلتزم المستثمر باتخاذ الإجراءات والاحتياطات اللازمة لمنع وقوع أية حوادث أو أضرار قد تلحق برواد المشروع أثناء ممارسة النشاط ووضع لوحات إرشادية توضح جميع التعليمات ومتطلبات السلامة.</div>
        </div>
        <div class="list-item">
            <div class="number">2.9.9</div>
            <div class="text">يلتزم المستثمر بتطبيق اشتراطات الأمن والسلامة الصادرة من المديرية العامة للدفاع المدني وما يستجد عليها من تعديلات.</div>
        </div>
        <div class="list-item">
            <div class="number">3.9.9</div>
            <div class="text">عدم شغل الطرقات وتوفير متطلبات الحماية والسلامة التي تمنع تعرض المارة أو المركبات للحوادث والأضرار.</div>
        </div>
        <div class="list-item">
            <div class="number">4.9.9</div>
            <div class="text">إلزام العاملين بإرتداء وسائل الأمن والسلامة أثناء القيام بأعمال التنفيذ.</div>
        </div>
        <div class="list-item">
            <div class="number">5.9.9</div>
            <div class="text">توفير صندوق للإسعافات الأولية يكون مزوداً بالمواد ذات الأهمية الطبية مثل: الأشرطة اللاصقة الملونة والأربطة الطبية والقطن والشاش، والمواد المطهرة ومواد العناية بالجروح الأخرى.</div>
        </div>
        <div class="list-item">
            <div class="number">6.9.9</div>
            <div class="text">وضع لوحة تحذيرية داخل المحل بمنع تدخين التبغ بجميع أنواعه.</div>
        </div>
        <div class="list-item">
            <div class="number">7.9.9</div>
            <div class="text">يجب تركيب كاميرات للمراقبة الأمنية وفقاً للمواصفات المعتمدة من الأمن العام.</div>
        </div>
        <div class="list-item">
            <div class="number">8.9.9</div>
            <div class="text">ان يتم تنفيذ منزلق خاص بالأشخاص ذوي الإعاقة خالياً من العيوب، ولا يؤثر على الرصيف الخارجي، ولا يسبب أي تشويه في المظهر العام، ولا يسمح بأن تتجاوز زاوية الحناء المنزلق 10 درجة.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">10.9</div>
            <h2 class="text">اشتراطات الأعمال الصحية: </h2>
        </div>
        <div class="list-item">
            <div class="number">1.10.9</div>
            <div class="text">الإلتزام بتطبيق متطلبات الكود الصحي السعودي (SBC-701) فيما يخص التمديدات الصحية وبالخصوص الفصل رقم (422( متضمناً متطلبات الأدوات الصحية، والبند الفرعي رقم (608.3.1) متضمناً متطلبات المعدات الخاصة بحماية مورد المياه، والفصول رقم (609 و713) الخاصة بمتطلبات الهندسة الصحية، والفصل رقم (5306) متضمناً متطلبات الغازات الطبية، والفصل رقم (6306) متضمناً متطلبات الأكسجين السائل.</div>
        </div>
        <div class="list-item">
            <div class="number">2.10.9</div>
            <div class="text">الإلتزام بتطبيق متطلبات كود (2020 55 (NFPA أو ما يتبعها من إصدارات فيما يخص متطلبات الغازات الطبية.</div>
        </div>
        <div class="list-item">
            <div class="number">3.10.9</div>
            <div class="text">الإلتزام بتطبيق متطلبات الهندسة الصحية الواردة في كود الصرف الصحي الخاص السعودي (702SBC-).</div>
        </div>
        <div class="list-item">
            <div class="number">4.10.9</div>
            <div class="text">الإلتزام بتطبيق الجزء الخاص بمتطلبات خزانات مياه الشرب من دليل الهندسة البيئية الصادر عن وزارة البلديات والإسكان.</div>
        </div>
        <div class="list-item">
            <div class="number">5.10.9</div>
            <div class="text">الإلتزام بتطبيق متطلبات الهندسة الصحية الواردة في كود البناء السعودي العام (201(SBC-.</div>
        </div>
        <div class="list-item">
            <div class="number">6.10.9</div>
            <div class="text">يوصى بتركيب نظام تسخين المياه بالطاقة الشمسية في المباني الجديدة التي تحتاج إلى مياه ساخنة للمستخدمين.</div>
        </div>
    </div>
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">11.9</div>
            <h2 class="text">متطلبات الاستدامة وكفاءة الطاقة: </h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text bold">الإلتزام بمتطلبات الكود السعودي لترشيد الطاقة (601 (SBC والتي تشمل التالي:</div>
        </div>
        <div class="list-item">
            <div class="number">1.11.9</div>
            <div class="text">متطلبات العزل الحراري لغلاف المبنى والذي يشتمل العناصر التالية: (الجدران الخارجية - السقف العلوي - النوافذ - الأبواب الخارجية - القباب)، وغيرها من الاشتراطات.</div>
        </div>
        <div class="list-item">
            <div class="number">2.11.9</div>
            <div class="text">متطلبات التكييف والتدفئة والتي تشتمل حسابات أحمال التكييف، والعزل الحراري لمجاري وأنابيب التهوية، واشتراطات التحكم بوحدات التكييف، وغيرها من الاشتراطات.</div>
        </div>
        <div class="list-item">
            <div class="number">3.11.9</div>
            <div class="text">متطلبات تسخين المياه والتي تشمل حساب احتياجات المبنى من المياه الساخنة، العزل الحراري لأنابيب المياه الساخنة، وغيرها من الاشتراطات.</div>
        </div>
        <div class="list-item">
            <div class="number">4.11.9</div>
            <div class="text">متطلبات جودة الهواء داخل المبنى، والتي تشمل اشتراطات التهوية داخل المبنى وغيرها من الاشتراطات.</div>
        </div>
        <div class="list-item">
            <div class="number">5.11.9</div>
            <div class="text">متطلبات الإنارة الداخلية والخارجية والتي تشمل كثافة الإنارة المستخدمة، اشتراطات توزيع أنظمة التحكم بالإنارة، متطلبات إنارة مخارج الطوارئ وغيرها من الاشتراطات.</div>
        </div>
        <div class="list-item">
            <div class="number">6.11.9</div>
            <div class="text">متطلبات الكفاءة للمعدات داخل المبنى والتي تشمل: المصاعد، والمحركات الكهربائية، والسلالم والسيور المتحركة، والمحولات الكهربائية منخفضة الجهد.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">12.9</div>
            <h2 class="text">الدراسات الخاصة المطلوبة:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يلتزم المستثمر بتقديم الدراسات الخاصة وهي كالتالي (دراسة بيئية - دراسات مرورية - دراسات الطاقة الاستيعابية للخدمات والمرافق - دراسة تربة وفقاً لإرتفاع المشروع)، وذلك من خلال أحد المكاتب الاستشارية الهندسية المرخص لها بمزاولة المهنة ومسجلة لدي الهيئة السعودية للمهندسين.</div>
        </div>
    </div>
</x-page_template>

<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no +6">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">13.9</div>
            <h2 class="text">متطلبات الصحة العامة:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.13.1</div>
            <div class="text">تطبيق متطلبات الكود الصحي السعودي (701SBC) وذلك يشمل ولا يقتصر على الفقرة رقم (102.3) متضمنا متطلبات الصيانة، والجدول (403.1) و (709.1) وكود البناء السعودي العام (201SBC) بما فيه الفصل 29 جدول ((2902.1 والبند رقم (607) متضمناً متطلبات نظام إمدادات المياه الساخنة، ومتطلبات الصرف الصحي الخاص في (SBC702) وخاصة الفقرة رقم (802) متضمناً متطلبات خزانات الصرف الصحي والإلتزام بإنشاء خزانات الصرف الصحي داخل حدود الملكية فقط.</div>
        </div>
        <div class="list-item">
            <div class="number">2.13.1</div>
            <div class="text">الإلتزام بتوصيل شبكة الصرف الصحي بالدور الأرضي بشكل منفصل إلى غرفة التفتيش مباشرة، ولا يتم توصيلها على نفس المدادات الرأسية الخاصة بالأدوار العليا.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">14.9</div>
            <h2 class="text">متطلبات الوصول الشامل:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.14.1</div>
            <div class="text">استخدام اللوحات الإرشادية، كما يجب استخدام اللوحات التحذيرية من أخطار الحريق للتوجيه إلى مسالك الهروب وساحات التجمع.</div>
        </div>
        <div class="list-item">
            <div class="number">2.14.1</div>
            <div class="text">يجب تحقيق متطلبات ذوي الإعاقة بهدف تيسير وتسهيل حركتهم وتهيئة الأوضاع والأبعاد المناسبة لاستخدامهم سواء بالمواقف أو المنحدرات أو الفراغات المختلفة طبقاً لكود البناء السعودي ( 201 (SBC، والدليل الإرشادي للوصول الشامل الصادر عن مركز الملك سلمان لأبحاث الإعاقة والدليل المبسط لمعايير الوصول الشامل للمنشآت الصادر عن الوزارة.</div>
        </div>
        <div class="list-item">
            <div class="number">3.14.1</div>
            <div class="text">يجب الإلتزام باستخدام اللوحات الإرشادية لتوجيه المرتادين في المواقف والممرات والمساحات طبقاً لما ورد في الفصل (١٠-١٠٠٩) من كود البناء السعودي العام (SBC-201) يلزم استخدام علامات الخروج للتوجيه إلى مخارج الطوارئ وساحات التجمع طبقاً لما ورد بالفصل (۱۰۱۳) من كود البناء السعودي العام (201-SBC).</div>
        </div>
        <div class="list-item">
            <div class="number">4.14.1</div>
            <div class="text">يلزم تخصيص مواقف سيارات لذوي الإعاقة بالقرب من المداخل الرئيسية والمصاعد بالأعداد والنسب الموضحة بالجدول أدناه طبقاً لكود البناء السعودي العام (201SBC-)، مع الإلتزام بالأبعاد والمواصفات الموضحة بدليل مواقف السيارات الصادر عن الوزارة.</div>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="">
                <table>
                    <tr>
                        <th class="center">إجمالي عدد المواقف</th>
                        <th class="center">الحد الأدني للموقف المطلوبة</th>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">1-25</td>
                        <td class="center">1</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">26-50</td>
                        <td class="center">2</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">51-75</td>
                        <td class="center">3</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">76-100</td>
                        <td class="center">4</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">101-150</td>
                        <td class="center">5</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">151-200</td>
                        <td class="center">6</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">201-300</td>
                        <td class="center">7</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">301-400</td>
                        <td class="center">8</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">401-500</td>
                        <td class="center">9</td>
                    </tr>
                    <tr>
                        <td class="center" dir="ltr" style="direction: ltr">501-1,000</td>
                        <td class="center">2 % من مجموع المواقف</td>
                    </tr>
                    <tr>
                        <td class="center">أكثر من <span dir="ltr" style="direction: ltr">1000</span> موقف</td>
                        <td class="center"><span dir="ltr" style="direction: ltr"> 20 </span> موقفا بالإضافة الى موقف واحد لكل <span dir="ltr" style="direction: ltr">100</span> موقف بعد ال <span dir="ltr" style="direction: ltr">1000</span> موقف </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-page_template>