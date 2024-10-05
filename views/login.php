<?php
    session_start();
    include '../config/conection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = 'SELECT * FROM students WHERE user = ?';
        $prepare = $conexion->prepare($sql);
        $prepare->bind_param('s', $user);
        $prepare->execute();
        $student = $prepare->get_result();

        if($student->num_rows > 0){
            $data = $student->fetch_assoc();
            if (password_verify($password, $data['password'])) {
                $_SESSION['user'] = $user;
                header('Location: panel.php');
                exit();
            } else {
                $error = 'Incorrect password';
            }
        } else {
            $error = 'Student not found';
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="user" class="form-label">User</label>
                    <input type="text" class="form-control" required name="user">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" required name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>
                <?php if(!empty($error)): ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>