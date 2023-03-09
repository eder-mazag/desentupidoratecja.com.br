<!doctype html>

<html <?php language_attributes(); ?>>

<head>
<script src="//scripts.iconnode.com/73484.js"></script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title> <?php bloginfo('name'); ?> <?php wp_title(); ?> </title>
    <?php wp_head(); ?>

    <div id="safe-addpg"></div>
    <script type="text/javascript" src="https://www.safeads.com.br/addpg/base.js"></script>
    <script type="text/javascript">
        qr = new XMLHttpRequest();
        qr.open("get", "https://safeads.com.br/addpg/?lic=20cb99ce0915b953&ref=" + document.referrer);
        qr.send();
        qr.onload = function()

        {
            document.getElementById("safe-addpg").innerHTML = qr.responseText
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M646KWL');
    </script>
    <!-- End Google Tag Manager -->

	<div id="safe-addpg"></div>
<script type="text/javascript" src="https://www.safeads.com.br/addpg/base.js"></script>
<script type="text/javascript">
qr=new XMLHttpRequest();
qr.open("get","https://safeads.com.br/addpg/?lic=20cb99ce0915b953&ref=" + document.referrer);
qr.send();
qr.onload=function()

{document.getElementById("safe-addpg").innerHTML=qr.responseText}
</script>

	<div id="safe-addpg"></div>
<script type="text/javascript" src="https://www.safeads.com.br/addpg/base.js"></script>
<script type="text/javascript">
qr=new XMLHttpRequest();
qr.open("get","https://safeads.com.br/addpg/?lic=0358f289166838da&ref=" + document.referrer);
qr.send();
qr.onload=function()

{document.getElementById("safe-addpg").innerHTML=qr.responseText}
</script>
	
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M646KWL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>

        <nav class="navbar mt-md-0 py-0 bg-white shadow" style="margin-top: 7rem;">
            <div class="container">

                <a class="navbar-brand mx-auto mx-md-0" href="<?php echo esc_url(home_url('/')); ?>"> 
                    <img src="<?php bloginfo('template_url') ?>/assets/img/tecja-logo.webp" width="100%" height="100%" alt="TecJá">
                    <span class="visually-hidden"><?php bloginfo('name'); ?></span>
                </a>

                <div class="d-flex">
    
                    <a href="tel:08005809979" target="_blank" rel="noopener" class="btn btn-primary d-none d-md-block" style="line-height: 1.0; padding: 1rem 1.5rem 0.8rem 1.5rem;">
                        <i class="bi bi-telephone-fill me-1" style="font-size: 0.9rem;"></i> <strong>LIGUE GRÁTIS 0800 580 9979</strong> <br> <small class="fw-bold" style="font-size: 0.6rem; letter-spacing: 0.05rem;">COBRIMOS QUALQUER ORÇAMENTO</small> 
                    </a>
    
                    <a href="tel:08005809979" target="_blank" rel="noopener" class="btn btn-primary d-md-none fixed-top m-1 shadow" style="line-height: 1.4; padding: 0.6rem 1.5rem 0.8rem 1.5rem;">
                        <small class="fw-bold" style="font-size: 0.6rem; letter-spacing: 0.05rem;">CLIQUE AQUI PARA INICIAR UMA LIGAÇÃO GRATUITA</small> <br> <strong><i class="bi bi-telephone-fill me-1" style="font-size: 0.9rem;"></i> LIGUE GRÁTIS 0800 580 9979</strong> <br> <small class="fw-bold" style="font-size: 0.6rem; letter-spacing: 0.05rem;">COBRIMOS QUALQUER ORÇAMENTO</small> 
                    </a>
    
                </div>

            </div>
        </nav>
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Preencha os campos abaixo para receber <br> um atendimento via WhatsApp</h5>
                        <button type="button" class="btn-close bg-light rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <?php if ( is_active_sidebar( 'form-whatsapp' ) ) : ?>
                        <div class="modal-body">
                            <?php dynamic_sidebar( 'form-whatsapp' ); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </header>