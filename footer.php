    <footer style="background-color: #034A91;">
        <div class="container py-3 text-white">
            <div class="row">
                <div class="col-md-6 text-center text-md-start"> © 20<?php echo date('y') ?> <strong><?php bloginfo('name'); ?></strong> </div>
                <div class="col-md-6 text-center text-md-end"> Desenvolvido pela <a href="https://mazag.com.br" target="_blank" rel="noopener norefer" class="text-white text-decoration-none">Agência Mazag</a> </div>
            </div>
        </div>
    </footer>


    <!-- whatsapp button -->
    <style type="text/css">
        button.whatsapp {
            z-index: 100;
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            bottom: 1.5rem;
            right: 1.5rem;
            width: 5rem;
            height: 5rem;
            border: 0;
            background-color: #04ac24;
            border-radius: 50%;
            transition: 0.5s;
            animation: shadow-pulse 1.5s infinite;
        }
        
        button.whatsapp:hover {
            background-color: #218838;
            -ms-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            transform: scale(1.1);
        }
        
        h4.text {
            background-color: #04ac24;
            border-radius: 7px;
            padding: 15px;
            width: 200px;
        }
        
        button.text {
            position: fixed;
            bottom: 35px;
            right: -50px;
            width: 380px;
            height: 50px;
            border: 0;
            background-color: transparent;
            color: #ffffff;
            transition: 0.5s;
            bottom: 3rem;
            display: block;
            z-index: 100;
        }
        
        button.text:hover {
            /* background-color: #218838; */
            -ms-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            transform: scale(1.1);
        }
        
        i.icon {
            width: 25pt;
            height: 25pt;
            margin: 28%;
            font-size: 1.5rem;
            fill-rule: evenodd;
            clip-rule: evenodd;
            color: #ffffff;
        }
        
        @keyframes shadow-pulse {
            0% {
                box-shadow: 0 0 0 0px rgba(4, 172, 36, 0.5);
            }
            100% {
                box-shadow: 0 0 0 35px rgba(4, 172, 36, 0);
            }
        }
        
        @keyframes shadow-pulse-big {
            0% {
                box-shadow: 0 0 0 0px rgba(4, 172, 36, 0.1);
            }
            100% {
                box-shadow: 0 0 0 70px rgba(4, 172, 36, 0);
            }
        }
    </style>

    <button type="button" class="text d-none d-md-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <h4 class="mbr-fonts-style align-center display-1 text" style="font-size: 18px !important;">
            <strong>Atendimento 24h</strong>
        </h4>
    </button>

    <button type="button" class="whatsapp" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-whatsapp icon"></i>
    </button>
    <!-- whatsapp button -->


    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>