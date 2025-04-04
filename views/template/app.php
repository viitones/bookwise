<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">
  <header class="bg-stone-900 mb-6">
    <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
      <div class="font-bold text-xl tracking-wide">Book Wise</div>

      <ul class="flex space-x-4 font-bold">
        <li><a href="/" class="text-lime-500">Explorar</a></li>
        <?php if (auth()): ?>
        <li><a href="/meus-livros" class="hover:underline">Meus livros</a></li>
        <?php endif; ?>
      </ul>
      <ul>
        <?php if (auth()): ?>
          <li><a href="/logout" class="hover:underline">Oi, <?= auth()->nome ?></a></li>
        <?php else: ?>
          <li><a href="/login" class="hover:underline">Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>



  <main class="mx-auto px-2 max-w-screen-lg space-y-10">

    <?php if ($mensagem = flash()->get('mensagem')): ?>

      <div class="border-2 border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded">
        <?= $mensagem ?>
      </div>

    <?php endif; ?>


    <?php
    require "views/{$view}.view.php"
    ?>

  </main>
</body>

</html>