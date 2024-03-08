<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* .welcome{
        background-color: rgb(255, 255, 255) ;
        box-shadow: 0px 8px 18px 5px rgb(0, 0, 0);
        width: 450px;
        height: 300px;
        text-align: center;
        margin-left: 490px;
        margin-top: 230px;
    }
    .login{
        margin-top: 40px;
        color: #000000;
        text-transform: uppercase;
        font-weight: bold;
       
    }
    input{
        font-size: larger;

        font-family:'Times New Roman', Times, serif;
        margin-left: 15px;
        text-transform: lowercase;
    }
    .lo{
        width: 120px;
        height: 40px;
        margin-top: 18px;

        margin-right: 20px;
    }
    .si{
        width: 120px;
        height: 40px;
        margin-top: 20px;
        margin-left: 40px;
    }
    button{
        color: wheat;
        background-color: #8e5252;
        font-weight: bolder;
    }
    .lo:hover,.si:hover{
        color: white;
    background-color: #000000;
    } */
    
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
  width: 106%;
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
  <form action="loginprocess.php" method="POST">
  <h2>User Login</h2>

    <label for="username">Username:</label>
    <input type="text" id="username"  name="n1" required><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="p1" required>
    
    <button type="submit" name="btn1">Login</button>
  <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

  </form>

</body> 
</html>