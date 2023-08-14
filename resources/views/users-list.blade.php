<x-app title="List PHP">

    {{-- Content Page --}}
    @section('content')
        <section>
            <div class="content m-auto p-4">
                <div>
                    <a href="{{ route('search.php') }}" class="btn btn-secondary mb-4"><i class="fa-solid fa-rotate-left mr-1"></i> Voltar</a>
                    <h5 class="float-right">Resultados encontrados para <b>"{{ $search }}"</b><i class="fa-solid fa-list-ul ml-1"></i></h5>
                </div>

                {{-- Table Results --}}
                <table id="myTable" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">AVATAR</th>
                            <th scope="col">LOGIN</th>
                            <th scope="col">NODE ID</th>
                            <th scope="col">TIPO</th>
                            <th scope="col">ADMIN</th>
                            <th scope="col">SCORE</th>
                            <th scope="col">PERFIL</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- Check empty users and foreach row data --}}
                        @forelse ($users as $user)
                            <tr>
                                <td class="align-middle">{{ $user->id }}</td>
                                <td class="align-middle"><img class="rounded-circle" src="{{ $user->avatar_url }}" alt="Github Avatar {{ $user->login }}" width="40px" height="40px"></td>
                                <td class="align-middle">{{ $user->login }}</td>
                                <td class="align-middle">{{ $user->node_id }}</td>
                                <td class="align-middle">{{ $user->type }}</td>
                                <td class="align-middle">{{ $user->site_admin ? 'Sim' : 'Não' }}</td>
                                <td class="align-middle">{{ $user->score }}</td>
                                <td class="align-middle"><a target="_blank" href="{{ $user->html_url }}" title="Ver perfil de {{ $user->login }} no GitHub"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="19">
                                    <span class="alert alert-warning">Nenhum usuário encontrado...</span>
                                </th>
                            </tr>
                        @endforelse
                      </tbody>
                </table>
            </div>
        </section>

        {{-- Custom JS Page --}}
        @section('scripts')
            <script type="module">
                let table = new DataTable('#myTable');
            </script>
        @endsection

    @endsection

</x-app>
