<?php
    session_start();
    include "db_conn.php";

    if (isset($_POST['email']) && isset($_POST['password'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $ename = validate($_POST['email']);
        $pass = validate($_POST['password']);
        $conpass = validate($_POST['confpassword']);

        if (empty($ename)) {
            header("Location: sign_up.php?error=User Name is required");
            exit();
        } elseif (empty($pass)) {
            header("Location: sign_up.php?error=Password is required");
            exit();
        } elseif (empty($name)) {
            header("Location: sign_up.php?error=Name is required");
            exit();
        } elseif ($pass !== $conpass) {
            header("Location: sign_up.php?error=Password does not match");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email='$ename'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                header("Location: sign_up.php?error=User already exists");
                exit();
            } else {
                $sql = "INSERT INTO users (email, password, name) VALUES ('$ename', '$pass', '$name')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("Location: ../index.php?success=Sign up successful. Please log in.");
                    exit();
                } else {
                    header("Location: sign_up.php?error=Something went wrong. Please try again.");
                    exit();
                }
            }
        }
    } else {
        header("Location: sign_up.php");
        exit();
    }
?>