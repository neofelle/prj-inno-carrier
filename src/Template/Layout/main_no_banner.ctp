<?php include('header_main.ctp'); ?>
<?php include('main_nav.ctp'); ?> 
<div class="main-container">
	<?= $this->Flash->render() ?>
	<?= $this->fetch('content') ?>  
</div>
<?php include('footer_main.ctp'); ?>