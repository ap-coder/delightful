<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'content_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'content_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'content_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'content_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'content_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'content_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'content_tag_create',
            ],
            [
                'id'    => '24',
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => '25',
                'title' => 'content_tag_show',
            ],
            [
                'id'    => '26',
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => '27',
                'title' => 'content_tag_access',
            ],
            [
                'id'    => '28',
                'title' => 'content_page_create',
            ],
            [
                'id'    => '29',
                'title' => 'content_page_edit',
            ],
            [
                'id'    => '30',
                'title' => 'content_page_show',
            ],
            [
                'id'    => '31',
                'title' => 'content_page_delete',
            ],
            [
                'id'    => '32',
                'title' => 'content_page_access',
            ],
            [
                'id'    => '33',
                'title' => 'product_management_access',
            ],
            [
                'id'    => '34',
                'title' => 'product_category_create',
            ],
            [
                'id'    => '35',
                'title' => 'product_category_edit',
            ],
            [
                'id'    => '36',
                'title' => 'product_category_show',
            ],
            [
                'id'    => '37',
                'title' => 'product_category_delete',
            ],
            [
                'id'    => '38',
                'title' => 'product_category_access',
            ],
            [
                'id'    => '39',
                'title' => 'product_tag_create',
            ],
            [
                'id'    => '40',
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => '41',
                'title' => 'product_tag_show',
            ],
            [
                'id'    => '42',
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => '43',
                'title' => 'product_tag_access',
            ],
            [
                'id'    => '44',
                'title' => 'product_create',
            ],
            [
                'id'    => '45',
                'title' => 'product_edit',
            ],
            [
                'id'    => '46',
                'title' => 'product_show',
            ],
            [
                'id'    => '47',
                'title' => 'product_delete',
            ],
            [
                'id'    => '48',
                'title' => 'product_access',
            ],
            [
                'id'    => '49',
                'title' => 'service_create',
            ],
            [
                'id'    => '50',
                'title' => 'service_edit',
            ],
            [
                'id'    => '51',
                'title' => 'service_show',
            ],
            [
                'id'    => '52',
                'title' => 'service_delete',
            ],
            [
                'id'    => '53',
                'title' => 'service_access',
            ],
            [
                'id'    => '54',
                'title' => 'other_setting_access',
            ],
            [
                'id'    => '55',
                'title' => 'size_create',
            ],
            [
                'id'    => '56',
                'title' => 'size_edit',
            ],
            [
                'id'    => '57',
                'title' => 'size_show',
            ],
            [
                'id'    => '58',
                'title' => 'size_delete',
            ],
            [
                'id'    => '59',
                'title' => 'size_access',
            ],
            [
                'id'    => '60',
                'title' => 'color_create',
            ],
            [
                'id'    => '61',
                'title' => 'color_edit',
            ],
            [
                'id'    => '62',
                'title' => 'color_show',
            ],
            [
                'id'    => '63',
                'title' => 'color_delete',
            ],
            [
                'id'    => '64',
                'title' => 'color_access',
            ],
            [
                'id'    => '65',
                'title' => 'page_section_create',
            ],
            [
                'id'    => '66',
                'title' => 'page_section_edit',
            ],
            [
                'id'    => '67',
                'title' => 'page_section_show',
            ],
            [
                'id'    => '68',
                'title' => 'page_section_delete',
            ],
            [
                'id'    => '69',
                'title' => 'page_section_access',
            ],
            [
                'id'    => '70',
                'title' => 'post_create',
            ],
            [
                'id'    => '71',
                'title' => 'post_edit',
            ],
            [
                'id'    => '72',
                'title' => 'post_show',
            ],
            [
                'id'    => '73',
                'title' => 'post_delete',
            ],
            [
                'id'    => '74',
                'title' => 'post_access',
            ],
            [
                'id'    => '75',
                'title' => 'engagement_access',
            ],
            [
                'id'    => '76',
                'title' => 'review_create',
            ],
            [
                'id'    => '77',
                'title' => 'review_edit',
            ],
            [
                'id'    => '78',
                'title' => 'review_show',
            ],
            [
                'id'    => '79',
                'title' => 'review_delete',
            ],
            [
                'id'    => '80',
                'title' => 'review_access',
            ],
            [
                'id'    => '81',
                'title' => 'comment_create',
            ],
            [
                'id'    => '82',
                'title' => 'comment_edit',
            ],
            [
                'id'    => '83',
                'title' => 'comment_show',
            ],
            [
                'id'    => '84',
                'title' => 'comment_delete',
            ],
            [
                'id'    => '85',
                'title' => 'comment_access',
            ],
            [
                'id'    => '86',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '87',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '88',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '89',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '90',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '91',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '92',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '93',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '94',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '95',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '96',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '97',
                'title' => 'client_create',
            ],
            [
                'id'    => '98',
                'title' => 'client_edit',
            ],
            [
                'id'    => '99',
                'title' => 'client_show',
            ],
            [
                'id'    => '100',
                'title' => 'client_delete',
            ],
            [
                'id'    => '101',
                'title' => 'client_access',
            ],
            [
                'id'    => '102',
                'title' => 'booking_create',
            ],
            [
                'id'    => '103',
                'title' => 'booking_edit',
            ],
            [
                'id'    => '104',
                'title' => 'booking_show',
            ],
            [
                'id'    => '105',
                'title' => 'booking_delete',
            ],
            [
                'id'    => '106',
                'title' => 'booking_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
