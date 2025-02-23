<?php

  $mensagem = $_GET['mensagem'] ?? '';

  view('login', compact('mensagem'));