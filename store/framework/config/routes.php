<?php

return array(
// method get data from browser string
    'news/([a-z]+)/([0-9]+)' => 'news/View/$1',

    'about' => 'about/Index', //request => controller/action
    'goods' => 'goods/Goods',
    'main' => 'main/Main',
//    '' => 'main/Main',
    'contact' => 'contact/Contact',
    'product/([0-9]+)' => 'product/Name/$1',
    'basket' => 'basket/Basket',
    'account' => 'account/Index',


    'user/registration' => 'user/registration',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
);
