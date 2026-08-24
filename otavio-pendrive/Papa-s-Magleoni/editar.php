<?php header('Location: crud.php?entity=pizzas&action=edit&id='.(int)($_GET['id']??0)); exit;
