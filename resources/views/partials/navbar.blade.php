<nav class="navbar navbar-expand-lg  bg-success" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/home">Masjid Asy-Syuhada Kalisari</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $title === 'Posts' ? 'active' : '' }}" href="/posts" role="button" data-bs-toggle="dropdown" >
                        Posts 2
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $title === 'Posts' ? 'active' : '' }}" href="/posts">Posts</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item {{ $title === 'Categories' ? 'active' : '' }}" href="/categories">Categories</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item {{ $title === 'Authors' ? 'active' : '' }}" href="/authors">Authors</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'welcome' ? 'active' : '' }}" href="/welcome">Welcome</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- <a href="/login" class="nav-link {{ $active === 'login ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a> --}}
                    <a href="/login" class="nav-link {{ in_array($active, ['login', 'register']) ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>