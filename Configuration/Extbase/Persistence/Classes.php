<?php

declare(strict_types=1);

return [
    \FriendsOfTYPO3\BlogExample\Domain\Model\Administrator::class => [
        'tableName' => 'fe_users',
        'recordType' => \FriendsOfTYPO3\BlogExample\Domain\Model\Administrator::class,
        'properties' => [
            'administratorName' => [
                'fieldName' => 'username'
            ],
        ],
    ],
    \FriendsOfTYPO3\BlogExample\Domain\Model\FrontendUserGroup::class => [
        'tableName' => 'fe_groups',
    ],
];
