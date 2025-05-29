<header>
  <div class="container">
    <a href="index.php">
      <img src="img/logo.png" alt="Logo" class="logo">
    </a>

    <!-- Checkbox invisibile per attivare il menu -->
    <input type="checkbox" id="menu-toggle" class="menu-checkbox">

    <!-- Icona hamburger -->
    <label for="menu-toggle" class="menu-toggle">
      <i class="fas fa-bars"></i>
    </label>

    <!-- Menu di navigazione -->
    <nav>
      <ul id="menu">
        <li><a href="portfolio.php" title="Vai al Portfolio">Portfolio</a></li>
        <li><a href="contatto.php" title="Vai alla pagina Contatti">Contatti</a></li>
      </ul>
    </nav>
  </div>

  <!-- JavaScript per rendere interattivo il menu -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const toggle = document.getElementById('menu-toggle');
      const menu = document.getElementById('menu');

      toggle.addEventListener('change', () => {
        menu.classList.toggle('active', toggle.checked);
      });
    });
  </script>
</header>


