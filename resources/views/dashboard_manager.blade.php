<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partialsMan._head')
    </head>
    <body id="page-top">
         @include('partialsMan._nav')
        <div id="wrapper">
           
         @yield('content')
        </div>
        @include('partialsMan._javascript')
    </body>
</html>