<?php
return [
    'id' => 'google_my_business_post',
    'name' => 'Google my business Post',
    'author' => 'Stackcode',
    'author_uri' => 'https://stackposts.com',
    'version' => '1.0',
    'desc' => '',
    'icon' => 'fas fa-store',
    'color' => '#4b88ef',
    'menu' => [
        'tab' => 2,
        'position' => 910,
        'name' => 'Google my business',
        'sub_menu' => [
        	'position' => 1000,
            'id' => 'google_my_business_post',
            'name' => 'Post'
        ]
    ],
    'css' => [
		'assets/css/google_my_business_post.css'
	]
];