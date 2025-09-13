<nav class="bg-gradient-to-r from-green-600 to-emerald-500 shadow-md">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
    <a href="index.php" class="text-white text-2xl font-bold tracking-wide">Client Panel</a>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center space-x-6">
      <a href="project_offers_submitted.php" class="text-white hover:text-gray-100">Project Offers Submitted</a>
      <a href="profile.php" class="text-white hover:text-gray-100">Profile</a>
      <a href="core/handleForms.php?logoutUserBtn=1" class="text-white hover:text-gray-100">Logout</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false"
            class="md:hidden text-white focus:outline-none">
      <svg class="hamburger w-6 h-6 block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg class="close w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu (hidden by default) -->
  <div id="mobile-menu" class="md:hidden hidden px-6 pb-4">
    <ul class="space-y-2">
      <li><a href="project_offers_submitted.php" class="block text-white hover:text-gray-100">Project Offers Submitted</a></li>
      <li><a href="profile.php" class="block text-white hover:text-gray-100">Profile</a></li>
      <li><a href="core/handleForms.php?logoutUserBtn=1" class="block text-white hover:text-gray-100">Logout</a></li>
    </ul>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (!btn || !menu) return;

    const hamburger = btn.querySelector('.hamburger');
    const closeIcon = btn.querySelector('.close');

    btn.addEventListener('click', function () {
      const isNowHidden = menu.classList.toggle('hidden');
      if (hamburger) hamburger.classList.toggle('hidden');
      if (closeIcon) closeIcon.classList.toggle('hidden');
      btn.setAttribute('aria-expanded', String(!isNowHidden));
    });
  });
</script>