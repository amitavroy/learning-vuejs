@extends('master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @include('partials/top-menu')
        <h1>Welcome to Vue.js</h1>
    </div>
</div>
<div class="row">
    <div class="col-sm-7">
        <div class="panel panel-default">
            <div class="panel-heading">My Todos</div>
            <div class="panel-body">
                {{-- Body content start --}}
                <todo-item></todo-item>
                <todo-add-form></todo-add-form>
                {{-- Body content end --}}
            </div>
        </div>
    </div>

    <div class="col-sm-5">
        <div class="panel panel-default">
            <div class="panel-heading">My Todos</div>
            <div class="panel-body">
                <p>This is the sidebar where something else will come.</p>
            </div>
        </div>
    </div>
</div>
@endsection
