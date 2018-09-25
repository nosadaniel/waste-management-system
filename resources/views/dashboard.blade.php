<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partialsDash._head')
    </head>
    <body>
        <div id="wrapper">
            @include('partialsDash._nav')
            @yield('content')
        </div>
        @include('partialsDash._javascript')
    </body>
</html>