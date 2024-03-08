<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <script src="signup.js" defer></script>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image:url(blogin.jpg);
  background-repeat:no-repeat;
  background-size:cover;
}

h2 {
  text-align: center;
  color: #333;
}

form {
  background-color: #fff;
  padding: 20px 40px;
  border-radius: 8px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  width: 300px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #555;
}

input {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: blue;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

    </style>
</head>
<body>
  <form action="userlogin.php" method="POST">
  <h2>Signup here!</h2>

    <label for="username">Username:</label>
    <input type="text" id="username" name="n1" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="p1" required>
    
    <button type="submit" name="btn1">Sign Up</button>
  <p>I have an account? <a href="new.php">LogIn</a></p>

  </form>
</body>
</html>
