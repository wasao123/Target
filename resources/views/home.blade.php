@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                    <div class="today's-target">
                        <h1>目標</h1>
                    </div>
                    <a href="highlights" class="highlight">戦術を選ぶ</a>
                    <div class="today's-tactics">
                        <h2　class="tactics">
                            今日の戦術
                        </h2>
                        <h3 class="highlight">
                            Highlight
                        </h3>
                        <h3 class="laser">
                            Laser
                        </h3>
                        <h3 class="charge">
                            Charge
                        </h3>
                    </div>
                    <footer></footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
