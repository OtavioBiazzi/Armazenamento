<?php header('Location: crud.php?entity=pizzas&action=delete&id='.(int)($_GET['id']??0)); exit;
