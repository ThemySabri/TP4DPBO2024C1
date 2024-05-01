<?php
include "model.php"; // Include model file

class Controller
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new MemberModel($conn);
    }

    public function createMember($name, $email, $phone)
    {
        return $this->model->addMember($name, $email, $phone);
    }

    public function getMemberById($id)
    {
        return $this->model->getMemberById($id);
    }

    public function updateMember($id, $name, $email, $phone)
    {
        return $this->model->updateMember($id, $name, $email, $phone);
    }

    public function deleteMember($id)
    {
        return $this->model->deleteMember($id);
    }
}
