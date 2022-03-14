

<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <img src = "/img/burger_point.png" alt="burger point logo">
        <div class="title m-b-md">
            Burger Point
        </div>

        <?php $__currentLoopData = $burgers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $burger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <?php echo e($burger->name); ?> - <?php echo e($burger->type); ?> - <?php echo e($burger->patty); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\P180028\resources\views/burgers.blade.php ENDPATH**/ ?>