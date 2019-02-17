<?php
/**
 * This file provides to overwrite the default HumHub / Yii configuration by your local common (Console and Web) environments
 * @see http://www.yiiframework.com/doc-2.0/guide-concept-configurations.html
 * @see http://docs.humhub.org/admin-installation-configuration.html
 * @see http://docs.humhub.org/dev-environment.html
 */
return [
	'params' => [
        'enablePjax' => false
    ],
    'components' => [
        'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true,
        ],
        'authClientCollection' => [
            'clients' => [
                'google' => [
                    'class' => 'humhub\modules\user\authclient\Google',
                    'clientId' => '575870146045-bb2vu09okp05t3f0k2mbmh1rkqfvvukh.apps.googleusercontent.com',
                    'clientSecret' => 'nTu3fVdItuzDJAWaEczBX5I4',
                ],
            ],
        ],
    ],
];
