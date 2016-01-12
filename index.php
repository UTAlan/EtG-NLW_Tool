<?php
require_once("config.php");

$get_nls = $db->query("SELECT id, year, month, primary_img_url FROM smf_tools_nlw_nl ORDER BY year DESC, month DESC");

require_once("header.php");
?>

		<ul>
			<li class="link"><a id="nl_add" href="edit.php">Add Newsletter<br><span class="text">Create a new Newsletter for the coming month.</span><br></a></li>
			<br /><br />
			<?php 
			while($nl = $get_nls->fetch_assoc()) {
				$nl['month_formatted'] = date('F', strtotime("2016-{$nl['month']}-01"));

				echo '<li class="link">';
				echo '<a id="nl_' . $nl['id'] . '" href="edit.php?id=' . $nl['id'] . '">';
				echo '<img class="left" src="' . $nl['primary_img_url'] . '" width="64" height="64" alt="" border="0" /> ';
				echo $nl['month_formatted'] . ' ' . $nl['year'];
				echo '</a>';
				echo '</li>';
			}
			?>
		</ul>
	</body>
</html>