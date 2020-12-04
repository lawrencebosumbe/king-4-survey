<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],

    'resources' => [
        'title'          => 'Resources',
        'title_singular' => 'Resources',
    ],

    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'first_name'               => 'First Name',
            'last_name'               => 'Last Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],

    'category'              => [
        'title'             => 'Categories',
        'name'              => 'Categories',
        'name_singular'     => 'Category',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'name'          => 'Name',
            'name_helper'   => '',
        ],
    ],

    'section'              => [
        'title'             => 'Sections',
        'name'              => 'Sections',
        'name_singular'     => 'Section',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'name'          => 'Name',
            'name_helper'   => '',
        ],
    ],

    'principal'              => [
        'title'             => 'Principals',
        'name'              => 'Principals',
        'name_singular'     => 'Principal',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'name'          => 'Name',
            'name_helper'   => '',
        ],
    ],

    'survey'                => [
        'title'             => 'Surveys',
        'principal'         => 'Surveys',
        'principal_singular'=> 'Survey',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'principal'     => 'Principal',
            'principal_helper'   => '',
            'questionnaire'      => 'Questionnaire',
            'questionnaire_helper'   => '',
            'checklist'      => 'Checklist',
            'checklist_helper'   => '',
        ],
    ],

    'mysurvey'                => [
        'title'             => 'Survey questionnaires',
        'principal'         => 'Survey questionnaires',
        'principal_singular'=> 'Survey Questionnaire',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'principal'     => 'Principal',
            'principal_helper'   => '',
            'questionnaire'      => 'Questionnaire',
            'questionnaire_helper'   => '',
            'checklist'      => 'Checklist',
            'checklist_helper'   => '',
        ],
    ],

    'questionnaire'                => [
        'title'             => 'Survey Questionnaires',
        'principal'         => 'Survey Questionnaires',
        'principal_singular'=> 'Survey Questionnaire',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'principal'     => 'Principal',
            'principal_helper'   => '',
            'questionnaire'      => 'Questionnaire',
            'questionnaire_helper'   => '',
            'checklist'      => 'Checklist',
            'checklist_helper'   => '',
        ],
    ],

    'member'                => [
        'title'             => 'Survey Questionnaires',
        'principal'         => 'Survey Questionnaires',
        'principal_singular'=> 'Survey Questionnaire',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'principal'     => 'Principal',
            'principal_helper'   => '',
            'questionnaire'      => 'Questionnaire',
            'questionnaire_helper'   => '',
            'checklist'      => 'Checklist',
            'checklist_helper'   => '',
        ],
    ],

    'assessment'                => [
        'title'             => 'Survey Questionnaires',
        'principal'         => 'Survey Questionnaires',
        'principal_singular'=> 'Survey Questionnaire',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'principal'     => 'Principal',
            'principal_helper'   => '',
            'questionnaire'      => 'Questionnaire',
            'questionnaire_helper'   => '',
            'checklist'      => 'Checklist',
            'checklist_helper'   => '',
        ],
    ],

    'company'                => [
        'title'             => 'Companies',
        'name'         => 'Companies',
        'name_singular'=> 'Company',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'name'     => 'Name',
            'name_helper'   => '',
        ],
    ],

    'audit'                => [
        'title'             => 'Audits',
        'name'         => 'Audits',
        'name_singular'=> 'Audit',
        'fields'            => [
            'id'            => 'ID',
            'id_helper'     => '',
            'name'     => 'Name',
            'name_helper'   => '',
        ],
    ],
];
