<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My School</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav me-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=ROOT?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CLASSESS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/tests">TESTS</a>
      </li>
      </ul>
      <ul class="navbar-nav mx-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        USER
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?=ROOT?>/profile">PROFILE</a>
          <a class="dropdown-item" href="<?=ROOT?>">DASHBOARD</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>