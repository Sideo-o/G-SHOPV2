<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - G-Shop</title>

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
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
          <li class="nav-item"><a class="nav-link active" href="cart.php"><i class="bi bi-cart"></i> Cart <span id="cartCount" class="badge bg-success ms-1">0</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="py-5">
    <div class="container">
      <h2 class="mb-4">Your Cart</h2>
      <div id="cartContainer">
        <!-- Cart items will be rendered here by scripts.js -->
        <div class="row">
          <div class="col-md-8">
            <div id="cartItems" class="mb-3">
              <div class="card p-4" id="emptyCartNotice">
                <div class="card-body text-muted">Your cart is empty. Browse our <a href="products.php">products</a> to add GPUs.</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3 bg-dark text-light" id="orderSummary">
              <h5>Order Summary</h5>
              <div class="d-flex justify-content-between"><span>Subtotal</span><strong id="summarySubtotal">$0.00</strong></div>
              <div class="d-flex justify-content-between"><span>Shipping</span><small class="text-muted">Calculated at checkout</small></div>
              <hr>
              <div class="d-flex justify-content-between"><span>Total</span><strong id="summaryTotal">$0.00</strong></div>
              <div class="mt-3">
                <button id="checkoutBtn" class="btn btn-success w-100 mb-2">Proceed to Checkout</button>
                <button id="clearCartBtn" class="btn btn-outline-secondary w-100">Clear Cart</button>
              </div>
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

  <!-- Login Modal -->
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
              <form id="loginForm5">
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control dark-input" id="loginEmail5"></div>
                <div class="mb-3 position-relative"><label class="form-label">Password</label>
                  <div class="input-group"><input type="password" class="form-control dark-input" id="loginPassword5"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#loginPassword5"><i class="bi bi-eye"></i></button></div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-3"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-success">Login</button></div>
              </form>
            </div>
            <div class="tab-pane" id="pane-register">
              <h4 class="mb-3">Create account</h4>
              <form id="registerForm5">
                <div class="row g-2 mb-3"><div class="col-md-6"><label class="form-label">First Name</label><input type="text" class="form-control dark-input"></div><div class="col-md-6"><label class="form-label">Last Name</label><input type="text" class="form-control dark-input"></div></div>
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control dark-input"></div>
                <div class="mb-3 d-flex align-items-center gap-2"><div class="phone-prefix">+63</div><input type="tel" class="form-control dark-input" placeholder="9123456789"></div>
                <div class="mb-3 position-relative"><label class="form-label">Password</label><div class="input-group"><input type="password" class="form-control dark-input" id="regPassword5"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword5"><i class="bi bi-eye"></i></button></div></div>
                <div class="mb-3 position-relative"><label class="form-label">Re-type Password</label><div class="input-group"><input type="password" class="form-control dark-input" id="regPassword55"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword55"><i class="bi bi-eye"></i></button></div></div>
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
