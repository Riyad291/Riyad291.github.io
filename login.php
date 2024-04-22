<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            max-width: 100%;
            text-align: center;
            margin: 0 20px;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div>
            <h1>Student Portal</h1>
            <h2>Login</h2>
            <form action="connectstulogin.php" method="post">
                <label for="student_username">Username:</label>
                <input type="text" id="student_username" name="student_username"> <!-- Fix name attribute -->
            
                <label for="student_password">Password:</label>
                <input type="password" id="student_password" name="student_password"> <!-- Fix name attribute -->
            
                <input type="submit" name="login_submit" value="Login"> <!-- Add name attribute -->
            </form>

        </div>

        <div>
            <h1>Professor Portal</h1>
            <h2>Login</h2>
            <form action="professor.php" method="post">
                <label for="professor_username">Username:</label>
                <input type="text" id="professor_username" name="username">

                <label for="professor_password">Password:</label>
                <input type="password" id="professor_password" name="password">

                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
