<?php session_start(); ?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">

        <?php
        if (isset($_SESSION['cart'])) {
            $cookieIds = array_keys($_SESSION['cart']);
            foreach ($cookieIds as $id) {
                $cookie = $catalog[$id];
        ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive small-img">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <p>Quantity : <?= $_SESSION['cart'][$id]; ?></p>
                        </figcaption>
                    </figure>
                </div>
        <?php
            }
        } else {
            echo "Your cart is empty.";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

<!-- destruction session en quittant ou en actualisant la page -->
<?php //include 'destroy_session.php'; ?>