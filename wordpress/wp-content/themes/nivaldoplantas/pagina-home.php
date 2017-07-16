<?php /* Template Name: Home */ 
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="row sessao-destaque">
        <div class="col-sm-12">
            <h2 class="titulo-sessao">Destaques</h2>
            <ul class="lista-produtos">
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
                <li class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/produto.jpg" alt="Produto">
                        <h4>Produto</h4>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>