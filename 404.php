<?php
/**
 * Template Name: 404 Error
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Pre_Launch_WP
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid grid-cols-12 bg-pink">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="md:text-left md:mx-10">
                <div class="w-20 mt-11">
                </div>

                <p class="md:mt-10">404 Error</p>
                <h1 class="uppercase text-2xl md:text-3xl md:mb-10">Page Not Found</h1>
                <p>The tomb is empty. And so is the content for this page. We'll get that fixed, for now:</p>
                <a href="/">
                    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Back to Homepage
                    </button>
                </a>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
				  rgba(0, 0, 0, 0.45),
				  rgba(0, 0, 0, 0.45)
				), url('https://fceaster.com/wp-content/uploads/2022/03/Background-Header.jpg') center center;
				 height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();
