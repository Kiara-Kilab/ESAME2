<?php
// ====== partials/footer.php ======
?>
<footer>
  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> - KiLab Web Lab |
      <a href="privacy-policy.php">Privacy Policy</a>
    </p>
  </div>
</footer>

<!-- Menu toggle script -->
<script>
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  }
</script>

</body>
</html>
