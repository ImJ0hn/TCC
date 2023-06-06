<?php

session_start(); // Inicia a sessão (caso ainda não tenha sido iniciada)

session_destroy();

header("Location: ../login.php");


?>