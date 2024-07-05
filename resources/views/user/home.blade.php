<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('user.sidebar')
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('user.header')
        <!-- partial -->
        @include('user.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('user.script')

    <!-- End custom js for this page -->
  </body>
</html>
