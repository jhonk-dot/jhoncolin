<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {
$_SESSION['username'] = $user['username'];
header("Location: welcome.php");
exit();
} else {
echo "Usuario o contraseña incorrectos.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio de sesión</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="caja">
<h2>Iniciar sesión</h2>

<form action="login.php" method="post">
<label for="username">Usuario:</label>
<input type="text" name="username" required><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" required><br>
<button type="submit">Iniciar sesión</button>
<br>

</form>
<a href="register.php" style="text-decoration:none; margin-left: 90px; padding-top:20px;">Registrese</a>
</div>
</body>
</html>