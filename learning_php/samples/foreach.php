	<?php // foreach.php

	// Store the values in an array
	$users[] = array( 1, 'Michael Bourque', 'michael@bostonphp.org');
	$users[] = array( 2, 'Gene Babon', 'gene@bostonphp.org');
	?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			<tr>
		</thead>
		<tbody>
			<?php foreach( $users AS $user ) : ?>
			<tr>
				<?php foreach( $user AS $value ) : ?>
				<td><?php echo $value; ?></td>
				<?php endforeach; ?>
			<tr>
			<?php endforeach; ?>
		</tbody>
	</table>
