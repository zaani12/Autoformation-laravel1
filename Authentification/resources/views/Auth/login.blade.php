@extends('test.base')
@section('content')
<h1>se conecter</h1>

<div class="card">
<div class="card-body">
    <form action="{{ route('auth.login') }}" method="post" class="vstack gap-3">
        @csrf
            <div class="form-group">
            <label for="email">Email </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old ('email') }}"
            </div>

            <div class="form-group">
            <label for="password">Mot de passe </label>
            <input type="password" class="form-control" id="password" name="password">

            </div>

            <button class="btn btn-primary" >Se connecter</button>
    </form>
</div>
</div>

@endsection
