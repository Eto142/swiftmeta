@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Welcome {{ Auth::user()->name }}!</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Welcome {{ Auth::user()->name }}!</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Stats Cards -->
            <div class="row">

                <!-- TRADING BALANCE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING BALANCE</span>
                                    <h4 class="mb-3">
                                        <span>{{ Auth::user()->currency }}{{ $user_balance }}.0</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon">
                                        <i class="bi bi-wallet2 fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING CAPITAL -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING CAPITAL</span>
                                    <h4 class="mb-3">
                                        <span>{{ Auth::user()->currency }}{{ $deposit }}.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon">
                                        <i class="bi bi-piggy-bank fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING PROFIT -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING PROFIT</span>
                                    <h4 class="mb-3">
                                        <span>{{ Auth::user()->currency }}{{ $profit }}.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon">
                                        <i class="bi bi-graph-up-arrow fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOTAL WITHDRAWAL -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL WITHDRAWAL</span>
                                    <h4 class="mb-3">
                                        <span>{{ Auth::user()->currency }}{{ $withdrawal }}.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon">
                                        <i class="bi bi-cash-stack fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TOTAL FEE -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TOTAL FEE</span>
                                    <h4 class="mb-3">
                                        <span>{{ Auth::user()->currency }}{{ Auth::user()->update_trade_fee }}.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon">
                                        <i class="bi bi-receipt fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRADING PROFIT (Duplicate Box) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-h-100 sweet-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">TRADING PROFIT</span>
                                    <h4 class="mb-3">
                                        <span>{{ Auth::user()->currency }}{{ $profit }}.00</span>
                                    </h4>
                                </div>
                                <div class="flex-shrink-0 text-end dash-widget">
                                    <div class="sweet-icon">
                                        <i class="bi bi-graph-up-arrow fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Charts Section -->
            <div class="row">
                <div class="col-xl-8">
                    <!-- card -->
                    <div class="card sweet-card">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">Market Overview</h5>
                                <div class="ms-auto">
                                    <div>
                                        <button type="button" class="btn btn-soft-primary btn-sm sweet-btn">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm sweet-btn">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm sweet-btn">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm sweet-btn">
                                            1Y
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-8">
                                    <div>
                                        <div id="market-overview" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="p-4">
                                        <div class="mt-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm m-auto">
                                                    <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                        1
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="font-size-14">Mobile Phones</span>
                                                </div>
    
                                                <div class="flex-shrink-0">
                                                    <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+5.4%</span>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm m-auto">
                                                    <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                        2
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="font-size-14">Smart Watch</span>
                                                </div>
    
                                                <div class="flex-shrink-0">
                                                    <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+6.8%</span>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm m-auto">
                                                    <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                        3
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="font-size-14">Protable Acoustics</span>
                                                </div>
    
                                                <div class="flex-shrink-0">
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-4.9%</span>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm m-auto">
                                                    <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                        4
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="font-size-14">Smart Speakers</span>
                                                </div>
    
                                                <div class="flex-shrink-0">
                                                    <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+3.5%</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm m-auto">
                                                    <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                        5
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="font-size-14">Camcorders</span>
                                                </div>
    
                                                <div class="flex-shrink-0">
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-0.3%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <a href="#" class="btn btn-primary w-100 sweet-btn">See All Balances <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
    
                <div class="col-xl-4">
                    <!-- card -->
                    <div class="card sweet-card">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">Sales by Locations</h5>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-reset sweet-dropdown" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="#">USA</a>
                                            <a class="dropdown-item" href="#">Russia</a>
                                            <a class="dropdown-item" href="#">Australia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="sales-by-locations" data-colors='["--bs-success"]' style="height: 253px"></div>

                            <div class="px-2 py-2">
                                <p class="mb-1">USA <span class="float-end">75%</span></p>
                                <div class="progress mt-2 sweet-progress" style="height: 6px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                                <div class="progress mt-2 sweet-progress" style="height: 6px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                                <div class="progress mt-2 sweet-progress" style="height: 6px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

<style>
    .sweet-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        background: linear-gradient(145deg, #ffffff, #f8f9fa);
        border: 1px solid rgba(255, 255, 255, 0.8);
    }

    .sweet-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .sweet-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        transition: all 0.3s ease;
    }

    .sweet-card:hover .sweet-icon {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }

    .sweet-btn {
        border-radius: 12px;
        border: none;
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 8px 16px;
    }

    .btn-soft-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-soft-secondary {
        background: rgba(108, 117, 125, 0.1);
        color: #6c757d;
        border: 1px solid rgba(108, 117, 125, 0.2);
    }

    .btn-soft-secondary:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-1px);
    }

    .sweet-progress {
        border-radius: 10px;
        background: rgba(108, 117, 125, 0.1);
    }

    .sweet-progress .progress-bar {
        border-radius: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transition: width 0.6s ease;
    }

    .sweet-dropdown {
        padding: 8px 16px;
        border-radius: 12px;
        background: rgba(108, 117, 125, 0.1);
        border: 1px solid rgba(108, 117, 125, 0.2);
        transition: all 0.3s ease;
    }

    .sweet-dropdown:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .avatar-sm {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        font-weight: 600;
    }

    .badge {
        border-radius: 8px;
        font-weight: 500;
        padding: 6px 12px;
    }

    .bg-success-subtle {
        background: rgba(40, 167, 69, 0.15) !important;
        color: #28a745 !important;
        border: 1px solid rgba(40, 167, 69, 0.2);
    }

    .bg-danger-subtle {
        background: rgba(220, 53, 69, 0.15) !important;
        color: #dc3545 !important;
        border: 1px solid rgba(220, 53, 69, 0.2);
    }

    .card-title {
        font-weight: 600;
        color: #2c3e50;
    }

    h4 {
        font-weight: 700;
        color: #2c3e50;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-muted {
        color: #6c757d !important;
        font-weight: 500;
    }

    .dropdown-menu {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 8px;
    }

    .dropdown-item {
        border-radius: 8px;
        padding: 8px 12px;
        margin: 2px 0;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    /* Animation for cards */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .sweet-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .sweet-card:nth-child(1) { animation-delay: 0.1s; }
    .sweet-card:nth-child(2) { animation-delay: 0.2s; }
    .sweet-card:nth-child(3) { animation-delay: 0.3s; }
    .sweet-card:nth-child(4) { animation-delay: 0.4s; }
    .sweet-card:nth-child(5) { animation-delay: 0.5s; }
    .sweet-card:nth-child(6) { animation-delay: 0.6s; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effects
        const cards = document.querySelectorAll('.sweet-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Add click effects to buttons
        const buttons = document.querySelectorAll('.sweet-btn');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Progress bar animation
        const progressBars = document.querySelectorAll('.sweet-progress .progress-bar');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 500);
        });
    });
</script>

@include('user.footer')




