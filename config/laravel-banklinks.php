<?php
/**
 * Created by PhpStorm.
 * User: Kadi
 * Date: 4/8/2016
 * Time: 9:17 AM
 */

return [
    'estonia' => [
        'swedbank' => [
            'seller_id' => '',
            'seller_name' => '',
            'seller_acc_num' => '',
            'private_key_passphrase' => '',
            'private_key' => '',
            'public_key' => ''
        ],

        'seb' => [
            'seller_id' => 'uid100010',
            'seller_name' => 'Valgeranna OÜ',
            'seller_acc_num' => 'EE171010123456789017',
            'private_key_passphrase' => '',
            'private_key' => base_path() . '/config/ssl/seb/user_key.pem',
            'public_key' => base_path() . '/config/ssl/seb/bank_cert.pem',
            'request_url' => 'http://localhost:8080/banklink/seb-common'
        ],
    ]
];