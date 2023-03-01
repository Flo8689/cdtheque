<!DOCTYPE html>
<html lang="en">
    <body>

        @include('head')

        {{-- @include('header') --}}

        <div class="container-fluid p-5">
            <div class="row gx-5">
                <div id="dashboard" class="col-3 bg-dark text-white rounded p-5">
                    <a class="nav-link" href="/" class="border-bottom border-danger">Dashboard</a>
                    <hr>
                    <a class="nav-link" href="/artiste">Artistes</a>
                    <hr>
                    <a class="nav-link" href="/disque">Disques</a>
                    <hr>
                    <a class="nav-link" href="/genre">Genres</a>
                    <hr>
                </div>
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>




        

        {{-- @include('footer') --}}
        
    </body>
</html>