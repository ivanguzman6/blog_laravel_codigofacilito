@extends('admin.template.main')

@section('title', 'Listado de Tags')

@section('content')
    <a href=" {{ route('tags.create') }}" class="btn btn-info">Registrar Nueva Categoría</a><hr>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

                        <a href="{{ route('tags.destroy',$tag->id) }}" class="btn btn-danger" onclick="return confirm('Está seguro de que desea eliminar el registro?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="text-center">
        {!! $tags->render() !!}
    </div>
@endsection