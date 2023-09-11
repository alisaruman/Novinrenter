<?php get_header();
the_post();
global $product; 
$cats = get_the_terms($post,"product_cat");
?>
    <!-- product info -->
    <section id="product-info" class="mb-5">
        <div class="container">
            <div class="w-full flex flex-col lg:flex-row gap-7">
                <div class="w-full lg:w-1/2">
                    <div class="bg-white shadow-main p-5 rounded-10">

                        <ul id="breadcrumb" class="flex flex-wrap lg:flex-nowrap gap-2 font-irsans text-xs text-dark1 mb-6 lg:mb-12">
                            <li class="flex items-center gap-2">
                                <a href="<?php bloginfo("url"); ?>" title="خانه" class="duration-200 hover:text-blue1">خانه</a>
                                <i class="icon-chevron-left w-3 h-3"></i>
                            </li>
<?php if(!empty($cats)){ ?>
                            <li class="flex items-center gap-2">
                                <a href="<?=get_term_link($cats[0]); ?>" title="<?=$cats[0]->name; ?>" class="duration-200 hover:text-blue1"><?=$cats[0]->name; ?></a>
                                <i class="icon-chevron-left w-3 h-3"></i>
                            </li>
<?php } ?>
                            <li class="flex items-center gap-2 text-gray1">
                                <span><?php the_title(); ?></span>
                            </li>
                        </ul>
                        <h1 class="font-irsansExtra text-black text-sm text-center md:text-right lg:text-xl mb-6 md:mb-12"><?php the_title(); ?></h1>
                        <div class="flex justify-center md:justify-start items-center gap-3 mb-12">
                            <span class="text-lg font-irsansExtra text-dark1"><?=$product->get_price(); ?><span
                                    class="font-irsans">تومان</span></span>
                            <span
                                class="text-white bg-secondary text-sm font-irsans py-1 px-3 rounded-t-10 rounded-bl-10">روزانه</span>
                        </div>
                        <p class="text-sm font-irsans text-gray1 pr-2">تعداد روز دلخواه را وارد کنید:</p>
                        <div id="calc" class="w-full flex flex-col gap-5 md:gap-0 md:flex-row items-center py-4 mb-5 rounded-10 border border-gray2 mt-2">
                            <div class="w-full md:w-1/2 md:border-l border-gray2 px-4 flex items-center justify-between">
                                <div class="w-10 h-10 flex items-center justify-center bg-gray4 rounded-full cursor-pointer" id="increase">
                                    <i class="icon-chevron-bottom w-3 h-3 rotate-180"></i>
                                </div>
                                <input type="number" name="qty" id="qty" value="1" class="appearance-none w-4/12 text-center text-black font-irsans text-xl" value="1" min="1" max="10" disabled autocomplete="off">
                                <div class="w-10 h-10 flex items-center justify-center bg-gray4 rounded-full cursor-pointer" id="decrease">
                                    <i class="icon-chevron-bottom w-3 h-3"></i>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-4">
                                <div class="w-full flex items-center justify-between font-irsans">
                                    <span class="text-gray1 text-sm">قیمت نهایی: </span>
                                    <div class="flex items-center gap-3">
                                        <span class="font-irsansExtra text-base md:text-xl text-black format-number"
                                            id="product-price"><?=$product->get_price(); ?></span>
                                        <span
                                            class="text-white text-sm p-3 rounded-10 bg-gradient-to-l from-blue2 to-blue1">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="order-submit" class="relative cursor-pointer rounded-10 w-full py-3 bg-gradient-to-r from-secondary to-primary flex items-center justify-center gap-2 text-white font-irsansExtra text-lg">
                            ثبت سفارش
                            <i class="icon-pointer w-10 h-10"></i>
                            <i class="icon-wave w-40 h-full top-0 left-0 absolute"></i>
                        </div>
                    </div>
                    <div class="flex gap-2 w-full overflow-x-scroll text-dark1 text-sm font-irsans py-3 my-2 whitespace-nowrap">
<?php foreach(get_the_terms($post,"product_tag") ?: [] as $t){ ?>
                        <a href="<?=get_term_link($t); ?>" class="p-3 rounded-10 bg-gray4 duration-200 hover:bg-gray1 hover:text-white"><?=$t->name; ?></a>
<?php } ?>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <i class="icon-share w-5 h-5"></i>
                            <span class="text-gray1 font-irsans text-sm">اشتراک گذاری: </span>
                        </div>
                        <div class="flex items-center gap-5">
                            <div class="flex items-center gap-2 cursor-pointer" id="shortlink">
                                <span class="text-dark1 font-irsans text-sm">لینک کوتاه</span>
                                <i class="icon-link w-5 h-5"></i>
                            </div>
                            <div class="w-0 h-8 border-r border-gray2"></div>
                            <a href="#" target="_blank" title="تلگرام" class="flex">
                                <i class="icon-telegram2 w-5 h-5"></i>
                            </a>
                            <a href="#" target="_blank" title="واتس اپ" class="flex">
                                <i class="icon-whatsapp w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="bg-white shadow-main p-5 rounded-10">
                        <?php the_post_thumbnail("full",array("alt"=>get_the_title(),"class"=>"w-full h-auto rounded-10")); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="buy-cont" class="z-50 fixed invisible opacity-0 duration-300 w-full h-full top-0 left-0 backdrop-brightness-[25%] backdrop-blur flex items-center justify-center">
        <div class="w-11/12 md:w-8/12 lg:w-6/12">
            <div class="w-full py-5 bg-gradient-to-b from-light3 to-white rounded-10 relative">
                <div class="w-8 h-8 bg-white shadow-main flex items-center justify-center rounded-full absolute top-3 left-3 cursor-pointer"
                    id="closer">
                    <i class="icon-close2 w-5 h-5"></i>
                </div>
                <div
                    class="w-24 h-24 rounded-full mx-auto bg-gradient-to-tr from-primary to-secondary flex items-center justify-center">
                    <i class="icon-call2 w-12 h-12"></i>
                </div>
                <p class="text-dark1 font-irsansExtra text-lg text-center my-12">
                    برای سفارش با شماره های زیر تماس حاصل فرمایید
                </p>
<?php $phone = ""; ?>
                <ul class="list-none flex flex-row-reverse items-center justify-center gap-4">
<?php while(have_rows("phones","option")){ the_row(); ?>
                    <li class="phone-li relative w-10 h-10 bg-blue1 rounded-full flex items-center justify-center font-irsansExtra text-white text-xl cursor-pointer<?=(empty($phone) ? " active" : ""); ?>" data-target="<?php the_sub_field("phone"); ?>"><?=get_row_index(); ?></li>
<?php if(empty($phone)){ $phone = get_sub_field("phone");  }} ?>
                </ul>
                <a href="tel:<?=$phone; ?>" target="_blank" id="buy-phone" class="font-irsansExtra text-dark1 text-3xl my-12 table mx-auto"><?=$phone; ?></a>
            </div>
        </div>
    </div>
    <!-- product info -->

    <!-- related products -->
    <section id="related-products" class="mb-6">
        <div class="container">
            <div class="block pt-6 font-bakhExtra text-black text-lg lg:text-xl">
                محصولات مشابه
            </div>

            <div class="swiper mySwiper py-5 overflow-y-visible widthFixer" id="event-slider">
                <div class="swiper-wrapper">
<?php
$resl = [];
if(!empty($cats)){
    $rels = get_posts(array("showposts"=>"7","post_type"=>"product","tax_query"=>array(
        array("taxonomy"=>"product_cat","terms"=>array($cats[0]->term_id))
    ),"post__not_in"=>array($post->ID)));
} else {
    $rels = get_posts(array("showposts"=>"7","post_type"=>"product","orderby"=>"rand"));
}
foreach($rels as $r){ $prod = wc_get_product($r);
?>
                    <div class="swiper-slide relative rounded-15 overflow-hidden">
                        <div class="bg-white rounded-10 p-5">
                            <a href="<?=get_permalink($r); ?>" title="<?=get_the_title($r); ?>">
                                <?=get_the_post_thumbnail($r,"medium",array("title"=>get_the_title($r),"class"=>"w-full h-auto")); ?>
                            </a>
                            <a href="<?=get_permalink($r); ?>" title="<?=get_the_title($r); ?>">
                                <h3 class="mt-6 mb-3 text-dark1 font-irsansExtra text-sm text-center duration-200 hover:text-primary"><?=get_the_title($r); ?></h3>
                            </a>
                            <hr class="bg-gray4 mb-3" />
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-dark1 font-irsans">
                                    <span class="font-irsansExtra"><?=$prod->get_price(); ?></span>
                                    <span class="text-gray1">/ روزانه</span>
                                </div>
                                <a href="<?=get_permalink($r); ?>" class="bg-primary rounded-10 py-2 px-4 flex items-center gap-3 text-white font-irsans duration-200 hover:bg-secondary">
                                    اجاره
                                    <i class="icon-chevron-left2 w-3 h-3 invert"></i>
                                </a>
                            </div>
                        </div>
                    </div>
<?php } ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>
    <!-- related products -->
<?php get_footer(); ?>