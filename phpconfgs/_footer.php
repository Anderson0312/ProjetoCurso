
    <footer>

        <div class='footer-init'>
            <div class="img-logo">
                <img src="<?php echo $site_logo ?>" alt="" style='width:90px '>
                <p>Alimentamos sua paixão pelo esporte e pelo seu time de coração,<br> com o manto do seu time.</p>
            </div>
            <div class='footer-infos'> 
                <div class='info'>
                    <h3>MINHA CONTA</h3>
                    <a href="/user/logged.php"><p>> Painel</p></a>
                    <a href="/user/request.php"><p>> Meus Pedidos</p></a>
                    <a href="/user/logged.php"><p>> Alterar Dados</p></a>
                    <a href="/user/logged.php"><p>> Alterar Endereço</p></a>
                </div>
                <div class='info'>
                    <h3>SUPORTE</h3>
                    <a href="https://wa.me/qr/RZJYA7ESGTTPF1" target='_blank'><p>> Central de atendimento</p></a>
                    <a href="https://rastreamento.correios.com.br/app/index.php" target='_blank'><p>> Rastrear envio</p></a>
                    <a href="/politicas/troca_devolucao.php"><p>> Trocas e Devoluções</p></a>
                    <a href="/politicas/politica_entrega.php"><p>> Política de entrega</p></a>
                </div>
                <div class='info'>
                    <h3>INSTITUCIONAL</h3>
                    <a href="/politicas/sobre_nos.php"><p>> Sobre nós</p></a>
                    <a href="/politicas/tabela_medidas.php"><p>> Tabela de medidas</p></a>
                    <a href="/politicas/politica_privacidade.php"><p>> Política de privacidade</p></a>
                </div>
            </div>
            <div class='pagamentos-cartao'>
                
            </div>
        </div>


    <div class='finish-footer'>
        <div class="midiass">
            <h3 class="h3foot"><?php echo $site_name ?></h3>
            <ul class="social-list">
                <li><a href="https://www.instagram.com/sportsmgl/" target='_blank'><i class='bx x bxl-facebook-circle social'></i></a></li>
                <li><a href="https://www.instagram.com/sportsmgl/" target='_blank'><i class='bx x bxl-twitter social' ></i></a></li>
                <li><a href="https://www.instagram.com/sportsmgl/" target='_blank'><i class='bx x bxl-instagram-alt social'></i></a></li>
            </ul>
            <div class="copy">
            <p class="txtfot">
            copyright &copy; 2022 <?php if (date('Y') > '2022') echo ' - ' . date('Y') ?> <?php echo $site_rodap ?>
            </p>
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
                500:{
                    items:3
                },
                960:{
                    items:6
                }
                }
        })
    </script>

    <script src="/js/script.js"></script>
</body>
</html>