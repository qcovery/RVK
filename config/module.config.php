<?php

return array (
    'vufind' => [
        'plugin_managers' => [
            'ajaxhandler' => [
                'factories' => [
                    'RVK\AjaxHandler\GetRVKStatus' => 'RVK\AjaxHandler\GetRVKStatusFactory',
                    'RVK\AjaxHandler\GetRVKTree' => 'RVK\AjaxHandler\GetRVKTreeFactory',
                    'RVK\AjaxHandler\GetBKLStatus' => 'RVK\AjaxHandler\GetBKLStatusFactory',
                ],
                'aliases' => [
                    'getRVKStatus' => 'RVK\AjaxHandler\GetRVKStatus',
                    'getRVKTree' => 'RVK\AjaxHandler\GetRVKTree',
                    'getBKLStatus' => 'RVK\AjaxHandler\GetBKLStatus',
                ],
            ],
        ],
    ],
);