        <hr>
        </main> <!-- /container -->

        <footer class="container">
            <?php $hoje = new DateTime("now", new DateTimeZone("America/Sao_Paulo")); ?>
            <p>&copy;2023 a <?php echo $hoje->format("Y"); ?>  - Projeto PW: Ana Luiza Candido e Isadora Correa</p>
        </footer>

        <script src="<?php echo BASEURL; ?>js/code.jquery.com_jquery-3.7.0.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/main.js"></script>
    </body>
</html>