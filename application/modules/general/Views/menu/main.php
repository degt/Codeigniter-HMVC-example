<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<?php echo base_url(); ?>">Finance</a>
			<ul class="nav">
				<?php foreach($items as $item): ?>
				<li<?php echo ($current == $item->url)? ' class="active"':''; ?>>
					<a href="<?php echo base_url($item->url); ?>"><?php echo $item->name; ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
			
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
				Log in
				<span class="caret"></span>
				</a>
				
					<ul class="dropdown-menu">
						<li><input type="text" name="hola" class="input-small" placeholder="User" /></li>
						<li><input type="password" name="pass" class="input-small" placeholder="Password" /></li>
						<li><input type="submit" class="btn" value="Ingresar" /></li>
					</ul>
				
			</div>
		</div>
	</div>
</div>
