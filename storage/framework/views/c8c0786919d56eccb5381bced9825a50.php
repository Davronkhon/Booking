<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('food.update',$food)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <label for="exampleInputEmail1">Name:</label>
        <input type="text" name="name" value="<?php echo e($food->name); ?>" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Price:</label>
        <input type="text" name="price" value="<?php echo e($food->price); ?>" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Image:</label>
        <input class="form-control" value="<?php echo e($food->image); ?>" type="file" name="image">
        <label for="exampleInputEmail1">Description:</label>
        <input class="form-control" value="<?php echo e($food->description); ?>" type="text" name="description">
        <label for="exampleInputEmail1">Time:</label>
        <input class="form-control" value="<?php echo e($food->time); ?>" type="datetime-local" name="time">
        <label for="exampleInputEmail1">Is_active:</label>
        <input class="form-control" value="<?php echo e($food->is_active); ?>" type="text" name="is_active">
        <label for="exampleInputEmail1">Food_category:</label>
        <select id="exampleInputEmail1" class="form-control" name="food_category_id">
            <?php $__currentLoopData = $foodcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foodcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($foodcategory->id); ?>"><?php echo e($foodcategory->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label for="exampleInputEmail1">Restaurant:</label>
        <select id="exampleInputEmail1" class="form-control" name="restaurant_id">
            <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($restaurant->id); ?>"><?php echo e($restaurant->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <input type="submit" value="Изменить" class="btn btn-primary form-control">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/food/edit.blade.php ENDPATH**/ ?>