<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Shop - Bootstrap</title>

  <!-- Bootstrap CSS (comment out to see plain HTML) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">G-Shop</a>
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
          <li class="nav-item"><a class="nav-link" href="cart.php"><i class="bi bi-cart"></i> Cart <span id="cartCount" class="badge bg-success ms-1">0</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="text-center text-white py-5 bg-dark" style="background:url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1800&auto=format&fit=crop&ixlib=rb-4.0.3&s=0a9b7b3b2d6c6a3b4f7b') center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">G-Shop — GPU Marketplace</h1>
      <p class="lead">High-performance GPUs for gaming, AI, and content creation</p>
    </div>
  </header>
  <!-- FEATURES -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 justify-content-center mb-4">
        <div class="col-md-10 text-center">
          <h2 class="mb-3">Why choose G-Shop?</h2>
          <p class="lead mb-0">We curate verified GPUs, offer tracked shipping, and stand by our products with dedicated support and warranty options.</p>
        </div>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-md-4">
          <div class="feature-box h-100 text-center">
            <h5>Fast Shipping</h5>
            <p>Get your GPU quickly with tracked shipping and secure packaging.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box h-100 text-center">
            <h5>Verified Stock</h5>
            <p>We only sell authentic, tested video cards from trusted vendors.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box h-100 text-center">
            <h5>Support & Warranty</h5>
            <p>Dedicated support and warranty options for peace of mind.</p>
          </div>
        </div>
      </div>

      <!-- Testimonials -->
      <div class="row g-4 align-items-center mb-5">
        <div class="col-md-8">
          <h3 class="mb-4">What our customers say</h3>
          <div class="row g-3">
            <div class="col-md-6">
              <div class="card testimonial p-3">
                <div class="card-body">
                  <p class="quote">"Bought an RTX 4090 for my workstation — incredible performance and arrived well packed. Support helped with setup quickly."</p>
                  <div class="author mt-3">— Alex P., AI Researcher</div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card testimonial p-3">
                <div class="card-body">
                  <p class="quote">"Great prices on used and new cards. The verification process gave me confidence buying a high-value part."</p>
                  <div class="author mt-3">— Maria S., Content Creator</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <h5 class="mb-3">Popular brands</h5>
          <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 brand-logos">
            <img src="https://seeklogo.com/images/N/nvidia-logo-1CDBB9C95E-seeklogo.com.png" alt="NVIDIA" style="height:36px;opacity:0.95">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/AMD_logo.svg" alt="AMD" style="height:32px;opacity:0.85">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Intel-logo.svg" alt="Intel" style="height:28px;opacity:0.75">
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="row justify-content-center mt-4">
        <div class="col-md-8">
          <div class="card newsletter p-4 text-center">
            <h4 class="mb-2">Get GPU deals & restock alerts</h4>
            <p class="mb-3 text-muted">Sign up for our newsletter to receive exclusive offers and stock notifications.</p>
            <form id="newsletterForm" class="d-flex justify-content-center gap-2 flex-column flex-sm-row">
              <input class="form-control dark-input" type="email" id="newsletterEmail" placeholder="you@example.com" style="max-width:420px">
              <button class="btn btn-success" type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured GPUs</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=5e3f9a8f8f3f" class="card-img-top" alt="NVIDIA RTX 4090">
            <div class="card-body">
              <h5 class="card-title">NVIDIA GeForce RTX 4090</h5>
              <p class="card-text">$1,599.00</p>
              <button class="btn btn-primary w-100 add-to-cart" data-id="4090" data-name="NVIDIA GeForce RTX 4090" data-price="1599" data-img="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=5e3f9a8f8f3f">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1610613918179-6b7f2e6aa2a3?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=1b6e8d7f2b9a" class="card-img-top" alt="AMD Radeon RX 7900 XTX">
            <div class="card-body">
              <h5 class="card-title">AMD Radeon RX 7900 XTX</h5>
              <p class="card-text">$999.00</p>
              <button class="btn btn-primary w-100 add-to-cart" data-id="7900xt" data-name="AMD Radeon RX 7900 XTX" data-price="999" data-img="https://images.unsplash.com/photo-1610613918179-6b7f2e6aa2a3?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=1b6e8d7f2b9a">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=3d8b4f6a1b2c" class="card-img-top" alt="NVIDIA RTX 4080">
            <div class="card-body">
              <h5 class="card-title">NVIDIA GeForce RTX 4080</h5>
              <p class="card-text">$1,199.00</p>
              <button class="btn btn-primary w-100 add-to-cart" data-id="4080" data-name="NVIDIA GeForce RTX 4080" data-price="1199" data-img="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=3d8b4f6a1b2c">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2025 G-Shop | Demo GPU marketplace</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

  <!-- Login / Register Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content modal-dark">
        <div class="modal-header border-0 pb-0">
          <ul class="nav nav-tabs modal-tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active text-green" id="tab-login" data-action="show-login" type="button">Login</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab-register" data-action="show-register" type="button">New User</button>
            </li>
          </ul>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="tab-content">
            <div class="tab-pane active" id="pane-login">
              <h4 class="mb-3">Welcome back</h4>
              <form id="loginForm">
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control dark-input" id="loginEmail" required>
                </div>
                <div class="mb-3 position-relative">
                  <label class="form-label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control dark-input" id="loginPassword" required>
                    <button class="btn btn-outline-secondary btn-eye" type="button" data-target="#loginPassword"><i class="bi bi-eye"></i></button>
                  </div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Login</button>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="pane-register">
              <h4 class="mb-3">Create account</h4>
              <form id="registerForm">
                <div class="row g-2 mb-3">
                  <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control dark-input" id="firstName">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control dark-input" id="lastName">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control dark-input" id="regEmail">
                </div>
                <div class="mb-3 d-flex align-items-center gap-2">
                  <div class="phone-prefix">+63</div>
                  <input type="tel" class="form-control dark-input" id="regPhone" placeholder="9123456789">
                </div>
                <div class="mb-3 position-relative">
                  <label class="form-label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control dark-input" id="regPassword">
                    <button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword"><i class="bi bi-eye"></i></button>
                  </div>
                </div>
                <div class="mb-3 position-relative">
                  <label class="form-label">Re-type Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control dark-input" id="regPassword2">
                    <button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword2"><i class="bi bi-eye"></i></button>
                  </div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Create account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>