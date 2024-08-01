<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('client.update',$clients)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <label for="">Name:</label>
        <input type="text" name="name" value="<?php echo e($clients->name); ?>" class="form-control" id="exampleInputEmail1">
        <label for="">Surname:</label>
        <input type="text" name="surname" value="<?php echo e($clients->surname); ?>" class="form-control" id="exampleInputEmail1">
        <label for="">Phone:</label>
        <input class="form-control" value="<?php echo e($clients->phone); ?>" type="text" name="phone">
        <label for="">User:</label>
        <select id="" class="form-control" name="user_id">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label for="">Restaurant:</label>
        <select id="" class="form-control" name="restaurant_id">
            <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($restaurant->id); ?>"><?php echo e($restaurant->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <input type="submit" value="Изменить" class="btn btn-primary form-controlr">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/client/edit.blade.php ENDPATH**/ ?>