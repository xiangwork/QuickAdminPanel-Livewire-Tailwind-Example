<?php

return [
    'userManagement' => [
        'title'          => '用户管理',
        'title_singular' => '用户管理',
    ],
    'permission' => [
        'title'          => '权限',
        'title_singular' => '权限',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => '标题',
            'title_helper'      => ' ',
            'created_at'        => '创建时间',
            'created_at_helper' => ' ',
            'updated_at'        => '更新时间',
            'updated_at_helper' => ' ',
            'deleted_at'        => '删除时间',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => '标题',
            'title_helper'       => ' ',
            'permissions'        => '权限',
            'permissions_helper' => ' ',
            'created_at'         => '创建时间',
            'created_at_helper'  => ' ',
            'updated_at'         => '更新时间',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '删除时间',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => '用户',
        'title_singular' => '用户',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => '名称',
            'name_helper'              => ' ',
            'email'                    => '邮箱',
            'email_helper'             => ' ',
            'email_verified_at'        => '邮箱验证时间',
            'email_verified_at_helper' => ' ',
            'password'                 => '密码',
            'password_helper'          => ' ',
            'roles'                    => '角色',
            'roles_helper'             => ' ',
            'remember_token'           => '记住',
            'remember_token_helper'    => ' ',
            'created_at'               => '创建时间',
            'created_at_helper'        => ' ',
            'updated_at'               => '更新时间',
            'updated_at_helper'        => ' ',
            'deleted_at'               => '删除时间',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'contactManagement' => [
        'title'          => '联系方式管理',
        'title_singular' => '联系方式管理',
    ],
    'contactCompany' => [
        'title'          => '公司',
        'title_singular' => '公司',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'company_name'           => '公司名称',
            'company_name_helper'    => ' ',
            'company_address'        => '地址',
            'company_address_helper' => ' ',
            'company_website'        => '网址',
            'company_website_helper' => ' ',
            'company_email'          => '邮件',
            'company_email_helper'   => ' ',
            'created_at'             => '创建时间',
            'created_at_helper'      => ' ',
            'updated_at'             => '更新时间',
            'updated_at_helper'      => ' ',
            'deleted_at'             => '删除时间',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'contactContact' => [
        'title'          => '联系人',
        'title_singular' => '联系人',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'company'                   => '公司',
            'company_helper'            => ' ',
            'contact_first_name'        => '姓',
            'contact_first_name_helper' => ' ',
            'contact_last_name'         => '名',
            'contact_last_name_helper'  => ' ',
            'contact_phone_1'           => '电话 1',
            'contact_phone_1_helper'    => ' ',
            'contact_phone_2'           => '电话 2',
            'contact_phone_2_helper'    => ' ',
            'contact_email'             => '邮箱',
            'contact_email_helper'      => ' ',
            'contact_skype'             => 'Skype',
            'contact_skype_helper'      => ' ',
            'contact_address'           => '地址',
            'contact_address_helper'    => ' ',
            'created_at'                => '创建时间',
            'created_at_helper'         => ' ',
            'updated_at'                => '更新时间',
            'updated_at_helper'         => ' ',
            'deleted_at'                => '删除时间',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'transaction' => [
        'title'          => '交易记录',
        'title_singular' => '交易',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'amount'                  => '金额',
            'amount_helper'           => ' ',
            'transaction_date'        => '建议日期',
            'transaction_date_helper' => ' ',
            'created_at'              => '创建时间',
            'created_at_helper'       => ' ',
            'updated_at'              => '更新时间',
            'updated_at_helper'       => ' ',
            'deleted_at'              => '删除时间',
            'deleted_at_helper'       => ' ',
        ],
    ],
];