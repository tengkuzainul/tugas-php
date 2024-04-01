<div class="px-2 py-5 mt-5 text-center hero">
    <?php

    $content_nav = [
        'home' => 'Home',
        'product' => 'Product',
        'order' => 'Order',
        'galery' => 'Galery',
        'guestbook' => 'Guest Book',
    ];

    $halalman = $_GET['hal'];

    $content = [
        'home' => 'home.php',
        'home' => 'product.php',
        'home' => 'order.php',
        'home' => 'galery.php',
        'home' => 'guestbook.php',
    ];


    if (!empty($halaman) && array_key_exists($halaman, $content)) {
        include_once $content[$halaman];
    } else {
        include_once 'home.php';
    }
    ?>
</div>