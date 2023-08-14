<x-app title="Search JS">

    {{-- Content Page --}}
    @section('content')

        {{-- Section Search --}}
        <section id="section-search">
            <div class="content m-auto p-4">

                {{-- Head Search --}}
                <h2 class="text-uppercase text-center w-100"><b>Pesquisar via JS</b></h2>
                <div class="w-100 text-center">
                    <img src="{{ url('images/github-logo.png') }}" alt="GitHub Logo" class="p-4 w-50">
                    <h4>Pesquise o nome de usuário que precisar</h4>
                </div>

                {{-- Form Search --}}
                <form class="mt-4" action="#" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label for="basic-url" class="form-label"><i class="fa-solid fa-user-astronaut mr-1"></i> Nome do
                            Usuário</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" placeholder="Ex: eduardopiasson">
                        </div>
                    </div>
                    <button class="btn btn-secondary" type="button" onclick="getUsers()"><i
                            class="fa-solid fa-magnifying-glass mr-1"></i>
                        Pesquisar</button>
                </form>

                {{-- Error Div --}}
                <div class="alert alert-danger d-none" role="alert">
                    Houve um erro ao consultar os dados
                </div>
            </div>
        </section>

        {{-- Section Results --}}
        <section id="section-list">
            <div class="content m-auto p-4">

                {{-- Head Results --}}
                <div>
                    <a href="{{ route('search.js') }}" class="btn btn-secondary mb-4"><i
                            class="fa-solid fa-rotate-left mr-1"></i> Voltar</a>
                    <h5 id="message-search" class="float-right"></h5>
                </div>

                {{-- Table Content --}}
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
                        {{-- Data Search Fetch --}}
                    </tbody>
                </table>

            </div>
        </section>

        {{-- Custom JS Page --}}
        @section('scripts')

            {{-- Custom JS --}}
            <script type="module">
                $('.alert-danger, #section-list').hide();               
            </script>

            <script>
                async function getUsers() {
                    var search = $('#search').val();
                    const response = await fetch("https://api.github.com/search/users?q=" + search)
                    const data = await response.json();

                    if (data.erro) {
                        $('.alert-danger').show(500);
                        $('#section-list').hide(500);
                    } else {
                        $('#message-search').html("Resultados encontrados para <b>'" + search +
                            "'</b> <i class='fa-solid fa-list-ul ml-1'></i>");
                        $('.alert-danger, #section-search').hide(1000);
                        $('#section-list').show(1000);
                        await data['items'].forEach(item => {
                            $('tbody')[0].insertRow().innerHTML = "<tr>" +
                                "<td class='align-middle'>" + item.id + "</td>" +
                                "<td class='align-middle'><img class='rounded-circle' src='" + item.avatar_url +
                                    "' alt='Github Avatar " + item.login + "' width='40px' height='40px'></td>" +
                                "<td class='align-middle'>" + item.login + "</td>" +
                                "<td class='align-middle'>" + item.node_id + "</td>" +
                                "<td class='align-middle'>" + item.type + "</td>" +
                                "<td class='align-middle'>" + item.site_admin + "</td>" +
                                "<td class='align-middle'>" + item.score + "</td>" +
                                "<td class='align-middle'><a target='_blank' href='" + item.html_url +
                                    "' title='Ver perfil de " + item.login +
                                    " no GitHub'><i class='fa-solid fa-arrow-up-right-from-square'></i></a></td>" +
                                "</tr>";
                        });
                        await new DataTable('#myTable');
                    }
                    console.log(data);
                }
            </script>

        @endsection

    @endsection

</x-app>
