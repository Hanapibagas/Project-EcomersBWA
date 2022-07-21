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
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, welcome back!</h2>
              <p class="az-dashboard-text">Your web analytics dashboard template.</p>
            </div>
            <div class="az-content-header-right">
              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6>Oct 10, 2018</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>End Date</label>
                  <h6>Oct 23, 2018</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>Event Category</label>
                  <h6>All Categories</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <a href="" class="btn btn-purple">Export</a>
            </div>
          </div><!-- az-dashboard-one-title -->

          <div class="az-dashboard-nav">
          </div>

          @yield('content')
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->


    {{-- script --}}
    @include('backend.layout.script')
  </body>
</html>
