@include('user.header')

<!-- main header @e -->
<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <!-- Header Section -->
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub mb-3">
                        <a href="{{route('user.profile')}}" class="back-link">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Account Settings</span>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="nk-block-title fw-bold text-white">Profile Management</h1>
                            <p class="text-light opacity-75 mb-0">Manage your personal information and account settings</p>
                        </div>
                        <div class="d-none d-md-block">
                            <span class="badge bg-primary badge-dim">
                                <em class="icon ni ni-ai"></em>
                                AI Enhanced
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="row g-4">
                <!-- Left Sidebar - Quick Actions -->
                <div class="col-lg-3">
                    <!-- Profile Summary Card -->
                    <div class="card card-bordered bg-dark mb-4">
                        <div class="card-inner">
                            <div class="text-center">
                                <div class="user-avatar xxl bg-primary mb-3 mx-auto">
                                    <img src="{{ Auth::user()->photo ? asset('user/uploads/id/'.Auth::user()->photo) : asset('default-avatar.png') }}" 
                                         alt="{{ Auth::user()->name }}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                <h5 class="text-white mb-1">{{ Auth::user()->name }} {{ Auth::user()->lname }}</h5>
                                <p class="text-muted small mb-3">{{ Auth::user()->email }}</p>
                                
                                <!-- Status Badge -->
                                @if(Auth::user()->kyc_status==='0')
                                <span class="badge badge-warning badge-dim mb-3">
                                    <em class="icon ni ni-alert me-1"></em>Unverified
                                </span>
                                @elseif(Auth::user()->kyc_status==='1')
                                <span class="badge badge-success badge-dim mb-3">
                                    <em class="icon ni ni-check me-1"></em>Verified
                                </span>
                                @elseif(Auth::user()->kyc_status==='2')
                                <span class="badge badge-danger badge-dim mb-3">
                                    <em class="icon ni ni-cross me-1"></em>Verification Failed
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Card -->
                    <div class="card card-bordered bg-dark">
                        <div class="card-inner">
                            <h6 class="title text-white mb-3">Quick Navigation</h6>
                            <div class="nav flex-column nav-tabs-vertical">
                                <a class="nav-link active" href="{{route('user.profile')}}">
                                    <em class="icon ni ni-user me-2"></em>
                                    Personal Info
                                </a>
                                <a class="nav-link" href="{{route('user.photo')}}">
                                    <em class="icon ni ni-camera me-2"></em>
                                    Profile Photo
                                </a>
                                <a class="nav-link" href="{{route('user.verify.account')}}">
                                    <em class="icon ni ni-shield-check me-2"></em>
                                    KYC Verification
                                </a>
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#pass1">
                                    <em class="icon ni ni-lock-alt me-2"></em>
                                    Change Password
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- AI Assistant Card -->
                    <div class="card card-bordered bg-gradient-primary mt-4">
                        <div class="card-inner">
                            <div class="d-flex align-items-center mb-3">
                                <div class="user-avatar sm bg-white text-primary me-2 rounded">
                                    <em class="icon ni ni-spark"></em>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-white">AI Assistant</h6>
                                    <span class="small text-white opacity-75">Profile Optimization</span>
                                </div>
                            </div>
                            <p class="text-white opacity-90 small mb-3">Complete your profile to unlock all platform features and enhance your experience.</p>
                            <div class="bg-dark bg-opacity-25 rounded p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-white small">Completion</span>
                                    <span class="text-white small fw-bold" id="profile-completion">75%</span>
                                </div>
                                <div class="progress progress-xs bg-dark bg-opacity-50">
                                    <div class="progress-bar bg-success" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-9">
                    <!-- Alerts Section -->
                    <div class="mb-4">
                        @if(Auth::user()->kyc_status==='0')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <div class="d-flex">
                                <em class="icon ni ni-alert-circle me-2"></em>
                                <div>
                                    <strong>Verification Required</strong>
                                    <p class="mb-0">Complete KYC verification to access all platform features.</p>
                                </div>
                            </div>
                            <a href="{{route('user.verify.account')}}" class="btn btn-sm btn-warning ms-3">Verify Now</a>
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>
                        @elseif(Auth::user()->kyc_status==='1')
                        <div class="alert alert-success alert-dismissible fade show">
                            <div class="d-flex align-items-center">
                                <em class="icon ni ni-check-circle me-2"></em>
                                <div>
                                    <strong>Account Verified</strong>
                                    <p class="mb-0">Your account has been successfully verified.</p>
                                </div>
                            </div>
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>
                        @elseif(Auth::user()->kyc_status==='2')
                        <div class="alert alert-danger alert-dismissible fade show">
                            <div class="d-flex">
                                <em class="icon ni ni-cross-circle me-2"></em>
                                <div>
                                    <strong>Verification Failed</strong>
                                    <p class="mb-0">Please update your information and try again.</p>
                                </div>
                            </div>
                            <a href="{{route('user.verify.account')}}" class="btn btn-sm btn-danger ms-3">Retry</a>
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <em class="icon ni ni-check-circle me-2"></em>
                            {{ session('status') }}
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        @if($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <em class="icon ni ni-check-circle me-2"></em>
                            {{ $message }}
                            <button class="close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif
                    </div>

                    <!-- Personal Information Card -->
                    <div class="card card-bordered bg-dark">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title text-white">
                                    <em class="icon ni ni-user-circle me-2"></em>
                                    Personal Information
                                </h5>
                                <p class="card-text text-light opacity-75">Update your basic personal details and contact information</p>
                            </div>

                            <form action="{{route('user.profile.update')}}" method="POST" class="form-validate" id="profile-form">
                                @csrf
                                
                                <!-- Name Section -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-white" for="name">First Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" id="name" name="name" value="{{Auth::user()->name}}" 
                                                       class="form-control bg-dark border-secondary text-white" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-white" for="lname">Last Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" id="lname" name="lname" value="{{Auth::user()->lname}}" 
                                                       class="form-control bg-dark border-secondary text-white" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Information -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-white" for="email">Email Address</label>
                                            <div class="form-control-wrap">
                                                <div class="input-group">
                                                    <input type="email" id="email" name="email" value="{{Auth::user()->email}}" 
                                                           class="form-control bg-dark border-secondary text-white" readonly>
                                                    <span class="input-group-text bg-dark border-secondary text-muted">
                                                        <em class="icon ni ni-lock-alt"></em>
                                                    </span>
                                                </div>
                                                <div class="form-note text-muted">Email cannot be changed</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-white" for="phone">Phone Number</label>
                                            <div class="form-control-wrap">
                                                <input type="tel" id="phone" name="phone" value="{{Auth::user()->phone}}" 
                                                       class="form-control bg-dark border-secondary text-white"
                                                       placeholder="Enter phone number">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Information -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-white" for="dob">Date of Birth</label>
                                            <div class="form-control-wrap">
                                                <div class="input-group">
                                                    <input type="text" id="dob" name="dob" value="{{Auth::user()->dob}}" 
                                                           class="form-control bg-dark border-secondary text-white date-picker-alt"
                                                           placeholder="Select date">
                                                    <span class="input-group-text bg-dark border-secondary text-muted">
                                                        <em class="icon ni ni-calendar"></em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-white" for="address">Address</label>
                                            <div class="form-control-wrap">
                                                <input type="text" id="address" name="address" value="{{Auth::user()->address}}" 
                                                       class="form-control bg-dark border-secondary text-white"
                                                       placeholder="Enter your address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="border-top border-secondary pt-4 mt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-white mb-1">Save Your Changes</h6>
                                            <p class="text-muted small mb-0">Review your information before saving</p>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-outline-light" id="reset-form">
                                                <em class="icon ni ni-reload me-1"></em> Reset
                                            </button>
                                            <button type="submit" name="upload" class="btn btn-primary">
                                                <em class="icon ni ni-save me-1"></em> Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Security & Preferences Section -->
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="card card-bordered bg-dark h-100">
                                <div class="card-inner">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="user-avatar sm bg-primary me-3">
                                            <em class="icon ni ni-shield-security"></em>
                                        </div>
                                        <div>
                                            <h6 class="text-white mb-0">Security</h6>
                                            <span class="text-muted small">Protect your account</span>
                                        </div>
                                    </div>
                                    <p class="text-light opacity-75 small mb-3">Keep your account secure with regular password updates and security checks.</p>
                                    <button data-bs-toggle="modal" data-bs-target="#pass1" class="btn btn-outline-light w-100">
                                        <em class="icon ni ni-lock-alt me-1"></em> Change Password
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-bordered bg-dark h-100">
                                <div class="card-inner">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="user-avatar sm bg-warning me-3">
                                            <em class="icon ni ni-shield-check"></em>
                                        </div>
                                        <div>
                                            <h6 class="text-white mb-0">Verification</h6>
                                            <span class="text-muted small">KYC Status</span>
                                        </div>
                                    </div>
                                    <p class="text-light opacity-75 small mb-3">Complete verification to access all platform features and higher limits.</p>
                                    <a href="{{route('user.verify.account')}}" class="btn btn-outline-light w-100">
                                        <em class="icon ni ni-verify me-1"></em> Verify Account
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Password Change Modal -->
<div class="modal fade" tabindex="-1" id="pass1">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white">
                    <em class="icon ni ni-lock-alt me-2"></em>Change Password
                </h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross text-light"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate">
                    <div class="form-group">
                        <label class="form-label text-white" for="current-password">Current Password</label>
                        <div class="form-control-wrap">
                            <input type="password" class="form-control bg-dark border-secondary text-white" 
                                   id="current-password" placeholder="Enter current password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-white" for="new-password">New Password</label>
                        <div class="form-control-wrap">
                            <input type="password" class="form-control bg-dark border-secondary text-white" 
                                   id="new-password" placeholder="Enter new password">
                        </div>
                        <div class="form-note text-muted">
                            <small>Use 8+ characters with uppercase, lowercase, number and symbol.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-white" for="confirm-password">Confirm Password</label>
                        <div class="form-control-wrap">
                            <input type="password" class="form-control bg-dark border-secondary text-white" 
                                   id="confirm-password" placeholder="Confirm new password">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary w-100">
                            <em class="icon ni ni-check-thick me-1"></em> Update Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form reset functionality
        document.getElementById('reset-form').addEventListener('click', function() {
            if(confirm('Reset all changes?')) {
                document.getElementById('profile-form').reset();
            }
        });

        // Calculate profile completion
        function updateProfileCompletion() {
            const fields = ['name', 'lname', 'phone', 'dob', 'address'];
            let filled = 0;
            
            fields.forEach(field => {
                const element = document.getElementById(field);
                if (element && element.value.trim() !== '') {
                    filled++;
                }
            });
            
            const percentage = Math.round((filled / fields.length) * 100);
            const completionElement = document.getElementById('profile-completion');
            const progressBar = document.querySelector('.progress-bar');
            
            if (completionElement) completionElement.textContent = percentage + '%';
            if (progressBar) progressBar.style.width = percentage + '%';
        }

        // Initial calculation
        updateProfileCompletion();

        // Update on input changes
        document.querySelectorAll('#profile-form input').forEach(input => {
            input.addEventListener('input', updateProfileCompletion);
        });

        // Form submission handling
        const profileForm = document.getElementById('profile-form');
        if (profileForm) {
            profileForm.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<em class="icon ni ni-loader me-1"></em> Saving...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            });
        }
    });
</script>

<style>
    .bg-dark {
        background-color: #1a1d29 !important;
    }
    
    .border-secondary {
        border-color: #2a2f42 !important;
    }
    
    .card-bordered {
        border: 1px solid #2a2f42;
    }
    
    .nav-tabs-vertical .nav-link {
        color: #8094ae;
        padding: 12px 16px;
        border: none;
        border-left: 3px solid transparent;
        margin-bottom: 4px;
        border-radius: 0;
    }
    
    .nav-tabs-vertical .nav-link.active {
        color: #4a5bb5;
        background: rgba(74, 91, 181, 0.1);
        border-left-color: #4a5bb5;
    }
    
    .nav-tabs-vertical .nav-link:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.05);
    }
    
    .form-control.bg-dark:focus {
        background-color: #1a1d29;
        border-color: #4a5bb5;
        color: #fff;
        box-shadow: 0 0 0 2px rgba(74, 91, 181, 0.2);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #4a5bb5 0%, #3a4a9c 100%) !important;
    }
    
    .user-avatar.sm {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .user-avatar.xxl {
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .back-link {
        color: #8094ae;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: color 0.3s ease;
    }
    
    .back-link:hover {
        color: #4a5bb5;
    }
    
    .alert {
        border: 1px solid;
        border-left: 4px solid;
    }
    
    .alert-warning {
        border-color: #ffa500;
        border-left-color: #ffa500;
        background: rgba(255, 165, 0, 0.1);
    }
    
    .alert-success {
        border-color: #00a65a;
        border-left-color: #00a65a;
        background: rgba(0, 166, 90, 0.1);
    }
    
    .alert-danger {
        border-color: #f1416c;
        border-left-color: #f1416c;
        background: rgba(241, 65, 108, 0.1);
    }
</style>

@include('user.footer')