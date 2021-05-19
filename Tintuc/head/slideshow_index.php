<section id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="max-height: 100vh;">
        <div class="carousel-item active position-relative">
            <div class="position-absolute w-100"
                style="height: 100%; background:linear-gradient(to bottom right,rgba(52, 152, 219,0.5),rgba(155, 89, 182,0.5));">
            </div>
            <img src="<?php echo $level.img_path."img_bg_3.jpg";?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item position-relative">
            <div class="position-absolute w-100"
                style="height: 100%; background:linear-gradient(to bottom right,rgba(52, 152, 219,0.5),rgba(155, 89, 182,0.5));">
            </div>
            <img src="<?php echo $level.img_path."img_bg_2.jpg"?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item position-relative">
            <div class="position-absolute w-100"
                style="height: 100%; background:linear-gradient(to bottom right,rgba(52, 152, 219,0.5),rgba(155, 89, 182,0.5));">
            </div>
            <img src="<?php echo $level.img_path."img_bg_4.jpg";?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>