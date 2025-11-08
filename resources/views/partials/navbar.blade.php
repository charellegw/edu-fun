<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
      <img src="{{ asset('images/logo/logo.png') }}" alt="EduFun Logo" width="70" height="40" class="me-2">
      <span class="fs-5 ">EDUFUN</span>
    </a>

    <!-- Toggle (for mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center gap-3">
        <li class="nav-item">
          <a class="nav-link fw-semibold text-dark" href="/">Home</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-semibold text-primary" href="#" id="categoryDropdown"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="categoryDropdown">
            <li><a class="dropdown-item" href="/category/data-science">Data Science</a></li>
            <li><a class="dropdown-item" href="/category/software-engineering">Software Engineering</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold text-dark" href="/writers">Writers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold text-dark" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold text-dark" href="/popular">Popular</a>
        </li>
      </ul>
    </div>
  </div>
</nav>