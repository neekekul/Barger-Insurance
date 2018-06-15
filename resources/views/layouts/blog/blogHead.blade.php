@if(auth()->user())
        <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h4 class="text-white">You are logged in!</h4>
          <span class="text-muted">as {{auth()->user()->name}}</span>
        </div>
      </div>
    @endif
    <nav class="navbar sticky-top justify-content-between navbar-dark bg-dark" style="background-color: #0082c4;">
              <a class="navbar-brand" href="/">Barger Insurance</a>
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              @if(auth()->user())
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span>{{auth()->user()->name}}</span>
                </button>
              @endif
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <br>
                <ul id="drop" class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                  </li>
                  @if(auth()->user())
                  <li class="nav-item">
                    <a class="nav-link" href="/browse">Browse Posts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/post">Make a Post {{ auth()->user()->name }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/logout">Logout</a>
                  </li>
                  @else
                  <li class="nav-item">
                      <a class="nav-link" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/register">Register</a>
                  </li>
                  @endif
                </ul>
              </div>
    </nav>