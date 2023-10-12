<?php
$page='';
include("header.php");

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>WELCOME</h1>
    </section>
    <section class="content container-fluid">
        <h1>CORES POLY PRINT ADMIN PANEL.</h1>

    </section>
</div>
<?php
include("footer.php");
?>
<script src="plugins/ckeditor/ckeditor.js"></script>
<script>
    $(function() {
        CKEDITOR.replace('txtHome');
        CKEDITOR.replace('txtAbout');
        CKEDITOR.replace('txtGallery');
        CKEDITOR.replace('txtContact');
    })

</script>
