
<div class="mt-6 grid grid-cols-2 gap-2">
  <div class="border-2 border-stone-700 rounded">
    <form action="" class="p-4 space-y-4">
      <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-1">
          Email
        </label>
        <input 
          type="email" 
          class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar"
          name="email"
          required
        />        
      </div>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-1">
          Senha
        </label>
        <input 
          type="password" 
          class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar"
          name="password"
          required
        />        
      </div>
      <button type="submit" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded hover:bg-stone-800 transition-all">Logar</button>
    </form>
  </div>

  <div class="border-2 border-stone-700 rounded">
    <form method="POST" action="/registrar" class="p-4 space-y-4">
      <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>

      <?php if( strlen($mensagem) > 0 ):  ?>

        <div class="border-2 border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded">
          <?= $mensagem ?>
        </div>

      <?php endif; ?>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-1">
          Nome
        </label>
        <input 
          type="text" 
          class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar"
          name="nome"
          required
        />        
      </div>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-1">
          Email
        </label>
        <input 
          type="email" 
          class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar"
          name="email"
          required
        />        
      </div>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-1">
          Confirme seu email
        </label>
        <input 
          type="email" 
          class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar"
          name="email_confirmacao"
          required
        />        
      </div>

      <div class="flex flex-col">
        <label for="" class="text-stone-400 mb-1">
          Senha
        </label>
        <input 
          type="password" 
          class="border-stone-800 border-2 bg-stone-900 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar"
          name="password"
          required
        />        
      </div>

      <button type="reset" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded hover:bg-stone-800 transition-all">Cancelar</button>
      <button type="submit" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded hover:bg-stone-800 transition-all">Registrar</button>
    </form>
  </div>
</div>