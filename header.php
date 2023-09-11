<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_home()){ bloginfo("name"); } else { echo wp_title(" - "); } ?></title>
    <link rel="icon" href="<?=get_template_directory_uri(); ?>/images/global/favicon.png" />
    <link rel="apple-touch-icon" href="<?=get_template_directory_uri(); ?>/images/global/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="<?=get_template_directory_uri(); ?>/output.css" rel="stylesheet" />
    <link href="<?=get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
    

</head>

<body class="font-bakh m-0 p-0 bg-body" dir="rtl">

    <!-- searchbox container -->
    <div id="search-cont" class="z-50 fixed invisible opacity-0 duration-300 w-full h-full top-0 left-0 backdrop-brightness-[25%] backdrop-blur flex items-center justify-center">
        <i class="icon-close w-8 h-8 absolute top-5 left-5 cursor-pointer"></i>
        <form method="get" action="<?php bloginfo("url"); ?>">
            <input type="text" id="s" name="s" class="w-10/12 md:w-8/12 lg:w-6/12 absolute top-1/2 left-1/2 -translate-y-2/4 -translate-x-2/4 bg-transparent p-5 border-b border-gray1 text-white text-md md:text-lg lg:text-xl placeholder-gray2" placeholder="جستجو ..." />
        </form>
    </div>
    <!-- searchbox container -->

    <!-- header -->
    <header class="my-7">
        <div class="container">
            <div class="w-full flex items-center justify-between py-4 px-5 bg-white shadow-main rounded-10">
                <div class="flex items-center gap-12">
                    <a href="<?php bloginfo("url"); ?>" title="نوین رنتر">
                        <img src="<?=get_template_directory_uri(); ?>/images/global/logo.svg" alt="نوین رنتر" class="w-36 h-auto" />
                    </a>
                    <nav class="hidden lg:block font-irsansExtra text-sm">
                        <ul class="list-none flex items-center gap-5">
                            <li class="group menu-item-has-children">
                                <a href="#">تجهیزات مراسم</a>

                                <div class="mega-menu absolute right-1/2 translate-x-2/4 pt-5 z-40 duration-300 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                    <div
                                        class="parent bg-white shadow-megaMenu rounded-10 py-4 px-7 min-h-[255px] flex justify-between">

                                        <div class="w-9/12 flex gap-5">
                                            <div class="w-3/12">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-9 h-9 flex items-center justify-center bg-gradient-to-tr from-lightBlue to-lightBlue2 rounded-10">
                                                        <i class="icon-microphone w-5 h-5"></i>
                                                    </div>
                                                    <span class="text-xs text-blue1 font-irsansExtra">دستگاه صوتی</span>
                                                </div>
                                                <ul class="list-none text-xs font-irsans leading-8 mt-3">
                                                    <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"sounds","container"=>"","echo"=>false,'link_class'=>"duration-200 hover:text-blue1") ); ?>
                                                </ul>
                                            </div>
                                            <div class="w-3/12">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-9 h-9 flex items-center justify-center bg-gradient-to-tr from-lightBlue to-lightBlue2 rounded-10">
                                                        <i class="icon-camera w-5 h-5"></i>
                                                    </div>
                                                    <span class="text-xs text-blue1 font-irsansExtra">لوازم تصویری</span>
                                                </div>
                                                <ul class="list-none text-xs font-irsans leading-8 mt-3">
                                                    <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"videos","container"=>"","echo"=>false,'link_class'=>"duration-200 hover:text-blue1") ); ?>
                                                </ul>
                                            </div>
                                            <div class="w-3/12">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-9 h-9 flex items-center justify-center bg-gradient-to-tr from-lightBlue to-lightBlue2 rounded-10">
                                                        <i class="icon-window w-5 h-5"></i>
                                                    </div>
                                                    <span class="text-xs text-blue1 font-irsansExtra">دیگر تجهیزات</span>
                                                </div>
                                                <ul class="list-none text-xs font-irsans leading-8 mt-3">
                                                    <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"others","container"=>"","echo"=>false,'link_class'=>"duration-200 hover:text-blue1") ); ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="w-3/12">
                                            <img src="<?=get_template_directory_uri(); ?>/images/temp/megamenu1.png" alt="مگامنو" draggable="false" class="max-w-full h-auto" />
                                        </div>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <a href="<?=get_permalink(get_field("tajhizat","option")); ?>">تجهیزات نمایشگاهی</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="hidden lg:flex items-center gap-6">
                    <i class="icon-search w-5 h-5 cursor-pointer"></i>
                    <ul class="list-none flex items-center gap-5 font-irsans text-sm text-dark1">
                        <li>
                            <a href="<?=get_permalink(get_field("blog","option")); ?>" class="duration-200 hover:text-blue1">بلاگ</a>
                        </li>
                        <li>
                            <a href="<?=get_permalink(get_field("resume","option")); ?>" class="duration-200 hover:text-blue1">نمونه کارها</a>
                        </li>
                    </ul>
                    <a href="<?=get_permalink(get_field("contactus","option")); ?>" class="flex items-center text-white rounded-10 py-2 px-3 bg-gradient-to-l from-primary to-secondary font-irsans text-sm gap-1">
                        <i class="icon-phone w-4 h-4"></i>
                        تماس با ما
                    </a>
                </div>
                <!-- mobile hamburger -->
                <div id="hamburger" class="block lg:hidden cursor-pointer z-50">
                    <div class="dash1 w-7 h-1 bg-secondary my-1 duration-500 rounded"></div>
                    <div class="dash2 w-7 h-1 bg-secondary my-1 duration-500 rounded"></div>
                    <div class="dash3 w-7 h-1 bg-secondary my-1 duration-500 rounded"></div>
                </div>
                <!-- mobile hamburger -->

                <!-- mobile menu -->
                <div id="mobile-menu"
                    class="fixed lg:hidden py-5 px-3 top-0 invisible -right-full opacity-0 w-9/12 bg-secondary h-full z-30 duration-500 after:fixed after:w-3/12 after:h-full after:top-0 after:left-0 after:duration-100 after:backdrop-blur">
                    <div class="searchbox relative w-full border border-primary p-3 rounded-10">
                        <form method="get" action="<?php bloginfo("url"); ?>">
                            <input type="text" name="s" id="s"
                                class="w-full border-0 placeholder-gray2 text-sm bg-transparent text-light1"
                                placeholder="جستجو ...">
                        </form>
                    </div>

                    <nav class="w-full py-5 max-h-[80vh] overflow-y-scroll">
                        <ul class="list-none flex flex-col">

                            <li class="py-3 menu-item-has-children">
                                <a href="#"
                                    class="flex items-center gap-2">
                                    <span class="text-white text-sm flex items-center gap-2">دستگاه صوتی</span>
                                </a>
                                <ul class="sub-menu w-full text-white text-sm leading-9 rounded-10 bg-darkBlue px-3 invisible max-h-0 opacity-0 duration-300">
                                    <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"sounds","container"=>"","echo"=>false,'link_class'=>"duration-200") ); ?>
                                </ul>
                            </li>
                            <li class="py-3 menu-item-has-children">
                                <a href="#"
                                    class="flex items-center gap-2">
                                    <span class="text-white text-sm flex items-center gap-2">لوازم تصویری</span>
                                </a>
                                <ul class="sub-menu w-full text-white text-sm leading-9 rounded-10 bg-darkBlue px-3 invisible max-h-0 opacity-0 duration-300">
                                    <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"videos","container"=>"","echo"=>false,'link_class'=>"duration-200") ); ?>
                                </ul>
                            </li>
                            <li class="py-3 menu-item-has-children">
                                <a href="#"
                                    class="flex items-center gap-2">
                                    <span class="text-white text-sm flex items-center gap-2">دیگر تجهیزات</span>
                                </a>
                                <ul class="sub-menu w-full text-white text-sm leading-9 rounded-10 bg-darkBlue px-3 invisible max-h-0 opacity-0 duration-300">
                                    <?=wp_nav_menu( array( 'items_wrap' => '%3$s',"theme_location"=>"others","container"=>"","echo"=>false,'link_class'=>"duration-200") ); ?>
                                </ul>
                            </li>
                            <li class="py-3">
                                <a href="<?=get_permalink(get_field("blog","option")); ?>" class="flex items-center gap-2">
                                    <span class="text-white text-sm">بلاگ</span>
                                </a>
                            </li>
                            <li class="py-3">
                                <a href="<?=get_permalink(get_field("resume","option")); ?>" class="flex items-center gap-2">
                                    <span class="text-white text-sm">نمونه کارها</span>
                                </a>
                            </li>
                            <li class="py-3">
                                <a href="<?=get_permalink(get_field("contactus","option")); ?>" class="flex items-center gap-2">
                                    <span class="text-white text-sm">تماس با ما</span>
                                </a>
                            </li>

                        </ul>
                    </nav>

                </div>
                <!-- mobile menu -->

            </div>
        </div>
    </header>
    <!-- header -->