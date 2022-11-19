<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"></i>Administrator</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Sukhazah</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('datatraining') }}" class="nav-item nav-link"><i
                    class=" fa fa-solid fa-cloud me-2"></i>Data
                Training</a>
            <a href="{{ route('datatesting') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Data
                Testing</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
