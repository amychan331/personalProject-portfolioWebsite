<?php
    $template = "dynamic";
    require_once('application/views/header.php');
    require_once('application/views/menu.php'); 
?>
<div id="container">
	<?php
		$content = new Content();
	?>
</div>
<?php require_once('application/views/footer.php'); ?>