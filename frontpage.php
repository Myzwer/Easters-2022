<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pre_Launch_WP
 * @since 1.0.0
 */

get_header(); ?>

    <!-- The Modal -->
    <div id="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-top bg-no-repeat bg-scroll bg-cover relative"
                         style="background: url('<?php the_field('modal_background'); ?>') center center;">

                        <div class="modal-icon">
                            <img src="<?php the_field('modal_icon'); ?>" alt="Foothills Church Icon">
                        </div>
                    </div>
                    <div class="modal-inner">
                        <p class="pb-5"><?php the_field('modal_text'); ?></p>

                        <?php if (have_rows('main_button')): ?>
                            <?php while (have_rows('main_button')): the_row(); ?>
                                <a download
                                   href="<?php the_sub_field('button_download'); ?>">
                                    <button class="mx-auto lg:mx-0 w-full bg-green text-black font-bold rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>

                         <?php if (have_rows('secondary_button')): ?>
                            <?php while (have_rows('secondary_button')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="mx-auto lg:mx-0 w-full border-black border-2 text-black font-bold rounded-full my-1 md:my-1 py-3 px-6 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal-->

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.45),
            rgba(0, 0, 0, 0.45)
            ), url('<?php the_field('background_image'); ?>') center center;
            height: 60vh;">
        <div class="content-middle text-white text-center">
            <img class="content-middle w-11/12 md:w-4/12"
                 src="<?php the_field('easters_logo'); ?>" alt="">
        </div>

        <img class="hidden lg:block absolute right-0 bottom-0 w-3/12"
             src="<?php the_field('right_corner_art'); ?>" alt="">
        <img class="hidden lg:block absolute left-0 bottom-0 w-3/12"
             src="<?php the_field('left_corner_art'); ?>" alt="">
    </div>

    <div class="bg-black">
        <div class="px-4 py-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="md:text-center">
                        <h1 class="text-white text-4xl uppercase">
                            <?php the_field('tagline'); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pb-10">
        <div class="lg:max-w-4xl lg:mx-auto pt-10">

            <!-- Outer -->
            <div class="grid grid-cols-12 gap-4 px-5">
                <div class="col-span-12 md:col-span-8">
                    <!-- Inner -->
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <div class="col-span-12">
                                <div class="text-center text-black uppercase font-bold text-md"><?php the_field('maryville_title'); ?></div>
                            </div>
                        </div>
                        <?php if (have_rows('event_date_1')): ?>
                            <?php while (have_rows('event_date_1')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="bg-pink p-5 rounded-xl shadow-xl text-white">
                                        <h2 class="uppercase text-3xl"><?php the_sub_field('event_date'); ?></h2>
                                        <h3 class="uppercase text-md"><?php the_sub_field('event_time'); ?></h3>
                                        <h3 class="uppercase text-md"><?php the_sub_field('event_address'); ?></h3>
                                        <button id="two"
                                                class="button mx-auto lg:mx-0 bg-white text-black rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('event_date_2')): ?>
                            <?php while (have_rows('event_date_2')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="bg-pink p-5 rounded-xl shadow-xl text-white">
                                        <h2 class="uppercase text-3xl"><?php the_sub_field('event_date'); ?></h2>
                                        <h3 class="uppercase text-md"><?php the_sub_field('event_time'); ?></h3>
                                        <h3 class="uppercase text-md"><?php the_sub_field('event_address'); ?></h3>
                                        <button id="two"
                                                class="button mx-auto lg:mx-0 bg-white text-black rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <div class="text-center text-black uppercase font-bold text-md"><?php the_field('bearden_title'); ?></div>
                        </div>
                        <?php if (have_rows('event_date_3')): ?>
                            <?php while (have_rows('event_date_3')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="bg-green p-5 rounded-xl shadow-xl text-white homepage-height-lock">
                                        <h2 class="uppercase text-3xl"><?php the_sub_field('event_date'); ?></h2>
                                        <h3 class="uppercase text-md"><?php the_sub_field('event_time'); ?></h3>
                                        <h3 class="uppercase text-md"><?php the_sub_field('event_address'); ?></h3>
                                        <button id="two"
                                                class="button mx-auto lg:mx-0 bg-white text-black rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white pb-10">
        <div class="lg:max-w-4xl lg:mx-auto pt-10">
            <div class="grid grid-cols-12 gap-4 px-5 text-black">
                <?php if (have_rows('info_block_1')): ?>
                    <?php while (have_rows('info_block_1')): the_row(); ?>
                        <div class="col-span-12 md:col-span-12 py-8">
                            <h2 class="text-4xl md:text-6xl"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('copy'); ?></p>
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="button mx-auto lg:mx-0 border-2 border-black text-black rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('info_block_2')): ?>
                    <?php while (have_rows('info_block_2')): the_row(); ?>
                        <div class="col-span-12 md:col-span-12 py-8">
                            <h2 class="text-4xl md:text-6xl"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('copy'); ?></p>
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="button mx-auto lg:mx-0 border-2 border-black text-black rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('info_block_3')): ?>
                    <?php while (have_rows('info_block_3')): the_row(); ?>
                        <div class="col-span-12 md:col-span-12 py-8">
                            <h2 class="text-4xl md:text-6xl"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('copy'); ?></p>
                            <?php if (get_sub_field('button_link')): ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="button mx-auto lg:mx-0 border-2 border-black text-black rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bg-green pb-10">
        <div class="lg:max-w-4xl lg:mx-auto pt-10">
            <div class="grid grid-cols-12 gap-6 px-5 text-white">
                <div class="col-span-12 md:col-span-6">
                    <h3 class="text-2xl uppercase pb-5 "><?php the_field('about_title'); ?></h3>
                    <p><?php the_field('about_copy'); ?></p>
                </div>

                <div class="col-span-12 md:col-span-6">
                    <h3 class="text-2xl uppercase pb-5"><?php the_field('contact_title'); ?></h3>
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();