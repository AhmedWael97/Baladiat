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
                الاشتراطات الخاصة
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
            <div class="number-main">8</div>
            <h2 class="text">الاشتراطات الخاصة:</h2>
        </div>
        <div class="list-item">
            <div class="number-main">1.8</div>
            <h2 class="text">مدة العقد:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">مدة العقد ..... تبدأ من تاريخ تســليم الموقع من البلدية للمســتثمر بموجب محضــر تســليم موقع من الطرفين شــــريطة ألا يزيد ذلك عن شــــهر واحد من تاريخ توقيع العقد وفي حالة تأخر المســــتثمر عن توقيع محضــــر تســليم الموقع يتم إشــعاره خطي وتحتســب بداية مدة العقد من تاريخ الإشــعار ويعتبر بالتالي محضــر التســليم أو نســخة الإشعار جزء لا يتجزأ من هذا العقد ومن من ملاحقه. </div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">2.8</div>
            <h2 class="text">فترة التجهيز والإنشاء:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يمنح المستثمر فترة تعادل ..... من مدة العقد للتجهيز والإنشاء، وتكون هذه الفترة غير مدفوعة الأجرة، وفي حالة عدم قيام المستثمر بأنشاء المشروع خلال الفترة الزمنية المسموح بها للتجهيز والإنشاء فعليه في هذه الحالة سداد قيمة فترة التجهيز والإنشاء وفسخ العقد.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">3.8</div>
            <h2 class="text">النشاط الاستثماري المسموح به:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">النشاط الاستثماري المسموح به هو إنشاء وتشغيل وصيانة وإدارة سوق تجاري حسب الاشتراطات الواردة بجدول مكونات النشاط بالكراسة ولا يجوز للمستثمر استعمال الأرض في غير هذا النشاط.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">4.8</div>
            <h2 class="text">متطلبات تجهيز الموقع:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.4.8</div>
            <div class="text">تسوير الموقع ووضع لافته باسم المشروع.</div>
        </div>
        <div class="list-item">
            <div class="number">2.4.8</div>
            <div class="text">عمل الرفع المساحي للأرض.</div>
        </div>
        <div class="list-item">
            <div class="number">3.4.8</div>
            <div class="text">إزالة الاشغالات من الموقع.</div>
        </div>
        <div class="list-item">
            <div class="number">4.4.8</div>
            <div class="text">نقل المخلفات وإزالة النفايات.</div>
        </div>
        <div class="list-item">
            <div class="number">5.4.8</div>
            <div class="text">يجب على المستثمر الحصول على جميع التراخيص والموافقات اللازمة من جميع الجهات المختصة والتي لها علاقة بكافة الأنشطة بالمشروع.</div>
        </div>
        <div class="list-item">
            <div class="number">6.4.8</div>
            <div class="text">يلتزم المستثمر بأن يكون الدخول والخروج من البوابات الرئيسية للموقع مع الإلتزام بالتنظيم الأمني وحركة الدخول والخروج من خلال كوادر مخصصة لذلك وبتقنية عالية في ذلك.</div>
        </div>
        <div class="list-item">
            <div class="number">7.4.8</div>
            <div class="text">يلتزم المستثمر بالمعالجة الفورية لكافة الملاحظات وتطبيق مفاهيم أنسنة المدن ومعالجة التشوه البصري وتحسين المشهد الحضري والوصول الشامل والحرص على نظافة الموقع وسلامة البيئة وتطوير الخدمات المرتبطة به.</div>
        </div>
        <div class="list-item">
            <div class="number">8.4.8</div>
            <div class="text">الإلتزام بنظام البناء بالنسبة للإرتدادات وعدد الأدوار ونسبة البناء للأدوار والدخول والخروج.</div>
        </div>
        <div class="list-item">
            <div class="number">9.4.8</div>
            <div class="text">إرتداد الملاحق العلوية من حد الدور الأخير جهة الشوارع لا تقل عن 2 متر.</div>
        </div>
        <div class="list-item">
            <div class="number">10.4.8</div>
            <div class="text">يراعي في تصميم الوجهات بصورة عصرية جمالية مع الإلتزام بتوفير الخصوصية جهة المجاور السكني.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">5.8</div>
            <h2 class="text">متطلبات الترخيص:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.5.8</div>
            <div class="text">تكون إجراءات الإصدار والتجديد والتعديل والإيقاف والإلغاء للترخيص وفق نظام إجراءات التراخيص البلدية ولائحته التنفيذية.</div>
        </div>
        <div class="list-item">
            <div class="number">2.5.8</div>
            <div class="text">يمنع مخالفة النشاط الذي صدر له الترخيص.</div>
        </div>
        <div class="list-item">
            <div class="number">3.5.8</div>
            <div class="text">	الحصول على موافقة الجهة المشرفة على النشاط.</div>
        </div>
        <div class="list-item">
            <div class="number">4.5.8</div>
            <div class="text">يجب إلغاء الترخيص واستخراج ترخيص جديد في حال انتقال النشاط إلى موقع آخر.</div>
        </div>
        <div class="list-item">
            <div class="number">5.5.8</div>
            <div class="text">يمنع الاتصال أو النفاذ لمحل / مكتب مجاور ما لم ينص ترخيص أي منهما على ذلك.</div>
        </div>
        <div class="list-item">
            <div class="number">6.5.8</div>
            <div class="text">الحصول على موافقة المديرية العامة للدفاع المدني قبل إصدار الترخيص.</div>
        </div>
        <div class="list-item">
            <div class="number">7.5.8</div>
            <div class="text">يمنع مزاولة النشاط بعد الساعة (12) ليلاً إلا بعد الحصول على تصريح العمل (24 ساعة) ، باستثناء شهر رمضان المبارك والأعياد.</div>
        </div>
    </div>

   
</x-page_template>



<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">6.8</div>
            <h2 class="text">المتطلبات المكانية:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text bold">المتطلبات التخطيطية التي تتعلق بتطوير الموقع:</div>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div>
                <table style="margin-bottom: 15px">
                    <tr>
                        <th>التصنيف</th>
                        <th>جزء من مبنى قائم</th>
                        <th>موقع مستقل</th>
                    </tr>
                    <tr>
                        <td>داخل المدينة</td>
                        <td>ضمن المباني التجارية أو مباني الاستخدام المختلط</td>
                        <td>ضمن المواقع المخصصة للاستخدام التجاري</td>
                    </tr>
                    <tr>
                        <td>خارج الكتلة العمرانية</td>
                        <td>ضمن المباني التجارية أو مباني الاستخدام المختلط</td>
                        <td>ضمن المواقع المخصصة للاستخدام التجاري</td>
                    </tr>
                    <tr>
                        <td>المنطقة / الشوارع</td>
                        <td>شارع تجاري / طريق رئيسي</td>
                        <td>شارع تجاري / طريق رئيسي</td>
                    </tr>
                    <tr>
                        <td>الإيرادات المطلوبة</td>
                        <td >-</td>
                        <td >حسب نظام البناء المعتمد في المنطقة الواقع بها النشاط</td>
                    </tr>
                    <tr>
                        <td>الارتفاعات المسموح بها</td>
                        <td >-</td>
                        <td>حسب نظام البناء المعتمد في المنطقة الواقع بها النشاط</td>
                    </tr>
                    <tr>
                        <td>التشجير</td>
                        <td >-</td>
                        <td>
                            <ul>
                                <li>توفير حوض زراعي بالموافقة كحد أدنى بحيث:</li>
                                <li>يجب أن يكون بالأبعاد المطلوبة.</li>
                                <li>يجب أن يكون مزروعاً بالأشجار.</li>
                                <li>يجب أن يكون نافذ ورائع الشكل.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>نسبة البناء</td>
                        <td >-</td>
                        <td>حسب نظام البناء المعتمد في المنطقة الواقع بها النشاط</td>
                    </tr>
                    <tr>
                        <td>المواقف المطلوبة</td>
                        <td >-</td>
                        <td>(4) مواقف لكل (100) متر مربع من مساحة البناء</td>
                    </tr>
                    <tr>
                        <td>متطلبات أخرى</td>
                        <td >المحلات التجارية الواقعة ضمن المباني التجارية تتبع اشتراطات المباني المتواجدة ضمنها</td>
                        <td >لا يوجد</td>
                    </tr>
                </table>
            </div>
        </div>


    </div>

    
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">7.8</div>
            <h2 class="text">متطلبات المظهر العام للنشاط:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div>
                <table>
                    <tr>
                        <th>التصنيف</th>
                        <th>جزء من مبنى قائم</th>
                        <th>موقع مستقل</th>
                    </tr>
                    <tr>
                        <td> متطلبات الواجهة</td>
                        <td>لا ينطبق</td>
                        <td>
                            <ul>
                                <li>تصميم الواجهات بالإلتزام بتطبيق الكود العمراني الواقع بها.</li>
                                <li>معالجة الواجهات التجارية بكواسر شمسية.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>متطلبات المكونات والتوزيع الداخلي</td>
                        <td>لا ينطبق</td>
                        <td>تقديم تصميم مقترح للمراجعة والاعتماد.</td>
                    </tr>
                    <tr>
                        <td> متطلبات أخرى</td>
                        <td>لا ينطبق</td>
                        <td>يجب أن تكون السلالم الخارجية ومداخل السيارات والمنحدرات ضمن حدود الملكية للأرض.</td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
</x-page_template>


<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no + 1">
    
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">8.8</div>
            <h2 class="text">اشتراطات التشغيل والصيانة:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.8.8</div>
            <div class="text">يجب على المستثمر التعاقد مع إحدى الشركات المتخصصة في مجال النظافة والصيانة للقيام بإعمال الصيانة الدورية للأجهزة والمعدات والماكينات ... إلخ الموجودة بالمبنى مثل: المصاعد وماكينات ومراوح التكييف وأجهزة إطفاء ومكافحة الحريق وخزانات المياه ودورات المياه... إلخ.</div>
        </div>
        <div class="list-item">
            <div class="number">2.8.8</div>
            <div class="text">يجب على المستثمر أن يقدم للبلدية تقريراً دورياً (كل ثلاثة أشهر (من مكتب هندسي معتمد من البلدية عن أعمال الصيانة التي تمت مبيناً به تفاصيل الإصلاحات والاستبدالات التي نفذت.</div>
        </div>
        <div class="list-item">
            <div class="number">3.8.8</div>
            <div class="text">على المستثمر أن يعمل على تأمين عدد من الأفراد يمثلون إدارة المشروع طوال فترة الدوام.</div>
        </div>
        <div class="list-item">
            <div class="number">4.8.8</div>
            <div class="text">أن تخضع جميع أجزاء المشروع لأنظمة وتعليمات السلامة المعمول بها من قبل الدفاع المدني بما يكفل سلامة مرتادي الأسواق.</div>
        </div>
        <div class="list-item">
            <div class="number">5.8.8</div>
            <div class="text">ضرورة تواجد عدد من الأفراد المدربين بكفاءة على مواجهة حالات الطوارئ والقدرة على استخدام أجهزة ومعدات إطفاء الحريق وإخلاء الأفراد من الأسواق في حالات الطوارئ والقيام بعمل الإسعافات الأولية وحفظ الأمن والتنسيق مع الجهات المختصة.</div>
        </div>
        <div class="list-item">
            <div class="number">6.8.8</div>
            <div class="text">في حال رغبة المستثمر في إضافة نشاط تجاري في المواقف يجب أخذ موافقة البلدية المختصة مع مراعاة عدم التأثير على الطاقة الاستيعابية للمواقف.</div>
        </div>
        <div class="list-item">
            <div class="number">7.8.8</div>
            <div class="text">إجراء صيانة ومعايرة دورية لأجهزة إنذار وإطفاء الحريق الآلية منها أو اليدوية طبقاً لتعليمات المديرية العامة للدفاع المدني.</div>
        </div>
        <div class="list-item">
            <div class="number">8.8.8</div>
            <div class="text">	إجراء الصيانة الدورية والوقائية على العناصر الإنشائية وكافة التجهيزات والتمديدات والتوصيلات والمعدات من كهرباء وتركيبات وأنظمة سلامة، ومتابعتها ضمن خطة زمنية تحفظ بسجلات المنشأة ويحق لمنسوبي البلدية أو الأمانة الاطلاع عليها لضمان السلامة والصحة العامة في جميع الأوقات.</div>
        </div>
        <div class="list-item">
            <div class="number">9.8.8</div>
            <div class="text">الإلتزام بتعليمات الأمن والسلامة الواردة بالكود السعودي للحماية من الحرائق (<span class="ltr-dir">SBC801</span>).</div>
        </div>
        <div class="list-item">
            <div class="number">10.8.8</div>
            <div class="text">الإلتزام بتعليمات استخدام السلامة الخاصة بتخزين واستخدام المواد الخطرة أو السمية أو الحارقة.</div>
        </div>
        <div class="list-item">
            <div class="number">11.8.8</div>
            <div class="text">الإلتزام بعرض الترخيص البلدي في موقع بارز في مكتب إدارة الأسواق التجارية.</div>
        </div>
        <div class="list-item">
            <div class="number">12.8.8</div>
            <div class="text">التأكد من عدم وجود تسريب أعمدة (مواسير) السقوط ومدادات الصرف في المناور المجاورة لأماكن التشغيل، حتى لا ينتج عنه رذاذ متناثر يصل من خلال فتحات التهوية إلى داخل المبنى. </div>
        </div>
        <div class="list-item">
            <div class="number">13.8.8</div>
            <div class="text">التدريب على خطة مواجهة الإخلاء أثناء الحريق أو الطوارئ.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">9.8</div>
            <h2 class="text">الإلتزام باللوائح:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.9.8</div>
            <div class="text">يتعين على مقدمي العطاءات التأكد من أن مفاهيم تصميم الموقع ونموذج تشغيل الموقع متوافق مع كل من لوائح البناء في وزارة البلديات والإسكان والضوابط المعمول بها.</div>
        </div>
        <div class="list-item">
            <div class="number">2.9.8</div>
            <div class="text">الإلتزام بشروط التراخيص والأنظمة والتعليمات التي تحكم الخدمات المقدمة في المشروع ومتطلبات السلامة والبيئة والصحة العامة.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number">10.8</div>
            <h2 class="text">مواقف سيارات: </h2>
        </div>
        <div class="list-item">
            <div class="number-main"></div>
            <div class="text bold">يلتزم المستثمر بما يلي: </div>
        </div>
        <div class="list-item">
            <div class="number">1.10.8</div>
            <div class="text">توفير مواقف سيارات وفقاً للاشتراطات البلدية ومكونات المشروع، على أن تكون متوافقة مع اشتراطات تنفيذ وتصميم مواقف السيارات الصادرة عن وزارة البلديات والإسكان، ومراعاة الاشتراطات التي تصدر مستقبلا في هذا الشأن.</div>
        </div>
        <div class="list-item">
            <div class="number">2.10.8</div>
            <div class="text">تخصيص مواقف سيارات الأشخاص ذوي الإعاقة بواقع (5 %) من المواقف العامة وبحد أدنى موقفين على أن تكون قريبة من مدخل المبنى مع تمييز مواقف الأشخاص ذوي الإعاقة بالشعار الخاص بهم وألا تقل المساحة المخصصة لسيارة الشخص ذوي الإعاقة عن (25 م2) طبقاً للأبعاد الموضحة بالاشتراطات الخاصة بالخدمات البلدية المتعلقة بالأشخاص ذوي الإعاقة.</div>
        </div>
        <div class="list-item">
            <div class="number">3.10.8</div>
            <div class="text">لا يسمح باستغلال الشوارع الجانبية والخلفية كمواقف لسيارات مرتادي الأسواق التجارية أو العاملين فيها.</div>
        </div>
        <div class="list-item">
            <div class="number">4.10.8</div>
            <div class="text">سهولة دخول وخروج السيارات من وإلى المواقف بحيث لا تعيق حركة المرور في الشوارع المحيطة.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">11.8</div>
            <h2 class="text">متطلبات الأشخاص ذوي العلاقة: </h2>
        </div>
        <div class="list-item">
            <div class="number-main"></div>
            <div class="text">يلتزم المستثمر بتحقيق متطلبات الاشخاص ذوي الإعاقة بهدف تيسير وتسهيل حركتهم وتهيئة الأوضاع والأبعاد والفراغات المناسبة لاستخدامهم طبقاً لمتطلبات الفصل (1009) والباب (11) من كود البناء السعودي العام (SBC-201) وحسب الدليل الإرشادي للوصول الشامل - مركز الملك سلمان (حفظه الله) لأبحاث الإعاقة.</div>
        </div>
    </div>
</x-page_template>


<x-page_template :doc="$doc" :page_img="$page_img" :page_no="$page_no + 2">
    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">12.8</div>
            <h2 class="text">الدراسة التحليلية للتأثيرات المرورية:</h2>
        </div>
        <div class="list-item">
            <div class="number-main"></div>
            <div class="text">تقديم دراسة مرورية شاملة تقوم عل حصر حركة المرور على الشوارع المحيطة وتكون معدة من قبل مكتب هندسي مصنف من الوزارة في مجال العمل المناسب، لتقييم مستوى الخدمة عليها، وحساب الزيارات الناتجة عن المشروع، وتوزيعها على شبكة الطرق المحيطة، وتقدير حجم الطلب على أماكن انتظار المركبات مع تقييم الوضع الراهن، ووضع الطرق بعد إنشاء المشروع (سوق تجاري)، وتتطلب موافقة الجهات ذات الاختصاص بالبلدية والجهات ذات العلاقة.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">13.8</div>
            <h2 class="text">الغرامات والجزاءات:</h2>
        </div>
        <div class="list-item">
            <div class="number-main"></div>
            <div class="text">يلتزم المستثمر بإنشاء وتشغيل وصيانة سوق تجاري وفقاً للشروط والمواصفات التي تقضي بها كراسة الشروط والمواصفات والنظم السائدة وفي حالة حدوث أية مخالفة من المستثمر فانه سوف يكون ملتزماً بدفع الغرامات التي تقررها لائحة الغرامات والجزاءات البلدية الصادرة بقرار مجلس الوزراء الموقر رقم (92) وتاريخ <span class="ltr-dir">05/02/1442</span> هـ ، والقرار الوزاري رقم (<span class="ltr-dir">4300204526</span>) وتاريخ <span class="ltr-dir">12/03/1443</span> هـ المبلغ به القواعد التنفيذية للائحة الجزاءات عن المخالفات البلدية وجدول المخالفات والجزاءات البلدية الصادرة عن وزارة البلديات والإسكان لعام 1444 هـ - 2023 م ، وما يستجد عليه من تعديلات.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">14.8</div>
            <h2 class="text">اللوحات الإعلانية:</h2>
        </div>
        <div class="list-item">
            <div class="number">1.14.8</div>
            <div class="text">يلتزم المستثمر بتطبيق الاشتراطات الفنية للوحات التجارية العامة الصادرة بتعميم معالي وزير البلديات والإسكان (في حينه) رقم (<span class="ltr-dir">1/4200079475</span>) وتاريخ <span class="ltr-dir">26/02/1442</span> هـ وما يستجد عليها من تعديلات مستقبلية.</div>
        </div>
        <div class="list-item">
            <div class="number">2.14.8</div>
            <div class="text">الإلتزام بعرض الترخيص البلدي في موقع بارز في مكتب إدارة الأسواق التجارية.</div>
        </div>
        <div class="list-item">
            <div class="number">3.14.8</div>
            <div class="text">على المستثمر أثناء التنفيذ تكسيه المشروع من الخارج بسور قابل للإزالة وتركيب اللوحات التعريفية بالمشروع لتحسين المشهد الحضري للمدينة.</div>
        </div>
        <div class="list-item">
            <div class="number">4.14.8</div>
            <div class="text">التقيد بالكود العمراني وفي حال عدم وجوده فيتم الإلتزام باشتراطات اللوحات التجارية الصادرة من الوزارة.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">15.8</div>
            <h2 class="text">مساحة المحلات التجارية:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يجب على المستثمر أن يوفر مساحات مختلفة للمحلات التجارية تلبي مختلف الأنشطة والخدمات التجارية على أن يراعى فيها الاشتراطات الصحية والفنية والبلدية التي يتطلبها كل نشاط.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">16.8</div>
            <h2 class="text">العاملون بالمشروع:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يلتزم المستثمر بلائحة الاشتراطات الصحية للمطاعم والمطابخ وما في حكمها الصادرة عام 1440 هـ - 2019 م، المعدلة بالقرار الوزاري رقم (<span class="ltr-dir">4100010939</span>) وتاريخ <span class="ltr-dir">19/01/1441</span> هـ والمعمم برقم (<span class="ltr-dir">4100014533</span>) وتاريخ <span class="ltr-dir">27/01/1441</span> هـ وما يستجد عليها من تعديلات أو تحديثات.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">17.8</div>
            <h2 class="text">المسئولية عن حوادث العمل:</h2>
        </div>
        <div class="list-item">
            <div class="number"></div>
            <div class="text">يكون المستثمر مسئولاً مسئولية كاملة عن كافة حوادث الوفاة، وإصابات العمل، التي قد تلحق بأي من العمال والموظفين أثناء قيامهم بالعمل، أو تلحق بالمارة أو المركبات، نتيجة عدم إلتزامه باحتياطات السلامة أثناء تأدية العمل، ويتحمل وحده كافة التعويضات والمطالبات، أو أي تكاليف أخرى، وليس على البلدية أدنى مسئولية عن ذلك.</div>
        </div>
    </div>

    <div class="list-main-item">
        <div class="list-item">
            <div class="number-main">18.8</div>
            <h2 class="text">الاشتراطات الأمنية: </h2>
        </div>
        <div class="list-item">
            <div class="number">1.18.8</div>
            <div class="text">يلتزم المستثمر بجميع ما ورد بنظام استخدام كاميرات المراقبة الأمنية والصادرة بالمرسوم الملكي الكريم رقم م/34 وتاريخ <span class="ltr-dir">07/03/1444</span> هـ، وأي قرارات ذات صلة.</div>
        </div>
        <div class="list-item">
            <div class="number">2.18.8</div>
            <div class="text">الإلتزام بتفعيل الاشتراطات الأمنية المتعلقة بكاميرات المراقبة الأمنية وأجهزة التفتيش والكاشف والحراسة الأمنية الخاصة في ضوء ما ورد بالتعميم الوزاري رقم (<span class="ltr-dir">56610</span>) وتاريخ <span class="ltr-dir">28/11/1437</span> هـ بخصوص تلك الاشتراطات.</div>
        </div>
        <div class="list-item">
            <div class="number">3.18.8</div>
            <div class="text">تأمين حراسة على المبنى وذلك وفق تعميم سعادة مدير عام الشئون المالية والإدارية بوزارة الشئون البلدية والقروية والإسكان (وزارة البلديات والإسكان حالياً) رقم (538) وتاريخ <span class="ltr-dir">07/01/1434</span> هـ.</div>
        </div>
        <div class="list-item">
            <div class="number">4.18.8</div>
            <div class="text">يجب أن يكون هناك غرفة إدارة وتحكم داخل السوق.</div>
        </div>
        <div class="list-item">
            <div class="number">5.18.8</div>
            <div class="text">يجب تركيب بوابات دخول هيدروليكية.</div>
        </div>
        <div class="list-item">
            <div class="number">6.18.8</div>
            <div class="text">يجب تركيب كاميرات داخل المشروع، بها خاصية التسجيل الرقمية.</div>
        </div>
    </div>
   
</x-page_template>
    