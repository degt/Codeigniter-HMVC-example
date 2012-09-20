<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<?php echo base_url(); ?>">Demo</a>
			<ul class="nav">
				<?php foreach($items as $item): ?>
				<li<?php echo ($current == $item->url)? ' class="active"':''; ?>>
					<a href="<?php echo base_url($item->url); ?>"><?php echo $item->name; ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
			
			<div class="pull-right">
				<?php if(is_logged_in()): ?>
				<ul class="nav">
					<li><a href="#">Logged as <?php echo @$user_nicename; ?></a></li>
					<li><a href="<?php echo base_url('users/account'); ?>">My profile</a></li>
					<li><a href="<?php echo base_url('users/logout'); ?>">Logout</a></li>
				</ul>
				<?php else: ?>
				<ul class="nav">
					<li class="divider-vertical"></li>
					<li><a href="<?php echo base_url('signup'); ?>">Sign up</a></li>
					<li class="divider-vertical"></li>
					<li><a href="<?php echo base_url('signin'); ?>">Sign in</a></li>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
