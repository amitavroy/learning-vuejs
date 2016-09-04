@extends('master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @include('partials/top-menu')
        <h1>Welcome to Vue.js</h1>
        <app></app>
    </div>
</div>
@endsection
