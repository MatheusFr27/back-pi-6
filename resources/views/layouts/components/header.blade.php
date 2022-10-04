<nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">

    <!-- Menu -->
    <a class="navbar-brand text-white" href="{{ route('dashboard') }}"><strong>IBicos</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Gestão de admin</a>
            </li>
        </ul>

        <!-- Dropdown Avatar -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img src="{{ url('storage', 'image_admins/default_avatar.jpg') }}" alt="Avatar do admin"
                    class="rounded-circle border border-secondary" width="45em">
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <p class="ml-2 font-weight-bold p-0 m-0">{{ Auth::guard('admins')->user()->name }}</p>
                <p class="ml-2 font-weight-light p-0 m-0 text-primary">
                    {{ Auth::guard('admins')->user()->master_access == 'S' ? 'Administrador Master' : 'Administrador' }}
                </p>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" type="button">Meu perfil</button>
                <a class="dropdown-item" type="button" href="{{ route('logout') }}">Deslogar</a>
            </div>
        </div>
    </div>



</nav>
