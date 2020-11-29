<!-- Main -->
<main class="col-12 col-lg-8 p-0">
    <div class="row">
        <div class="col-12 align-self-center  text-white" style="padding-left: 30px; padding-right: 30px">
            <p><?php the_content(); ?></p>
        </div>
    </div>        
</main>

<!-- Sidebar -->
<aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">                    
    <div class="row">
        <div class="col-12 align-self-center text-left">

            <div class="item widget-services">
                <?php the_post_thumbnail( 'post-thumbnail', ['class'=>'img-fluid']); ?>
            </div>

        </div>
    </div>
</aside>