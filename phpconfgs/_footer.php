
    <footer>
        <div class="midiass">
            <h3 class="h3foot"><?php echo $site_name ?></h3>
            <p > </p>
            <ul class="social-list">
                <li><a href="#"><i class='bx bxl-facebook-circle' ></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
            </ul>
        <div class="copy">
            <p class="txtfot">
            copyright &copy; 2022 <?php if (date('Y') > '2022') echo ' - ' . date('Y') ?> <?php echo $site_rodap ?>
            </p>
        </div>
        </div>

        <div class=''>
            <div class="img-logo">
                <img src="" alt="">
                <h5></h5>
            </div>
            <div class=''> 
                <div class=''>
                    <h3>SUPORTE</h3>
                    <a href="">Central de atendimento</a>
                    <a href="">Rastrear envio</a>
                    <a href="">Trocas e Devoluções</a>
                    <a href="">Política de entrega</a>
                </div>
                <div class=''>
                    <h3>INSTITUCIONAL</h3>
                    <a href="">Sobre nós</a>
                    <a href="">Tabela de medidas</a>
                    <a href="">Seja um revendedor</a>
                    <a href="">Política de privacidade</a>
                </div>
            </div>
        </div>

    </footer>

    <script>

        $('#carousel1').owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoHeight:true,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true

        });

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
                }
        })
    </script>

    <script src="/js/script.js"></script>
</body>
</html>