@include('home.header')
    <!-- Hero Slider with Multiple Slides -->
    <section class="hero-slider">
      <!-- Slide 1: AI Automated Trading -->
<div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1920&auto=format&fit=crop')">
    <div class="container">
        <div class="row align-items-center slider-content">
            <div class="col-lg-6">
                <h1 class="slide-h1">AI-Powered Trading. Fully Automated.</h1>
                <p class="slide-subtitle">
                    Our advanced artificial intelligence executes trades automatically, analyzes market patterns, and maximizes profit potential — even while you sleep.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('login') }}" class="btn btn-primary-custom">Login to Account</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light-custom">Start Automated Trading</a>
                </div>

                <ul class="slider-features">
                    <li><i class="fas fa-check"></i> Real-Time AI Market Analysis</li>
                    <li><i class="fas fa-check"></i> Smart Automated Strategies</li>
                    <li><i class="fas fa-check"></i> 24/7 AI Monitoring & Execution</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <!-- TradingView Widget -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget" style="height: 450px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                    {
                        "colorTheme": "dark",
                        "dateRange": "12M",
                        "showChart": true,
                        "locale": "en",
                        "width": "100%",
                        "height": "100%",
                        "isTransparent": true,
                        "tabs": [
                            {
                                "title": "AI Markets",
                                "symbols": [
                                    { "s": "CRYPTO:BTCUSD", "d": "Bitcoin" },
                                    { "s": "NASDAQ:AAPL", "d": "Apple" },
                                    { "s": "NASDAQ:NVDA", "d": "NVIDIA AI" },
                                    { "s": "NASDAQ:GOOG", "d": "Google AI" }
                                ]
                            }
                        ]
                    }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Slide 2: Next-Gen AI Trading -->
<div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1920&auto=format&fit=crop')">
    <div class="container">
        <div class="row align-items-center slider-content">
            <div class="col-lg-6">
                <h1 class="slide-h1">Next-Generation AI Trading Technology</h1>
                <p class="slide-subtitle">
                    Trade cryptocurrencies, indices, and forex with ultra-fast AI prediction engines designed to detect opportunities before humans can.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="btn btn-primary-custom">Start AI Trading</a>
                    <a href="#" class="btn btn-outline-light-custom">How AI Works</a>
                </div>

                <ul class="slider-features">
                    <li><i class="fas fa-check"></i> Predictive AI Algorithms</li>
                    <li><i class="fas fa-check"></i> Lightning-Fast Market Execution</li>
                    <li><i class="fas fa-check"></i> Intelligent Risk Optimization</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <!-- TradingView Widget -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_crypto" style="height: 450px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget({
                        "autosize": true,
                        "symbol": "BINANCE:BTCUSDT",
                        "interval": "D",
                        "theme": "dark",
                        "timezone": "Etc/UTC",
                        "style": "1",
                        "locale": "en",
                        "container_id": "tradingview_crypto"
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Slide 3: AI-Conscious Low Fees -->
<div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1545235617-9465d2a55698?q=80&w=1920&auto=format&fit=crop')">
    <div class="container">
        <div class="row align-items-center slider-content">
            <div class="col-lg-6">
                <h1 class="slide-h1">AI-Optimized Trading With Minimal Costs</h1>
                <p class="slide-subtitle">
                    Experience low fees, instant execution, and fully automated AI trade selection built to deliver the best market entries.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="btn btn-primary-custom">Create AI Account</a>
                    <a href="#" class="btn btn-outline-light-custom">View AI Pricing</a>
                </div>

                <ul class="slider-features">
                    <li><i class="fas fa-check"></i> AI Opens Your Account in Seconds</li>
                    <li><i class="fas fa-check"></i> Automated Deposits (20+ Methods)</li>
                    <li><i class="fas fa-check"></i> Trade Instantly With Zero Setup</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <!-- TradingView Widget -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_forex" style="height: 450px;"></div>
                    <script type="text/javascript">
                    new TradingView.widget({
                        "autosize": true,
                        "symbol": "FX:EURUSD",
                        "interval": "D",
                        "theme": "dark",
                        "timezone": "Etc/UTC",
                        "style": "1",
                        "locale": "en",
                        "container_id": "tradingview_forex"
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- How It Works Section -->
<section class="section ai-section">
    <div class="container">
        <h2 class="section-title">How Our AI Trading System Works</h2>
        <p class="section-subtitle">Begin automated AI-powered trading in just 3 simple steps</p>
        
        <div class="row ai-workflow">

            <!-- Step 1 -->
            <div class="col-md-4">
                <div class="how-it-work-card ai-card">
                    <div class="how-it-work-icon ai-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="how-it-work-title">Create Your AI Account</h3>
                    <p>
                        Register and unlock your AI dashboard. Fund your account using over 20 global payment methods.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-4">
                <div class="how-it-work-card ai-card">
                    <div class="how-it-work-icon ai-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="how-it-work-title">AI Starts Trading for You</h3>
                    <p>
                        Our AI analyzes markets in real time and executes trades automatically with high-precision logic.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-4">
                <div class="how-it-work-card ai-card">
                    <div class="how-it-work-icon ai-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="how-it-work-title">Withdraw Your Earnings</h3>
                    <p>
                        Withdraw your profits instantly to bank or wallet with zero hidden fees and fast payout processing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Features Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title text-start">Advanced Trading Features</h2>
                    <p class="mb-4">
                        We provide fastest trading using modern technologies. No delays in order executions and most
                        accurate quotes. Our trading platform is available around the clock and on weekends.
                       Swift Meta Trade customer service is available 24/7.
                    </p>
                    <ul class="features-list">
                        <li>Technical analysis tools: 4 chart types, 8 indicators, trend lines</li>
                        <li>Social trading: watch deals across the globe or trade with your friends</li>
                        <li>Over 100 assets including popular stocks</li>
                        <li>Advanced order types and risk management tools</li>
                        <li>Mobile trading app for iOS and Android</li>
                    </ul>
                    <a href="#" class="btn btn-primary-custom mt-3">Explore Features</a>
                </div>
                <div class="col-lg-6">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_advancedchart" style="height: 450px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "BINANCE:ETHUSDT",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_top_toolbar": false,
                            "hide_legend": false,
                            "save_image": false,
                            "container_id": "tradingview_advancedchart"
                        }
                        );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Instruments Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Trade Multiple Instruments</h2>
            <p class="section-subtitle">Get immediate access to cryptocurrencies, stock indices, commodities and forex with a single platform</p>
            
            <div class="market-table">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th>Symbol</th>
                            <th>Price</th>
                            <th>Change</th>
                            <th>Leverage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-bitcoin text-warning me-2 fs-5"></i>
                                    Bitcoin
                                </div>
                            </td>
                            <td>BTC/USD</td>
                            <td>$45,230.50</td>
                            <td class="positive">+2.34%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-ethereum text-primary me-2 fs-5"></i>
                                    Ethereum
                                </div>
                            </td>
                            <td>ETH/USD</td>
                            <td>$3,210.75</td>
                            <td class="positive">+1.67%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-euro-sign text-info me-2 fs-5"></i>
                                    EUR/USD
                                </div>
                            </td>
                            <td>EUR/USD</td>
                            <td>1.0854</td>
                            <td class="negative">-0.23%</td>
                            <td>1000X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chart-line text-success me-2 fs-5"></i>
                                    S&P 500
                                </div>
                            </td>
                            <td>SPX</td>
                            <td>4,530.20</td>
                            <td class="positive">+0.89%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-gem text-warning me-2 fs-5"></i>
                                    Gold
                                </div>
                            </td>
                            <td>XAU/USD</td>
                            <td>$1,980.40</td>
                            <td class="positive">+0.56%</td>
                            <td>500X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-light-custom">View All Instruments</a>
            </div>
        </div>
    </section>

    <!-- Account Plans Section -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">Trading Account Plans</h2>
            <p class="section-subtitle">Choose the plan that fits your trading goals and investment strategy</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">MINI PLAN</h3>
                        <div class="plan-price">$500</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">10% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $7,500</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card popular">
                        <h3 class="plan-name">SILVER PLAN</h3>
                        <div class="plan-price">$20,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">15% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $117,500</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">GOLD PLAN</h3>
                        <div class="plan-price">$100,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">60% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $420,000</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">DIAMOND PLAN</h3>
                        <div class="plan-price">$500,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">60% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $2,520,000</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Happy investors sharing their experiences withSwift Meta Trade</p>
            
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"I got my first investment profit of $15k. Big thanks to you guys atSwift Meta Trade! The platform is intuitive and their support team is always available."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Robert Pope" class="testimonial-avatar">
                            Robert Pope
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Big shout out to you guys atSwift Meta Trade. I just got my Bitcoin back after a trading error. I love you guys! The insurance policy really works."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=2" alt="Steve Walter" class="testimonial-avatar">
                            Steve Walter
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Thank youSwift Meta Trade. I'm debt free. I have been able to repay my loan of $64,000! The Gold plan was the best investment decision I've made."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=3" alt="Veronica Keith" class="testimonial-avatar">
                            Veronica Keith
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">We Accept</h2>
            <p class="section-subtitle">Payment Methods for Deposit and withdrawal</p>
            
            <div class="text-center">
                <div class="payment-method">
                    <i class="fab fa-bitcoin fa-2x text-warning"></i>
                    <p class="mt-2 mb-0 text-dark">Bitcoin</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-ethereum fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">Ethereum</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-visa fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">Visa</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-mastercard fa-2x text-danger"></i>
                    <p class="mt-2 mb-0 text-dark">Mastercard</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-university fa-2x text-info"></i>
                    <p class="mt-2 mb-0 text-dark">Bank Transfer</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-paypal fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">PayPal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Forex Cross Rates Widget -->
    <section class="section">
        <div class="container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                    "width": "100%",
                    "height": "400",
                    "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                    ],
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </section>
    </main>
@include('home.footer')