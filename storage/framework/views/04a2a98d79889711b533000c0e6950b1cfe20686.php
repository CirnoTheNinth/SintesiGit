<?php

?>



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php echo e($character->name); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>