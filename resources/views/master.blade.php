<!DOCTYPE html>
<html>
    @include('partials/header')
    <body>
        <div class="container" id="vue-app">
            @include('partials/message-block')
            @yield('content')
        </div>
        <script src="{{ url('plugins/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ url('plugins/bootstrap.min.js') }}"></script>
        <script src="{{ elixir('js/main.js') }}"></script>
    </body>
</html>
