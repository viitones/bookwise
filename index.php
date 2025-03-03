<?php

  require "models/livro.php";

  require 'Validacao.php';

  require "models/usuario.php";

  session_start();

  require "Flash.php";

  require "functions.php";
  
  $config = require"config.php";

  require "database.php";

  require "routes.php";
