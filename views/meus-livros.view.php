<h1 class="font-bold text-lg">Meus Livros</h1>

<div class="grid grid-cols-4 gap-4">
  <div class="col-span-3 gap-4 flex flex-col">
    <?php foreach ($livros as $livro){
      require 'partials/_livro.php';
    } ?>
  </div>
  <div>
    <div class="border border-stone-700 rounded">
      <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro!</h1>
      <form action="/livro-criar" method="POST" class="p-4 space-y-4">
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
          <label for="" class="text-stone-400 mb-1">
            Titulo
          </label>
          <input
            class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1"
            name="titulo" />
        </div>

        <div class="flex flex-col">
          <label for="" class="text-stone-400 mb-1">
            Autor
          </label>
          <input
            class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1"
            name="autor" />
        </div>

        <div class="flex flex-col">
          <label for="" class="text-stone-400 mb-1">
            Descrição
          </label>
          <textarea
            class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1"
            name="descricao"></textarea>
        </div>

        <div class="flex flex-col">
          <label for="" class="text-stone-400 mb-1">
            Ano de lançamento
          </label>
          <select
            class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1"
            name="ano_de_lancamento">

            <?php foreach (range(1800, date('Y')) as $ano): ?>
              <option value="<?= $ano ?>">
                <?= $ano ?>
              </option>
            <?php endforeach; ?>

          </select>
        </div>
        <button type="submit" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded hover:bg-stone-800 transition-all">Salvar</button>
      </form>
    </div>
  </div>
</div>