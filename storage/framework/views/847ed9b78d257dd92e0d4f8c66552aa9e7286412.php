<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="md-12">
            <div class="col-sm-2">Class</div>
            <div class="col-sm-5">Name</div>
            <div class="col-sm-2">Level</div>
            <div class="col-sm-3">Modify</div>
        </div>
        <?php $__currentLoopData = $characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="md-12">
                <div class="col-sm-2"><?php echo e($character->class); ?></div>
                <div class="col-sm-5"><?php echo e($character->name); ?></div>
                <div class="col-sm-2"><?php echo e($character->level); ?></div>
                <div class="col-sm-3"><a href="<?php echo e(action('CharacterController@modifyCharacters',['charid' => $character->id])); ?>">Modify</a><br></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>