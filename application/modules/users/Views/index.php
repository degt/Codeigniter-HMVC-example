<?php get_header(); ?>
<div class="container">
	<?php get_menu(); ?>
	
	<div class="row">
		<div class="span12">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Pass</th>
					</tr>
				</thead>
				<tbod>
					<?php foreach($users as $user): ?>
					<tr>
						<td><?php echo $user->id; ?></td>
						<td><?php echo $user->user_login; ?></td>
						<td><?php echo $user->user_pass; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbod>
			</table>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>