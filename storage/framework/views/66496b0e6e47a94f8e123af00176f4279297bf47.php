<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Admin Section</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Total Cases</th>
                    <th>New Cases</th>
                    <th>Total Deaths</th>
                    <th>New Deaths</th>
                    <th>Total Recovered</th>
                </tr>
            </thead>
            <tbody>
		    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row['country']); ?></td>
                        <td><?php echo e($row['total_cases']); ?></td>
                        <td><?php echo e($row['new_cases']); ?></td>
                        <td><?php echo e($row['total_deaths']); ?></td>
                        <td><?php echo e($row['new_deaths']); ?></td>
                        <td><?php echo e($row['total_recovered']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/country/resources/views/admin/index.blade.php ENDPATH**/ ?>