x@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- ... (ваш текущий код меню) ... -->

        <!-- Регистрация -->
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-plus"></i>
                <p>
                    Регистрация
                </p>
            </a>
        </li>

        <!-- Авторизация -->
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sign-in-alt"></i>
                <p>
                    Авторизация
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->

</body>
</html>
