<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
            <ul class="nav nav-main">
                <li>
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php if(Auth::user()->role == 'ADMIN'): ?>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('schemeMaster.index')); ?>">
                            <i class="bx bx-file" aria-hidden="true"></i>
                            <span>Scheme Master</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('userMaster.index')); ?>">
                            <i class="bx bx-user" aria-hidden="true"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('deptMaster.index')); ?>">
                            
                            <i class="bx bx-layer" aria-hidden="true"></i>
                            <span>Department Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('districtMaster.index')); ?>">
                            
                            <i class='bx bxs-user-detail'></i>
                            <span>District Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('grievance.index')); ?>">
                            
                            <i class='bx bx-help-circle'></i>
                            <span>Grievances</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('applicationForm.index')); ?>">
                            <i class='bx bx-notepad'></i>
                            <span>Application Forms</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class='bx bxs-report'></i>
                            <span>Reports</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Auth::user()->role == 'DC'): ?>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('applicationForm.index')); ?>">
                            <i class='bx bx-notepad'></i>
                            <span>Application Forms</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('grievance.index')); ?>">
                            <i class='bx bx-help-circle'></i>
                            <span>Grievances</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Auth::User()->role == 'BANK'): ?>
                <li>
                    <a class="nav-link" href="<?php echo e(route('bankMaster.index')); ?>">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Banks</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo e(route('bankAppList')); ?>">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Applications</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo e(route('disbursement.index')); ?>">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Disbursements</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo e(route('subsidy.index')); ?>">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Subsidies</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo e(route('misUtilization.index')); ?>">
                        <i class='bx bx-notepad'></i>
                        <span>Manage MisUtilizations</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(Auth::User()->role == 'DEPT'): ?>
                <li>
                    <a class="nav-link" href="<?php echo e(route('grievance.index')); ?>">
                        
                        <i class='bx bx-help-circle'></i>
                        <span>Grievances</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>





    </div>

    <script>
        // Maintain Scroll Position
        if (typeof localStorage !== 'undefined') {
            if (localStorage.getItem('sidebar-left-position') !== null) {
                var initialPosition = localStorage.getItem('sidebar-left-position'),
                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                sidebarLeft.scrollTop = initialPosition;
            }
        }
    </script>

</div>
<?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/dashboardPartials/menu.blade.php ENDPATH**/ ?>