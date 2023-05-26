<?php

include_once("Models/Templates.class.php");
include_once("Models/DB.class.php");
include_once("Controllers/Members.controllers.php");

$members = new MembersController();

if (isset($_POST['add'])) {
    $members->add($_POST);
}

else if (!empty($_GET['tanda'])) {
    $members->detailPartai();
}

else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $members->delete($id);
}

else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $members->detail($id);
}

else if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $members->edit($id, $_POST);
}

else{
    $members->index();
}