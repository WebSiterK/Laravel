<!-- resources/views/planet.blade.php -->
 
<h1></h1>

<p>Details about :</p>

<?php $__currentLoopData = $planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Name: <?php echo e($planet->name); ?></li>
    <li>Description: <?php echo e($planet->description); ?></li>
    <li>Size: <?php echo e($planet->size_in_km); ?> km</li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Khale\Desktop\laravel\example-app\resources\views/planets.blade.php ENDPATH**/ ?>