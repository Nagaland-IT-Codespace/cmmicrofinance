
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
            <i class='bx bx-list-plus'></i>
            <span>Scheme Master</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="<?php echo e(route('userMaster.index')); ?>">
            <i class='bx bx-list-plus'></i>
            <span>User Management</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="<?php echo e(route('deptMaster.index')); ?>">
            <i class='bx bx-list-plus'></i>
            <span>Department Management</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="<?php echo e(route('districtMaster.index')); ?>">
            <i class='bx bx-list-plus'></i>
            <span>District Management</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="<?php echo e(route('grievance.index')); ?>">
            <i class='bx bx-list-plus'></i>
            <span>Grievances</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if(Auth::user()->role == "Helpdesk"): ?>
        <?php echo $__env->make('dashboardPartials.helpdeskMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif(Auth::user()->role == "Applicant"): ?>
        <li>
          <a class="nav-link" href="#">
            <?php if(isset($mailCount) && $mailCount !== 0): ?>
            <span class="float-right badge badge-primary"><?php echo e($mailCount); ?></span>
            <?php endif; ?>
            <i class="bx bx-envelope" aria-hidden="true"></i>
            <span>Mailbox</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <?php if(Auth::user()->role == "Applicant"): ?>
    <hr class="separator" />
    <div class="sidebar-widget widget-task">
      <div class="widget-header">
        <h6 style="color:#abb4be"> HELPDESK</h6>
      </div>
      <div class="widget-content">
        <span style="color:#f2f2f2"><i class="fas fa-headset"></i> 8929307387</span>
      </div>
    </div>
    <?php endif; ?>

    <?php if(Auth::user()->role == "Admin"): ?>
    <hr class="separator" />
    <div class="sidebar-widget widget-task">
      <div class="widget-header">
        <h6 style="color:#abb4be"> Reports</h6>
      </div>
      <div class="widget-content">
        <span> <a href="#" style="color:#f2f2f2">Approved Applications</a></span><br><br>
        <span> <a href="#" style="color:#f2f2f2">Rejected Applications</a></span>
      </div>
    </div>
    <?php endif; ?>

    <?php if(Auth::user()->role == "Helpdesk"): ?>
    <hr class="separator" />

    <div class="sidebar-widget widget-stats">
      <div class="widget-header">
        <h6>Query Stats</h6>
        <div class="widget-toggle">+</div>
      </div>
      <div class="widget-content">
        <ul>
          <li>
            <span class="stats-title">How to apply</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="<?php echo e($howtoapply); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($howtoapply); ?>%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Login & Registration</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="<?php echo e($loginReg); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($loginReg); ?>%;">
                <span class="sr-only"><?php echo e($loginReg); ?>% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Aadhaar & Banking</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($aadhaarIssue); ?>%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Technical Issues</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($techIssue); ?>%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Other Issues</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($otherIssue); ?>%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\cmmicrofinance\resources\views/dashboardPartials/menu.blade.php ENDPATH**/ ?>