@include('user.header')

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content text-center">
                    <div class="nk-block-head-sub mb-3">
                        <span class="badge badge-dim bg-outline-primary rounded-pill">Account Setting</span>
                    </div>
                    <h1 class="nk-block-title fw-bold text-white">My Profile</h1>
                    <div class="nk-block-des">
                        <p class="lead text-light">You have full control to manage your own account setting. 
                            <span class="text-primary">
                                <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" title="Upload a clear profile picture for better recognition"></em>
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
                            <a class="nav-link active" href="{{route('user.photo')}}">
                                <em class="icon ni ni-camera me-1"></em> Profile Picture
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.verify.account')}}">
                                <em class="icon ni ni-shield-check me-1"></em> KYC Verification
                            </a>
                        </li>
                    </ul><!-- .nk-menu -->
                </div>
            </div>

            <!-- NK-Block @s -->
            <div class="nk-block">
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
                    <p class="mb-0">{{$message}}</p>
                    <button class="close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card card-bordered bg-dark">
                            <div class="card-inner">
                                <div class="card-head text-center mb-4">
                                    <h4 class="card-title text-white">
                                        <em class="icon ni ni-camera me-2"></em>Profile Picture
                                    </h4>
                                    <p class="card-text text-light">Upload a clear photo of yourself for better recognition</p>
                                </div>

                                <form action="{{route('user.upload.picture')}}" method="POST" enctype="multipart/form-data" class="form-validate">
                                    {{ csrf_field() }}
                                    
                                    <div class="row align-items-center">
                                        <!-- Current Profile Picture -->
                                        <div class="col-md-5 text-center mb-4 mb-md-0">
                                            <div class="profile-picture-preview">
                                                <div class="user-avatar xxl bg-primary mb-3 mx-auto">
                                                    @if(Auth::user()->photo)
                                                        <img src="{{ asset('user/uploads/id/'.Auth::user()->photo) }}" 
                                                             alt="{{ Auth::user()->name }}" 
                                                             class="rounded-circle current-profile-img"
                                                             style="width: 150px; height: 150px; object-fit: cover;">
                                                    @else
                                                        <div class="avatar-placeholder rounded-circle d-flex align-items-center justify-content-center bg-dark border border-secondary"
                                                             style="width: 150px; height: 150px;">
                                                            <em class="icon ni ni-camera text-muted" style="font-size: 3rem;"></em>
                                                        </div>
                                                    @endif
                                                </div>
                                                <h6 class="text-white mb-1">Current Picture</h6>
                                                <p class="text-muted small">Your current profile picture</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Upload Section -->
                                        <div class="col-md-7">
                                            <div class="nk-kycfm-upload">
                                                <div class="upload-area border-dashed rounded-lg p-4 text-center mb-4">
                                                    <div class="upload-icon mb-3">
                                                        <em class="icon ni ni-cloud-upload text-primary" style="font-size: 3rem;"></em>
                                                    </div>
                                                    <h6 class="title text-white mb-2">Upload New Picture</h6>
                                                    <p class="text-muted small mb-3">
                                                        Supported formats: JPG, PNG, GIF<br>
                                                        Max file size: 5MB
                                                    </p>
                                                    
                                                    <div class="nk-kycfm-upload-box">
                                                        <div class="form-group">
                                                            <div class="custom-file-upload">
                                                                <input type="file" name="image" id="profileImage" 
                                                                       class="form-control" 
                                                                       accept=".jpg,.jpeg,.png,.gif" 
                                                                       required
                                                                       onchange="previewImage(this)">
                                                                <label for="profileImage" class="btn btn-outline-primary btn-block">
                                                                    <em class="icon ni ni-folder me-1"></em> Choose File
                                                                </label>
                                                            </div>
                                                            <div class="form-note text-muted mt-2" id="fileName">
                                                                No file chosen
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Image Preview -->
                                                    <div class="image-preview mt-3 d-none" id="imagePreview">
                                                        <div class="preview-container text-center">
                                                            <img id="previewImg" class="rounded preview-image mb-2" 
                                                                 style="max-width: 120px; max-height: 120px; display: none;">
                                                            <div class="preview-actions">
                                                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearPreview()">
                                                                    <em class="icon ni ni-cross me-1"></em> Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Upload Button -->
                                                <div class="text-center">
                                                    <button type="submit" name="upload" class="btn btn-lg btn-primary">
                                                        <em class="icon ni ni-upload me-1"></em> Upload Picture
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Tips Section -->
                                <div class="border-top border-secondary mt-5 pt-4">
                                    <h6 class="text-white mb-3">
                                        <em class="icon ni ni-info text-primary me-2"></em>Upload Tips
                                    </h6>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <em class="icon ni ni-check-circle-fill text-success me-2 mt-1"></em>
                                                <div>
                                                    <span class="text-white small">Use a clear, recent photo</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <em class="icon ni ni-check-circle-fill text-success me-2 mt-1"></em>
                                                <div>
                                                    <span class="text-white small">Face the camera directly</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <em class="icon ni ni-check-circle-fill text-success me-2 mt-1"></em>
                                                <div>
                                                    <span class="text-white small">Good lighting is important</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start">
                                                <em class="icon ni ni-check-circle-fill text-success me-2 mt-1"></em>
                                                <div>
                                                    <span class="text-white small">Avoid filters and heavy editing</span>
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
            <!-- NK-Block @e -->
        </div>
    </div>
</div>
<!-- content @e -->

<!-- Password Confirmation Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="pass">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content bg-dark">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm text-light"></em>
            </a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <div class="nk-modal-icon mb-3">
                        <em class="icon ni ni-lock-alt text-primary" style="font-size: 3rem;"></em>
                    </div>
                    <h4 class="nk-modal-title text-white">Security Verification</h4>
                    <div class="nk-modal-text">
                        <p class="text-light mb-3">Please enter your password to confirm this action</p>
                        <div class="form-group">
                            <input type="password" name="conpass" id="conpass" 
                                   class="form-control form-control-lg bg-dark border-secondary text-white text-center" 
                                   placeholder="Enter your password">
                            <input type="hidden" id="check" value="25d55ad283aa400af464c76d713c07ad" 
                                   class="form-control form-control-lg form-control-number" placeholder="******">
                        </div>
                    </div>
                    <div class="nk-modal-action-lg">
                        <ul class="btn-group gx-4">
                            <li>
                                <button class="btn btn-lg btn-mw btn-primary" onclick="modal()">
                                    <em class="icon ni ni-check me-1"></em> Confirm
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .modal-body -->
        </div>
        <!-- .modal-content -->
    </div>
    <!-- .modal-dialog -->
</div>

<!-- JavaScript -->
<script>
    function previewImage(input) {
        const preview = document.getElementById('previewImg');
        const previewContainer = document.getElementById('imagePreview');
        const fileName = document.getElementById('fileName');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                previewContainer.classList.remove('d-none');
                fileName.textContent = input.files[0].name;
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function clearPreview() {
        const input = document.getElementById('profileImage');
        const preview = document.getElementById('previewImg');
        const previewContainer = document.getElementById('imagePreview');
        const fileName = document.getElementById('fileName');
        
        input.value = '';
        preview.style.display = 'none';
        previewContainer.classList.add('d-none');
        fileName.textContent = 'No file chosen';
    }
    
    function modal() {
        let e = md5(document.getElementById('conpass').value);
        var a = document.getElementById('check').value;
        if (e == a) {
            window.location.replace('./crypto/mail/change_pass.php');
        } else {
            alert("Invalid Password");
        }
    }
    
    // File upload validation
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('profileImage');
        
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                // Check file size (5MB limit)
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB');
                    this.value = '';
                    clearPreview();
                    return;
                }
                
                // Check file type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('Please select a valid image file (JPG, PNG, GIF)');
                    this.value = '';
                    clearPreview();
                    return;
                }
            }
        });
        
        // Form submission handling
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const fileInput = document.getElementById('profileImage');
            if (!fileInput.files[0]) {
                e.preventDefault();
                alert('Please select a file to upload');
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
    
    .border-dashed {
        border: 2px dashed #364153 !important;
        border-radius: 12px;
    }
    
    .border-dashed:hover {
        border-color: #4a5bb5 !important;
        transition: border-color 0.3s ease;
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
    }
    
    .avatar-placeholder {
        border: 2px dashed #364153 !important;
    }
    
    .modal-content.bg-dark {
        background-color: #1a1d29;
        border: 1px solid #2a2f42;
    }
    
    .form-control.bg-dark:focus {
        background-color: #1a1d29;
        border-color: #4a5bb5;
        color: #fff;
        box-shadow: 0 0 0 2px rgba(74, 91, 181, 0.2);
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
    
    .card-bordered {
        border: 1px solid #2a2f42;
        border-radius: 12px;
    }
    
    .user-avatar.xxl {
        width: 150px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
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