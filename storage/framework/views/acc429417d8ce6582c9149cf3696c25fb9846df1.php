<nav class="side-nav">
  <a href="<?php echo e(url('/')); ?>" class="intro-x flex items-center pl-5 pt-4">
      <img alt="Cara Tailwind HTML Admin Template" class="w-8" src="<?php echo e(asset('assets/images/cara-01.png')); ?>">
      <span class="hidden xl:block text-white text-lg ml-3"> Cara <span class="font-medium">Recruitment</span>
      </span>
  </a>
  <div class="side-nav__devider my-6"></div>

    <?php $__currentLoopData = App\Models\Menu::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if( ! $menuItem->submenu->isEmpty() ): ?>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <?php echo e($menuItem->menu_name); ?>

        </a>
    <?php else: ?>
        <li>
        <a href="<?php echo e($menuItem->url); ?>"><?php echo e($menuItem->menu_name); ?></a>
    <?php endif; ?>

    <?php if( ! $menuItem->submenu->isEmpty()): ?>
        <ul class="dropdown-menu" role="menu">
            <?php $__currentLoopData = $menuItem->submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e($subMenuItem->link); ?>"><?php echo e($subMenuItem->submenu_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  
</nav>
<script>
  $(document).ready(function () {
      var active = document.getElementById(<?php echo e($current_menu); ?>);
      active.classList.add("side-menu--active");
  });
</script><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/layout/sidenav.blade.php ENDPATH**/ ?>