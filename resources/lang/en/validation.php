<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];





นายแพทย์ จตุภัทร คุณสงค์
(คุณหมอจอม)
เลขที่ใบรับประกอบโรคศิลป์ 36895
ประวัติการศึกษา
พ.ศ. 2544 : มันธยมศึกษาโรงเรียนเตรียมอุดมศึกษา
พ.ศ. 2551 : แพทยศาสตร์บัณฑิต คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
พ.ศ. 2556 : วุฒิบัตรจิตเวชศาสตร์ คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
พ.ศ. 2562 : อนุบมัติบัติ ผู้เชียวชาญสาขาจิตเวชศาสตร์การเสพติด พ.ศ.
ประวัติการทำงาน
พ.ศ. 2553 : แพทย์ประจำบ้านสาขาจิตเวชศาสตร์ คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
พ.ศ. 2556 : จิตแพทย์ประจำโรงพยาบาลยันฮี
พ.ศ. 2558 : จิตแพทย์ ประจำศูนย์จิตรักษ์ โรงพยาบาลกรุงเทพ สำนักงานใหญ่
ความเชียวชาญพิเศษ
- ภาวะฉุกเฉินทางจิตเวช
- ปัญหาการเสพติด (สารเสพติด, การเสพติดทางพฤติกรรมเช่น ติดเกมส์ ติดการพนัน)
- ความผิดปกติด้านเพศสภาพ
- สุขภาพจิตระดับองค์กร
- ความผิดปกติทางอารมณ์
- ความผิดปกติทางจิตที่เกิดร่วมกับภาวะความเจ็บป่วยทางกาย (เช่น การปวดเรื้อรังที่สัมพันธ์กับความเครียด, การเปลี่ยนแปลงทางฮอร์โมนที่มีผลต่ออาการทางจิต)
- จิตบำบัดแนวพุทธ และสติบำบัด (Mindfulness Psychotherapy)
ประสบการณ์และการทำงานพิเศษ
- เป็นผู้เชียวชาญด้านการประเมินปัญหาเพศสภาพก่อนการผ่าตัดแก้ไขอัตลักษณ์ทางเพศ (ผ่าตัดแปลงเพศ)
- เป็นวิทยากรอบรมด้านการให้คำปรึกษาในการบำบัดสารเสพติดให้กับบุคคลากรในคลินิกฟ้าใส (คลินิกด้านสุขภาพจิตและสารเสพติด) จากโรงพยาบาลต่าง ๆ ทั่วประเทศ
- เป็นวิทยากรรับเชิญไปให้ความรู้แก่สมาคมหญิงไทยในต่างประเทศ
- เป็นวิทยากรจัดกิจกรรมส่งเสริมสุขภาพจิตให้แก่บริษัทและองค์กรชั้นนำต่าง ๆ อาทิ บริษัทการบินกรุงเทพ (Bangkok Airway), ปตท., อมตะ, เครือซีเมนต์ไทย, มิชชลิน, DHL, กระทรวงยุติธรรม ฯลฯ
- เป็นวิทยากรอบรมเรื่่องการจัดการภาวะฉุกเฉินทางจิตเวชให้กับโรงพยาบาลในเครือ BDMS ทั่วประเทศ
- เป็นที่ปรึกษาให้ความรู้ด้านจิตเวช สำหรับการสร้างละคร และภาพยนต์
- เป็นวิทยากรให้ความรู้ด้านสุขภาพจิตให้กับสื่อมวลชนต่าง ๆ อาทิ รายการเสพสมออนแอร์ ช่อง Newstv, รายการส้มเปรี้ยว ช่อง TNN24, รายการวาไรตี้สุขภาพดี ช่อง Nation, รายการเจาะประเด็นข่าวใหญ่ ททบ. 5 เป็นต้น
- เขียนบทความให้ความรู้ด้านสุขภาพจิตผ่านทางสื่อต่าง ๆ
ผลงานด้านวิชาการ
เป็นผู้นิพนธ์ร่วมในการแต่งตำราเรื่อง อโรคยา-คัมภีร์ปลอดโรค ในหัวข้อเรื่อง หลักการให้คำปรึกษาเพื่อเปลี่ยนแปลงพฤติกรรมเสื่ยงต่อสุขภาพ
งานวิจัย
การกระทำผิดซ้ำในกลุ่มเยาวชนที่ถูกคุมประพฤติในคดียาเสพติด
ผลของโปรแกรมการเผชิญความเครียดแบบกลุ่มต่อการแสดงออกทางอารมณ์ของผู้ดูแลผู้ป่วยจิตเภท

########################
นายแพทย์ ภูมิปภพ สุนศุข
ประวัติการศึกษา
แพทย์ศาสตร์บัณฑิต จุฬาลงกรณ์มหาวิทยาลัย
วุฒิบัตรจิตเวชศาสตร์ ภาควิชาจิตเวชศาสตร์ คณะแพทยศาสตร์ มหาวิยาลัยธรรมศาสตร์
ประวัติการทำงาน
2014 - 2016 : นายแพทย์ปฎิบัติการ สถาบันบำบัดรักษาและฟื้นฟูผู้ติดยาเสพติดแห่งชาติบรมราชนนี
2015 : ศึกษาดูงานเรื่อง Alcohol and Other Drungs Service ที่ Turning Point, Eastern Health, Monash University, Melbourne, Victoria, Australia 
2016 - 2019 : แพทย์ประจำบ้านสาขาจิตเวชศาสตร์ ภาควิชาจิตเวชศาสตร์ คณะแพทยศาสตร์ มหาวิทยาลัยธรรมศาสตร๋
2019 : นายแพทย์ชำนาญการ (จิตแพทย์) สถาบันบำบัดรักษาและฟื้นฟูผู้ติดยาเสพติดแห่งชาติบรมราชนนี
Bhumpaphop Sunsuk, MD
Board Certification
Diploma of the Thai Board of Psychiatry, the Royal College of Psychiatrists of Thailand
Previous Literature
Psychometric Properties of the Visual Object and Spece Perception (VOSP) in Normal Thai Older Adults, a Pilot Study

##############################
แพทย์หญิง มนิสสรา เกตุแก้ว
จิตแพทย์เด็กและวัยรุ่น
ประวัติการศึกษา 
พ.ศ. 2562 : ประกาศนียบัตรความเชี่ยวชาญด้านจิตเวชศาสตร์เด็กและวัยรุ่น ชมรมจิตแพทย์เด็กและวัยรุ่น ราชวิทยาลัยจิตแพทย์แห่งประเทศไทย
พ.ศ. 2558-2562 : หลักสูตรแพทย์ประจำบ้านจิตเวชศาสตร์ สาขาจิตเวชเด็กและวัยรุ่น คณะแพทยศาสตร์ศิริราชพยาบาล พ.ศ. 2557 แพทยศาสตร์บัณฑิต คณะแพทยศาสตร์ มหาวิทยาลัยศรีนครินทรวิโรฒ
ประวัติการทำงาน
พ.ศ. 2557 - 2558 : แพทย์เพิ่มพูนทักษะ โรงพยาบาลนครพิงค์ จังหวัดเชียงใหม่ 
พ.ศ. 2557 - 2558 : แพทย์เพิ่มพูนทักษะ โรงพยาบาลดอยสะเก็ด จังหวัดเชียงใหม่ 
พ.ศ. 2558 - 2562 : แพทย์ประจำบ้านจิตเวชศาสตร์ สาขาจิตเวชเด็กและวัยรุ่น คณะแพทยศาสตร์ศิริราชพยาบาล
พ.ศ. 2562 - ปัจจุบัน : อาจารย์แพทย์ คณะแพทยศาสตร์ มหาวิทยาลัยพะเยา 
พ.ศ. 2562 - ปัจจุบัน : อาจารย์แพทย์พิเศษ แผนกจิตเวชศาสตร์ ศูนย์แพทยศาสตร์ โรงพยาบาลพะเยา
พ.ศ. 2562 - ปัจจุบัน : จิตแพทย์เด็กและวัยรุ่น ศูนย์การแพทย์และโรงพยาบาลมหาวิทยาลัยพะเยา
พ.ศ. 2562 - ปัจจุบัน : จิตแพทย์เด็กและวัยรุ่น (part-time) โรงพยาบาลพะเยาราม คณะกรรมการ
พ.ศ. 2562 - ปัจจุบัน : คณะกรรมการศูนย์ให้คำปรึกษา กองพัฒนาคุณภาพนิสิตและนิสิตพิการ มหาวิทยาลัยพะเยา ผู้ทรงคุณวุฒิ ที่ปรึกษางานวิทยานิพนธ์/งานวิจัย
พ.ศ. 2562 : ผู้ทรงคุณวุฒิตรวจสอบเครื่องมือวิจัยนักศึกษาปริญญาเอก หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาพยาบาลศาสตร์ คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่
พ.ศ. 2562 : ผู้ทรงคุณวุฒิตรวจสอบเครื่องมือวิจัยนักศึกษาปริญญาโท หลักสูตรศิลปะศาสตร์มหาบัณฑิต สาขาวิชาศิลปะการแสดง บัณฑิตวิทยาลัย มหาวิทยาลัยราชภัฏสวนสุนันทา
วิทยากร
พ.ศ. 2562 : วิทยากรโครงการ UP Mental Health Care Training รุ่นที่ 1 และ 2 จัดโดยศูนย์ให้คำปรึกษา กองพัฒนาคุณภาพนิสิตและนิสิตพิการ มหาวิทยาลัยพะเยา
พ.ศ. 2562 : วิทยากรอบรมอาจารย์ประจำชั้น ประจำปีการศึกษา 2562 เรื่อง "ความเป็นครูกับการดูแลนักเรียน" โรงเรียนสาธิตมหาวิทยาลัยพะเยา
พ.ศ. 2562 : วิทยากรให้ความรู้เกี่ยวกับโรคซึมเศร้าในวัยรุ่นและบทบาทของคุณครู ในการป้องกันและดูแลเด็กนักเรียนที่มีภาวะซึมเศร้า โรงเรียนเฉลิมพระเกียรติสมเด็จพระศรีนครินทร์ พะเยา ในพระราชูปถัมภ์สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี
ผลงานวิจัย/บทความทางวิชาการ
สิรินัดดา ปัญญาภาส, มนิสสรา เกตุแก้ว และฑิฆัมพร หอสิริ. (2562). การศึกษานำร่อง ถึงประสิทธิผลของโปรแกรมการลดความรู้สึกถูกตีตราสำหรับผู้ปกครองของผู้ป่วยโรค สมาธิสั้น. คณะแพทยศาสตร์ศิริราชพยาบาล. 

############################
แพทย์หญิงปรานี ปวีณชนา 
เลขที่ใบรับประกอบโรคศิลป์ 36963
ประวัติการศึกษา
พ.ศ. 2544 : มันธยมศึกษาโรงเรียนเตรียมอุดมศึกษา 
พ.ศ. 2551 : แพทยศาสตร์บัณฑิต คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล 
พ.ศ. 2554 : จิตเวชศาสตร์เด็กและวัยรุ่น ภาควิชาจิตเวชศาสตร์ คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
พ.ศ. 2557 : ประกาศนียบัตรจิตบำบัดปรับเปลี่ยนความคิดและพฤติกรรม (CBT) โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ มหาวิทยาลัยธรรมศาสตร๋ 
พ.ศ. 2559 : Certificate in Cognitive Behavior Therapy, Beck Institute for Cognitive Behavior Therapy, USA
ประวัติการทำงาน
- แพทย์ใช้ทุน โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์ กรมสุขภาพจิต กระทรวงสาธารณสุข
- นายแพทย์ชำนาญการ สถาบันสุขภาพจิตเด็กและวัยรุ่นภาคตะวันออกเฉียงเหนือ กรมสุขภาพจิต กระทรวงสาธารณสุข
- อาจารย์แพทย์ โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ
- จิตแพทย์เด็กและวัยรุ่น โรงพยาบาลมนารมย์
ประสบการณ์และการทำงานพิเศษ
- วิทยากรบรรยายทางวิชาการและจัดการอบรมให้กับสถาบันการศึกษา, หน่วยงานภาครัฐ, หน่วยงานเอกชน
- เป็นที่ปรึกษาด้านงานวิจัดให้กับนักศึกษาระดับปริญญาโทและปริญญาเอก
- เขียนบทความลงสื่อต่าง ๆ และออกรายการโทรทัศน์
- เจ้าของเพจหมอแมวน้ำเล่าเรื่อง
- นำเสนองานวิจัย: Prani Paveenchana (August 2013). The Prevalence and Associated Factors of Internet Gambling Behavior among Undergraduate Students at Higher Education Institutes with Campuses in Bangkok and Environs. Paper Presented at the 4th World Congress of Asia Psychiatry, Bangkok, Thailand

######################
แพทย์หญิง สุชาวดี พงศ์ธนวิสุทธิ์
ประวัติการศึกษา
พ.ศ. 2556 : แพทยศาสตร์บัณฑิต มหาวิทยาลัยสงขลานครินทร์ 
พ.ศ. 2559 : วุฒิบัตรสาขาจิตเวชศาสตร์ มหาวิทยาลัยสงขลานครินทร์ 
พ.ศ. 2561 : วุฒิบัตรสาขาจิตเวชศาสตร์เด็กและวัยรุ่น โรงพยาบาลรามาธิบดี มหาวิทยาลัยมหิดล
ประวัติการทำงาน
พ.ศ. 2556 - 2559 : แพทย์ประจำบ้านสาขาจิตเวชศาสตร์ โรงพยาบาลสงขลานครินทร์ 
พ.ศ. 2559 - 2561 : แพทย์ประจำบ้านต่อเนื่องสาขาจิตเวชศาสตร์เด็กและวัยรุ่น โรงพยาบาลรามาธิบดี มหาวิทยาลัยมหิดล 
พ.ศ. 2561 - ปัจจุบัน : อาจารย์ประจำหน่วยจิตเวชศาสตร์เด็กและวัยรุ่น ภาควิชาจิตเวชศาสตร์ คณะแพทย์ศาสตร์ มหาวิทยาลัยสงขลานครินทร์
ผลงานวิจัยในอดีต
- สุชาวดี พงศ์ธนวิสุทธิ์, จตุรพร แสงกูล, ชนกานต์ ชัชวาลา. รูปแบบของการอบรมเลี้ยงดูของพ่อแม่ในผู้ป่วยโรคควาผิดปรกติจากการใช้สารเสพติด: การศึกษาในจังหวัดสงขลาประเทศไทย. สงขลานครินทร์เวชสาร 2559;34(5):259-268.
- Pongthanawisuth S, Limsuwan N. Families' Feedback on Useful Qualities of Reflecting Team in Family Therapy at Ramathiodi Hospital. Journal of the psychiatric of Thailand 2018;63(1):65-76
ผลงานวิจัยที่กำลังดำเนินการอยู่
ความชุกปัญหาโรคจิตเวชและปัจจัยที่เกี่ยวข้องในนักศึกษาที่มารับการรักษาที่โรงพยาบาล สงขลานครินทร์ในช่วง 6 ปีที่ผ่านมา (Prevalence of psychiatric disorders and associated factors among university students registered to Songklanagarind Hospital in the past 6 years)


'#######################
แพทย์หญิง วิลาวัลย์ กำจรปรีชา
จิตเวชทั่วไป
ประวัติการศึกษา
- แพทยศาสตร์บัณฑิต คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
- วิทยาศาสตร์บัณฑิตขั้นสูง คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
- วุฒิบัตรจิตเวชศาสตร์ ภาควิชาจิตเวชศาสตร์ คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
- The Telephone and Telemedicine in Medicine: An Instrument of Opportunity and risk Certification, The Harvard Medical School
ประวัติการทำงาน
- 2019 จิตแพทย์โรงพยาบาลกรุงเทพ
- 2031-2019 จิตแพทย์โรงพยาบาลหัวเฉียว
- รองประธานโครงการ end of life และ Palliative care รพ.หัวเฉียว
- วิทยากรรับเชิญด้านปัญหาสุขภาพจิต FM101
- ให้ความรุ้ด้านจิตเวชทางโทรทัศน์ช่อง TNN เรื่องโรคซึมเศร้าและปัญหาอารมณ์ร้อน 
- วิทยากรรับเชิญรายการ "กบนอกกะลา" เรื่องดนตรีบำบัด
ผลงานทางวิชาการ/ งานวิจัย/ โครงการพัฒนาคุณภาพ
- Development of thai computerized screening tool for dementia and its preliminary field test. (การพัฒนาเครื่องมือคัดกรองภาวะสมองเสื่อมฉบับภาษาไทยโดยระบบคอมพิวเตอร์)



#######################
พญ.ดร. ประวีณ์นุช เพ็ญภาสกานต์
จิตเวชทั่วไป
ประวัติการศึกษา
- หลักสูตร Ph.D., M.D. (หลักสูตรปรัชญาดุษฎีบัณฑิตและแพทยศาสตร์บัณฑิต) วิทยาศาสตร์บัณฑิต สาขาวิทยาศาสตร์การแพทย์ มหาวิทยาลัยมหิดล
- ปรัชญาดุษฎีบัณฑิตสาขาเทคโนโลยีชีวภาพ มหาวิทยาลัยมหิดล
- แพทยศาสตร์บัณฑิต คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี มหาวิทยาลัยมหิดล
- วุฒิบัตรจิตเวชศาสตร์ ภาควิชาจิตเวชศาสตร์ คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี มหาวิทยาลัยมหิดล
ประวัติการทำงาน
- 2019-ปัจจุบัน จิตแพทย์โรงพยาบาลหัวเฉียว และรองประธานโครงการธรรมรักษา (Paliative care) โรงพยาบาลหัวเฉียว
ผลงานทางวิชาการ
- Penpassakarn P, Chaiyen P, Palittapongarnpim P. Efficient heterologous expression and one-step purification of fully actie c-terminal histidine-tagged uridine monophosphate kinase from Mycobacterium tuberculosis. Southeast Asian J Trop Med Public Health. 2011 Nov;42(6)
- Viratyosin W, Kulawonganunchai S, Smittipat N, Juthayothin T, Penpassakarn P, Pasomsum E, Chantratita W, Chaiprasert A, Palittapongarnpim P.Draft Genome Sequence of the Meningitis in Thailand. Genome Announce. 2013 Oct 3;1(5)
- ประวีณ์นุช เพ็ญภาสกานต์, พัทธมน เจริญรัตน์, นันทิกา อนันต์ถาวรวงศ์, ภาพันธ์ ไทยพิสุทธิกุล. Behavioral Variant of Frontotmeporal Dementia (bvFTD) and Developing of Mind behavioral Impairment (MBI) Concept. Journal of the Psychiatric Association of Thailand, 64(1), 99-112

#######################
แพทย์หญิง เต็มหทัย นาคเทวัญ
ประวัติการศึกษา
2010 - 2016 : Doctor of Medicine at Faculty of Medicine Prince of Songkla University
2017 - 2020 : Residency training in Psychiatry, Faculty of Medicine Prince of SongKla University
2020 : Board certified in Psychiatry by The Royal College of Psychiatrists of Thailand
ประวัติการทำงาน
2016 - 2017 : General Practitioner at SongKlanagarind Hospital
2020 : Delivered a speech about "Mentalization and narrative intervention in boarderline petsonality disorder" at 47th Thai Annual Congress of Psychiatry
2020 : Delivered an oral presentation about "The screening of adult attention deficit hyperactivity disorder and related factor in the first year college students at Prince of Songkla University" at 47th Thai Annual congress of Psychiatry
2020 - now : Psychiatrist at Taksin Hospital 
Tecching Service
2018 - 2019 : Extern tutorial hours
2019 : Positive psychology for substance and alcohol patient
2019 : Mentalization based therapy for nurses 
Academic Appointment
2018 : Mindfulness and self development
2019 : Uncovering your true self
2019 : 1-4-7 Ideal triangle Thai enneagram association
2020 : Strengths of the nine types 
2020 : Defense mechanisms of the nine types
Publications
2020 The screening of adult attention deficit hyperactivity disorder and related factors in the first year college students at Prince of Songkla University

