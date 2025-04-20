@extends('master')

@section('header', 'Comunidades')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">¡Estas son las comunidades disponibles!</h2>
        <form action="{{ route('communities.buscar') }}" method="GET" class="input-group mb-3">
            @csrf
            <!-- <select name="criterio" class="form-select input-group-text">
                <option value="name">Nombre</option>
            </select> -->
        
            <input type="text" name="dato" class="form-control text-center" placeholder="Encuentra tu comunidad">
            
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <!-- <th colspan="2">Opciones</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($communitiesList as $community)
                    <tr>
                    <td><a href="{{ route('communities.provinces', $community->id) }}">{{ $community->name }}</a></td>
                        <!-- <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('communities.edit', $community->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('communities.destroy', $community->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </ --><!-- form> -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center mt-2">
             <div>
                {{ $communitiesList->links() }}
            </div> 
            
        </div>
    </div>
</div>

@endsection