<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">D-Link</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/clients">Klientai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rma-base">RMA Bazė</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/demo-base">Demo Bazė</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sn-import">S/N Importas</a>
      </li>
    @guest
        <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
        </li>
                
        <li class="nav-item">
            <a href="/register" class="nav-link">Register</a>
        </li> 
    @endguest
    </ul>
  </div>
</nav>