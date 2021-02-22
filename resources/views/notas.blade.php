
        @extends('layout')
        
        @section('content')
        <main class="content">
            <div class="cards">
                <!-- inicia tarjeta dinamica-->
                @forelse ($notas as $nota)
                <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $nota->titulo }}</h4>

                        <p>
                            {!! $nota->contenido !!} <!-- todo sanitizar HTML para evitar ataque XSS-->
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a href="{{ route('notas.edit', ['id' =>$nota->id]) }}"  class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                @empty
                    <p>no hay elementos disponibles </br> <a href="/agregar">Agregar notas</a></p>
                @endforelse
                <!-- termina tarjeta dinamica -->
            
            </div>
        </main>
        @endsection