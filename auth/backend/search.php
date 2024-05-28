<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/connectdb.php');
$search_item = $_POST['search'];
$output = '';
if ($search_item == null) { ?>
	<table class="table table-striped strip">
		<thead>
			<tr style="text-align: center;">
				<th>Name</th>
				<th>Type</th>
				<th>E-mail</th>
				<th>Telephone</th>
				<th>Abstract Number</th>
				<th>Evidence</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql2 = $conn->query("SELECT * FROM tb_user WHERE approve = 'wait' AND role = 'user' ");
			foreach ($sql2 as $tr) {
				?>
				<tr>
					<td>
						<?php echo $tr['title'] . $tr['firstname'] . " " . $tr['lastname'] ?>
					</td>
					<td>
						<?php echo $tr['type'] ?>
					</td>
					<td>
						<?php echo $tr['email'] ?>
					</td>
					<td style="text-align: center;">
						<?php echo $tr['telephone'] ?>
					</td>
					<td style="text-align: center;">
						<?php echo $tr['abstract_number'] ?>
					</td>
					<td>
						<a class="btn btn-l text-white" href="detail.php?userid=<?php echo $tr['user_id']; ?>">Detail</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } else {
	$slip = "SELECT * FROM tb_user INNER JOIN tb_slip 
ON tb_user.email = tb_slip.email where slip_name = '" . $search_item . "' ";
	$query = $conn->query($slip);

	if (mysqli_num_rows($query) > 0) {
		$output .= '<ol>';
		while ($row = mysqli_fetch_array($query)) {
			?>
			<table class="table table-striped strip">
				<thead>
					<tr style="text-align: center;">
						<th>Name</th>
						<th>Type</th>
						<th>E-mail</th>
						<th>Telephone</th>
						<th>Abstract Number</th>
						<th>Evidence</th>
					</tr>
				</thead>
				<tbody>
					<?php

					foreach ($query as $tr) {
						?>
						<tr>
							<td>
								<?php echo $tr['title'] . $tr['firstname'] . " " . $tr['lastname'] ?>
							</td>
							<td>
								<?php echo $tr['type'] ?>
							</td>
							<td>
								<?php echo $tr['email'] ?>
							</td>
							<td style="text-align: center;">
								<?php echo $tr['telephone'] ?>
							</td>
							<td style="text-align: center;">
								<?php echo $tr['abstract_number'] ?>
							</td>
							<td>
								<a class="btn btn-l text-white" href="detail.php?userid=<?php echo $tr['user_id']; ?>">Detail</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
		}
		$output .= '</ol>';

	} else {
		echo "ไม่พบข้อมูล";
	}
}
echo $output;
?>