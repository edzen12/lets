<?php 
get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<div class="page-content container">
			<img src="https://www.elegantthemes.com/blog/wp-content/uploads/2020/02/000-404.png" class="full-image" data-mask="70">
			<h1 class="page-title">Ой! Эта страница не может быть найдена.</h1>
			<p>
				Похоже, в этом месте ничего не было найдено. Может быть, попробуете поиск?
			</p>
			<form class="row" action="<?php bloginfo( 'url' ); ?>" method="get">
                <div class="col-12 p-0 align-self-center">
                    <div class="row">
                        <div class="col-12 col-lg-12 p-0 input-group">
                            <input  type="text" class="form-control" name="s" placeholder="Введите слово" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 p-0 input-group align-self-center">
                            <button class="btn primary-button"><i class="icon-magnifier"></i>ПОИСК</button>
                        </div>
                    </div>
                </div>
            </form>

		</div>
	</section>
</main>

<?php
get_footer();
