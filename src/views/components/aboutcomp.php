<?php

// tratamento do titulo
$str = $data['title'];
$chars = preg_split('/-/', $str);
$title = $chars[0];
$subtitle = $chars[1];


?>

<!-- About Start -->
<section class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Sobre nós</h4>
            <h1 class="display-4 mb-4"><span class="text-primary"><?= $title ?></span> & <span class="text-secondary"><?= $subtitle ?></span></span></h1>
            <h5 class="text-muted mb-3"><?= $data['description'] ?></h5>
            <ul class="list-inline">
                <?php
                foreach ($data['features'] as $feature):
                ?>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i><?= $feature ?></h5>
                </li>
                <?php
                endforeach;
                ?>
            </ul>
            <a href="" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100" src="<?= ASSETS ?>img/about-1.jpg" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="<?= ASSETS ?>img/about-2.jpg" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="<?= ASSETS ?>img/about-3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->