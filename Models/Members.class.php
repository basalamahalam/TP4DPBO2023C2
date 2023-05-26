<?php

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT members.id, members.name, members.email, members.phone, members.join_date, partai.id_partai, partai.name FROM members INNER JOIN partai on members.id_partai = partai.id_partai";
        return $this->execute($query);
    }

    function getMembersDetail($id)
    {
        $query = "SELECT * FROM members where id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_partai = $data['id_partai'];

        $query = "INSERT INTO members (name, email, phone, id_partai) VALUES ('$nama', '$email', '$phone', '$id_partai')";
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM members WHERE id = '$id'";
        return $this->execute($query);
    }

    function update($id)
    {   

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id_partai = $_POST['id_partai'];
        $query = "UPDATE members SET name = '$name', email = '$email', phone ='$phone', id_partai = '$id_partai' WHERE id = '$id'";
        return $this->execute($query);
    }
}


?>