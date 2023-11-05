        <!-- Sidebar Start -->
        <div class="sidebar pb-3 pe-4">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center mb-4 ms-4">
                    <div class="ms-3">
                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('cars.index') }}" class="nav-item nav-link"><i
                            class="fa fa-list-alt me-2"></i>Cars</a>
                    <a href="{{ route('carousels.index') }}" class="nav-item nav-link"><i
                            class="fa fa-th me-2"></i>Carousels</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-bars me-2"></i>About</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-file-archive me-2"></i>Contact</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
