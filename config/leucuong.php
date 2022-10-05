<?php
$prefixAdmin = 'dashboard';
return [
    'web_title' => 'Utorie',
    'currency' => ['đ', 'VNĐ'],
    'token_expired' => '86400',
    'user_experience' => 5,

    // 'create_step' => [
    //     $prefixPro => [
    //         $prefixPro . '.setupAccount.setting_certificates',
    //         $prefixPro . '.setupAccount.setting_certificates_complete',
    //         $prefixPro . '.setupAccount.setting_avatar',
    //     ]
    // ],

    'url' => [
        'admin' => [
            'prefix' => $prefixAdmin,
            'redirect_after_login' => 'dashboard.index'
        ],
        // 'user' => [
        //     'prefix' => $prefixUser,
        //     'redirect_after_login' => 'home.index',
        //     'homepage' => 'home.index'
        // ]
    ],
    'format' => [
        'long_time' => 'H:m:s d/m/Y',
        'short_time' => 'd/m/Y',
    ],
    'static_page' => [
        'contact',
         'faq',
         'company',
         'terms-of-service',
         'cancellation-policy',
         'privacy-policy',
    ],
    'select_type' => [
        'contact' => [
            '1' => '当サイトについて',
            '2' => 'ゴルファーについて',
            '3' => 'プロについて',
            '4' => 'その他'
        ],
        'reasons' => [
            '1' => 'Ko thich',
            '2' => 'Ko thich 2',
            '3' => 'Ko thich 3',
            '4' => 'Ko thich 4'
        ],
        'experiences' => [
            '1' => '1年',
            '2' => '2年',
            '3' => '3年',
            '4' => '4年',
            '5' => '5年',
            '6' => '6年',
            '7' => '7年',
            '8' => '8年',
            '9' => '9年',
            '10' => '10年',
            '11' => '11年',
            '12' => '12年',
            '13' => '13年',
            '14' => '14年',
            '15' => '15年以上',
        ],
        'faq' => [
            '1' => 'アマチュアユーザー',
            '2' => 'プロユーザー',
        ]

    ]

];
