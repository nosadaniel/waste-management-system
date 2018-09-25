<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <!-- ##### Preloader ##### -->
        <div id="preloader">
            <i class="circle-preloader"></i>
        </div>

        @yield('content')

        @include('partials._footer')
        {{-- modals --}}
        @include('partials._userReg')
        @include('partials._managerReg')
        @include('partials._clientLogin')
        @include('partials._managerLogin')
        @include('partials._adminLogin')

        @include('partials._javascript')
        @yield('script')
    </body>
</html>