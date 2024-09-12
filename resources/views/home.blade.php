@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="breadLine">

            <ul class="breadcrumb">
                <li><a href="#">Simple Admin</a> <span class="divider"></span></li>
                <li class="active">Dashboard</li>
            </ul>
            <a id="logout" class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

       
        
    </div>
@endsection
