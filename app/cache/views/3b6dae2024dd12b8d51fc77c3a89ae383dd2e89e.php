
<?php $__env->startPush('head'); ?>
<style>
.site-header{
        background:linear-gradient(-145deg, rgb(50, 11, 130) 0%, rgb(156, 51, 195) 100%)!important;
    }
.block-title{
    color: #320b82;
    font-size: 46px;
    font-weight: 400;
}
.new-header{
    background:linear-gradient(-145deg, rgb(50, 11, 130) 0%, rgb(156, 51, 195) 100%);
    width:100%;
    height:53px;
}
@media (max-width:767px){
.new-header{
    background:linear-gradient(-145deg, rgb(50, 11, 130) 0%, rgb(156, 51, 195) 100%);
    width:100%;
    height:75px!important;
}
}
.p-header{
    font-weight:bold;
    font-size:16px;
}
.p-text{
    font-size:12px;
    margin-top:0;
    margin-bottom:0;
}
.list-text{
    font-size:12px;
    padding:0 15px;
}
.a-style{
    color: #320b82;
}
.a-style:hover{
    color:#777b92;
}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="page-wrapper <?php echo e(getCurrentLangIdiom() == 'ar' ? 'text-right'  : ''); ?>">
        
    <div class="container mt-5 mb-3 pt-5">
    <p class="p-header"><?php echo e(__('condit-idp1')); ?></p> 
    <p class="p-text"><?php echo e(__('condit-idp2')); ?> </p>
    <h3 class="p-header"> <?php echo e(__('condit-idh31')); ?> </h3>
    <ul class="list-text">
        <li> <?php echo e(__('condit-idli1')); ?> </li>
        <li> <?php echo e(__('condit-idli2')); ?></li>
        <li> <?php echo e(__('condit-idli3')); ?></li>
        <li> <?php echo e(__('condit-idli4')); ?> </li>
        <li> <?php echo e(__('condit-idli5')); ?></li>
        <li> <?php echo e(__('condit-idli6')); ?></li>
        <li> <?php echo e(__('condit-idli7')); ?></li>
        <li> <?php echo e(__('condit-idli8')); ?> </li>
        <li> <?php echo e(__('condit-idli9')); ?></li>
        <li> <?php echo e(__('condit-idli10')); ?></li>
        <li> <?php echo e(__('condit-idli11')); ?></li>
        <li> <?php echo e(__('condit-idli12')); ?></li>
        <li> <?php echo e(__('condit-idli13')); ?></li>
        <li> <?php echo e(__('condit-idli14')); ?></li>
        <li> <?php echo e(__('condit-idli15')); ?></li>
        <li> <?php echo e(__('condit-idli16')); ?></li>
        <li>
            <p class="p-header"><?php echo e(__('condit-idp3')); ?> </p>
            <ol>
                <li> <?php echo e(__('condit-idli20')); ?> </li>
        <li> <?php echo e(__('condit-idli21')); ?></li>
        <li> <?php echo e(__('condit-idli22')); ?></li>
        <p> <?php echo e(__('condit-idp4')); ?></p>
            </ol>
        </li>
    </ul>
	<!--/footer-->
	</div>
	    
    </div>    
  <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
     <?php echo $__env->make('sticky.layout.partials.popups', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
        
<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/terms.blade.php ENDPATH**/ ?>