@if(Auth::check())
<li class="dropdown">
	<a href="#" class="dropdown-toogle" data-toggle="dropdown" role	="button" aria-expanded="false">
		<i class="fa fa-user"></i>{{ Auth::user()->user }}<span class="caret"></span>
	</a>
	<ul class="dropdown-menu" role="menu">
		<li><a href="#">Finalizar sesion</a></li>
	</ul>  	
</li>
@else
<li class="dropdown">
	<a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button" aria-expanded="false">
		<i class="fa fa-user"><span class="caret"></span>
	</a>
	<ul class="dropdown-menu" role="menu">
		<li><a href="{{ route('home') }}">Iniciar sesion</a></li>
	</ul>  	
</li>
@endif