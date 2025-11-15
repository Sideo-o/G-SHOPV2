<?php
$sent = false;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');
  // This is a demo — in a real app you'd send an email or store the message.
  $sent = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - G-Shop</title>

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
          <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php"><i class="bi bi-cart"></i> Cart <span id="cartCount" class="badge bg-success ms-1">0</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="py-5">
    <div class="container">
      <h2 class="mb-4">Contact Us</h2>

      <?php if($sent): ?>
        <div class="alert alert-success">Thank you, your message has been received.</div>
      <?php endif; ?>

      <form method="post" action="contact.php">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send Message</button>
      </form>

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
              <form id="loginForm4">
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control dark-input" id="loginEmail4"></div>
                <div class="mb-3 position-relative"><label class="form-label">Password</label>
                  <div class="input-group"><input type="password" class="form-control dark-input" id="loginPassword4"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#loginPassword4"><i class="bi bi-eye"></i></button></div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-3"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-success">Login</button></div>
              </form>
            </div>
            <div class="tab-pane" id="pane-register">
              <h4 class="mb-3">Create account</h4>
              <form id="registerForm4">
                <div class="row g-2 mb-3"><div class="col-md-6"><label class="form-label">First Name</label><input type="text" class="form-control dark-input"></div><div class="col-md-6"><label class="form-label">Last Name</label><input type="text" class="form-control dark-input"></div></div>
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control dark-input"></div>
                <div class="mb-3 d-flex align-items-center gap-2"><div class="phone-prefix">+63</div><input type="tel" class="form-control dark-input" placeholder="9123456789"></div>
                <div class="mb-3 position-relative"><label class="form-label">Password</label><div class="input-group"><input type="password" class="form-control dark-input" id="regPassword4"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword4"><i class="bi bi-eye"></i></button></div></div>
                <div class="mb-3 position-relative"><label class="form-label">Re-type Password</label><div class="input-group"><input type="password" class="form-control dark-input" id="regPassword44"><button class="btn btn-outline-secondary btn-eye" type="button" data-target="#regPassword44"><i class="bi bi-eye"></i></button></div></div>
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
