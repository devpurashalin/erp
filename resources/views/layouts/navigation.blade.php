<nav class="topnav d-print-none" style="height:8vh">
    <div class="d-flex justify-content-between">
        <div class="d-flex gap-3">
            <i class="fa fa-bars" onclick='$("#sidenav").toggle();'></i>
            <h6><a class="text-dark text-decoration-none" href="{{route('dashboard')}}">SKIT, Jaipur</a></h6>
        </div>
        @if(Auth::user()->role == 'admin')
        <div>
            <form action="users/userSearch" method="post" style="height:min-content">
                <input type="text" name="search" class="form-control" style="padding:1px; padding-left: 5px">
            </form>
        </div>
        @endif
        <div class="userlogo" id="avatar">
            <div onclick="$('#profile').toggle();">
                <img src="{{ asset('images') }}/blackimg.jpg" class="avatar" />
                <i class="fa fa-caret-down" aria-hidden="true" style="cursor: pointer; margin-top: 10px;"></i>
            </div>
            <div class="profile" id="profile">
                <div class="row1">
                    <div class="subSection">
                        <a href="information" class="text-white text-decoration-none">
                            <i class="fa fa-briefcase" aria-hidden="true"></i><br />
                            Profile
                        </a>
                    </div>
                    <div class="subSection">
                        <a href="{{route('change-password')}}" class="text-decoration-none text-white">
                            <i class="fa fa-lock" aria-hidden="true"></i><br />
                            Password
                        </a>
                    </div>
                </div>
                <div class="logout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn text-white">
                            <i class="fa fa-power-off" aria-hidden="true"></i><br>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>