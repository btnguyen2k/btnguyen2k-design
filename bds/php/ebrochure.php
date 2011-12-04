<?php require_once('header.php');?>


<div class='wrapper_body'>
	<div class='inside_left'>
   	<div id="slider" style="width:450px">
   <?php
		for($i = 2; $i <= 22; $i++)
		{
			echo '<img src="images/brochure/bro ct group ok_' .$i . '.jpg" />';
		}
	?>
		</div>
	</div><!-- END .inside_left -->


	<div class='inside_right'>
		<div class='ins_title_gioithieu'>E-BROCHURE</div>
		
		<div class='ins_content'>
			<p>Quý khách hàng có thể download bản in chất lượng cao ở đây:</p>
         <p style="text-align:center"><a href="downloads/LemanCT.pdf"><img src="images/PDFDownload.png" height="64px" /></a></p>
		</div>
	</div>
	
	<div class='clearboth'></div>

</div>

<?php require_once('footer.php'); ?>
