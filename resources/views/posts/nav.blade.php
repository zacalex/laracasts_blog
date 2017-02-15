<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>

          <a class="nav-link" href="/blog/public/posts/create">Create a post</a>


          @if (Auth::check())

                    <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                    <a class="nav-link" href="/blog/public/logout">Logout</a>

          @else
                    <a class="nav-link ml-auto" href="/blog/public/login">Login</a>
                    <a class="nav-link" href="/blog/public/register">Register</a>

          @endif
        </nav>
      </div>
    </div>