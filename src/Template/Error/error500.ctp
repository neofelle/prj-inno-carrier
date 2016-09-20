<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;
use Cake\Routing\Router;

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?= Debugger::dump($error->params) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
endif;
?>
<section class="content">

  <div class="error-page">
    <h2 class="headline text-red">500</h2>

    <div class="error-content">
      <h3><i class="fa fa-warning text-red"></i> <?= h($message) ?></h3>

      <p>
        Oops! Something went wrong. We will work on fixing that right away.
        Meanwhile, you may <a href="<?= Router::url('/',true); ?>">return to homepage</a> 
      </p>

      
    </div>
  </div>
  <!-- /.error-page -->

</section>
<!-- <div id="error">    
    <div class="error-inner">
        <div class="error-head">
            <?= $this->Html->image('/images/error-icon.png') ?>            
            <h2><?= h($message) ?></h2>
            <p>Please go back to homepage.</p>
        </div>
        <div class="error-body">
            <a class="btn btn-lg btn-primary-dark" href="javascript:history.back()">GO BACK</a>
        </div>
    </div>
</div>
 -->