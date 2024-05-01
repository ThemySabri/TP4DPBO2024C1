<?php
class MemberModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addMember($name, $email, $phone)
    {
        $q = "INSERT INTO `mvc`(`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
        return mysqli_query($this->conn, $q);
    }

    public function getMemberById($id)
    {
        $sql = "SELECT * FROM mvc WHERE id='$id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updateMember($id, $name, $email, $phone)
    {
        $sql = "UPDATE mvc SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
        return $this->conn->query($sql);
    }

    public function deleteMember($id)
    {
        $sql = "DELETE FROM mvc WHERE id='$id'";
        return $this->conn->query($sql);
    }
}
