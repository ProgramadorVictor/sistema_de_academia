<nav class="navbar navbar-expand-lg bg-custom-black">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto gap-4">
                <li class="nav-item ">
                    <a class="nav-link active fw-bolder text-white bg-custom-black btn-border" href="{{route('tela-principal')}}">Chat</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active fw-bolder text-white bg-custom-black btn-border" href="{{route('usuario.perfil')}}">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder text-white bg-custom-black btn-border" href="{{route('financeiro-pagamento.planos')}}">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder text-white bg-custom-black btn-border" href="{{route('financeiro-pagamento.extratos')}}">Extratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder text-white bg-custom-black btn-border" href="{{route('usuario.treinos')}}">Treinos</a>
                </li>
                {{-- @if(session('usuario')['tipo_id'] == 2)
                    <li class="nav-item">
                        <a class="nav-link fw-bolder text-white bg-custom-black btn-border border border-2 border-dark" href="{{route('alunos-treinos.index')}}">ALUNOS E TREINOS</a>
                    </li>
                @endif --}}
                <li class="nav-item">
                    <a class="nav-link fw-bolder text-white bg-custom-black btn-border" href="{{route('login.logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>