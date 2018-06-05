<?php
/**
 * Created by PhpStorm.
 * User: Joey Clazing
 * Date: 1-6-2018
 * Time: 09:49
 */

?>
<script>$(".nav a").on("click", function(){
        $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });</script>

<div class="card-footer">
    <h6>&copy; SpotiTube.inc</h6>
</div>

</body>
</html>


