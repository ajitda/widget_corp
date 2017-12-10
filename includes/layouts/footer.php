<div id="footer">Copyright FlexIt, <?php echo date("Y"); ?></div>
</body>
</html>
	<?php
	if(isset($connection)) {
		mysqli_close($connection);
	}
?>