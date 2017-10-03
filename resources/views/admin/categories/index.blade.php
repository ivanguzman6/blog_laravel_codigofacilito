@extends('admin.template.main')

@section('title','Listado de Categorías')

@section('content')
   <a href=" {{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categoría</a><hr>
   <table class="table table-bordered table-hover table-striped">
      <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Accion</th>
      </thead>
      <tbody>
      @foreach($categories as $category)
         <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
               <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

               <a href="{{ route('categories.destroy',$category->id) }}" class="btn btn-danger" onclick="return confirm('Está seguro de que desea eliminar el registro?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>

            </td>
         </tr>
      @endforeach
      </tbody>
   </table>
   <div class="text-center">
      {!! $categories->render() !!}
   </div>
@endsection