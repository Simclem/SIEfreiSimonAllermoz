<?php 
    include('./Components/header.php');
    echo('<input type="hidden" id="idA" value ='.$_GET["idAlbum"].'>');
?>
<div class="gallery">
</div>
<script type = "text/javascript" src="../Script/ScriptGetPhotos.js"></script>


<?php
    include('./Components/footer.php');
?>
