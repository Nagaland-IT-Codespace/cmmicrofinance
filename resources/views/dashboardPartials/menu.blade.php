<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
            <ul class="nav nav-main">
                <li>
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @if (Auth::user()->role == 'ADMIN')
                    <li>
                        <a class="nav-link" href="{{ route('schemeMaster.index') }}">
                            <i class="bx bx-file" aria-hidden="true"></i>
                            <span>Scheme Master</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('userMaster.index') }}">
                            <i class="bx bx-user" aria-hidden="true"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('deptMaster.index') }}">
                            {{-- depratment icon --}}
                            <i class="bx bx-layer" aria-hidden="true"></i>
                            <span>Department Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('districtMaster.index') }}">
                            {{-- Districts icon --}}
                            <i class='bx bxs-user-detail'></i>
                            <span>District Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('grievance.index') }}">
                            {{-- Grievance icon --}}
                            <i class='bx bx-help-circle'></i>
                            <span>Grievances</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('applicationForm.index') }}">
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
                @endif

                @if (Auth::user()->role == 'DC')
                    <li>
                        <a class="nav-link" href="{{ route('applicationForm.index') }}">
                            <i class='bx bx-notepad'></i>
                            <span>Application Forms</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('grievance.index') }}">
                            <i class='bx bx-help-circle'></i>
                            <span>Grievances</span>
                        </a>
                    </li>
                @endif

                @if(Auth::User()->role == 'BANK')
                <li>
                    <a class="nav-link" href="{{ route('bankMaster.index') }}">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Banks</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('appReceivedSanctioned.index') }}">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Applications</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('beneficiarySanction.index') }}">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Sanctions</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('subsidy.index') }}">
                        <i class='bx bx-notepad'></i>
                        <span>Manage Subsidies</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('misUtilization.index') }}">
                        <i class='bx bx-notepad'></i>
                        <span>Manage MisUtilizations</span>
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
