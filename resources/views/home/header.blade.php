<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Meta Trade | Premium Crypto Trading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
     <link rel="stylesheet" href="{{ asset('assets/home/style.css') }}">
  
</head>
<body>
    <!-- Lightning Fast Preloader - Only 300ms! -->
    <div class="pre-loader">
        <div class="loader-content">
            <div class="loader-logo">
                <!-- You can replace this with your own logo -->
              <img src="logo.png" alt="GCOWW Logo" style="height:40px; width:auto;">

            </div>
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                   <!-- You can replace this with your own logo -->
<img src="logo.png" alt="G Logo" style="width:150px; height:40px; object-fit:contain;">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketsDropdown" role="button" data-bs-toggle="dropdown">
                                MARKETS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">CRYPTOS</a></li>
                                <li><a class="dropdown-item" href="#">INDICES</a></li>
                                <li><a class="dropdown-item" href="#">FOREX</a></li>
                                <li><a class="dropdown-item" href="#">ENERGIES</a></li>
                                <li><a class="dropdown-item" href="#">SHARES</a></li>
                                <li><a class="dropdown-item" href="#">OPTIONS</a></li>
                                <li><a class="dropdown-item" href="#">ETFS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('faqs') }}">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">CONTACTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('trade') }}">TRADE</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('login') }}" class="top-login">Login</a>
                        <a href="{{ route('register') }}" class="top-signup">Signup</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

      <!-- WhatsApp Floating Button -->
<a href="https://wa.me/18053932568?text=Hello!%20I%20would%20like%20to%20know%20more%20about%20your%20services." 
   class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
   <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32" fill="white">
      <path d="M19.11 17.53c-.33-.17-1.95-.96-2.25-1.07s-.52-.17-.74.17-.85 1.07-1.05 1.29-.39.26-.72.09a7.87 7.87 0 01-2.31-1.42 
      8.62 8.62 0 01-1.59-1.98c-.17-.3 0-.46.13-.63.13-.13.3-.35.46-.52s.22-.3.35-.52.07-.39 0-.56c-.09-.17-.74-1.77-1.02-2.43s-.52-.52-.74-.52h-.63c-.22 
      0-.56.09-.85.39s-1.12 1.09-1.12 2.66 1.15 3.09 1.31 3.3 2.27 3.46 5.49 4.85c.77.33 1.37.52 1.84.67a4.42 4.42 0 002.03.13c.62-.09 
      1.95-.8 2.23-1.57s.28-1.42.2-1.57-.3-.22-.63-.39zM16.02 3c-7.16 0-12.97 5.81-12.97 12.97 0 2.29.59 4.52 1.71 6.49L3 29l6.74-1.77a12.93 
      12.93 0 006.28 1.61h.01c7.16 0 12.97-5.81 12.97-12.97S23.18 3 16.02 3zm0 23.66c-2.2 0-4.35-.59-6.23-1.7l-.45-.27-4 .99 1.06-3.9-.25-.4a10.93 
      10.93 0 01-1.68-5.83c0-6.05 4.92-10.97 10.97-10.97 2.93 0 5.68 1.14 7.75 3.21s3.21 4.82 3.21 7.75c0 6.05-4.92 10.97-10.97 10.97z"/>
   </svg>
   <span class="whatsapp-tooltip">Chat with us</span>
</a>

{{-- <style>
.whatsapp-float {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background: #25D366;
    color: white;
    border-radius: 50%;
    padding: 16px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
}

.whatsapp-float:hover {
    transform: scale(1.1) rotate(-5deg);
    box-shadow: 0 12px 20px rgba(0,0,0,0.4);
}

.whatsapp-tooltip {
    position: absolute;
    left: 70px;
    background: #333;
    color: #fff;
    font-size: 14px;
    padding: 6px 12px;
    border-radius: 6px;
    opacity: 0;
    transform: translateY(10px);
    pointer-events: none;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.whatsapp-float:hover .whatsapp-tooltip {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '23953927cb41ee739722ce20ed7c44829348837d';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
 --}}


 <style>

    /* Section Fade-In */
.ai-section {
    animation: fadeIn 1.5s ease-in-out;
}

/* AI Card Base */
.ai-card {
    background: rgba(255, 255, 255, 0.06);
    padding: 25px;
    border-radius: 15px;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

/* Card Hover Glow */
.ai-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 25px rgba(0, 255, 255, 0.25);
    border-color: rgba(0, 255, 255, 0.45);
}

/* AI Icon Glow Animation */
.ai-icon {
    font-size: 50px;
    margin-bottom: 20px;
    color: #00f6ff;
    animation: aiPulse 2.2s infinite ease-in-out;
    text-shadow: 0 0 8px #00f6ff, 0 0 15px #00eaff;
    transition: transform 0.4s ease;
}

/* Hover Effect (Icon Magnify Slightly) */
.ai-card:hover .ai-icon {
    transform: scale(1.15);
}

/* Card Glow Line Animation */
.ai-card::before {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    width: 0;
    height: 0;
    border-radius: 15px;
    border: 2px solid #00f6ff;
    opacity: 0.32;
    animation: drawBox 2s linear infinite;
}

/* Text Styling */
.ai-card h3 {
    font-weight: 600;
    margin-bottom: 10px;
}

.ai-card p {
    color: #e6e6e6;
}

/* Keyframes */

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes aiPulse {
    0% { text-shadow: 0 0 6px #00f6ff, 0 0 12px #00eaff; }
    50% { text-shadow: 0 0 18px #00f6ff, 0 0 25px #00eaff; }
    100% { text-shadow: 0 0 6px #00f6ff, 0 0 12px #00eaff; }
}

@keyframes drawBox {
    0% { width: 0%; height: 0%; }
    50% { width: 100%; height: 0%; }
    100% { width: 100%; height: 100%; }
}

</style>