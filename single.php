<?php get_header();
the_post();
$cats = get_the_category();
?>

    <!-- breacrumb -->
    <section id="breadcrumb" class="py-6 lg:pb-12">
        <div class="container">
            <ul id="breadcrumb" class="flex flex-wrap lg:flex-nowrap gap-2 font-irsans text-xs text-dark1">
                <li class="flex items-center gap-2">
                    <a href="<?php bloginfo("url"); ?>" class="duration-200 hover:text-blue1">خانه</a>
                    <i class="icon-chevron-left w-3 h-3"></i>
                </li>
<?php if(!empty($cats)){ ?>
                <li class="flex items-center gap-2">
                    <a href="<?=get_category_link($cats[0]); ?>" title="<?=$cats[0]->name; ?>" class="duration-200 hover:text-blue1"><?=$cats[0]->name; ?></a>
                    <i class="icon-chevron-left w-3 h-3"></i>
                </li>
<?php } ?>
                <li class="flex items-center gap-2 text-gray1">
                    <span><?php the_title(); ?></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb -->

    <!-- single blog -->
    <section id="single-blog">
        <div class="container">
            <div class="w-full flex flex-col lg:flex-row gap-7">
                <div class="w-full lg:w-7/12 xl:w-8/12">
                    <div class="bg-white shadow-main px-5 py-7 rounded-10">
                        <?php the_post_thumbnail("full",array("alt"=>get_the_title(),"class"=>"w-full h-auto rounded-10")); ?>
                        <h1 class="pt-6 pb-6 lg:pb-12 text-black font-irsansExtra text-base lg:text-xl">
                            <?php the_title(); ?>
                        </h1>
                        <div id="single-content">
                            <?php the_content(); ?>
                        </div>

                        <div id="info" class="w-full flex flex-col lg:flex-row gap-7 lg:gap-0 items-center justify-between pt-6 border-t border-gray4">
                            <div class="flex items-center gap-3 font-irsans text-xs lg:text-sm">
<?php foreach(get_the_category() as $c){ ?>
                                <a href="<?=get_category_link($c); ?>" title="<?=$c->name; ?>" class="text-blue1">
                                    <?=$c->name; ?>
                                </a>
<?php } ?>
                                <div class="w-0 h-8 border-l border-gray4"></div>
                                <span class="text-gray1">
                                    تاریخ انتشار: <?php the_time("Y-m-d"); ?>
                                </span>
                            </div>
                            <div class="flex items-center gap-5">
                                <a href="#" class="flex">
                                    <i class="icon-single-whatsapp w-6 h-6"></i>
                                </a>
                                <a href="#" class="flex">
                                    <i class="icon-single-twitter w-6 h-6"></i>
                                </a>
                                <a href="#" class="flex">
                                    <i class="icon-single-telegram w-6 h-6"></i>
                                </a>
                                <a href="#" class="flex">
                                    <i class="icon-single-linkedin w-6 h-6"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:w-5/12 xl:w-4/12">
                    <div class="bg-white shadow-main p-5 rounded-10 sticky top-5">
                        <div class="block relative h-6 border-b border-gray2 mb-10">
                            <span class="font-irsansExtra text-black text-base absolute top-1/2 bg-white pl-3">مطالب
                                مرتبط</span>
                        </div>
<?php 
$rels = get_posts(array("showposts"=>"5","cat"=>$cats[0]->term_id));
foreach($rels as $rel){
?>
                        <div class="group w-full flex items-center gap-3 my-2">
                            <a href="<?=get_permalink($rel); ?>" title="<?=get_the_title($rel); ?>" class="w-3/12">
                                <?=get_the_post_thumbnail($rel,"thumbnail", array("alt"=>get_the_title($rel),"class"=>"w-full h-auto rounded-10 duration-200 group-hover:brightness-50")); ?>
                            </a>
                            <div class="w-9/12 flex flex-col">
                                <a href="<?=get_permalink($rel); ?>" title="<?=get_the_title($rel); ?>" class="text-dark1 font-irsansExtra text-sm leading-7 line-clamp-2 group-hover:text-primary">
                                    <?=get_the_title($rel); ?>
                                </a>
<?php foreach(get_the_category($rel) as $c){ ?>
                                <a href="<?=get_category_link($c); ?>" title="<?=$c->name; ?>" class="text-gray1 font-irsans text-sm mt-3">
                                    <?=$c->name; ?>
                                </a>
<?php } ?>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single blog -->

<?php get_footer(); ?>