<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <?php get_header(); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?>>
    <?php wp_body_open() ?>
        <!-- Navigation-->
        <?php get_template_part("includes/nav"); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <!-- Page Header-->
                <?php get_template_part("includes/header", get_post_type()); ?>
                <!-- Post Content-->
                <article class="mb-4">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-md-10 col-lg-8 col-xl-7">
                                <?php the_content(); ?>
                                <?php 
                                if (comments_open() || get_comments_number()) {
                                    comments_template();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Footer-->
        <footer class="border-top">
            <?php get_footer(); ?>
            <?php wp_footer(); ?>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
