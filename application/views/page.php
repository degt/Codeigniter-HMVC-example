<?php $this->load->view('includes/header'); ?>

<div class="container">
	<?php echo modules::run("menu"); ?>
	<?php $this->load->view($main_content); ?>
</div>
<?php $this->load->view('includes/footer'); ?>