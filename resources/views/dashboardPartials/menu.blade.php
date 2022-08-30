
<div class="nano">
  <div class="nano-content">
    <nav id="menu" class="nav-main" role="navigation">
      <ul class="nav nav-main">
        <li>
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="bx bx-home-alt" aria-hidden="true"></i>
            <span>Dashboard</span>
          </a>
        </li>
        @if(Auth::user()->role == 'ADMIN')
        <li>
          <a class="nav-link" href="{{route('schemeMaster.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Scheme Master</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="{{route('schemeMaster.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Institution Master</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->role == "Helpdesk")
        @include('dashboardPartials.helpdeskMenu')
        @elseif(Auth::user()->role == "Applicant")
        <li>
          <a class="nav-link" href="#">
            @if(isset($mailCount) && $mailCount !== 0)
            <span class="float-right badge badge-primary">{{$mailCount}}</span>
            @endif
            <i class="bx bx-envelope" aria-hidden="true"></i>
            <span>Mailbox</span>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    @if(Auth::user()->role == "Applicant")
    <hr class="separator" />
    <div class="sidebar-widget widget-task">
      <div class="widget-header">
        <h6 style="color:#abb4be"> HELPDESK</h6>
      </div>
      <div class="widget-content">
        <span style="color:#f2f2f2"><i class="fas fa-headset"></i> 8929307387</span>
      </div>
    </div>
    @endif

    @if(Auth::user()->role == "Admin")
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
    @endif

    @if(Auth::user()->role == "Helpdesk")
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
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="{{ $howtoapply}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $howtoapply }}%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Login & Registration</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="{{ $loginReg}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$loginReg }}%;">
                <span class="sr-only">{{ $loginReg }}% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Aadhaar & Banking</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: {{ $aadhaarIssue }}%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Technical Issues</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: {{ $techIssue }}%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
          <li>
            <span class="stats-title">Other Issues</span>
            <span class="stats-complete">#%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: {{ $otherIssue }}%;">
                <span class="sr-only">#% Complete</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    @endif
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
