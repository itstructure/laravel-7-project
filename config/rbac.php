<?php

return [
    // Main
    'userModelClass' => App\User::class,
    'adminUserId' => 1,
    'paginate' => [
        'main' => 10,
    ],

    // Messages
    'deleteConfirmation' => 'Are you sure you want to delete?',
    'deleteRequired' => 'Select items before delete.'
];
