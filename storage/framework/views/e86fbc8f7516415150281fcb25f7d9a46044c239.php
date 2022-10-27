

<?php $__env->startSection('content'); ?>
    <h3> Saya dapat berlari hanya sampai 20 KM</h3>
  <?php for($i = 0; $i <= 20; $i++): ?>   
            <?php if($i != 20): ?>
                <h4>Anda sudah berlari selama <?php echo e($i+1); ?> km</h4>
            <?php elseif($i == 20): ?>
                <h4>Saatnya istirahat sejenak anda telah berlari selama <?php echo e($i); ?> km</h4>
            <?php endif; ?>    
        </div>
    <?php endfor; ?>
  
<?php $__env->stopSection(); ?>

 
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\gslc1\resources\views/home.blade.php ENDPATH**/ ?>