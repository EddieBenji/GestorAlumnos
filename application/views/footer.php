<footer>
    <small>&copy;Eduardo Benjamín Canché Vázquez</small>
    <small id="clase">Construcción de Aplicaciones Web Dinámicas con AJAX</small>
</footer>
<script>
    $(document).ready(function () {
        $('#menu-actions ul li').click(function () {
            $(this).siblings('li').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
</body>
</html>