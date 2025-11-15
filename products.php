<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - G-Shop</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">G-Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php"><i class="bi bi-cart"></i> Cart <span id="cartCount" class="badge bg-success ms-1">0</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="text-center text-white py-5 bg-dark" style="background:url('https://images.unsplash.com/photo-1593642532973-d31b6557fa68?q=80&w=1800&auto=format&fit=crop&ixlib=rb-4.0.3&s=5e3f9a8f8f3f') center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">Shop GPUs</h1>
      <p class="lead">Browse our catalog of high-performance graphics cards</p>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">All GPUs</h2>
      <div class="row g-4">
        <!-- Repeat card example -->
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3f3d6?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=8b3a" class="card-img-top" alt="GPU">
            <div class="card-body">
              <h5 class="card-title">GeForce RTX 4090</h5>
              <p class="card-text">Top-tier performance for 4K gaming and AI workloads.</p>
              <p class="card-text text-green">In stock</p>
              <p class="card-text fw-bold">$1,599.00</p>
              <button class="btn btn-primary w-100 add-to-cart" data-id="4090" data-name="GeForce RTX 4090" data-price="1599" data-img="https://images.unsplash.com/photo-1541807084-5c52b6b3f3d6?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=8b3a">Add to Cart</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1547829670-20c3d1d6e3e8?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=7c3a" class="card-img-top" alt="GPU">
            <div class="card-body">
              <h5 class="card-title">Radeon RX 7900 XT</h5>
              <p class="card-text">Great value and excellent raster performance.</p>
              <p class="card-text text-muted">Limited</p>
              <p class="card-text fw-bold">$899.00</p>
              <button class="btn btn-primary w-100 add-to-cart" data-id="7900xt" data-name="Radeon RX 7900 XT" data-price="899" data-img="https://images.unsplash.com/photo-1547829670-20c3d1d6e3e8?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=7c3a">Add to Cart</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1527430253228-e93688616381?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=1a2b" class="card-img-top" alt="GPU">
            <div class="card-body">
              <h5 class="card-title">GeForce RTX 4070 Ti</h5>
              <p class="card-text">Balanced performance for 1440p gaming and creators.</p>
              <p class="card-text text-green">In stock</p>
              <p class="card-text fw-bold">$799.00</p>
              <button class="btn btn-primary w-100 add-to-cart" data-id="4070ti" data-name="GeForce RTX 4070 Ti" data-price="799" data-img="https://images.unsplash.com/photo-1527430253228-e93688616381?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=1a2b">Add to Cart</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2025 G-Shop | Demo GPU marketplace</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

  <!-- Login / Register Modal (shared) -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content modal-dark">
        <div class="modal-header border-0 pb-0">
          <ul class="nav nav-tabs modal-tabs" role="tablist">
            <li class="nav-item"><button class="nav-link active text-green" data-action="show-login">Login</button></li>
            <li class="nav-item"><button class="nav-link" data-action="show-register">New User</button></li>
          </ul>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="tab-content">
            <div class="tab-pane active" id="pane-login">
              <h4 class="mb-3">Welcome back</h4>
              <form id="loginForm2">
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control dark-input" id="loginEmail2"></div>
                <div class="mb-3 position-relative"><label class="form-label">Password</label>
                  <div class="input-group"><input type="password" class="form-control dark-input" id="loginPassword2"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#loginPassword2"><i class="bi bi-eye"></i></button></div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-3"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-success">Login</button></div>
              </form>
            </div>
            <div class="tab-pane" id="pane-register">
              <h4 class="mb-3">Create account</h4>
              <form id="registerForm2">
                <div class="row g-2 mb-3"><div class="col-md-6"><label class="form-label">First Name</label><input type="text" class="form-control dark-input"></div><div class="col-md-6"><label class="form-label">Last Name</label><input type="text" class="form-control dark-input"></div></div>
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control dark-input"></div>
                <div class="mb-3 d-flex align-items-center gap-2"><div class="phone-prefix">+63</div><input type="tel" class="form-control dark-input" placeholder="9123456789"></div>
                <div class="mb-3 position-relative"><label class="form-label">Password</label><div class="input-group"><input type="password" class="form-control dark-input" id="regPassword2"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword2"><i class="bi bi-eye"></i></button></div></div>
                <div class="mb-3 position-relative"><label class="form-label">Re-type Password</label><div class="input-group"><input type="password" class="form-control dark-input" id="regPassword22"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword22"><i class="bi bi-eye"></i></button></div></div>
                <div class="d-flex justify-content-end gap-2 mt-3"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-success">Create account</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
