<?php $__env->startSection('content'); ?>

    <div class="account-popup">
        <div class="row">

            <!-- Login sec -->
            <div class="col-md-12">
                <div class="account-user">

                    <!-- LOGO -->
                    <div class="logo">
                        <a href="/" title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>elinonga</span>
                            <strong>RENT PROPERTIES</strong>
                        </a>
                    </div>

                    <?php if(session('status')): ?>
                        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <h4>Login Form</h4>

                        <div class="field">
                            <input type="text" name="email" placeholder="Your Email" />

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="field">
                            <input type="password" name="password" placeholder="Type Password" />

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="field mb-4">
                            <input type="checkbox" name="remember" id="remember" class="mr-2">
                            <label for="remember">Remember me</label>
                        </div>

                        <div class="field">
                            <input type="submit" value="LOGIN" class="flat-btn" />
                        </div>

                    </form>

                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\posty\posty\resources\views/auth/login.blade.php ENDPATH**/ ?>