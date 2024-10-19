<!DOCTYPE html>
<html lang="en">
<head class="h-full">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Bayucaraka | {{ $title }}</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full overflow-x-hidden bg-white" style="background-color: rgba(30, 35, 40, var(--tw-bg-opacity));">
  <div class="min-h-full ">
    <div id="loading-screen" class="fixed inset-0 w-full h-full bg-[rgba(30,35,40,var(--tw-bg-opacity))] flex items-center justify-center z-50">
      <div class="loading-container">
        <div class="loading-ring"></div>
        <img src="img/logos.webp" alt="Logo" class="logo">
      </div>
    </div>
    <x-navbar></x-navbar>
  
    {{-- <x-header>{{ $title }}</x-header> --}}
    <main>
      <div class="bg-cover bg-center" class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>
  
<script>
  window.addEventListener('load', function() {
    setTimeout(function() {
      const loadingScreen = document.getElementById('loading-screen');
      loadingScreen.style.display = 'none';
  }, 500);
  function lockHorizontalScroll() {
    document.body.style.overflowX = 'hidden';
  }
  lockHorizontalScroll();
});
</script>
</body>
</html>