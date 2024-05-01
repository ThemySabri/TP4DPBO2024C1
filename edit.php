<?php
include "controller.php"; // Include controller file
include "connection.php"; // Include connection file

$controller = new Controller($conn);

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $result = $controller->updateMember($id, $name, $email, $phone);
  if ($result) {
    $success = "Member updated successfully";
  } else {
    $error = "Error updating member: " . $conn->error;
  }
}

$member = $controller->getMemberById($id);
$name = $member["name"];
$email = $member["email"];
$phone = $member["phone"];
?>

<!DOCTYPE html>
<html>

<head>
  <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Title</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">?</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="col-lg-6 m-auto">

    <form method="post">

      <br><br>
      <div class="card">

        <div class="card-header bg-warning">
          <h1 class="text-white text-center"> Update Member </h1>
        </div><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

        <label> NAME: </label>
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

        <label> EMAIL: </label>
        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

        <label> PHONE: </label>
        <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"> <br>

        <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

      </div>
    </form>
  </div>
</body>

</html>