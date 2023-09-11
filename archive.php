<?php get_header(); ?>
    <!-- archive top -->
    <section id="archive-top" class="py-10">
        <div class="container">
            <h1 class="font-irsansExtra text-primary text-3xl text-center mb-3"><?=single_cat_title(); ?></h1>
            <p class="w-full md:w-9/12 lg:w-6/12 table mx-auto mb-5 text-gray1 text-sm font-irsans leading-7 text-center">
                شما می‌توانید از آخرین اخبار و مقالات مرتبط با اجاره وسایل مطلع شوید. چه اجاره‌دهنده‌ای باشید که به
                دنبال راهکارهای بهینه برای به اشتراک گذاشتن وسایل خود با دیگران هستید
            </p>
            <form method="get" action="<?php bloginfo("url"); ?>">
                <div class="relative w-full md:w-6/12 lg:w-4/12 mx-auto">
                    <i class="icon-search2 w-6 h-6 absolute top-1/2 right-5 -translate-y-2/4"></i>
                    <input type="text" name="s" placeholder="جستجو ..." class="w-full rounded-10 p-5 bg-white border border-gray4 pr-16 text-primary placeholder-gray1 text-sm font-irsans shadow-searchInset">
                </div>
            </form>
        </div>
    </section>
    <!-- archive top -->

    <!-- archive posts -->

    <section id="archive-posts">
        <div class="container">
            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-3">
<?php while(have_posts()){ the_post(); ?>
                <div class="w-full">
                    <div class="item w-full bg-white rounded-10 shadow-main p-3">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail("medium",array("alt"=>get_the_title(),"class"=>"w-full h-auto rounded-10")); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h3 class="lg:line-clamp-2 lg:h-14 font-irsansExtra text-black text-base pt-3 duration-200 hover:text-secondary">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <p class="xl:line-clamp-3 text-gray1 text-sm py-3 leading-7">
                            <?=get_the_excerpt(); ?>
                        </p>
                        <div class="flex items-center justify-between font-irsans">
<?php foreach(get_the_category() as $c){ ?>
                            <a href="<?=get_category_link($c); ?>" title="<?=$c->name; ?>" class="text-sm text-blue1 duration-200 hover:text-secondary"><?=$c->name; ?></a>
<?php } ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="py-1 px-4 text-sm text-black flex items-center gap-3 border-r border-gray4">
                                ادامه مطلب
                                <i class="icon-chevron-left2 w-3 h-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
<?php } ?>
            </div>
        </div>
    </section>

    <!-- pagination -->
    <?php page_navigation_f(); ?>
    
    <!-- pagination -->

    <!-- archive posts -->
<?php get_footer(); ?>