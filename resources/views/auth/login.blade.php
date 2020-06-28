@extends('store.template')

@section('content')
   <div class="container text-center">
        <div class="page-header">
              <h1><i class="fa fa-user"></i>Iniciar session</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">
                    @include('store.partials.errors')
                           <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">                            
                        </div>

                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">                            
                        </div>

                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="checkbox" name="remember">Remember Me                            
                        </div>

                         <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Login</button>                     
                        </div>               
                    </form>
                </div>
            </div>
        </div>
   </div>
@stop


