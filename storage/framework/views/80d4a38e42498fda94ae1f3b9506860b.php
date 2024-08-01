<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('food.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="" class="form-control">Name:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1"><br>
        <label for="" class="form-control">Price:</label>
        <input type="number" name="price" step="0.1" class="form-control" id="exampleInputEmail1"><br>
        <label for="" class="form-control">Image:</label>
        <input class="form-control" type="file" name="image"><br>
        <label for="" class="form-control">Description:</label>
        <input class="form-control" type="text" name="description"><br>
        <label for="" class="form-control">Time:</label>
        <input class="form-control" type="time" name="time"><br>
        <label for="" class="form-control">Is_active:</label>
        <input type="text" class="form-control" name="is_active"><br>
        <label for="" class="form-control">Food_Category:</label>
        <select id="" class="form-control" name="food_category_id">
            <?php $__currentLoopData = $foodcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foodcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($foodcategory->id); ?>" class="form-control"><?php echo e($foodcategory->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <label for="" class="form-control">Restaurant:</label>
        <select id="" class="form-control" name="restaurant_id">
            <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($restaurant->id); ?>" class="form-control"><?php echo e($restaurant->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>~
        </select><br>
        <input type="submit" value="Добавить" class="иет btn-primary form-control">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/food/create.blade.php ENDPATH**/ ?>