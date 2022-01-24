<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">Rafa Fausta</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Gallery') ? 'active' : ''}}" href="/gallery">Galerry</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>