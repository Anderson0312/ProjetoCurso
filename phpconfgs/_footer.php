
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
    </footer>

    <script>
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