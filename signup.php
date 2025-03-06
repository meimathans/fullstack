<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.signup-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}
</style>

    </head>

<body>
    <center>
	 
    <center>
	  <form action="connection.php" method="POST" class="was-validated" >
    
    </center>
    <div class="signup-container">
        <h2>Signup Form</h2>
        <form action="#" method="post">
            <label>Username</label>
            <input type="text" id="user" name="name" required>

            <label>Email  id </label>
            <input type="email" id="email" name="email" required>

            <label>Password</label>
            <input type="password" id="password" name="password" required>


            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
    </center>
   
           
</body>
</html>
