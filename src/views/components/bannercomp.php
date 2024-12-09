    <!-- Carousel Start -->
    <section class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php

                $banner = $data['banner'];
                foreach ($banner as $key => $value):
                    $active = $key == 0 ? 'active' : '';

                ?>
                    <div class="carousel-item <?= $active ?>">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-image:url(<?= $value['imagem'] ?>)">
                            <div class="p-3" style="max-width: 900px;">
                                <h3 class="text-white mb-3 d-none d-sm-block"><?= $value['titulo'] ?></h3>
                                <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                                <h5 class="text-white mb-3 d-none d-sm-block"><?= $value['descricao'] ?></h5>
                                <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                                <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </section>
    <!-- Carousel End -->