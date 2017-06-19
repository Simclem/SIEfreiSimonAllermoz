<?php
  include ("./Components/header.php");
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../Script/responsiveslides.min.js"></script>
<div class="row">
  <div class="col-lg-offset-4">
    <div class="slideshow">
      <ul class="rslides">
        <li><img src="../Pictures/image_0.jpg" alt=""></li>
        <li><img src="../Pictures/image_1.png" alt=""></li>
        <li><img src="../Pictures/image_2.png" alt=""></li>
      </ul>
    </div>
  </div>
</div>
<script>
    $(function() {
        $(".rslides").responsiveSlides();
    });
</script>


<?php
  include ("./Components/footer.php");
?>
