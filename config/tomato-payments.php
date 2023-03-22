<?php

return [

    /*
     * user model that added on the relationship
     *
     * */
    'user_model' => 'App\Models\User',
    /*
     * show link when click on user name on payments index
     *
     * */
    'user_show_link_url' => '/admin/accounts/{id}/edit',

    /*
     * order model that added on the relationship
     *
     * */
    'order_order_model' => 'App\Models\Order',
    /*
     * show link when click on order id on payments index
     *
     * */
    'order_show_link_url' => '/admin/accounts/{id}/edit',

];
