@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

           

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Fund Your Account</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet</a></li>
                                <li class="breadcrumb-item active">Funding</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Success Messages -->
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <i class="mdi mdi-check-circle-outline me-2"></i> {{ session('status') }}
                    </div>
                    @endif
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <i class="mdi mdi-check-circle-outline me-2"></i> {{$message}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">🤖 AI-Optimized Funding</h4>
                            <p class="card-title-desc">Secure deposit methods powered by advanced AI algorithms</p>
                        </div>
                        <div class="card-body p-4">
                            
                            <!-- Quick Links -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <a href="{{route('user.crypto.buy')}}" class="btn btn-outline-primary btn-sm">
                                        <i class="mdi mdi-currency-btc me-1"></i> Buy Crypto
                                    </a>
                                    <a href="#" class="btn btn-outline-primary btn-sm ms-2">
                                        <i class="mdi mdi-help-circle-outline me-1"></i> Deposit Help
                                    </a>
                                    <span class="badge bg-primary ms-2">
                                        <i class="mdi mdi-shield-check me-1"></i> AI-Secured
                                    </span>
                                </div>
                            </div>

                            <!-- Funding Form -->
                            <div class="row">
                                <!-- Left Column - Payment Methods -->
                                <div class="col-xl-6">
                                    <div class="card funding-methods-card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">
                                                <i class="mdi mdi-credit-card-outline me-2 text-primary"></i>
                                                Select Payment Method
                                            </h5>
                                            
                                            <div class="payment-methods-grid">
                                                <!-- Bitcoin -->
                                                <div class="payment-method">
                                                    <input type="radio" name="item" value="Bitcoin" id="payWithBitcoin" class="payment-radio" required />
                                                    <label for="payWithBitcoin" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="fab fa-btc text-warning"></i>
                                                        </div>
                                                        <div class="payment-details">
                                                            <div class="payment-name">Bitcoin</div>
                                                            <div class="payment-info">BTC Network</div>
                                                        </div>
                                                        <div class="payment-status">
                                                            <span class="badge bg-warning-subtle text-warning">Fast</span>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- Ethereum -->
                                                <div class="payment-method">
                                                    <input type="radio" name="item" value="Ethereum" id="payWithEthereum" class="payment-radio" required />
                                                    <label for="payWithEthereum" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="fab fa-ethereum text-primary"></i>
                                                        </div>
                                                        <div class="payment-details">
                                                            <div class="payment-name">Ethereum</div>
                                                            <div class="payment-info">ETH Network</div>
                                                        </div>
                                                        <div class="payment-status">
                                                            <span class="badge bg-primary-subtle text-primary">Smart</span>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- USDT -->
                                                <div class="payment-method">
                                                    <input type="radio" name="item" value="Usdt" id="payWithUsdt" class="payment-radio" required />
                                                    <label for="payWithUsdt" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="mdi mdi-currency-usd text-success"></i>
                                                        </div>
                                                        <div class="payment-details">
                                                            <div class="payment-name">USDT</div>
                                                            <div class="payment-info">Tether Stablecoin</div>
                                                        </div>
                                                        <div class="payment-status">
                                                            <span class="badge bg-success-subtle text-success">Stable</span>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- Bank -->
                                                <div class="payment-method">
                                                    <input type="radio" name="item" value="Bank" id="payWithBank" class="payment-radio" required />
                                                    <label for="payWithBank" class="payment-label">
                                                        <div class="payment-icon">
                                                            <i class="mdi mdi-bank text-info"></i>
                                                        </div>
                                                        <div class="payment-details">
                                                            <div class="payment-name">Bank Transfer</div>
                                                            <div class="payment-info">Wire Transfer</div>
                                                        </div>
                                                        <div class="payment-status">
                                                            <span class="badge bg-info-subtle text-info">Secure</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column - Amount & Security -->
                                <div class="col-xl-6">
                                    <div class="card amount-security-card mb-4">
                                        <div class="card-body">
                                            <form accept-charset="utf-8" method="post" action="{{route('user.deposit.get')}}">
                                                {{csrf_field()}}
                                                
                                                <!-- Amount Input -->
                                                <div class="mb-4">
                                                    <label for="amount" class="form-label fw-semibold">
                                                        <i class="mdi mdi-calculator me-1"></i>
                                                        Deposit Amount ({{Auth::user()->currency}})
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-light fw-semibold">{{Auth::user()->currency}}</span>
                                                        <input type="number" name="amount" id="amount" placeholder="Enter amount" class="form-control" required>
                                                    </div>
                                                    <div class="form-text text-muted mt-2">
                                                        <i class="mdi mdi-information-outline me-1"></i>
                                                        Minimum deposit: {{Auth::user()->currency}}50
                                                    </div>
                                                </div>

                                                <!-- AI Security Features -->
                                                <div class="security-features mb-4">
                                                    <h6 class="fw-semibold mb-3">
                                                        <i class="mdi mdi-shield-check-outline me-2 text-success"></i>
                                                        AI Security Features
                                                    </h6>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="security-item">
                                                                <i class="mdi mdi-encryption text-primary"></i>
                                                                <span>256-bit Encryption</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="security-item">
                                                                <i class="mdi mdi-robot text-info"></i>
                                                                <span>AI Monitoring</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="security-item">
                                                                <i class="mdi mdi-bolt text-warning"></i>
                                                                <span>Instant Processing</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="security-item">
                                                                <i class="mdi mdi-shield-account text-success"></i>
                                                                <span>Fraud Protection</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-lg">
                                                        <i class="mdi mdi-arrow-right me-2"></i>
                                                        Proceed to Payment
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="info-section">
                                        <div class="row text-center">
                                            <div class="col-md-4 mb-3">
                                                <div class="info-item">
                                                    <i class="mdi mdi-clock-outline text-primary fs-2 mb-2"></i>
                                                    <h6>Instant Processing</h6>
                                                    <p class="text-muted mb-0">Most deposits are processed instantly</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="info-item">
                                                    <i class="mdi mdi-shield-lock-outline text-success fs-2 mb-2"></i>
                                                    <h6>Bank-Level Security</h6>
                                                    <p class="text-muted mb-0">Your funds are protected 24/7</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="info-item">
                                                    <i class="mdi mdi-headset text-info fs-2 mb-2"></i>
                                                    <h6>24/7 Support</h6>
                                                    <p class="text-muted mb-0">Get help anytime you need it</p>
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

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<style>
    /* Payment Methods Grid */
    .payment-methods-grid {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .payment-method {
        position: relative;
    }

    .payment-radio {
        display: none;
    }

    .payment-label {
        display: flex;
        align-items: center;
        padding: 1.25rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
        margin: 0;
    }

    .payment-radio:checked + .payment-label {
        border-color: #4361ee;
        background: rgba(67, 97, 238, 0.05);
        box-shadow: 0 4px 12px rgba(67, 97, 238, 0.15);
        transform: translateY(-2px);
    }

    .payment-label:hover {
        border-color: #4361ee;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .payment-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.25rem;
        font-size: 1.75rem;
        background: rgba(255, 255, 255, 0.1);
    }

    .payment-details {
        flex: 1;
    }

    .payment-name {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #495057;
        font-size: 1.1rem;
    }

    .payment-info {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .payment-status {
        margin-left: auto;
    }

    /* Cards Styling */
    .funding-methods-card,
    .amount-security-card {
        border: 1px solid #e9ecef;
        border-radius: 12px;
        transition: all 0.3s ease;
        height: 100%;
    }

    .funding-methods-card:hover,
    .amount-security-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-color: #4361ee;
    }

    /* Security Features */
    .security-features {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid #e9ecef;
    }

    .security-item {
        display: flex;
        align-items: center;
        padding: 0.75rem;
        background: white;
        border-radius: 8px;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .security-item:hover {
        border-color: #4361ee;
        transform: translateY(-1px);
    }

    .security-item i {
        margin-right: 0.75rem;
        font-size: 1.25rem;
    }

    .security-item span {
        font-size: 0.875rem;
        font-weight: 500;
        color: #495057;
    }

    /* Info Section */
    .info-section {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        border: 1px solid #e9ecef;
    }

    .info-item {
        padding: 1rem;
    }

    .info-item h6 {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #495057;
    }

    /* AI Assistant */
    .ai-assistant {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #4361ee, #3a0ca3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        z-index: 1000;
        animation: float 3s ease-in-out infinite;
        transition: all 0.3s ease;
    }

    .ai-assistant:hover {
        transform: scale(1.1);
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .ai-chat {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 300px;
        background: white;
        border-radius: 12px;
        border: 1px solid #e9ecef;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        z-index: 999;
        transform: translateY(20px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .ai-chat.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .ai-chat-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e9ecef;
    }

    .ai-message {
        background: rgba(67, 97, 238, 0.05);
        padding: 10px 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 14px;
        border: 1px solid rgba(67, 97, 238, 0.1);
    }

    .progress-bar {
        height: 4px;
        background: #e9ecef;
        border-radius: 2px;
        overflow: hidden;
        margin: 15px 0;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #4361ee, #3a0ca3);
        border-radius: 2px;
        width: 0%;
        animation: loading 2s infinite;
    }

    @keyframes loading {
        0% { width: 0%; }
        50% { width: 100%; }
        100% { width: 0%; }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .payment-label {
            padding: 1rem;
        }
        
        .payment-icon {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            margin-right: 1rem;
        }
        
        .ai-chat {
            width: 280px;
            right: 15px;
        }
        
        .security-features {
            padding: 1rem;
        }
        
        .info-section {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .payment-label {
            flex-direction: column;
            text-align: center;
            padding: 1.5rem 1rem;
        }
        
        .payment-icon {
            margin-right: 0;
            margin-bottom: 0.75rem;
        }
        
        .payment-details {
            margin-bottom: 0.75rem;
            text-align: center;
        }
        
        .payment-status {
            margin-left: 0;
        }
        
        .security-item {
            flex-direction: column;
            text-align: center;
            padding: 1rem;
        }
        
        .security-item i {
            margin-right: 0;
            margin-bottom: 0.5rem;
        }
    }
</style>

<script>
    // AI Assistant Toggle
    document.getElementById('aiAssistant').addEventListener('click', function() {
        const chat = document.getElementById('aiChat');
        chat.classList.toggle('active');
    });

    // Payment method selection enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const paymentRadios = document.querySelectorAll('.payment-radio');
        
        paymentRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                // Remove all selected states
                document.querySelectorAll('.payment-label').forEach(label => {
                    label.classList.remove('selected');
                });
                
                // Add selected state to current
                if (this.checked) {
                    const label = this.nextElementSibling;
                    label.classList.add('selected');
                }
            });
        });

        // Amount input validation
        const amountInput = document.getElementById('amount');
        if (amountInput) {
            amountInput.addEventListener('input', function() {
                const value = parseFloat(this.value);
                if (value < 50) {
                    this.style.borderColor = '#dc3545';
                } else {
                    this.style.borderColor = '#28a745';
                }
            });
        }

        // Card hover effects
        const cards = document.querySelectorAll('.funding-methods-card, .amount-security-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });
    });

    // Enhanced copy function
    function copyAddress(id, currency) {
        var copyText = document.getElementById(id);
        copyText.select();
        document.execCommand("copy");
        
        // Show notification
        const notification = document.createElement('div');
        notification.style.position = 'fixed';
        notification.style.bottom = '20px';
        notification.style.right = '20px';
        notification.style.backgroundColor = '#1e293b';
        notification.style.color = 'white';
        notification.style.padding = '12px 20px';
        notification.style.borderRadius = '8px';
        notification.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
        notification.style.zIndex = '1000';
        notification.style.display = 'flex';
        notification.style.alignItems = 'center';
        notification.style.fontSize = '14px';
        notification.innerHTML = `
            <i class="mdi mdi-check-circle text-success me-2"></i>
            ${currency} address copied to clipboard
        `;
        
        document.body.appendChild(notification);
        
        // Remove notification after 3 seconds
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 500);
        }, 3000);
    }
</script>

@include('user.footer')