<?php return array (
  'name' => 'hummingbird',
  'display_name' => 'Hummingbird',
  'version' => '2.0.0',
  'author' => 
  array (
    'name' => 'PrestaShop Team and Contributors',
    'email' => 'pub@prestashop.com',
    'url' => 'https://www.prestashop-project.org/',
  ),
  'meta' => 
  array (
    'compatibility' => 
    array (
      'from' => '9.1.0',
      'to' => '~9.1.0',
      'framework' => 'bootstrap-v5.3.3',
    ),
    'available_layouts' => 
    array (
      'layout-full-width' => 
      array (
        'name' => 'Full Width',
        'description' => 'No side columns, ideal for distraction-free pages such as product pages.',
      ),
      'layout-both-columns' => 
      array (
        'name' => 'Three Columns',
        'description' => 'One large central column and 2 side columns.',
      ),
      'layout-left-column' => 
      array (
        'name' => 'Two Columns, small left column',
        'description' => 'Two columns with a small left column',
      ),
      'layout-right-column' => 
      array (
        'name' => 'Two Columns, small right column',
        'description' => 'Two columns with a small right column',
      ),
    ),
  ),
  'global_settings' => 
  array (
    'configuration' => 
    array (
      'PS_IMAGE_QUALITY' => 'png',
      'HOME_FEATURED_NBR' => 4,
      'NEW_PRODUCTS_NBR' => 4,
      'BLOCKSPECIALS_SPECIALS_NBR' => 4,
      'PS_BLOCK_BESTSELLERS_TO_DISPLAY' => 4,
      'PRODUCTS_VIEWED_NBR' => 4,
      'CATEGORYPRODUCTS_DISPLAY_PRODUCTS' => 4,
      'PSR_ICON_COLOR' => '#0b69f6',
      'PSR_TEXT_COLOR' => '#212529',
    ),
    'modules' => 
    array (
      'to_disable' => 
      array (
        0 => 'blockwishlist',
        1 => 'ps_brandlist',
        2 => 'ps_supplierlist',
      ),
    ),
    'hooks' => 
    array (
      'modules_to_unhook' => 
      array (
        'displayFooter' => 
        array (
          0 => 'ps_socialfollow',
        ),
        'displaySearch' => 
        array (
          0 => 'ps_searchbar',
        ),
      ),
      'modules_to_hook' => 
      array (
        'displayAfterBodyOpeningTag' => 
        array (
          0 => 'blockreassurance',
          1 => NULL,
        ),
        'displayNav1' => 
        array (
          0 => 'ps_contactinfo',
          1 => NULL,
        ),
        'displayNav2' => 
        array (
          0 => 'ps_languageselector',
          1 => 'ps_currencyselector',
          2 => 'ps_customersignin',
          3 => 'ps_shoppingcart',
          4 => NULL,
        ),
        'displayNavFullWidth' => 
        array (
          0 => 'blockreassurance',
          1 => NULL,
        ),
        'displayTop' => 
        array (
          0 => 'ps_mainmenu',
          1 => 'ps_searchbar',
          2 => NULL,
        ),
        'displayHome' => 
        array (
          0 => 'ps_imageslider',
          1 => 'ps_customtext',
          2 => 'ps_featuredproducts',
          3 => 'ps_banner',
          4 => 'ps_newproducts',
          5 => 'ps_bestsellers',
          6 => NULL,
        ),
        'displayFooterBefore' => 
        array (
          0 => 'ps_socialfollow',
          1 => 'ps_emailsubscription',
          2 => 'blockreassurance',
          3 => NULL,
        ),
        'displayFooter' => 
        array (
          0 => 'ps_linklist',
          1 => 'ps_customeraccountlinks',
          2 => 'ps_contactinfo',
          3 => NULL,
        ),
        'displayFooterAfter' => 
        array (
          0 => 'blockreassurance',
          1 => NULL,
        ),
        'displayLeftColumn' => 
        array (
          0 => 'ps_categorytree',
          1 => 'ps_facetedsearch',
          2 => NULL,
        ),
        'displayContactLeftColumn' => 
        array (
          0 => 'ps_contactinfo',
          1 => NULL,
        ),
        'displayContactRightColumn' => 
        array (
          0 => 'ps_contactinfo',
          1 => NULL,
        ),
        'displayContactContent' => 
        array (
          0 => 'contactform',
          1 => NULL,
        ),
        'displayProductAdditionalInfo' => 
        array (
          0 => 'ps_sharebuttons',
          1 => 'productcomments',
          2 => 'ps_emailalerts',
          3 => 'ps_viewedproduct',
          4 => NULL,
        ),
        'displayProductListReviews' => 
        array (
          0 => 'productcomments',
          1 => NULL,
        ),
        'displayFooterProduct' => 
        array (
          0 => 'productcomments',
          1 => 'ps_categoryproducts',
          2 => 'ps_viewedproduct',
          3 => NULL,
        ),
        'displayCrossSellingShoppingCart' => 
        array (
          0 => 'ps_featuredproducts',
          1 => NULL,
        ),
        'displayOrderConfirmation2' => 
        array (
          0 => 'ps_featuredproducts',
          1 => NULL,
        ),
        'displayReassurance' => 
        array (
          0 => 'blockreassurance',
          1 => NULL,
        ),
        'displayCustomerAccount' => 
        array (
          0 => 'ps_emailalerts',
          1 => 'psgdpr',
          2 => NULL,
        ),
        'displayGDPRConsent' => 
        array (
          0 => 'psgdpr',
          1 => NULL,
        ),
      ),
    ),
    'image_types' => 
    array (
      'cart_default' => 
      array (
        'width' => 125,
        'height' => 125,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'small_default' => 
      array (
        'width' => 98,
        'height' => 98,
        'scope' => 
        array (
          0 => 'products',
          1 => 'categories',
          2 => 'manufacturers',
          3 => 'suppliers',
        ),
      ),
      'medium_default' => 
      array (
        'width' => 452,
        'height' => 452,
        'scope' => 
        array (
          0 => 'products',
          1 => 'manufacturers',
          2 => 'suppliers',
        ),
      ),
      'large_default' => 
      array (
        'width' => 800,
        'height' => 800,
        'scope' => 
        array (
          0 => 'products',
          1 => 'manufacturers',
          2 => 'suppliers',
        ),
      ),
      'home_default' => 
      array (
        'width' => 250,
        'height' => 250,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'category_default' => 
      array (
        'width' => 180,
        'height' => 180,
        'scope' => 
        array (
          0 => 'categories',
        ),
      ),
      'stores_default' => 
      array (
        'width' => 287,
        'height' => 160,
        'scope' => 
        array (
          0 => 'stores',
        ),
      ),
      'default_xs' => 
      array (
        'width' => 160,
        'height' => 160,
        'scope' => 
        array (
          0 => 'products',
          1 => 'manufacturers',
          2 => 'suppliers',
          3 => 'categories',
        ),
      ),
      'default_sm' => 
      array (
        'width' => 216,
        'height' => 216,
        'scope' => 
        array (
          0 => 'categories',
          1 => 'products',
        ),
      ),
      'default_md' => 
      array (
        'width' => 261,
        'height' => 261,
        'scope' => 
        array (
          0 => 'manufacturers',
          1 => 'suppliers',
          2 => 'products',
          3 => 'categories',
        ),
      ),
      'default_lg' => 
      array (
        'width' => 336,
        'height' => 336,
        'scope' => 
        array (
          0 => 'categories',
          1 => 'products',
        ),
      ),
      'default_xl' => 
      array (
        'width' => 400,
        'height' => 400,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'product_main' => 
      array (
        'width' => 720,
        'height' => 720,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'category_cover' => 
      array (
        'width' => 1000,
        'height' => 200,
        'scope' => 
        array (
          0 => 'categories',
        ),
      ),
      'product_main_2x' => 
      array (
        'width' => 1440,
        'height' => 1440,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'category_cover_2x' => 
      array (
        'width' => 2000,
        'height' => 400,
        'scope' => 
        array (
          0 => 'categories',
        ),
      ),
    ),
  ),
  'theme_settings' => 
  array (
    'rtl_generation' => false,
    'default_layout' => 'layout-full-width',
    'layouts' => 
    array (
      'category' => 'layout-left-column',
      'best-sales' => 'layout-left-column',
      'new-products' => 'layout-left-column',
      'prices-drop' => 'layout-left-column',
      'contact' => 'layout-left-column',
      'manufacturer' => 'layout-left-column',
      'supplier' => 'layout-left-column',
    ),
  ),
);
