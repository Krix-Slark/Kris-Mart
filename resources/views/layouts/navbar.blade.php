<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm">
  <div class="container flex-column">

    <!-- Top row -->
    <div class="d-flex justify-content-between align-items-center w-100">
      <!-- Left: Brand -->
      <a href="{{ asset('/') }}" class="navbar-brand fw-bold fs-2 m-0"
        style="font-family: 'Poppins', sans-serif;">Kris-Mart</a>

      <!-- Center: Search icon -->
      <div class="d-flex justify-content-center flex-grow-1">
        <i id="searchToggle" class="fas fa-search fs-4 text-dark" style="cursor:pointer;"></i>
      </div>

      <!-- Right: Icons -->
      <div class="d-flex align-items-center gap-3">
        <a href="#" class="icon"><i class="fas fa-store fs-4 me-3"></i></a>
        <a href="#" class="icon"><i class="fas fa-shopping-cart fs-4 me-3"></i></a>
        <a href="#" class="icon"><i class="fas fa-user fs-4 me-3"></i></a>
      </div>
    </div>

<!-- Second row: Navigation links -->
<div class="collapse navbar-collapse w-100 mt-1" id="mainNav">
  <div class="d-flex flex-column flex-lg-row w-100 justify-content-between align-items-center">

    <!-- Left-aligned Promo -->
    <div class="d-flex flex-column align-items-start align-items-lg-start mb-2 mb-lg-0">
      <a class="nav-link text-dark  fs-5" href="#promo">Promo</a>
    </div>

    <!-- Center links -->
    <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5 align-items-center mb-2 mb-lg-0">
      <a class="nav-link text-dark fs-5 me-lg-5" href="#about">About Us</a>
      <a class="nav-link text-dark fs-5 ms-lg-5 me-lg-5" href="#shop">Your Own Shop</a>
      <a class="nav-link text-dark fs-5 ms-lg-5" href="#luxury">Luxury</a>
    </div>

    <!-- Right-aligned Customer Care -->
    <div class="d-flex flex-column align-items-end align-items-lg-end">
      <a class="nav-link text-dark fs-5" href="#customer-care">Customer Care</a>
    </div>

  </div>
</div>


<!-- Navbar toggler button (add this inside your top row, near icons) -->
<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
  data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false"
  aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>


    <!-- Collapsible Search Box -->
    <div id="searchBox" class="search-collapse w-100" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
      <div class="mb-3">
        <input type="text" class="form-control w-50 custom-placeholder mx-auto fs-4" placeholder="Search">
      </div>
      <h5 class="mt-4 fs-4 fw-bold"> Trending Items </h5>
      <ul class="list-unstyled d-flex flex-row gap-4 mt-4 flex-wrap">
        <li><button class="btn btn-light shadow-sm">Skincare</button></li>
        <li><button class="btn btn-light shadow-sm">Handmade Accessories</button></li>
        <li><button class="btn btn-light shadow-sm">Hair Dryer</button></li>
        <li><button class="btn btn-light shadow-sm">Kitchen Appliances</button></li>
        <li><button class="btn btn-light shadow-sm">Makeup</button></li>
        <li><button class="btn btn-light shadow-sm">Perfume</button></li>
        <li><button class="btn btn-light shadow-sm">Handbags</button></li>
        <li><button class="btn btn-light shadow-sm">Watches</button></li>
        <li><button class="btn btn-light shadow-sm">Electronics Items</button></li>
        <li><button class="btn btn-light shadow-sm">IPhone 16 promax</button></li>
        <li><button class="btn btn-light shadow-sm">Macbook Air Pro 4</button></li>
        <li><button class="btn btn-light shadow-sm">Education Accessories</button></li>
      </ul>
    </div>

  </div>
</nav>

<!-- Category Buttons -->
<div class="container-fluid category-buttons mt-4 d-flex flex-wrap justify-content-center gap-3">
  <button class="btn btn-light px-4 py-2">Cosmetic</button>
  <button class="btn btn-light px-4 py-2">Food</button>
  <button class="btn btn-light px-4 py-2">Medicine</button>
  <button class="btn btn-light px-4 py-2">Clothing</button>
  <button class="btn btn-light px-4 py-2">Electronic</button>
  <button class="btn btn-light px-4 py-2">Top Up</button>
  <button class="btn btn-light px-4 py-2">Others</button>
  <button class="btn btn-light px-4 py-2">Delivery Job</button>
</div>