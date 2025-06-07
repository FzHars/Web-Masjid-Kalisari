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
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Posts' ? 'active' : '' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Welcome' ? 'active' : '' }}" href="/welcome">Welcome</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
