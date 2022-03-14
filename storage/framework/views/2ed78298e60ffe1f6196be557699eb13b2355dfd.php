

<?php $__env->startSection('content'); ?>
<div class="wrapper burger-details">
    <h1>Order for <?php echo e($burger->name); ?></h1>
    <p class="type">Type - <?php echo e($burger->type); ?></p>
    <p class="type">Patty - <?php echo e($burger->patty); ?></p>
    <form action="/burgers/<?php echo e($burger->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button>Complete Order</button>
    </form>
</div>

<a href="/burgers" class="back">< - Back to all Burgers</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\P180028\resources\views/burgers/show.blade.php ENDPATH**/ ?>