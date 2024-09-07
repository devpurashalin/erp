<div id="sidenav" class="sidenav d-print-none col-6 col-md-2" style="min-height: 92vh;">
    <a href="{{route('dashboard')}}"><i class="fa-solid fa-table-columns"></i> Dashboard</a>
    @if (Auth::user()->role == 'admin')
    <a href="{{route('users.create')}}"><i class="fa-solid fa-user"></i> User Registration</a>
    <a href="bulkUpload"><i class="fa-solid fa-upload"></i> Bulk Upload</a>
    <a href="./input/add"><i class="fa-solid fa-add"></i> Add Options</a>
    @endif
    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'SubAdmin')
    <button class="dropdown-btn"><i class="fa-solid fa-user-tie"></i> User
        <i class="fa fa-angle-left pull-right"></i>
    </button>
    <div class="dropdown-container">
        <li><a href="User"></i><span><i class="fa-solid fa-user"></i> All Users</span></a></li>
        <li><a href="users/UserAdmin"></i><span><i class="fa-solid fa-user"></i> Admin Users</span></a></li>
        <li><a href="users/UserFaculty"></i><span><i class="fa-solid fa-user"></i> Faculty Users</span></a></li>
        <li><a href="users/UserTechnical"></i><span><i class="fa-solid fa-user"></i> Technical Users</span></a></li>
    </div>
    @endif
    <button class="dropdown-btn"><i class="fa-solid fa-users"></i> Technical Staff
        <i class="fa fa-angle-left pull-right"></i>
    </button>
    <div class="dropdown-container">
        <li><a href="technical/1-Personal-Details"></i><span><i class="fa-solid fa-file-invoice"></i> Personal
                    Details</span></a></li>
        <li><a href="technical/2-Family-Information"></i><span><i class="fa-solid fa-people-roof"></i> Family
                    Information</span></a></li>
        <li><a href="technical/3-Bank-Account-Details"><span><i class="fa-solid fa-building-columns"></i> Bank Account
                    Information</span></a></li>
        <li><a href="technical/4-Academic-Qualifications"><span><i class="fa-solid fa-graduation-cap"></i> Academic
                    Qualification</span></a></li>
        <li><a href="technical/5-Experience-(before-joining)"><span><i class="fa-solid fa-briefcase"></i>
                    Experience(before joining)</span></a></li>
        <li><a href="technical/6-Appointment-&-Relieving-Details"></i> <span><i class="fa-solid fa-envelopes-bulk"></i>
                    Appointment Details</span></a></li>
        <li><a href="technical/7-Promotion-Details"></i> <span><i class="fa-solid fa-award"></i> Promotion
                    Details</span></a></li>
        <li><a href="technical/8-Awards-&-Recognitions"><span><i class="fa-solid fa-trophy"></i> Award &
                    Recognition</span></a></li>
        <li><a href="technical/9-Computer-Courses-Competed"><span><i class="fa-solid fa-laptop"></i> Courses
                    Completed</span></a></li>
        <li><a href="technical/10-Any-Other-Information"><span><i class="fa-solid fa-person"></i> Any Other
                    Information</span></a></li>
        <li><a href="technical/11-Professional-References"></i><span><i class="fa-solid fa-cannabis"></i>
                    References</span></a></li>
        <li><a href="technical/12-Role-and-Leave-Details"><span><i class="fa-regular fa-file"></i> Role and Leave
                    Details</span></a></li>
        <li><a href="technical/documents"><span><i class="fa-regular fa-file"></i> Academic Document</span></a></li>
    </div>
    @if (Auth::user()->user_type == 'admin')
    <a href="./report"><i class="fa-solid fa-folder-open"></i> Report</a>
    @endif
</div>
<script src="{{ asset('assets') }}/js/jsmenu.js">
    document.addEventListener('DOMContentLoaded', function() {
        document.sidenav.style.overflow = 'auto';
    });
</script>