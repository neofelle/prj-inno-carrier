<?php include('header_main.ctp'); ?>
<?php include('main_nav.ctp'); ?> 
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>  
<?php include('footer_main.ctp'); ?>