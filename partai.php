<?php

include_once("Models/Templates.class.php");
include_once("Models/DB.class.php");
include_once("Controllers/Partai.controllers.php");

$partai = new PartaiController();

if (isset($_POST['add'])) {
    $partai->add($_POST);
}

else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $partai->delete($id);
}

else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $partai->detail($id);
}

else if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $partai->edit($id, $_POST);
}

else{
    $partai->index();
}