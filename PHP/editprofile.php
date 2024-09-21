
<?php
session_start();
include 'config.php';

if (!empty($_SESSION['id'])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM signup WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $newUsername = $_POST["new_username"];
        $newPassword = $_POST["new_password"];
        $newEmail = $_POST["new_email"];
        $newNumber = $_POST["new_number"];

        $updateQuery = "UPDATE signup SET username = '$newUsername', password = '$newPassword', email = '$newEmail', number = '$newNumber' WHERE id = $id";
        if (mysqli_query($conn, $updateQuery)) {
            
            header("Location: profile.php");
            exit;
        } else {
            $error = "Error updating user data: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h1>Edit Profile</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="new_username">Username</label>
            <input type="text" class="form-control" id="new_username" name="new_username" value="<?php echo $row['username']; ?>">
        </div>
        <div class="form-group">
            <label for="new_password">Password</label>
            <input type="text" class="form-control"  name="new_password" value="<?php echo $row['password']; ?>">
        </div>
        <div class="form-group">
            <label for="new_email">Email</label>
            <input type="email" class="form-control" name="new_email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label for="new_number">number</label>
            <input type="number" class="form-control"  name="new_number" value="<?php echo $row['number']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>
</html>
