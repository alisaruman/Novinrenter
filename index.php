<?php get_header(); ?>

    <!-- slider -->
    <section id="slider">
        <div class="container">
            <div class="w-full flex flex-col md:flex-row items-center justify-between">
                <div class="w-full md:w-6/12 lg:w-5/12">
                    <h1 class="text-black font-irsansExtra text-xl lg:text-4xl leading-8 lg:leading-[67px]">
                        اجاره وسایل و تجهیزات نمایشگاهی و مراسم در تهران
                    </h1>
                    <p class="font-irsans text-dark1 text-sm lg:text-base my-5">
                        شما می توانید با اجاره روزانه وسایل از این سایت به راحتی هر آنچه برای اجرای یک مراسم ایده آل یا
                        یک نمای شگاه درخور نیاز دارید را تهیه کنید.
                    </p>
                    <div class="flex justify-center lg:justify-start gap-3">
                        <a href="<?=get_permalink(get_field("contactus","option")); ?>" class="flex items-center justify-center text-white text-base font-irsans w-28 lg:w-36 py-2 lg:py-4 bg-gradient-to-l from-primary to-secondary rounded-10">
                            تماس با ما
                        </a>
                        <a href="<?=get_permalink(get_field("aboutus","option")); ?>" class="flex items-center justify-center text-dark1 text-base font-irsans w-28 lg:w-36 py-2 lg:py-4 rounded-10 border border-light1">
                            درباره ما
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-6/12">

                    <div class="swiper mySwiper mt-6 lg:mt-0" id="main-slider">
                        <div class="swiper-wrapper">
<?php while(have_rows("slider","option")){ the_row(); $pid = get_sub_field("prod"); $prod = wc_get_product($pid); ?>
                            <div class="swiper-slide relative">
                                <img src="<?php the_sub_field("pic"); ?>" alt="<?=get_the_title($pid); ?>" draggable="false" class="w-full h-auto" />
                                <a href="<?=get_permalink($pid); ?>" class="absolute top-2/4 lg:top-3/4 right-3 lg:right-0 bg-white rounded-100 shadow-sliderContent flex items-center gap-3 pt-5 pb-6 pr-7 pl-10">
                                    <div class="w-11 h-11 flex items-center justify-center bg-primary rounded-15 z-20 shadow-slider">
                                        <i class="icon-printer w-5 h-5"></i>
                                    </div>
                                    <div>
                                        <p class="text-dark1 font-irsansExtra text-sm"><?=get_the_title($pid); ?></p>
                                        <p class="text-gray1 text-sm font-irsans"><?=$prod->get_price(); ?> روزانه</p>
                                    </div>
                                </a>
                            </div>
<?php } ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- slider -->

    <!-- index cats -->
    <section id="index-cats" class="py-5">
        <div class="container">
            <div class="block pt-6 pb-3 font-bakhExtra text-black text-lg lg:text-xl">
                دسته‌بندی محصولات
            </div>
            <div class="w-full block md:grid md:grid-cols-3 lg:grid-cols-4 grid-rows-2 gap-5">
<?php while(have_rows("cats","option")){ the_row(); $cat = get_sub_field("cat"); ?>
                <div class="item<?=get_row_index(); ?> group relative mb-5 lg:mb-0">
                    <a href="<?=get_term_link($cat,"product_cat"); ?>">
                        <img src="<?php the_sub_field("pic"); ?>" alt="<?=get_sub_field("title"); ?>" class="w-full h-full rounded-15 duration-300 group-hover:brightness-50" />
                        <div class="absolute w-full p-5 pb-10 right-0 bottom-0">
                            <div class="table bg-white rounded-30 py-2 px-4 mb-4 text-black font-irsans text-xs">روزانه
                                از
                                <?php the_sub_field("price"); ?>
                            </div>
                            <div class="font-bakhExtra text-white text-lg"><?=get_sub_field("title"); ?></div>
                        </div>
                    </a>
                </div>
<?php } ?>
            </div>
        </div>
    </section>
    <!-- index cats -->

    <!-- events -->
    <section id="events" class="py-5">

        <div id="lightbox-cont" class="z-50 fixed invisible opacity-0 duration-300 w-full h-full top-0 left-0 backdrop-brightness-[25%] backdrop-blur flex items-center justify-center cursor-pointer">
            <img src="" alt="ایونت" class="max-w-full max-h-full">
        </div>

        <div class="container">
            <div class="block pt-6 font-bakhExtra text-black text-lg lg:text-xl">
                نوین رنتر در کنار شما
            </div>

            <div class="swiper mySwiper py-5 overflow-y-visible widthFixer" id="event-slider">
                <div class="swiper-wrapper">
<?php while(have_rows("events","option")){ the_row(); ?>
                    <div class="swiper-slide relative rounded-15 overflow-hidden">
                        <a href="<?=get_sub_field("pic"); ?>" data-target="<?=get_sub_field("pic"); ?>" class="lightboxer">
                            <img src="<?=get_sub_field("thumb"); ?>" alt="<?=get_sub_field("title"); ?>" class="w-full h-auto" />
                            <div class="absolute w-full bottom-0 left-0 h-1/2 flex items-end justify-center pb-6 bg-gradient-to-t from-black to-transparent text-white text-sm">
                                <?=get_sub_field("title"); ?>
                            </div>
                        </a>
                    </div>
<?php } ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>
    <!-- events -->

    <!-- faq -->
    <section id="faq" class="py-5">
        <div class="container">
            <div class="block pt-3 pb-5 font-bakhExtra text-black text-lg lg:text-xl">
                سوالات متداول
            </div>
            <div class="w-full flex flex-wrap">
                <div class="w-full lg:w-1/2 px-2">
<?php while(have_rows("faq","option")){ the_row(); ?>
                    <div class="faq-item rounded-15 border border-gray2 py-6 px-4 mb-4 cursor-pointer">
                        <div class="faq-title w-full flex items-center justify-between">
                            <span class="text-black text-sm lg:text-base font-irsansExtra"><?php the_sub_field("title"); ?></span>
                            <i class="icon-chevron-bottom-2 w-5 h-5 duration-200"></i>
                        </div>
                        <p class="text-xs lg:text-sm text-dark1 duration-300 max-h-0 overflow-hidden">
                            <?=get_sub_field("desc"); ?>
                        </p>
                    </div>
<?php } ?>
                    

                </div>

            </div>
        </div>
    </section>
    <!-- faq -->

<?php get_footer(); ?>