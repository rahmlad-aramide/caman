<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-5 pb-4" style="background-image:url(assets/img/bg/bg-7.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1 data-aos="fade-right"><?php if(isset($title)){ echo $title;} else{ echo '';} ?></h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">home</a></li>
                        <li><span><?php if(isset($title)){ echo $title;} else{ echo '';} ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-start -->