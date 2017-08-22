<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/_Utilidades/_Grav/_Tokaido/user/config/plugins/email.yaml',
    'modified' => 1503427506,
    'data' => [
        'enabled' => true,
        'from' => 'contacto@tokaidosushi.com',
        'from_name' => 'Tokaido Sushi',
        'to' => 'admin@tokaidosushi.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
