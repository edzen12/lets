<section class="no-results not-found">
	<div class="page-content container">
		<h1 class="page-title"><?php esc_html_e( 'По вашему запросу ничего не найдено', 'os' ); ?></h1>
		<p class="text-white">попробуйте заново</p>
		<form class="row" action="<?php bloginfo( 'url' ); ?>" method="get">
            <div class="col-12 p-0 align-self-center">
                <div class="row">
                    <div class="col-12 p-0 input-group">
                        <input  type="text" class="form-control" name="s" placeholder="Введите слово" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0 input-group align-self-center">
                        <button class="btn primary-button"><i class="icon-magnifier"></i>ПОИСК</button>
                    </div>
                </div>
            </div>
        </form>
	</div><!-- .page-content -->
</section><!-- .no-results -->
