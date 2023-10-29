    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="d-lg-inline-flex">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom m-0 border-0">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">My Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
