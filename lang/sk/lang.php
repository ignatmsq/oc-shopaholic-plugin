<?php return [
    'plugin'      => [
        'name'        => 'Shopaholic',
        'description' => 'Katalóg produktov pre eCommerce',
    ],
    'field'       => [
        'vendor_code'         => 'Kód predajcu',
        'price'               => 'Cena',
        'old_price'           => 'Stará cena',
        'quantity'            => 'Množstvo',
        'brand'               => 'Značka',
        'offer'               => 'Ponuky',
        'currency'            => 'Mena',
        'check_offer_active'  => 'Keď dostanete zoznam aktívnych produktov, skontroluje aktívne ponuky',
        'additional_category' => 'Ďalšie kategórie',
        'promo_block_type'    => 'Promo blok so zoznamom produktov',
        'promo_block'         => 'Promo blok',
        'category_parent_id'  => 'ID rodičovskej kategórie',
        'product_id'          => 'ID produktu',
    ],
    'menu'        => [
        'main'                => 'Katalóg',
        'categories'          => 'Kategórie',
        'product'             => 'Produkty',
        'brands'              => 'Značky',
        'shop_catalog'        => 'Katalóg produktov',
        'shop_category'       => 'Kategória produktov',
        'all_shop_categories' => 'Všetky kategórie produktov',
        'promo_block'         => 'Promo blok',
        'promo'               => 'Promo',
    ],
    'tab'         => [
        'offer'       => 'Ponuky',
        'price'       => 'Ceny',
        'permissions' => 'Shopaholic',
    ],
    'category'    => [
        'name'         => 'Kategória',
        'list_title'   => 'Zoznam kategórií',
        'import_title' => 'Importovať kategórie',
        'export_title' => 'Exportovať kategórie',
    ],
    'brand'       => [
        'name'         => 'Značka',
        'list_title'   => 'Zoznam značiek',
        'import_title' => 'Importovať značky',
        'export_title' => 'Exportovať značky',
    ],
    'product'     => [
        'name'         => 'Produkt',
        'list_title'   => 'Zoznam produktov',
        'import_title' => 'Importovať produkty',
        'export_title' => 'Exportovať produkty',
    ],
    'offer'       => [
        'name'         => 'Ponuka',
        'list_title'   => 'Zoznam ponúk',
        'import_title' => 'Importovať ponuky',
        'export_title' => 'Exportovať ponuky',
    ],
    'promo_block' => [
        'name'       => 'Promo blok',
        'list_title' => 'Zoznam promo blokov',
    ],
    'component'   => [

        //Product components
        'product_page_name'            => 'Stránka produktu',
        'product_page_description'     => 'Získa dáta pre stránku produktu',
        'product_data_name'            => 'Dáta produktu',
        'product_data_description'     => 'Získať dáta produktu podľa ID',
        'product_list_name'            => 'Zoznam produktov',
        'product_list_description'     => 'Získa zoznam produktov',

        //Brand components
        'brand_page_name'              => 'Stránka značky',
        'brand_page_description'       => 'Získa dáta pre stránku značky',
        'brand_data_name'              => 'Dáta značky',
        'brand_data_description'       => 'ískať dáta značky podľa ID',
        'brand_list_name'              => 'Zoznam značiek',
        'brand_list_description'       => 'Získa zoznam značiek',

        //Promo block components
        'promo_block_page_name'        => 'Stránka promo blok',
        'promo_block_page_description' => 'Získa dáta pre stránku promo bloku',
        'promo_block_data_name'        => 'Dáta promo bloku',
        'promo_block_data_description' => 'ískať dáta promo bloku podľa ID',
        'promo_block_list_name'        => 'Zoznam promo blokov',
        'promo_block_list_description' => 'Získa zoznam promo blokov',

        //Category components
        'category_page_name'           => 'Stránka kategórie',
        'category_page_description'    => 'Získa dáta pre stránku kategórie',
        'category_data_name'           => 'Dáta kategórie',
        'category_data_description'    => 'ískať dáta kategórie podľa ID',
        'category_list_name'           => 'Zoznam kategórií',
        'category_list_description'    => 'Získa strom kategórií',

        //Common components
        'breadcrumbs_name'             => 'Breadcrumbs',
        'breadcrumbs_description'      => 'Získa dáta pre breadcrumbs katalógu',

        //Components settings
        'product_list_sorting'         => 'Predvolené zoradenie',
        'sorting_no'                   => 'Bez zoradenia',
        'sorting_price_desc'           => 'Drahé',
        'sorting_price_asc'            => 'Lacné',
        'sorting_new'                  => 'Nové',
        'sorting_popularity_desc'      => 'Obľúbenejšie',
        'sorting_rating_desc'          => 'Vysoký rating',
        'sorting_rating_asc'           => 'Nízky rating',
        'sorting_date_begin_asc'       => 'Dátum začiatku (vzos)',
        'sorting_date_begin_desc'      => 'Dátum začiatku (zos)',
        'sorting_date_end_asc'         => 'Dátum konca (vzos)',
        'sorting_date_end_desc'        => 'Dátum konca (zos)',
    ],
    'permission'  => [
        'category'    => 'Správa kategórií',
        'brand'       => 'Správa značiek',
        'product'     => 'Správa produktov',
        'settings'    => 'Správa nastavení',
        'promo_block' => 'Správa promo blokov',
    ],
    'message'     => [
        'import_additional_category_info' => 'Nastavte zoznam ďalších kategórií produktov, oddelených čiarkami.',
    ],
    'button'      => [
        'import_offer_button' => 'Importovať ponuky z CSV',
    ],
];
