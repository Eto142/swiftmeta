<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/swift meta/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Nov 2025 21:17:32 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | swift meta - user dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="user dashboard" name="description" />
        <meta content="" name="" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <!-- plugin css -->
        <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">swift meta</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">swift meta</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            {{-- <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button> --}}
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>

                        {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
@php 
$userNotifications = \App\Models\Notification::where('user_id', auth()->id())
    ->latest()
    ->take(10)
    ->get(); 
$unreadCount = $userNotifications->where('is_read', 0)->count();
@endphp 

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon position-relative ai-notification-btn" 
            id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
        <div class="ai-bell-container">
            <i data-feather="bell" class="icon-lg ai-bell-icon"></i>
            @if($unreadCount > 0)
            <span class="badge bg-danger rounded-pill ai-notification-badge animate__animated animate__bounceIn">
                {{ $unreadCount }}
            </span>
            @endif
            <div class="ai-bell-ring"></div>
        </div>
    </button>
    
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 ai-notification-dropdown" 
         aria-labelledby="page-header-notifications-dropdown">
        
        <!-- Header -->
        <div class="p-3 ai-notification-header">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0 text-dark fw-bold">
                        <i class="mdi mdi-bell-ring-outline me-2 text-primary"></i>
                        Notifications
                    </h6>
                </div>
                <div class="col-auto">
                    <span class="badge bg-primary ai-pulse-badge">
                        Unread ({{ $unreadCount }})
                    </span>
                </div>
            </div>
        </div>

        <!-- Notification List -->
        <div data-simplebar style="max-height: 280px;" class="ai-notification-list">
            @forelse($userNotifications as $note)
            <div class="ai-notification-item animate__animated animate__fadeInRight" 
                 data-notification-id="{{ $note->id }}"
                 data-read="{{ $note->is_read ? 'true' : 'false' }}"
                 style="animation-delay: {{ $loop->index * 0.05 }}s">
                <div class="d-flex align-items-start p-3">
                    <!-- Notification Icon -->
                    <div class="flex-shrink-0 me-3">
                        <div class="ai-notification-icon bg-{{ $note->is_read ? 'secondary' : 'primary' }}-subtle">
                            <i class="bx bx-{{ $note->is_read ? 'bell' : 'bell-ring' }} text-{{ $note->is_read ? 'secondary' : 'primary' }} fs-5"></i>
                            @if(!$note->is_read)
                            <div class="ai-pulse-dot"></div>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Notification Content -->
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-start mb-1">
                            <h6 class="mb-0 text-dark fw-semibold {{ $note->is_read ? '' : 'unread-text' }}">
                                {{ $note->message }}
                            </h6>
                            <div class="ai-notification-actions">
                                {{-- @if(!$note->is_read)
                                <button class="btn btn-xs btn-outline-primary ai-mark-read-btn" 
                                        onclick="markNotificationAsRead('{{ $note->id }}')"
                                        title="Mark as read">
                                    <i class="mdi mdi-check"></i>
                                </button>
                                @endif --}}
                                {{-- <button class="btn btn-xs btn-outline-danger ai-delete-btn"
                                        onclick="deleteNotification('{{ $note->id }}')"
                                        title="Delete">
                                    <i class="mdi mdi-close"></i>
                                </button> --}}
                            </div>
                        </div>
                        <div class="font-size-13 text-muted">
                            <p class="mb-0">
                                <i class="mdi mdi-clock-outline me-1"></i>
                                <span class="ai-time-ago">{{ $note->created_at->diffForHumans() }}</span>
                                <small class="ms-2 text-muted">{{ $note->created_at->format('h:i A') }}</small>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Progress bar for new notifications -->
                @if(!$note->is_read)
                <div class="ai-notification-progress">
                    <div class="ai-progress-bar"></div>
                </div>
                @endif
            </div>
            @empty
            <div class="text-center py-5 ai-empty-state">
                <div class="ai-empty-icon mb-3">
                    <i class="mdi mdi-bell-off-outline display-4 text-muted"></i>
                </div>
                <h6 class="text-muted mb-2">No notifications yet</h6>
                <p class="text-muted small">We'll notify you when something arrives</p>
            </div>
            @endforelse
        </div>

        <!-- Footer -->
        <div class="p-3 border-top bg-light-subtle ai-notification-footer">
            <div class="d-grid">
                <a class="btn btn-primary btn-sm ai-view-all-btn" href="{{ route('user.notifications') }}">
                    <i class="mdi mdi-arrow-right-circle me-2"></i>
                    <span>View All Notifications</span>
                    <i class="mdi mdi-chevron-right ms-1"></i>
                </a>
            </div>
            @if($unreadCount > 0)
            <div class="text-center mt-2">
                {{-- <button class="btn btn-outline-secondary btn-xs ai-mark-all-btn" 
                        onclick="markAllNotificationsAsRead()">
                    <i class="mdi mdi-check-all me-1"></i>
                    Mark all as read
                </button> --}}
            </div>
            @endif
        </div>
    </div>
</div>

<style>
    /* Enhanced Notification Styles */
    .ai-notification-btn {
        position: relative;
        border: none;
        background: transparent;
        transition: all 0.3s ease;
        padding: 8px 12px;
    }

    .ai-notification-btn:hover {
        transform: translateY(-1px);
        background: rgba(255, 255, 255, 0.1);
    }

    .ai-bell-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-bell-icon {
        transition: all 0.3s ease;
        color: #6c757d;
    }

    .ai-notification-btn:hover .ai-bell-icon {
        color: #4361ee;
        transform: scale(1.1);
    }

    .ai-notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        font-size: 0.7rem;
        font-weight: 600;
        padding: 4px 6px;
        min-width: 18px;
        height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: badgePulse 2s infinite;
        box-shadow: 0 2px 8px rgba(220, 53, 69, 0.4);
    }

    @keyframes badgePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    .ai-bell-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 40px;
        height: 40px;
        border: 2px solid transparent;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        animation: bellRing 3s infinite;
        opacity: 0;
    }

    @keyframes bellRing {
        0% {
            border-color: rgba(67, 97, 238, 0.3);
            width: 40px;
            height: 40px;
            opacity: 1;
        }
        100% {
            border-color: rgba(67, 97, 238, 0);
            width: 60px;
            height: 60px;
            opacity: 0;
        }
    }

    /* Dropdown Styles */
    .ai-notification-dropdown {
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        background: white;
        min-width: 380px;
        overflow: hidden;
    }

    .ai-notification-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-bottom: 1px solid #e9ecef;
    }

    .ai-pulse-badge {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Notification Items */
    .ai-notification-list {
        background: white;
    }

    .ai-notification-item {
        border-bottom: 1px solid #f8f9fa;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .ai-notification-item:hover {
        background: rgba(67, 97, 238, 0.03);
        transform: translateX(5px);
    }

    .ai-notification-item[data-read="false"] {
        background: rgba(67, 97, 238, 0.05);
        border-left: 3px solid #4361ee;
    }

    .ai-notification-item[data-read="false"]:hover {
        background: rgba(67, 97, 238, 0.08);
    }

    .ai-notification-icon {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: all 0.3s ease;
    }

    .ai-notification-item:hover .ai-notification-icon {
        transform: scale(1.1);
    }

    .ai-pulse-dot {
        position: absolute;
        top: -2px;
        right: -2px;
        width: 8px;
        height: 8px;
        background: #4361ee;
        border-radius: 50%;
        animation: dotPulse 1.5s infinite;
    }

    @keyframes dotPulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.5); opacity: 0.7; }
    }

    .unread-text {
        color: #2c3e50;
        font-weight: 700 !important;
    }

    .ai-notification-actions {
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        gap: 4px;
    }

    .ai-notification-item:hover .ai-notification-actions {
        opacity: 1;
    }

    .ai-mark-read-btn, .ai-delete-btn {
        width: 24px;
        height: 24px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .ai-mark-read-btn:hover {
        background: #28a745 !important;
        color: white;
        transform: scale(1.1);
    }

    .ai-delete-btn:hover {
        background: #dc3545 !important;
        color: white;
        transform: scale(1.1);
    }

    /* Progress Bar */
    .ai-notification-progress {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: rgba(67, 97, 238, 0.1);
    }

    .ai-progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #4361ee, #3a0ca3);
        width: 0%;
        animation: progressFill 3s ease-in-out infinite;
    }

    @keyframes progressFill {
        0% { width: 0%; }
        50% { width: 100%; }
        100% { width: 0%; }
    }

    /* Empty State */
    .ai-empty-state {
        padding: 40px 20px;
    }

    .ai-empty-icon {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }

    /* Footer */
    .ai-notification-footer {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .ai-view-all-btn {
        border: none;
        border-radius: 8px;
        padding: 8px 16px;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .ai-view-all-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-view-all-btn:hover::before {
        left: 100%;
    }

    .ai-view-all-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
    }

    .ai-mark-all-btn {
        border-radius: 6px;
        padding: 4px 12px;
        font-size: 0.75rem;
        transition: all 0.3s ease;
    }

    .ai-mark-all-btn:hover {
        background: #28a745;
        color: white;
        transform: translateY(-1px);
    }

    /* Time ago styling */
    .ai-time-ago {
        font-weight: 500;
        color: #6c757d;
    }

    /* Simplebar customization */
    .simplebar-scrollbar::before {
        background: rgba(67, 97, 238, 0.6) !important;
    }

    .simplebar-track.simplebar-vertical {
        width: 6px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize notification animations
        const notificationBtn = document.querySelector('.ai-notification-btn');
        const notificationDropdown = document.querySelector('.ai-notification-dropdown');
        
        // Add click animation to bell icon
        notificationBtn.addEventListener('click', function() {
            const bellIcon = this.querySelector('.ai-bell-icon');
            bellIcon.style.transform = 'scale(1.2)';
            setTimeout(() => {
                bellIcon.style.transform = 'scale(1)';
            }, 300);
        });

        // Show/hide bell ring animation based on unread count
        const unreadCount = {{ $unreadCount }};
        const bellRing = document.querySelector('.ai-bell-ring');
        
        if (unreadCount > 0) {
            bellRing.style.display = 'block';
        } else {
            bellRing.style.display = 'none';
        }

        // Add hover effects to notification items
        const notificationItems = document.querySelectorAll('.ai-notification-item');
        notificationItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });

    // Notification actions
    function markNotificationAsRead(notificationId) {
        const item = document.querySelector(`[data-notification-id="${notificationId}"]`);
        
        // Add animation
        item.style.animation = 'fadeOutLeft 0.5s ease';
        
        // Here you would typically make an API call to mark as read
        setTimeout(() => {
            // Update UI
            item.setAttribute('data-read', 'true');
            item.querySelector('.ai-notification-icon').classList.remove('bg-primary-subtle');
            item.querySelector('.ai-notification-icon').classList.add('bg-secondary-subtle');
            item.querySelector('.ai-notification-icon i').classList.remove('bx-bell-ring', 'text-primary');
            item.querySelector('.ai-notification-icon i').classList.add('bx-bell', 'text-secondary');
            item.querySelector('.ai-pulse-dot')?.remove();
            item.querySelector('.ai-notification-progress')?.remove();
            item.querySelector('.unread-text')?.classList.remove('unread-text');
            item.querySelector('.ai-mark-read-btn')?.remove();
            
            // Remove left border for read items
            item.style.borderLeft = 'none';
            item.style.background = 'white';
            
            // Restore animation
            item.style.animation = 'fadeInRight 0.5s ease';
            
            // Update badge count
            updateNotificationBadge();
            
        }, 500);
    }

    function markAllNotificationsAsRead() {
        const unreadItems = document.querySelectorAll('.ai-notification-item[data-read="false"]');
        
        unreadItems.forEach((item, index) => {
            setTimeout(() => {
                markNotificationAsRead(item.getAttribute('data-notification-id'));
            }, index * 100);
        });
    }

    function deleteNotification(notificationId) {
        const item = document.querySelector(`[data-notification-id="${notificationId}"]`);
        
        // Add delete animation
        item.style.animation = 'fadeOutRight 0.5s ease';
        
        setTimeout(() => {
            item.remove();
            updateNotificationBadge();
            
            // Check if list is empty
            const remainingItems = document.querySelectorAll('.ai-notification-item').length;
            if (remainingItems === 0) {
                // Show empty state
                const list = document.querySelector('.ai-notification-list');
                list.innerHTML = `
                    <div class="text-center py-5 ai-empty-state">
                        <div class="ai-empty-icon mb-3">
                            <i class="mdi mdi-bell-off-outline display-4 text-muted"></i>
                        </div>
                        <h6 class="text-muted mb-2">No notifications yet</h6>
                        <p class="text-muted small">We'll notify you when something arrives</p>
                    </div>
                `;
            }
        }, 500);
    }

    function updateNotificationBadge() {
        const unreadItems = document.querySelectorAll('.ai-notification-item[data-read="false"]').length;
        const badge = document.querySelector('.ai-notification-badge');
        const unreadSpan = document.querySelector('.ai-pulse-badge');
        
        if (unreadItems > 0) {
            badge.textContent = unreadItems;
            unreadSpan.textContent = `Unread (${unreadItems})`;
        } else {
            badge.remove();
            unreadSpan.textContent = 'Unread (0)';
            document.querySelector('.ai-bell-ring').style.display = 'none';
        }
    }

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeOutLeft {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(-50px); }
        }
        
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes fadeOutRight {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(50px); }
        }
    `;
    document.head.appendChild(style);
</script>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ Auth::user()->photo ? asset('user/uploads/id/'.Auth::user()->photo) : asset('default-avatar.png') }}" alt="{{ Auth::user()->name }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                {{-- <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('user.logout.perform') }}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="{{route('user.home')}}">
                                    <i data-feather="home"></i>
                                    <span class="badge rounded-pill bg-success-subtle text-success float-end"></span>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-apps">Trading Menu</li>
                
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bi bi-bar-chart"></i>

                                    <span data-key="t-ecommerce">Trading Options</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('user.forex')}}" key="t-products">Forex Trade</a></li>
                                    <li><a href="{{route('user.binary')}}" data-key="t-product-detail">Binary Trade</a></li>
                                    <li><a href="{{route('user.stocks')}}" data-key="t-orders">Stocks Trade</a></li>
                                    <li><a href="{{route('user.crypto')}}" data-key="t-customers">Crypto Trade</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('user.buy.plan')}}">
                                  <i class="bi bi-cash-stack"></i>
                                    <span data-key="t-chat">Invest</span>
                                </a>
                            </li>

                             <li>
                                <a href="{{route('user.wallet')}}">
                                   <i class="bi bi-wallet2"></i>
                                    <span data-key="t-chat">Wallet</span>
                                </a>
                            </li>

            

                            <li>
                                <a href="{{route('user.copy')}}">
                                   <i class="bi bi-person-lines-fill"></i>
                                    <span data-key="t-calendar">Copy trade</span>
                                </a>
                            </li>
                

                            
                            <li>
                                <a href="{{route('user.fund.wallet')}}">
                                   <i class="bi bi-box-arrow-in-down"></i>
                                    <span data-key="t-calendar">Deposit</span>
                                </a>
                            </li>
                

                            
                            <li>
                                <a href="{{route('user.withdrawal')}}">
                                   <i class="bi bi-box-arrow-up"></i>
                                    <span data-key="t-calendar">Withdrawal</span>
                                </a>
                            </li>

                            
                            <li>
                                <a href="{{ route('user.crypto.buy') }}">
                                  <i class="bi bi-shield-lock"></i>
                                    <span data-key="t-calendar">Crypto</span>
                                </a>
                            </li>


                            
                            <li>
                                <a href="{{route('user.profile')}}">
                                   <i class="bi bi-person-circle"></i>
                                    <span data-key="t-calendar">My Profile</span>
                                </a>
                            </li>

                                                    <li>
                                <a href="{{route('user.buy.plan')}}">
                                   <i class="bi bi-card-checklist"></i>
                                    <span data-key="t-calendar"> Subscribe To A Plan</span>
                                </a>
                            </li>


                            
                                                    <li>
                                <a href="{{route('user.investment')}}">
                                  <i class="bi bi-clock-history"></i>
                                    <span data-key="t-calendar"> Investment History</span>
                                </a>
                            </li>
                  



                            
                                                    <li>
                                <a href="{{route('user.accounthistory')}}">
                                    <i class="bi bi-receipt"></i>
                                    <span data-key="t-calendar"> Transaction History</span>
                                </a>
                            </li>
                  


                            
                                                    <li>
                                <a href="{{route('user.refer')}}">
                                  <i class="bi bi-people-fill"></i>
                                    <span data-key="t-calendar"> Refer Family & Friends</span>
                                </a>
                            </li>



                            
                                            
    
                
                           

                          

                        <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                            <div class="card-body">
                                <img src="assets/images/giftbox.png" alt="">
                                <div class="mt-4">
                                    <h5 class="alertcard-title font-size-16">Welcome to swift meta</h5>
                                    <p class="font-size-13 text-dark">Refer and get bonuses.</p>
          
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            