
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/blog/public/css/blog.css" rel="stylesheet">
  </head>

  <body>

    @include('posts.nav')
    @include('posts.header')
    @if ($flash = session('message'))
      <div class="container">
        <div class="alert alert-success" role="alert">
          {{ $flash }}

        </div>
      </div>

    @endif
<!--    @include('posts.header')-->
      
    
    
    
    <div class="container">

      <div class="row">

        
        @yield('content')


        @include('posts.sidebar')
      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('posts.footer')

  </body>
</html>
