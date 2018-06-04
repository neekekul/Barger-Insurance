
<!--
border-top: 1px dotted rgba(255,255,255,.5);
 -->

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
              @if(auth()->user())
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span>{{auth()->user()->name}}</span>
                </button>
              @endif
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <br>
                <ul id="drop" class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Meet Our Staff</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Insurance Solutions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Keystone Membership Info</a>
                  </li>
                  @if(auth()->user())
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
