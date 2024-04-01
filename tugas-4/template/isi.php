<!-- Hero -->
<div class="px-2 py-5 mt-5 text-center hero">
    <?php
    $halaman = $_GET['hal'];

    if (!empty($halaman)) {
        include_once $navigation[$halaman];
    } else {
        include_once 'home.php';
    }
    ?>
</div>
<!-- End -->