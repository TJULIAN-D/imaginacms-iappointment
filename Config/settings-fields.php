<?php

return [
    'roleToCustomer' => [
        'name' => 'iappointment::roleToCustomer',
        'value' => null,
        'type' => 'select',
        'props' => [
            'label' => 'iappointment::settings.roleAsCustomer',
            'useChips' => true
        ],
        'loadOptions' => [
            'apiRoute' => 'apiRoutes.quser.roles',
            'select' => ['label' => 'name', 'id' => 'id']
        ]
    ],
    'roleToAssigned' => [
        'name' => 'iappointment::roleToAssigned',
        'value' => null,
        'type' => 'select',
        'props' => [
            'label' => 'iappointment::settings.roleAsAssigned',
            'useChips' => true
        ],
        'loadOptions' => [
            'apiRoute' => 'apiRoutes.quser.roles',
            'select' => ['label' => 'name', 'id' => 'id']
        ]
    ],
];
