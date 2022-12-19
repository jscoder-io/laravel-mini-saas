<header class="">
    <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('leads') }}">
                <img src="/storage/Logo.png" alt="" width="129">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-3 px-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('leads') }}">Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('leads.bought') }}">My Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subscription') }}">Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('community') }}">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                </ul>

                <!-- this is dropdown and the upgrade icon for mobile  -->
                <!-- hidden on disktop -->
                <ul class="navbar-nav mobile-user-menu px-3 px-lg-0">
                    <hr>
                    <li class="nav-item">
                        <a href="" class="nav-link  disabled active">James Anderson</a>
                    </li>
                    <li>
                        <a href="{{ route('subscription.pro') }}" class=" nav-link upgrade">
                            Upgrade to <img src="/storage/icons/Pro.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <img src="/storage/icons/profile.png" alt=""> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="/storage/icons/logout.png" alt=""> Logout</a>
                    </li>
                </ul>
                <!-- hidden on disktop -->

                <!-- hidden on mobile -->
                <div class="d-lg-flex icons">
                    <!-- this is dropdown and the upgrade icon for disktop  -->
                    <a href="{{ route('subscription.pro') }}" class=" nav-link upgrade">
                        Upgrade to <img src="/storage/icons/Pro.png" alt="">
                    </a>
                    <div class="profile dropdown d-none d-lg-inline">
                        <a href="" class=" text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">J</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end text-align-center user-menu  ">
                            <li><span class="dprodown-item disabled px-3">James Anderson</span></li>
                            <hr class="py-0 my-0">
                            <li><a class="dropdown-item" href="{{ route('profile') }}"><img src="/storage/icons/profile.png" alt=""> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><img src="/storage/icons/logout.png" alt=""> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <!-- hidden on mobile -->
            </div>
        </div>
    </nav>
</header>
