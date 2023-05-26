<?php

class Partai extends DB
{
    function getPartai()
    {
        $query = "SELECT * FROM partai";
        return $this->execute($query);
    }

    function getPartaiDetail($id)
    {
        $query = "SELECT * FROM partai where id_partai=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];

        $query = "INSERT INTO partai (name) VALUES ('$name')";
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM partai WHERE id_partai = '$id'";
        return $this->execute($query);
    }

    function update($id)
    {
        $name = $_POST['name'];
        $query = "UPDATE partai SET name = '$name' where id_partai = '$id'";
        return $this->execute($query);  
    }
}
