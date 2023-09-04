<?php

return array(
  'accepted'             => 'يجب قبول الحقل :attribute',
  'active_url'           => 'الحقل :attribute لا يُمثّل رابطًا صحيحًا',
  'after'                => 'يجب على الحقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
  'after_or_equal'       => 'الحقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
  'alpha'                => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
  'alpha_dash'           => 'يجب أن لا يحتوي الحقل :attribute على حروف، أرقام ومطّات.',
  'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
  'array'                => 'يجب أن يكون الحقل :attribute ًمصفوفة',
  'before'               => 'يجب على الحقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
  'before_or_equal'      => 'الحقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
  'between'              => [
    'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
    'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
    'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
    'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
  ],
  'boolean'              => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
  'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
  'custom' =>
  array(
    'attribute-name' =>
    array(
      'role-name' => 'custom-message',
    ),
  ),
  'date'                 => 'الحقل :attribute ليس تاريخًا صحيحًا',
  'date_equals' => ' :attribute must be a date equal to :date.',
  'date_format'          => 'لا يتوافق الحقل :attribute مع الشكل :format.',
  'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
  'digits'               => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا/أرقام',
  'digits_between'       => 'يجب أن يحتوي الحقل :attribute بين :min و :max رقمًا/أرقام ',
  'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
  'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
  'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
  'ends_with' => ' :attribute must end with one of the following: :values.',
  'exists'               => 'الحقل :attribute لاغٍ',  'file' => ' :attribute must be a file.',
  'filled'               => 'الحقل :attribute إجباري',
  'gt' =>
  array(
    'array' => ' :attribute must have more than :value items.',
    'file' => ' :attribute must be greater than :value kilobytes.',
    'numeric' => ' :attribute must be greater than :value.',
    'string' => ' :attribute must be greater than :value characters.',
  ),
  'gte' =>
  array(
    'array' => ' :attribute must have :value items or more.',
    'file' => ' :attribute must be greater than or equal :value kilobytes.',
    'numeric' => ' :attribute must be greater than or equal :value.',
    'string' => ' :attribute must be greater than or equal :value characters.',
  ),
  'image'                => 'يجب أن يكون الحقل :attribute صورةً',
  'in'                   => 'الحقل :attribute لاغٍ',
  'in_array'             => 'الحقل :attribute غير موجود في :other.',
  'integer'              => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
  'ip'                   => 'يجب أن يكون الحقل :attribute عنوان IP ذا بُنية صحيحة',
  'ipv4'                 => 'يجب أن يكون الحقل :attribute عنوان IPv4 ذا بنية صحيحة.',
  'ipv6'                 => 'يجب أن يكون الحقل :attribute عنوان IPv6 ذا بنية صحيحة.',
  'json'                 => 'يجب أن يكون الحقل :attribute نصا من نوع JSON.',
  'lt' =>
  array(
    'array' => ' :attribute must have less than :value items.',
    'file' => ' :attribute must be less than :value kilobytes.',
    'numeric' => ' :attribute must be less than :value.',
    'string' => ' :attribute must be less than :value characters.',
  ),
  'lte' =>
  array(
    'array' => ' :attribute must not have more than :value items.',
    'file' => ' :attribute must be less than or equal :value kilobytes.',
    'numeric' => ' :attribute must be less than or equal :value.',
    'string' => ' :attribute must be less than or equal :value characters.',
  ),
  'max'                  => [
    'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أصغر لـ :max.',
    'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
    'string'  => 'يجب أن لا يتجاوز طول نص :attribute :max حروفٍ/حرفًا',
    'array'   => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
  ],
  'mimes'                => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
  'mimetypes'            => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
  'min'                  => [
    'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
    'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
    'string'  => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا',
    'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
  ],
  'multiple_of' => ' :attribute must be a multiple of :value',
  'not_in'               => 'الحقل :attribute لاغٍ',
  'not_regex' => ' :attribute format is invalid.',
  'numeric'              => 'يجب على الحقل :attribute أن يكون رقمًا',
  'password' => 'The password is incorrect.',
  'present'              => 'يجب تقديم الحقل :attribute',
  'regex'                => 'صيغة الحقل :attribute .غير صحيحة',
  'required'             => 'الحقل :attribute مطلوب.',
  'required_if'          => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
  'required_unless'      => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
  'required_with'        => 'الحقل :attribute إذا توفّر :values.',
  'required_with_all'    => 'الحقل :attribute إذا توفّر :values.',
  'required_without'     => 'الحقل :attribute إذا لم يتوفّر :values.',
  'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
  'same'                 => 'يجب أن يتطابق الحقل :attribute مع :other',
  'size'                 => [
    'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية لـ :size',
    'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
    'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
    'array'   => 'يجب أن يحتوي الحقل :attribute على :size عنصرٍ/عناصر بالظبط',
  ],
  'starts_with' => ' :attribute must start with one of the following: :values.',
  'string'               => 'يجب أن يكون الحقل :attribute نصآ.',
  'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
  'unique'               => 'قيمة الحقل :attribute مُستخدمة من قبل',
  'uploaded'             => 'فشل في تحميل الـ :attribute',
  'url'                  => 'صيغة الرابط :attribute غير صحيحة',
  'uuid' => ' :attribute must be a valid UUID.',

    'attributes'=>[
        'registration_plate' => 'رقم السيارة',
        'brand' => 'الماركة',
        'model' => 'الموديل',
        'color' => 'اللون',
        'model_date' => 'سنة الموديل',
        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'mobile' => 'الجوال',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
    ],
);