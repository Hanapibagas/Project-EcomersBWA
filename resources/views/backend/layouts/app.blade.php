<!DOCTYPE html>
<html lang="en">
  <head>

    @include('backend.layout.head')

  </head>
  <body>

    @include('backend.layout.navbar')

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">

          @yield('content')
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->


    {{-- script --}}
    @include('backend.layout.script')
  </body>
</html>
