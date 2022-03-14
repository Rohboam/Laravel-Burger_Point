

<?php $__env->startSection('content'); ?>
<div class="wrapper create-burger">
    <h1>Create a New Burger</h1>
    <form action="/burgers" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Burger Type</label>
        <select name="type" id="type">
            <option value="Zinger">Zinger</option>
            <option value="Beef">Beef</option>
            <option value="Chicken">Chicken</option>
        </select>
        
        <label for="patty">Choose Patty Type</label>
        <select name="patty" id="patty">
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
        </select>
        <input type="submit" value="Order Burger">
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\P180028\resources\views/burgers/create.blade.php ENDPATH**/ ?>