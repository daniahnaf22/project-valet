<nav class="navbar navbar-expand-sm navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">Dani Ahnaf Falih</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'mahasiswa' ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'dosen' ? 'active' : '' }}" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'jurusan' ? 'active' : '' }}" href="/dosen/jurusans">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'nilai' ? 'active' : '' }}" href="/nilai">Nilai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'barang' ? 'active' : '' }}" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'category' ? 'active' : '' }}"
                        href="/posts/categories">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
