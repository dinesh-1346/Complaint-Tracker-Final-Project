<?php include '../includes/header.php'; ?>
<div class="container mt-5">
  <h2>Register</h2>
  <form action="../actions/register_action.php" method="POST">
    <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
<?php include '../includes/footer.php'; ?>
