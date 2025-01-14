<?php

return [

   

    'accepted' => ':attribute অবশ্যই গ্রহণ করতে হবে।',
    'active_url' => ':attribute একটি বৈধ URL নয়।',
    'after' => ':attribute অবশ্যই :date এর পরে একটি তারিখ হতে হবে।',
    'after_or_equal' => ':attribute অবশ্যই :date এর পরে বা সমান একটি তারিখ হতে হবে।',
    'alpha' => ':attribute কেবলমাত্র অক্ষর থাকতে পারবে।',
    'alpha_dash' => ':attribute কেবলমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর থাকতে পারবে।',
    'alpha_num' => ':attribute কেবলমাত্র অক্ষর এবং সংখ্যা থাকতে পারবে।',
    'array' => ':attribute একটি অ্যারের হতে হবে।',
    'before' => ':attribute অবশ্যই :date এর আগে একটি তারিখ হতে হবে।',
    'before_or_equal' => ':attribute অবশ্যই :date এর আগে বা সমান একটি তারিখ হতে হবে।',
    'between' => [
        'numeric' => ':attribute অবশ্যই :min এবং :max এর মধ্যে হতে হবে।',
        'file' => ':attribute অবশ্যই :min এবং :max কিলোবাইটের মধ্যে হতে হবে।',
        'string' => ':attribute অবশ্যই :min এবং :max অক্ষরের মধ্যে হতে হবে।',
        'array' => ':attribute অবশ্যই :min এবং :max আইটেমের মধ্যে থাকতে হবে।',
    ],
    'boolean' => ':attribute ক্ষেত্রটি সত্য বা মিথ্যা হতে হবে।',
    'confirmed' => ':attribute নিশ্চিতকরণ মেলে না।',
    'date' => ':attribute একটি বৈধ তারিখ নয়।',
    'date_equals' => ':attribute অবশ্যই :date এর সমান একটি তারিখ হতে হবে।',
    'date_format' => ':attribute :format ফরম্যাটের সাথে মেলে না।',
    'different' => ':attribute এবং :other অবশ্যই ভিন্ন হতে হবে।',
    'digits' => ':attribute অবশ্যই :digits সংখ্যা হতে হবে।',
    'digits_between' => ':attribute অবশ্যই :min এবং :max সংখ্যার মধ্যে হতে হবে।',
    'dimensions' => ':attribute এর অবৈধ ইমেজ মাত্রা রয়েছে।',
    'distinct' => ':attribute ক্ষেত্রটির একটি ডুপ্লিকেট মান রয়েছে।',
    'email' => ':attribute একটি বৈধ ইমেইল ঠিকানা হতে হবে।',
    'ends_with' => ':attribute অবশ্যই নিম্নলিখিতগুলোর একটি দিয়ে শেষ হতে হবে: :values।',
    'exists' => 'নির্বাচিত :attribute অবৈধ।',
    'file' => ':attribute একটি ফাইল হতে হবে।',
    'filled' => ':attribute ক্ষেত্রটি অবশ্যই একটি মান থাকতে হবে।',
    'gt' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে বড় হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় হতে হবে।',
        'array' => ':attribute অবশ্যই :value আইটেমের চেয়ে বেশি থাকতে হবে।',
    ],
    'gte' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় বা সমান হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইট বা তার বেশি হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষর বা তার বেশি হতে হবে।',
        'array' => ':attribute অবশ্যই :value আইটেম বা তার বেশি থাকতে হবে।',
    ],
    'image' => ':attribute অবশ্যই একটি ইমেজ হতে হবে।',
    'in' => 'নির্বাচিত :attribute অবৈধ।',
    'in_array' => ':attribute ক্ষেত্রটি :other এ বিদ্যমান নয়।',
    'integer' => ':attribute একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ':attribute একটি বৈধ IP ঠিকানা হতে হবে।',
    'ipv4' => ':attribute একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => ':attribute একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lt' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে ছোট হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে ছোট হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে ছোট হতে হবে।',
        'array' => ':attribute অবশ্যই :value আইটেমের চেয়ে কম থাকতে হবে।',
    ],
    'lte' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে ছোট বা সমান হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইট বা তার কম হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষর বা তার কম হতে হবে।',
        'array' => ':attribute অবশ্যই :value আইটেম বা তার কম থাকতে হবে।',
    ],
    'max' => [
        'numeric' => ':attribute :max এর চেয়ে বড় হতে পারবে না।',
        'file' => ':attribute :max কিলোবাইটের চেয়ে বড় হতে পারবে না।',
        'string' => ':attribute :max অক্ষরের চেয়ে বড় হতে পারবে না।',
        'array' => ':attribute :max আইটেমের চেয়ে বেশি থাকতে পারবে না।',
    ],
    'mimes' => ':attribute অবশ্যই একটি ফাইল হতে হবে: :values।',
    'mimetypes' => ':attribute অবশ্যই একটি ফাইল হতে হবে: :values।',
    'min' => [
        'numeric' => ':attribute অবশ্যই অন্তত :min হতে হবে।',
        'file' => ':attribute অবশ্যই অন্তত :min কিলোবাইট হতে হবে।',
        'string' => ':attribute অবশ্যই অন্তত :min অক্ষর হতে হবে।',
        'array' => ':attribute অবশ্যই অন্তত :min আইটেম থাকতে হবে।',
    ],
    'not_in' => 'নির্বাচিত :attribute অবৈধ।',
    'not_regex' => ':attribute ফরম্যাট অবৈধ।',
    'numeric' => ':attribute একটি সংখ্যা হতে হবে।',
    'password' => 'পাসওয়ার্ডটি ভুল।',
    'present' => ':attribute ক্ষেত্রটি উপস্থিত হতে হবে।',
    'regex' => ':attribute ফরম্যাট অবৈধ।',
    'required' => ':attribute ক্ষেত্রটি আবশ্যক।',
    'required_if' => ':attribute ক্ষেত্রটি তখন আবশ্যক যখন :other :value হয়।',
    'required_unless' => ':attribute ক্ষেত্রটি তখন আবশ্যক যদি :other :values এর মধ্যে না থাকে।',
    'required_with' => ':attribute ক্ষেত্রটি তখন আবশ্যক যখন :values উপস্থিত থাকে।',
    'required_with_all' => ':attribute ক্ষেত্রটি তখন আবশ্যক যখন :values উপস্থিত থাকে।',
    'required_without' => ':attribute ক্ষেত্রটি তখন আবশ্যক যখন :values উপস্থিত না থাকে।',
    'required_without_all' => ':attribute ক্ষেত্রটি তখন আবশ্যক যখন :values এর কোনোটি উপস্থিত না থাকে।',
    'same' => ':attribute এবং :other অবশ্যই মিলতে হবে।',
    'size' => [
        'numeric' => ':attribute অবশ্যই :size হতে হবে।',
        'file' => ':attribute অবশ্যই :size কিলোবাইট হতে হবে।',
        'string' => ':attribute অবশ্যই :size অক্ষর হতে হবে।',
        'array' => ':attribute অবশ্যই :size আইটেম থাকতে হবে।',
    ],
    'starts_with' => ':attribute অবশ্যই নিম্নলিখিতগুলোর একটির সাথে শুরু হতে হবে: :values।',
    'string' => ':attribute একটি স্ট্রিং হতে হবে।',
    'timezone' => ':attribute একটি বৈধ টাইমজোন হতে হবে।',
    'unique' => ':attribute ইতিমধ্যে নেওয়া হয়েছে।',
    'uploaded' => ':attribute আপলোড ব্যর্থ হয়েছে।',
    'url' => ':attribute ফরম্যাট অবৈধ।',
    'uuid' => ':attribute একটি বৈধ UUID হতে হবে।',

    

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'কাস্টম-বার্তা',
        ],
    ],

    

    'attributes' => [],

];
