
    <!-- advantages -->
    <section id="advantages" class="my-10">
        <div class="container">
            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-8 p-5 bg-white rounded-15 shadow-main2">

                <div class="flex flex-col lg:flex-row gap-2 items-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-blue2 to-blue1 flex items-center justify-center rounded-20 shadow-advantage">
                        <i class="icon-printer w-9 h-9"></i>
                    </div>
                    <div>
                        <p class="font-irsansExtra text-lg text-darkBlue2 mb-1 text-center lg:text-right">رزرو سریع</p>
                        <p class="font-irsans text-xs text-gray1 leading-5 text-center lg:text-right">
                            رزرو محصول به معنای رزرو کردن یک محصول یا کالا به صورت پیش‌فروش است
                        </p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 items-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-blue2 to-blue1 flex items-center justify-center rounded-20 shadow-advantage">
                        <i class="icon-printer w-9 h-9"></i>
                    </div>
                    <div>
                        <p class="font-irsansExtra text-lg text-darkBlue2 mb-1 text-center lg:text-right">قیمت‌های مناسب
                        </p>
                        <p class="font-irsans text-xs text-gray1 leading-5 text-center lg:text-right">
                            برای کسب اطلاعات دقیق‌تر و بهترین قیمت‌ها، معمولاً توصیه می‌شود
                        </p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 items-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-blue2 to-blue1 flex items-center justify-center rounded-20 shadow-advantage">
                        <i class="icon-printer w-9 h-9"></i>
                    </div>
                    <div>
                        <p class="font-irsansExtra text-lg text-darkBlue2 mb-1 text-center lg:text-right">کارشناسان مجرب
                        </p>
                        <p class="font-irsans text-xs text-gray1 leading-5 text-center lg:text-right">
                            کارشناسان مجرب معمولاً توانایی‌ها و آگاهی فنی بالا، تحلیل و ارزیابی دقیق
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- advantages -->

    <!-- cta -->
    <section id="cta" class="mb-10">
        <div class="container">
            <div class="parent py-11 rounded-10">
                <p class="text-center font-irsansExtra text-white mb-6 text-xl lg:text-4xl">پاسخگوی شما هستیم</p>
                <ul class="w-full list-none flex flex-col lg:flex-row items-center justify-center font-irsans text-2xl text-white">
<?php while(have_rows("phones","option")){ the_row(); ?>
                    <li class="py-2 px-5 lg:border-r border-gray3 first:border-0">
                        <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
                    </li>
<?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- cta -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="w-full p-5 bg-white shadow-main2 rounded-10">

                <div class="w-full flex flex-col lg:flex-row gap-12">
                    <div class="w-full lg:w-4/12">
                        <img src="<?=get_template_directory_uri(); ?>/images/global/logo.svg" alt="نوین رنتر" class="w-36 h-auto mb-5" />
                        <h3 class="text-dark1 font-irsansExtra text-base">نوین رنتر، پلتفرم اجاره</h3>
                        <p class="font-irsans text-dark1 leading-8 text-sm text-justify">
                            نوین رنتر به عنوان اولین پلت فرم اجاره وسایل ، شروع یک تغییر بزرگ در استفاده مفید تر از
                            دارایی
                            هاست . ما اعتقاد داریم فـرهنگ مالکیت بـاید تغییر کند. با اجـاره می توان تجربه فـردا را به
                            امـروز
                            آورد و با استفاده مشترک از منابع ، بهینه تر زندگی کنیم.
                        </p>
                    </div>
                    <div class="w-full lg:w-6/12 flex flex-col lg:flex-row gap-12 lg:gap-0 justify-between">
                        <div class="w-full lg:w-4/12">
                            <div class="text-blue1 font-irsansExtra text-base mb-2 lg:mb-6 text-center lg:text-right">دسترسی سریع</div>
                            <ul class="list-none font-irsans text-md text-dark1 leading-9 text-center lg:text-right">
                                <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"footer_fast","container"=>"","echo"=>false,'link_class'=>"duration-200 hover:text-blue1") ); ?>
                            </ul>
                        </div>
                        <div class="w-full lg:w-6/12">
                            <div class="text-blue1 font-irsansExtra text-base mb-2 lg:mb-6 text-center lg:text-right">وبلاگ</div>
                            <ul class="list-none font-irsans text-md text-dark1 leading-9 text-center lg:text-right">
<?php
$posts = get_posts(array("showposts"=>"5","post_type"=>"post"));
foreach($posts as $p){ 
?>
                                <li>
                                    <a href="<?=get_permalink($p); ?>" title="<?=get_the_title($p); ?>" class="duration-200 hover:text-blue1"><?=get_the_title($p); ?></a>
                                </li>
<?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12">
                        <div class="text-blue1 font-irsansExtra text-base mb-2 lg:mb-6 text-center lg:text-right">شبکه‌های اجتماعی</div>
                        <ul class="list-none font-irsans text-md text-dark1 leading-9" dir="ltr">
                            <li>
                                <a href="https://instagram.com/<?=get_field("insta","option"); ?>" class="duration-200 hover:text-blue1 flex justify-center lg:justify-start items-center gap-1">
                                    <i class="icon-instagram w-6 h-6"></i>
                                    <?=get_field("insta","option"); ?>
                                </a>
                            </li>
                            <li>
                                <a href="https://t.me/<?=get_field("telegram","option"); ?>" class="duration-200 hover:text-blue1 flex justify-center lg:justify-start items-center gap-1">
                                    <i class="icon-telegram w-6 h-6"></i>
                                    <?=get_field("telegram","option"); ?>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/<?=get_field("tw","option"); ?>" class="duration-200 hover:text-blue1 flex justify-center lg:justify-start items-center gap-1">
                                    <i class="icon-twitter w-6 h-6"></i>
                                    <?=get_field("tw","option"); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="block bg-black my-5" />
                <h2 class="text-dark1 font-irsansExtra text-base lg:text-xl mb-3">نوین رنتر، اجاره وسایل و تجهیزات نمایشگاهی و مراسم
                </h2>
                <div id="footerContent"
                    class="relative text-dark1 text-xs lg:text-sm font-irsans leading-6 lg:leading-7 max-h-32 overflow-hidden">
                    <p>
                        نوین رنتر، پلتفرمی برای اجاره تجهیزات نمایشگاهی و تجهیزات مراسم در تهران است. شما می توانید با
                        اجاره روزانه وسایل از این سایت به راحتی هر آنچه برای اجرای یک مراسم ایده آل یا یک نمایشگاه درخور
                        نیاز دارید را تهیه کنید. برای تجهیز غرفه نمایشگاهی خود می توانید از امکان اجاره تجهیزات
                        نمایشگاهی این سایت که اجاره سیستم صوتی، اجاره باند فلش خور، اجاره بلندگو، اجاره میکروفن اجاره
                        اسپیس، اجاره وسایل سرمایشی و
                    </p>
                    <p>
                        نوین رنتر، پلتفرمی برای اجاره تجهیزات نمایشگاهی و تجهیزات مراسم در تهران است. شما می توانید با
                        اجاره روزانه وسایل از این سایت به راحتی هر آنچه برای اجرای یک مراسم ایده آل یا یک نمایشگاه درخور
                        نیاز دارید را تهیه کنید. برای تجهیز غرفه نمایشگاهی خود می توانید از امکان اجاره تجهیزات
                        نمایشگاهی این سایت که اجاره سیستم صوتی، اجاره باند فلش خور، اجاره بلندگو، اجاره میکروفن اجاره
                        اسپیس، اجاره وسایل سرمایشی و
                    </p>
                    <p>
                        نوین رنتر، پلتفرمی برای اجاره تجهیزات نمایشگاهی و تجهیزات مراسم در تهران است. شما می توانید با
                        اجاره روزانه وسایل از این سایت به راحتی هر آنچه برای اجرای یک مراسم ایده آل یا یک نمایشگاه درخور
                        نیاز دارید را تهیه کنید. برای تجهیز غرفه نمایشگاهی خود می توانید از امکان اجاره تجهیزات
                        نمایشگاهی این سایت که اجاره سیستم صوتی، اجاره باند فلش خور، اجاره بلندگو، اجاره میکروفن اجاره
                        اسپیس، اجاره وسایل سرمایشی و
                    </p>
                    <p>
                        نوین رنتر، پلتفرمی برای اجاره تجهیزات نمایشگاهی و تجهیزات مراسم در تهران است. شما می توانید با
                        اجاره روزانه وسایل از این سایت به راحتی هر آنچه برای اجرای یک مراسم ایده آل یا یک نمایشگاه درخور
                        نیاز دارید را تهیه کنید. برای تجهیز غرفه نمایشگاهی خود می توانید از امکان اجاره تجهیزات
                        نمایشگاهی این سایت که اجاره سیستم صوتی، اجاره باند فلش خور، اجاره بلندگو، اجاره میکروفن اجاره
                        اسپیس، اجاره وسایل سرمایشی و
                    </p>
                    <div id="footerHandler"
                        class="absolute h-32 w-full flex items-end text-md text-blue1 font-irsans bottom-0 right-0 bg-gradient-to-t from-white to-transparent cursor-pointer">
                        مشاهده بیشتر ...</div>
                </div>
            </div>

            <div id="copyright" class="py-5 text-center font-irsans text-gray1 text-sm" dir="ltr">
                © Copyright 2015-2023 novinrenter.com
            </div>

        </div>
    </footer>
    <!-- footer -->

    <!-- imports -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="<?=get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <!-- imports  -->

</body>

</html>