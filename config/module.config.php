<?php

return array (
    'service_manager' => [
        'allow_override' => true,
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
);