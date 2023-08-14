<x-app title="Search PHP">

    {{-- Content Page --}}
    @section('content')
        <section>
            <div class="content m-auto p-4">

                {{-- Head Page --}}
                <h2 class="text-uppercase text-center w-100"><b>Pesquisar via PHP</b></h2>
                <div class="w-100 text-center">
                    <img src="{{ url('images/github-logo.png') }}" alt="GitHub Logo" class="p-4 w-50">
                    <h4>Pesquise o nome de usuário que precisar</h4>
                </div>   
                
                {{-- Form Search --}}
                <form class="mt-4" action="{{ route('search.users.php') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label for="basic-url" class="form-label"><i class="fa-solid fa-user-astronaut mr-1"></i>Nome do Usuário</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="search" placeholder="Ex: eduardopiasson">
                        </div>
                    </div>
                    <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass mr-1"></i> Pesquisar</button>
                </form>
                
            </div>
        </section>
    @endsection

</x-app>
