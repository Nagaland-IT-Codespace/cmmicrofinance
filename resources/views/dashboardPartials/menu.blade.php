
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
          <a class="nav-link" href="{{route('userMaster.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>User Management</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="{{route('deptMaster.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Department Management</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="{{route('districtMaster.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>District Management</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="{{route('grievance.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Grievances</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="{{route('applicationForm.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Application Forms</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->role == "DC")
        <li>
          <a class="nav-link" href="{{route('applicationForm.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Application Forms</span>
          </a>
        </li>
        <li>
          <a class="nav-link" href="{{route('grievance.index')}}">
            <i class='bx bx-list-plus'></i>
            <span>Grievances</span>
          </a>
        </li>
        @endif
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
