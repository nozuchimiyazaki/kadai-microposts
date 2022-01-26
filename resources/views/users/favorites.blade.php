@extends('layouts.app')

@section('content')
    <div class="row">
            <aside class="col-md-4">
                {{-- ユーザ情報 --}}
                @include('users.card')
            </aside>
            <div class="col-md-8">
                {{-- タブ --}}
                @include('users.navtabs')
                {{-- お気に入り一覧 --}}
                @include('microposts.microposts')
            </div>
    </div>

@endsection