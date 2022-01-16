@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            {{-- ユーザ登録へのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!',[], ['class' => 'btn btn-lb btn-primary']) !!}
        </div>
    </div>
@endsection