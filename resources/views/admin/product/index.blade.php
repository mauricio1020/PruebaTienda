@extends('admin.template')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-shopping-cart"></i>
			Productos <a href="{{ route('product.create') }}" class="btn btn-warning">
				<i class="fa fa-plus-circle"></i>Producto
			</a>
		</h1>
	</div>
	<div class="page">
		<div class="table-reponsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>						
						<th>Imagen</th>
						<th>Nombre</th>						
						<th>Precio</th>
						<th>Descripción</th>
						<th>Visible</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>					
						<td><img src="{{ $product->image }}" width="40"></td>
						<td>{{ $product->name }}</td>											
						<td>${{ number_format($product->price,2) }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
						<td>
							<a href="{{ route('product.edit', $product->slug) }}" class="btn btn-primary">
								<i class="fa fa-pencil-square-o"></i>
							</a>
						</td>
						<td>
							{!! Form::open(['route' => ['product.destroy', $product->slug]]) !!}
							<input type="hidden" name="_method" value="DELETE">
							<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
								<i class="fa fa-trash-o"></i>
							</button>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<hr>
		
		<?php echo $products->render(); ?>
		
	</div>
</div>
@stop


