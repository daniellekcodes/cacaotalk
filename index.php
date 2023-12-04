<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            font-family: 'Courier New', Courier, monospace;
            font-size: 1rem;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 800px;
            height: 600px;

        }

        .left {
            background-color: rgba(123, 0, 255, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            color: white;
            padding: 20px;
        }

        .right {
            background-color: rgba(255, 255, 255, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            padding: 20px;

        }

        form {
            display: flex;
            flex-direction: column;
        }

        .signup-btn {
            background: rgba(123, 0, 255, 1);
            color: white;
            border-radius: 10px;
            border: none;
            padding: 5px 10px;
            margin: 20px;
        }

        .signin-btn {

            background: white;
            border-radius: 10px;
            border: none;
            padding: 5px 10px;
            margin: 20px;

        }


        /* background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(123,0,255,1) 100%); */
    </style>
    <title>Sign Up</title>
</head>

<body>
    <div class="main">
        <div class="left">
            <h1>Welcome Back</h1>
            <p>Already have an account sign in and begin chatting with your friends!</p>
            <a href="signIn.php"><button type="submit" class="signin-btn">Sign In</button></a>
        </div>

        <div class="right">
            <h1>Create Account</h1>
            <div class="form-section">
                <form action="createAccount.php" method="post">
                    <input type="text" name="username" id="username" placeholder="username" required>
                    <input type="text" name="email" id="email" placeholder="email address" required>
                    <input type="text" name="password" id="password" placeholder="password" required>
                    <input type="text" name="passwordConfirm" id="passwordConfirm" placeholder="password confirmation" required>
                    <button type="submit" class="signup-btn">Sign Up</button>
                </form>
            </div>
        </div>




    </div>

</body>

</html>