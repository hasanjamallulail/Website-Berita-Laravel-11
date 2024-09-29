<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> @yield('title') </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('dashboard/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        {{-- NONTON DISISNI YA --}}
        {{-- https://www.youtube.com/watch?v=vsJHj8L3jh8&t=761s --}}
    </head>

    <body class="sb-nav-fixed">>
      
      @include('dashboard/layouts.partials.navbar')

      <div id="layoutSidenav">
        <!-- Layout Side Navbar -->
        <div id="layoutSidenav_nav">
          @include('dashboard/layouts.partials.sidebar')
        </div>

        <!-- Side Nav Content -->
        <div id="layoutSidenav_content">
          
          <!-- Isi Navbar Awal -->
          <main>
              <div class="container-fluid px-4">
                  @yield('content')
              </div>
            </main>
            <!-- Isi Navbar Akhir -->

            {{-- Footer sini --}}
            @include('dashboard/layouts.partials.footer')

        </div>
    </div>

      {{-- <!-- JS --> --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('dashboard/js/scripts.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('dashboard/js/datatables-simple-demo.js')}}"></script>
      {{-- JS Akhir --}}
    
    </body>
</html>