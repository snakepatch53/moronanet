<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($DATA['slider'] as $key => $value) { ?>
            <div class="swiper-slide">
                <img src="<?= $DATA['http_domain'] ?>public/img.slider/<?= $value['slider_img'] ?>" alt="Imagen <?= $value['slider_id'] ?> del slider">
            </div>
        <?php } ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->

    <!-- If we need scrollbar -->
    <!-- <div class="swiper-scrollbar"></div> -->

    <div class="float">
        <div class="col">
            <h1>Moronanet</h1>
            <h2>INTERNET POR FIBRA ÓPTICA</h2>
            <H3>Servicio de internet desde $20.00 al mes</H3>
            <a href="<?= $DATA['http_domain'] ?>contactos">
                <span>Contáctanos</span>
            </a>
        </div>
        <div class="col">
            <img src="<?= $DATA['http_domain'] ?>public/img/banner.png" alt="Imagen para Banner">
        </div>
    </div>
</div>