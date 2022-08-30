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
                    <div class="card shadow">
                        <div class="card-header">
                            <h4>Create Grievance</h4>
                        </div>
                        <div class="card-body">
                            <form  method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="grievance_type">Grievance Type</label>
                                    <select name="grievance_type" id="grievance_type" class="form-control">
                                        <option value="">Select Grievance Type</option>
                                        <option value="1">Complaint</option>
                                        <option value="2">Suggestion</option>
                                        <option value="3">Query</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="grievance_description">Grievance Description</label>
                                    <textarea name="grievance_description" id="grievance_description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mozhui/Personal/playground/cmmicrofinance/resources/views/pages/contact.blade.php ENDPATH**/ ?>