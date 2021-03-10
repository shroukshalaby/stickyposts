
<?php $__env->startPush('head'); ?>
<style>

.logoParent {
    padding: 0;
    margin: 0;
    height:45vh;
    width: 100%;
    background-image:linear-gradient(120deg,#f6db00,#37bcc2,#7fb537,#ee712f,#000000,#ff7c2a,#1429a0,#d3b205,#319b2e,#044fff,#172b4d,#868585,#038501,#03420a,#6f7877,#e4b141,#0530ff,#01d8ff);
    background-size: 400% 400%;
   animation: changeBG 20s infinite;
  }
@keyframes  changeBG {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 60% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
    
.logo {
  height:100%;
  width: 100%;
 margin:0;
 background-image: radial-gradient(50% 80% at top left,#320b82 30%,#9c33c3 120%,transparent 150%);
}
    .mov {
  height:100%;
  width: 100%;
 margin:0;
 background-image: radial-gradient(24% 14% at top right,#9c33c3 100%,transparent 242%);
}
      .mov2 {
  height:100%;
  width: 100%;
 margin:0;
 background-image: radial-gradient(30% 9% at bottom left,#9c33c3 100%,transparent 230%);
}


</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-wrapper'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<section class="banner-radial ">
<div class="logoParent">
<div class="logo" >
<div class="mov">
<div class="mov2">
</div>            
</div>
</div>
</div>    
</section>
<section class="standard">
    <form>
        <div>
            <input type="text" id="search-query" placeholder="Search for domains ..." value="wiki.me">
            <button type="button">Beast Mode</button>
            <button type="submit">Search</button>
            <button type="button" class="filter-toggle">Explore more</button>
        </div>
    </form>
    <article class="domain-me unavailable">
        <div class="name">
            <h2>wiki.me</h2>
            <span class="label taken">
                Registered in 2008
                <span class="content-loading">
                    <b></b><b></b><b></b>
                </span>
            </span>
        </div>
        <div class="price">
        </div>
        <button type="button" class="offer">Make offer</button>
    </article>
    <div class="collapse-css-transition --is-collapsed" style="height: 0px; visibility: hidden;">
    </div>
</section>
  
                           

                          
                      


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
        
<?php echo $__env->make('sticky.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/pages/teaser.blade.php ENDPATH**/ ?>