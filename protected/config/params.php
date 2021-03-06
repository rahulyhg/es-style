<?php
//Yii::app()->params['']
return array(
    'carouselUrl' => [
        'first' => '/dress',
        'second' => '/dress/11021',
        'third' => ''
    ],
    'newsCount' => 3,
    'newPhotoCountInMail' => 6,
    'photoPerPage' => 28,
    'reviewsPerPage' => 10,
    'maxPagerButtonCount' => 5,
    'defaultShippingTariff'=> 300,
    'show_catalog_banner'=>false,
    'popup_banner_sale'=>200,
    'catalog_banner_coupon'=>'SALE200',
    'horoscope_sale'=>300,
    'horoscope_coupon'=>'HOROSCOPE_GIFT',
    'categories' => [
        'dress' => 'Платья',
        'blouse' => 'Блузки',
        'kimono' => 'Кимоно',
        'other' => 'Разное',
        'hit' => 'Хит продаж',
        'new' => 'Новинки',
        'sale' => 'Скидки',
    ],
    'subcategories' => [
        'dress' => [
            'dress_es' => 'Платья в восточном стиле',
            'dress_midi' => 'Платья-миди',
            'dress_maxi' => 'Платья-макси',
            'dress_mini' => 'Платья-мини',
            'evening_dress' => 'Вечерние платья',
            'knitted_dress' => 'Трикотажные платья',
            'cocktail_dress' => 'Коктейльные платья',
            'sarafan_dress' => 'Сарафаны'
        ],
        'blouse' => [
            'blouse_es' => 'Блузки в восточном стиле',
            'blouse_ss' => 'Блузки с коротким рукавом',
            'blouse_ls' => 'Блузки с длинным рукавом',
            'blouse_tunic' => 'Туники',
            'blouse_jumper' => 'Джемперы',
            'blouse_cardigan' => 'Кардиганы',
            'blouse_turtleneck' => 'Водолазки',
            'blouse_jacket' => 'Жакеты',
            'blouse_vest' => 'Жилеты'
        ],
        'kimono' => [
            'kimono_midi' => 'Кимоно-миди',
            'kimono_maxi' => 'Кимоно-макси',
            'kimono_mini' => 'Кимоно-мини',
            'kimono_silk' => 'Шелковые кимоно',
            'kimono_cotton' => 'Хлопковые кимоно'
        ],
        'other' => [
            'other_robe' => 'Халаты',
            'other_homekit' => 'Домашние комплекты',
            'other_nightie' => 'Ночные сорочки',
        ]
    ],
    'shippingFreeCount' => 3,
    'shippingFreeCountString' => 'трех',
    'shippingCost' => 200,
    'maxItemCountInCart' => 10,
    'orderStatuses' => [
        'in_progress' => 'В обработке',
        'confirmation'  => 'Ожидает подтверждения',
        'collect' => 'Собирается',
        'payment' => 'Ожидает оплаты',
        'shipping_by_rp' => 'Передан на доставку в Почту России',
        'shipping_by_tc' => 'Передан на доставку в ТК',
        'waiting_delivery' => 'Ожидает вручения',
        'paid' => 'Оплачено',
        'waiting_shipping' => 'Оплачено, ожидает отправки',
        'completed' => 'Выполнен',
        'lost' => 'Потеряна',
        'not_redeemed' => 'Не выкуплен',
        'canceled' => 'Отменен'
    ],
    'paymentMethod' => [
        'online'  => 'Онлайн-оплата',
        'cod' => 'При получении',
    ],
    'shippingMethod' => [
        'russian_post' => 'Почта России',
        'ems' => 'EMS Почта России',
        'store' => 'Получение в магазине',
    ],
    'colors' => [
        'черный' => 'черный',
        'белый' => 'белый',
        'бежевый' => 'бежевый',
        'коричневый' => 'коричневый',
        'желтый' => 'желтый',
        'оранжевый' => 'оранжевый',
        'красный' => 'красный',
        'розовый' => 'розовый',
        'фиолетовый' => 'фиолетовый',
        'голубой' => 'голубой',
        'синий' => 'синий',
        'зеленый' => 'зеленый',
        'серый' => 'серый',
    ]
);