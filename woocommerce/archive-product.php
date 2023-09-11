<?php get_header(); ?>
    <!-- archive top -->
    <section id="archive-product-top" class="py-10">
        <div class="container relative">
            <h1 class="font-irsansExtra text-primary text-lg md:text-3xl text-center mb-3"><?=single_cat_title(); ?></h1>
            <div id="archive-desc" class="max-h-[100px] overflow-hidden duration-500">
                <p class="w-full md:w-9/12 lg:w-6/12 table mx-auto mb-5 text-gray1 text-sm font-irsans leading-7 text-center">
                   <?=category_description(); ?>
                </p>
            </div>
            <div class="w-full absolute bottom-0 left-1/2 -translate-x-2/4 pb-0 pt-12 bg-gradient-to-t from-body to-transparent flex items-center justify-center cursor-pointer"
                id="desc-opener">
                <i class="icon-chevron-bottom-2 w-5 h-5 duration-200"></i>
            </div>
        </div>
    </section>
    <!-- archive top -->

    <!-- archive posts -->

    <section id="archive-posts">
        <div class="container">
            <div class="w-full grid grid-cols-1 lg:grid-cols-4 gap-3">
<?php while(have_posts()){ the_post(); global $product; ?>
                <div class="w-full">
                    <div class="bg-white rounded-10 p-5">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail("medium",array("alt"=>get_the_title(),"class"=>"w-full h-auto")); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h3 class="mt-6 mb-3 text-dark1 font-irsansExtra text-sm text-center duration-200 hover:text-primary"><?php the_title(); ?></h3>
                        </a>
                        <hr class="bg-gray4 mb-3" />
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-dark1 font-irsans">
                                <span class="font-irsansExtra"><?=$product->get_price(); ?> تومان</span>
                                <span class="text-gray1">/ روزانه</span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="bg-primary rounded-10 py-2 px-4 flex items-center gap-3 text-white font-irsans duration-200 hover:bg-secondary">
                                اجاره
                                <i class="icon-chevron-left2 w-3 h-3 invert"></i>
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