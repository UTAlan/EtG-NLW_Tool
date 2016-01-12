<?php 
require_once("config.php");

if(!empty($_POST)) {
	// Save changes
	$year = preg_replace("/[^0-9]/","",$_POST['year']);
	if(empty($year)) { $year = date('Y'); }
	$month = $_POST['month'];
	$primary_img_url = $db->real_escape_string($_POST['primary_img_url']);
	$primary_slogan = $db->real_escape_string($_POST['primary_slogan']);

	if(empty($_POST['id'])) {
		$query = "INSERT INTO ";
		$where = "";
	} else {
		$id = preg_replace("/[^0-9]/","",$_POST['id']);
		$query = "UPDATE ";
		$where = "WHERE id = " . $id;
	}
	$query = empty($_POST['id']) ? "INSERT INTO " : "UPDATE ";
	$query .= "smf_tools_nlw_nl SET year = $year, month = $month, primary_img_url = '$primary_img_url', primary_slogan = '$primary_slogan' ";
	$query .= $where;
	$db->query($query);

	$result = $db->query("SELECT id FROM smf_tools_nlw_nl WHERE year = $year AND month = $month");
	$row = $result->fetch_assoc();
	header("Location: code.php?id=" . $row['id']);
	die();
}

$nl = array();
if(!empty($_GET['id'])) {
	$id = preg_replace("/[^0-9]/","",$_GET['id']);
	$result = $db->query("SELECT * FROM smf_tools_nlw_nl WHERE id = " . $id);
	$nl = $result->fetch_assoc();
} else {
	$nl['year'] = date('Y');
	$nl['month'] = date('n')+1;
	if($nl['month'] > 12) $nl['month'] = 1;
}

require_once("header.php");
?>
		
		<ul>
			<li class="opa">
				<form action="#" method="post" id="edit_nl_form">
					<span class="text">
						Year: <input type="text" name="year" size="4" value="<?php echo $nl['year']; ?>" />
					</span>
					<br /><br />
					<span class="text">
						Month:
						<select name="month">
							<?php 
							for($i = 1; $i <= 12; $i++) {
								echo '<option value="' . $i . '"';
								if($i == $nl['month']) {
									echo ' selected="selected"';
								}
								echo '>' . date('F', strtotime("2016-$i-01")) . '</option>';
							}
							?>
						</select>
					</span>
					<br /><br />
					<span class="text">
						Primary Image URL: <input type="text" name="primary_img_url" value="<?php echo $nl['primary_img_url']; ?>" />
					</span>
					<br /><br />
					<span class="text">
						Primary Slogan:
						<br />
						<textarea name="primary_slogan" rows="5" cols="25"><?php echo $nl['primary_slogan']; ?></textarea>
					</span>
					<br /><br />
					<input type="submit" value="Save and Get Code" />
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
				</form>
			</li>
		</ul>
	</body>
</html>