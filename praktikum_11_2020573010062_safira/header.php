<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">S!PBAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <form class="d-flex">
        <input class="form-control me-2 navbar-light" type="search" style="background-color:#ffc0cb;" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <!-- Dropdown Menu Header -->
      <div class="dropdown ms-5 me-5 pe-2">
        <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/Safiraslw.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong><?php echo $_SESSION['Username']; ?></strong>
        </a>
        <ul class="dropdown-menu text-small shadow" style="background-color:#ffc0cb;" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="profile">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="proses/logout.php">Sign out</a></li>
        </ul>
      </div>
      <!-- Akhir Dropdown -->
    </div>
  </div>
</nav>
<!-- Akhir Header -->