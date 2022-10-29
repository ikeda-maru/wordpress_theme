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
        <!-- Page Header-->
        <?php get_template_part("includes/header", "main"); ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                            <!-- Post preview-->
                            <div class="post-preview">
                                <a href="<?php the_permalink(); ?>">
                                    <h2 class="post-title">
                                    <?php
                                    if (mb_strlen($title = get_the_title() ) > 25) {
                                        $title = mb_substr($title, 0, 25);
                                        echo $title . '...';
                                    } else {
                                        echo $title;
                                    }
                                    ?>
                                    </h2>
                                    <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                                </a>
                                <p class="post-meta">
                                Posted by
                                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                                on <?php the_date(); ?>
                                </p>
                            </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>Article not found.</p>
                    <?php endif; ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
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
