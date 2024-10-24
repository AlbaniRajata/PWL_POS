<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a href="{{ url('/profile') }}" class="btn btn-primary text-white nav-link mr-3">
              <i class="fas fa-user"></i> Profil
          </a>
      </li>
      <li class="nav-item">
          <a href="{{ url('logout') }}" class="btn btn-danger text-white nav-link" id="logout-link">
              <i class="fas fa-sign-out-alt"></i> Logout
          </a>
      </li>
      <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
  </ul>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const logoutLink = document.getElementById('logout-link');
  const logoutForm = document.getElementById('logout-form');

  logoutLink.addEventListener('click', function(e) {
      e.preventDefault();
      logoutForm.submit();
  });
});
</script>