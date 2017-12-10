<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirmed_logged_in(); ?>

<?php $layout_context="admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">
	<div id="navigation">
	&nbsp
	</div>
	<div id="page">
		<h2>Admin Menu</h2>
		<p>Welcome to the Admin Page <?php echo htmlentities($_SESSION["username"]); ?></p>
		<ul>
			<li><a href="manage_content.php">Manage COntent</a></li>
			<li><a href="manage_admins.php">Manage Admins</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div>
</div>
<?php include("../includes/layouts/header.php"); ?>