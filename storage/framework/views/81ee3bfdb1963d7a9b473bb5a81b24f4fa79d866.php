<?php $__env->startSection('content'); ?>
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-info">
                        <h3>Chief Minister's Micro Finance Initiative</h3>
                        <p>
                            Office of the Agriculture Production Commissioner <br>
                            New Secretariate Complex<br>
                            Kohima, Nagaland<br><br>
                            <strong>Phone:</strong> <br>
                            <strong>Email:</strong> cmmfi@nagaland.gov.in<br>
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Create Grievance form below -->
                    <div class="card shadow-lg rounded">
                        <div class="card-header text-center">
                            <h4>Submit Grievance</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('grievance.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Enter Mobile">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="scheme">Select Scheme</label>
                                    <select class="form-control" id="scheme_id" name="scheme_id">
                                        <option value="">Select Scheme</option>
                                        <?php $__currentLoopData = $schemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($scheme->id); ?>"><?php echo e($scheme->scheme_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="department">Select Department</label>
                                    <select class="form-control" id="dept_id" name="dept_id">
                                        <option value="">Select Department</option>
                                        <?php $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="district">Select District</label>
                                    <select class="form-control" id="district_id" name="district_id">
                                        <option value="">Select District</option>
                                        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($district->id); ?>"><?php echo e($district->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>


                                <div class="form-group mb-3 text-center">
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mozhui/Personal/playground/cmmicrofinance/resources/views/pages/contact.blade.php ENDPATH**/ ?>