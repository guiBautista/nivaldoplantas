<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php wp_head(); ?>
        <title>Nivaldo Plantas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="--section-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/header-home.jpg" alt="" class="--hero">
            <div class="descricao">
                <h1>Nivaldo Plantas</h1>
                <p>Texto explicativo</p>
            </div>
        </div>

        <nav>
            <ul class="nav nav-tabs nav-justified">
                <li class="<?php echo ( is_front_page() ? 'active' : '' ); ?>">
                    <a href="<?php echo home_url(); ?>">Home</a>
                </li>
                <li class="<?php echo ( is_page_template( 'pagina-produtos.php' ) ? 'active' : '' ); ?>">
                    <a href="/produtos">Produtos</a>
                </li>
                <li class="<?php echo ( is_page_template( 'pagina-contato.php' ) ? 'active' : '' ); ?>">
                    <a href="/contato">Contato</a>
                    
                </li>
            </ul>
        </nav>