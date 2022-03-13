<?php
/**
 * Template Name: Community Events
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage easters-2022
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
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal-->

    <div class="bg-green relative">
        <div class="hidden lg:block absolute bottom-0 right-0 w-4/12">
            <img src="<?php the_field('right_corner_art'); ?>" alt="">
        </div>
        <div class="lg:mx-auto">
            <div class="grid grid-cols-12 gap-4 text-black">
                <div class="col-span-12 lg:col-span-9 px-5 py-20 md:p-10 md:my-24">
                    <h1 class="uppercase leading-relaxed text-5xl md:text-8xl xl:text-9xl text-white"><?php the_field('title'); ?></h1>
                </div>
            </div>
        </div>
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

    <div class="bg-white">
    <div class="lg:max-w-6xl lg:mx-auto pt-10 px-5">
        <div class="col-span-12">
            <div class="bg-green lg:h-56 p-5 rounded-xl shadow-xl text-white text-2xl">
                <?php the_field('main_copy'); ?>
                </h1>
            </div>
        </div>
    </div>


    <div class="bg-white pb-10">
        <div class="lg:max-w-6xl lg:mx-auto pt-5">

            <!-- Outer -->
            <div class="grid grid-cols-12 gap-4 px-5">
                <div class="col-span-12 lg:col-span-8">
                    <!-- Inner -->
                    <div class="grid grid-cols-12 gap-4">
                        <?php if (have_rows('info_block_1')): ?>
                            <?php while (have_rows('info_block_1')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="bg-pink lg:h-56 p-5 rounded-xl shadow-xl text-white">
                                        <h2 class="text-5xl md:text-3xl"><?php the_sub_field('title'); ?></h2>
                                        <h3 class="text-xl font-bold"><?php the_sub_field('date'); ?> | <?php the_sub_field('time'); ?></h3>
                                        <h3 class="text-md font-bold pb-2"><?php the_sub_field('location'); ?> | <?php the_sub_field('address'); ?></h3>
                                        <?php if (get_sub_field('button_link')): ?>
                                            <a href="<?php the_sub_field('button_link'); ?>">
                                                <button class="button mx-auto lg:mx-0 border-2 border-white text-white rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                                    <?php the_sub_field('button_text'); ?>
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('info_block_2')): ?>
                            <?php while (have_rows('info_block_2')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="bg-pink lg:h-56 p-5 rounded-xl shadow-xl text-white">
                                        <h2 class="text-5xl md:text-3xl"><?php the_sub_field('title'); ?></h2>
                                        <h3 class="text-xl font-bold"><?php the_sub_field('date'); ?> | <?php the_sub_field('time'); ?></h3>
                                        <h3 class="text-md font-bold pb-2"><?php the_sub_field('location'); ?> | <?php the_sub_field('address'); ?></h3>
                                        <?php if (get_sub_field('button_link')): ?>
                                            <a href="<?php the_sub_field('button_link'); ?>">
                                                <button class="button mx-auto lg:mx-0 border-2 border-white text-white rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                                    <?php the_sub_field('button_text'); ?>
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4">
                    <div class="grid grid-cols-12 gap-4">
                        <?php if (have_rows('info_block_3')): ?>
                            <?php while (have_rows('info_block_3')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="bg-green p-5 experience-height-lock rounded-xl shadow-xl text-white">
                                        <h2 class="text-5xl md:text-3xl"><?php the_sub_field('title'); ?></h2>
                                        <h3 class="text-xl font-bold"><?php the_sub_field('date'); ?> | <?php the_sub_field('time'); ?></h3>
                                        <h3 class="text-md font-bold pb-2"><?php the_sub_field('location'); ?> | <?php the_sub_field('address'); ?></h3>
                                        <?php if (get_sub_field('button_link')): ?>
                                            <a href="<?php the_sub_field('button_link'); ?>">
                                                <button class="button mx-auto lg:mx-0 border-2 border-white text-white rounded-full my-2 py-2 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                                    <?php the_sub_field('button_text'); ?>
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-pink p-5 relative">

        <div class="hidden lg:block absolute bottom-0 right-0 w-4/12">
            <img src="<?php the_field('flower_photo'); ?>" alt="Decorative Flowers">
        </div>

        <div class="lg:max-w-6xl lg:mx-auto pt-10">
            <div class="grid grid-cols-12 gap-4 text-white">
                <div class="col-span-12 lg:col-span-6 pb-10">
                    <h3 class="text-3xl uppercase"><?php the_field('resource_title'); ?></h3>
                    <h3 class="text-2xl capitalize pb-5"><?php the_field('resource_subtitle'); ?></h3>
                    <?php echo do_shortcode("[gravityform id='2']"); ?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();