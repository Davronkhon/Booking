<?php $__env->startSection('title'); ?>
    Добавление
<?php $__env->stopSection(); ?>
<!-- create -->
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('restaurant.update', $restaurants->id)); ?>" method="GET" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="">name : </label>
            <input type="text" name="name" class="form-control" value="<?php echo e($restaurants->name); ?>">
            <label for="">address : </label>
            <input type="text" name="address" class="form-control" value="<?php echo e($restaurants->address); ?>">
            <label for="">phone : </label>
            <input type="text" name="phone" class="form-control" value="<?php echo e($restaurants->phone); ?>">
            <label for="">email : </label>
            <input type="email" name="email" class="form-control" value="<?php echo e($restaurants->email); ?>">
            <label for="">rest_id : </label>
            <select name="rest_category_id" id="" class="form-control">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/restaurant/edit.blade.php ENDPATH**/ ?>