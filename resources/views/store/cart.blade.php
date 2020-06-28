@extends('store.template')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1>.<i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
	</div>

	<div class="table-cart">
		@if(count($cart))

            <p>
            	<a href="{{ route('cart-trash') }}" class="btn btn-danger">Vaciar carrito <i class="fa fa-trash"></i></a>
            </p>

			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
						<tr>
							<th><img src="{{ $item->image }} "></th>
							<th>{{ $item->name }}</th>
							<th>${{ number_format($item->price) }}</th>
							<th>
								<input 
								    type="number"
                                     min="1"
                                     max="100"
                                     value="{{ $item->quantity }}"
                                     id="product_{{ $item->id }}"
								>
								<a 
								   href="#" 
								   class="btn btn-warning btn-update-item"
								   data-href="{{ route('cart-update', $item->slug) }}"
								   data-id= "{{ $item->id }}"
								>
								   	<i class="fa fa-refresh"></i>
								 </a>
							</th>
							<th>${{ number_format($item->price * $item->quantity,2)  }}</th>
							<td> <a href="{{ route('cart-delete',$item->slug) }}" class="btn btn-danger">
								<i class="fa fa-remove"></i>
							</a></td>
						</tr>
						@endforeach
					</tbody>
				</table><hr>
				<h3>
					<span class="badge badge-success">
						Total: ${{ number_format($total,2)}}
					</span>
				</h3>
                 
			</div>
			@else
                 <h3><span class="badge badge-warning">No hay productos en el carrito</span></h3>
			@endif
			<hr>
			<p>
				<a href="{{ route('inicio') }}" class="btn btn-primary">
					<i class="fa fa-chevron-circle-left"></i>Seguir comprando
				</a>

				<a href="{{ route('order-detail') }}" class="btn btn-primary">
					Continuar <i class="fa fa-chevron-circle-right"></i>
				</a>
			</p>
	</div>
</div>
@stop