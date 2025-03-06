<?php
  $sumNotas = array_reduce($avaliacoes, function($carry, $a){
    return ($carry ?? 0) + $a->nota;
  }) ?? 0;

  $sumNotas = round($sumNotas / 5);

  $notaFinal = str_repeat('⭐', $sumNotas);
?>

<div class="w p-2 rounded border-stone-800 bg-stone-900 border-2">
  <div class="flex">
    <div class="w-1/3">imagem</div>
    <div class="space-y-1">
      <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
      <div class="text-xs italic"><?= $livro->autor ?></div>
      <div class="text-xs italic">
        <?=$notaFinal?>(<?=count($avaliacoes)?> avaliações)
      </div>
    </div>
  </div>
  <div class="text-sm mt-2">
    <?= $livro->descricao ?>
  </div>
</div>

<h2>Avaliações</h2>

<div class="grid grid-cols-4 gap-4">
  <div class="col-span-3 gap-4 grid">

  <?php foreach($avaliacoes as $avaliacao): ?>
  
    <div class="border border-stone-700 rounded">
      <?= $avaliacao->avaliacao ?>
      <?=  
        $nota = str_repeat('⭐', $avaliacao->nota);
      ?>
    </div>

  <?php endforeach; ?>
  </div>

  <div>
    <?php if (auth()): ?>
      <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Me conte o que achou!</h1>
        <form action="/avaliacao-criar" method="POST" class="p-4 space-y-4">
          <?php if ($validacoes = flash()->get('validacoes')):  ?>
            

            <div class="border-2 border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded">
              <ul>
                <li>deu ruim</li>

                <?php foreach ($validacoes as $validacao): ?>

                  <li><?= $validacao ?></li>

                <?php endforeach; ?>
              </ul>
            </div>

          <?php endif; ?>

          <div class="flex flex-col">
            <input
              type="text"
              name="livro_id"
              value="<?= $livro->id ?>"
              hidden 
            />

            <label for="" class="text-stone-400 mb-1">
              Avaliação
            </label>
            <textarea
              class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1"
              name="avaliacao"></textarea>
          </div>

          <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1">
              nota
            </label>
            <select
              class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1"
              name="nota">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <button type="submit" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded hover:bg-stone-800 transition-all">Salvar</button>
        </form>
      </div>
    <?php endif; ?>
  </div>
</div>
</div>