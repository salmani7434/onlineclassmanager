<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
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
            'name'                     => 'Name',
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
    'course'           => [
        'title'          => 'Courses',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'user_id'                  => 'User_ID',
            'user_id_helper'           => '',
            'professor_id'             => 'Professor_ID',
            'professor_id_helper'      => '',
            'slug_name'                => 'Slug Name',
            'slug_name_helper'         => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'subject'                  => 'Subject',
            'subject_helper'           => '',
            'is_important'             => 'Is Important',
            'is_important_helper'      => '',
            'start_date'               => 'Start Date',
            'start_date_helper'        => '',
            'completion_date'          => 'Completion Date',
            'completion_date_helper'   => '',
            'course_objectives'        => 'Course Objectives',
            'course_objectives_helper' => '',
            'payment_model'            => 'Payment_model',
            'payment_model_helper'     => '',
            'payment_status'           => 'Payment Status',
            'payment_status_helper'    => '',
            'set_up'                   => 'Set Up',
            'set_up_helper'            => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
];
