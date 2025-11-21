@include('user.header')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <!-- Enhanced Header Section -->
            <div class="nk-block-head">
                <div class="nk-block-head-content text-center">
                    <div class="nk-block-head-sub mb-3">
                        <span class="badge badge-dim bg-outline-primary rounded-pill">Account Setting</span>
                    </div>
                    <h1 class="nk-block-title fw-bold text-white">My Profile</h1>
                    <div class="nk-block-des">
                        <p class="lead text-light">You have full control to manage your own account setting. 
                            <span class="text-primary">
                                <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" 
                                    title="Complete KYC verification for full platform access"></em>
                            </span>
                        </p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            
            <!-- Enhanced Tabs Navigation -->
            <div class="card card-bordered bg-dark mb-4">
                <div class="card-inner">
                    <ul class="nk-nav nav nav-tabs nav-tabs-card nav-tabs-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.profile')}}">
                                <em class="icon ni ni-user me-1"></em> Personal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.photo')}}">
                                <em class="icon ni ni-camera me-1"></em> Profile Picture
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('user.verify.account')}}">
                                <em class="icon ni ni-shield-check me-1"></em> KYC Verification
                            </a>
                        </li>
                    </ul><!-- .nk-menu -->
                </div>
            </div>

            <!-- KYC Verification Main Content -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="kyc-app">
                        <!-- KYC Header -->
                        <div class="nk-block-head nk-block-head-lg text-center mb-5">
                            <div class="nk-block-head-content">
                                <div class="user-avatar xxl bg-primary mx-auto mb-4">
                                    <em class="icon ni ni-shield-check text-white" style="font-size: 2.5rem;"></em>
                                </div>
                                <h2 class="nk-block-title fw-bold text-white">Identity Verification</h2>
                                <div class="nk-block-des">
                                    <p class="lead text-light">To comply with regulations, each participant must complete identity verification (KYC/AML) to prevent fraud.</p>
                                </div>
                            </div>
                        </div>

                        <!-- KYC Status & Alerts -->
                        <div class="mb-5">
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show">
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

                            <!-- Current KYC Status -->
                            <div class="card card-bordered bg-dark">
                                <div class="card-inner">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar sm bg-dim-primary me-3">
                                                <em class="icon ni ni-files text-primary"></em>
                                            </div>
                                            <div>
                                                <h6 class="text-white mb-1">Verification Status</h6>
                                                <span class="text-muted">
                                                    @if(Auth::user()->kyc_status === '0')
                                                    <span class="badge badge-warning">Pending Review</span>
                                                    @elseif(Auth::user()->kyc_status === '1')
                                                    <span class="badge badge-success">Verified</span>
                                                    @elseif(Auth::user()->kyc_status === '2')
                                                    <span class="badge badge-danger">Rejected</span>
                                                    @else
                                                    <span class="badge badge-secondary">Not Submitted</span>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <small class="text-muted">Last updated</small>
                                            <div class="text-white">{{ Auth::user()->updated_at->format('M d, Y') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- KYC Upload Form -->
                        <div class="card card-bordered bg-dark">
                            <div class="card-inner">
                                <div class="nk-kyc-app">
                                    <!-- Instructions -->
                                    <div class="text-center mb-5">
                                        <div class="nk-kyc-app-icon mb-4">
                                            <em class="icon ni ni-files text-primary" style="font-size: 4rem;"></em>
                                        </div>
                                        <div class="nk-kyc-app-text mx-auto" style="max-width: 600px;">
                                            <p class="lead text-light mb-4">
                                                Upload valid identity documents (Driver's license, International Passport, or any government-approved ID). 
                                                If you've already submitted your documents, please contact support if your account isn't verified within 24 hours.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Upload Forms -->
                                    <form action="{{ url('/user.upload-kyc')}}" method="POST" enctype="multipart/form-data" class="form-validate">
                                        @csrf
                                        
                                        <div class="row g-4">
                                            <!-- Front Side Upload -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered bg-dark-dim">
                                                    <div class="card-inner">
                                                        <h6 class="title text-white mb-4">
                                                            <em class="icon ni ni-camera me-2"></em>Front Side of ID
                                                        </h6>
                                                        <div class="nk-kycfm-upload">
                                                            <div class="upload-zone border-dashed rounded-lg p-4 text-center">
                                                                <div class="upload-icon mb-3">
                                                                    <em class="icon ni ni-cloud-upload text-primary" style="font-size: 2.5rem;"></em>
                                                                </div>
                                                                <div class="nk-kycfm-upload-box">
                                                                    <div class="custom-file-upload">
                                                                        <input type="file" name="card" id="frontUpload" 
                                                                               class="form-control" 
                                                                               accept=".jpg,.png,.jpeg" 
                                                                               required
                                                                               onchange="previewImage(this, 'frontPreview')">
                                                                        <label for="frontUpload" class="btn btn-outline-primary">
                                                                            <em class="icon ni ni-folder me-1"></em> Select Front Image
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-note text-muted mt-2" id="frontFileName">
                                                                        JPG, PNG up to 5MB
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- Front Preview -->
                                                                <div class="image-preview mt-3" id="frontPreviewContainer" style="display: none;">
                                                                    <div class="preview-container text-center">
                                                                        <img id="frontPreview" class="rounded preview-image mb-2" 
                                                                             style="max-width: 200px; max-height: 150px;">
                                                                        <div class="preview-actions">
                                                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearPreview('frontUpload', 'frontPreview', 'frontPreviewContainer', 'frontFileName')">
                                                                                <em class="icon ni ni-cross me-1"></em> Remove
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Back Side Upload -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered bg-dark-dim">
                                                    <div class="card-inner">
                                                        <h6 class="title text-white mb-4">
                                                            <em class="icon ni ni-camera me-2"></em>Back Side of ID
                                                        </h6>
                                                        <div class="nk-kycfm-upload">
                                                            <div class="upload-zone border-dashed rounded-lg p-4 text-center">
                                                                <div class="upload-icon mb-3">
                                                                    <em class="icon ni ni-cloud-upload text-primary" style="font-size: 2.5rem;"></em>
                                                                </div>
                                                                <div class="nk-kycfm-upload-box">
                                                                    <div class="custom-file-upload">
                                                                        <input type="file" name="pass" id="backUpload" 
                                                                               class="form-control" 
                                                                               accept=".jpg,.png,.jpeg" 
                                                                               required
                                                                               onchange="previewImage(this, 'backPreview')">
                                                                        <label for="backUpload" class="btn btn-outline-primary">
                                                                            <em class="icon ni ni-folder me-1"></em> Select Back Image
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-note text-muted mt-2" id="backFileName">
                                                                        JPG, PNG up to 5MB
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- Back Preview -->
                                                                <div class="image-preview mt-3" id="backPreviewContainer" style="display: none;">
                                                                    <div class="preview-container text-center">
                                                                        <img id="backPreview" class="rounded preview-image mb-2" 
                                                                             style="max-width: 200px; max-height: 150px;">
                                                                        <div class="preview-actions">
                                                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearPreview('backUpload', 'backPreview', 'backPreviewContainer', 'backFileName')">
                                                                                <em class="icon ni ni-cross me-1"></em> Remove
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-center mt-5 pt-4 border-top border-secondary">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                <em class="icon ni ni-upload me-1"></em> Submit KYC Documents
                                            </button>
                                            <p class="text-muted small mt-2">
                                                Your documents will be reviewed within 24-48 hours
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements & Tips -->
                        <div class="row g-4 mt-4">
                            <div class="col-md-6">
                                <div class="card card-bordered bg-dark">
                                    <div class="card-inner">
                                        <h6 class="title text-white mb-3">
                                            <em class="icon ni ni-info text-primary me-2"></em>Document Requirements
                                        </h6>
                                        <ul class="list list-checked list-checked-primary">
                                            <li class="text-light">Clear, readable images</li>
                                            <li class="text-light">All four corners visible</li>
                                            <li class="text-light">No glare or reflections</li>
                                            <li class="text-light">File size under 5MB each</li>
                                            <li class="text-light">JPG, PNG formats only</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-bordered bg-dark">
                                    <div class="card-inner">
                                        <h6 class="title text-white mb-3">
                                            <em class="icon ni ni-help text-primary me-2"></em>Need Help?
                                        </h6>
                                        <p class="text-light small mb-3">
                                            If you're having trouble with the verification process, contact our support team for assistance.
                                        </p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-outline-light">
                                                <em class="icon ni ni-help me-1"></em> Contact Support
                                            </a>
                                            <a href="#" class="btn btn-outline-primary">
                                                <em class="icon ni ni-file-text me-1"></em> View Guidelines
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
    </div>
</div>

<script>
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        const previewContainer = document.getElementById(previewId + 'Container');
        const fileName = document.getElementById(input.id.replace('Upload', 'FileName'));
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.style.display = 'block';
                fileName.textContent = input.files[0].name;
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function clearPreview(inputId, previewId, containerId, fileNameId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);
        const container = document.getElementById(containerId);
        const fileName = document.getElementById(fileNameId);
        
        input.value = '';
        container.style.display = 'none';
        fileName.textContent = 'JPG, PNG up to 5MB';
    }
    
    // File validation
    document.addEventListener('DOMContentLoaded', function() {
        const fileInputs = document.querySelectorAll('input[type="file"]');
        
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    // Check file size (5MB limit)
                    if (file.size > 5 * 1024 * 1024) {
                        alert('File size must be less than 5MB');
                        this.value = '';
                        const containerId = this.id.replace('Upload', 'PreviewContainer');
                        document.getElementById(containerId).style.display = 'none';
                        return;
                    }
                    
                    // Check file type
                    const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                    if (!validTypes.includes(file.type)) {
                        alert('Please select a valid image file (JPG, PNG only)');
                        this.value = '';
                        const containerId = this.id.replace('Upload', 'PreviewContainer');
                        document.getElementById(containerId).style.display = 'none';
                        return;
                    }
                }
            });
        });
        
        // Form submission handling
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const frontInput = document.getElementById('frontUpload');
            const backInput = document.getElementById('backUpload');
            
            if (!frontInput.files[0] || !backInput.files[0]) {
                e.preventDefault();
                alert('Please upload both front and back images of your ID');
                return;
            }
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<em class="icon ni ni-loader me-1"></em> Uploading...';
            submitBtn.disabled = true;
            
            // Re-enable after 5 seconds (in case of error)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 5000);
        });
    });
</script>

<style>
    .bg-dark {
        background-color: #1a1d29 !important;
    }
    
    .bg-dark-dim {
        background-color: #1e2231 !important;
    }
    
    .border-dashed {
        border: 2px dashed #364153 !important;
        border-radius: 12px;
        transition: border-color 0.3s ease;
    }
    
    .border-dashed:hover {
        border-color: #4a5bb5 !important;
    }
    
    .nav-tabs-dark .nav-link {
        color: #8094ae;
        border-bottom: 2px solid transparent;
    }
    
    .nav-tabs-dark .nav-link.active {
        color: #fff;
        background: transparent;
        border-bottom: 2px solid #4a5bb5;
    }
    
    .custom-file-upload {
        position: relative;
        overflow: hidden;
    }
    
    .custom-file-upload input[type="file"] {
        position: absolute;
        left: -9999px;
    }
    
    .custom-file-upload label {
        display: block;
        padding: 12px 24px;
        background: transparent;
        border: 1px solid #364153;
        border-radius: 8px;
        color: #8094ae;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .custom-file-upload label:hover {
        background: rgba(74, 91, 181, 0.1);
        border-color: #4a5bb5;
        color: #4a5bb5;
    }
    
    .preview-image {
        border: 2px solid #364153;
        border-radius: 8px;
        max-width: 100%;
    }
    
    .card-bordered {
        border: 1px solid #2a2f42;
        border-radius: 12px;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #4a5bb5 0%, #3a4a9c 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(74, 91, 181, 0.3);
    }
    
    .user-avatar.xxl {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .user-avatar.sm {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .list-checked-primary .list-checked:before {
        color: #4a5bb5;
    }
    
    /* Smooth animations */
    .card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    
    .card:hover {
        transform: translateY(-2px);
    }
</style>

@include('user.footer')