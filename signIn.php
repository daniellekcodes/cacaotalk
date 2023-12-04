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

        .right {
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

        .left {
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

        .signin-btn {
            background: rgba(123, 0, 255, 1);
            color: white;
            border-radius: 10px;
            border: none;
            padding: 5px 10px;
            margin: 20px;
        }

        .signup-btn {

            background: white;
            border-radius: 10px;
            border: none;
            padding: 5px 10px;
            margin: 20px;

        }


        /* background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(123,0,255,1) 100%); */
    </style>
    <title>Sign In</title>
</head>

<body>
    <div class="main">

        <div class="left">
            <div class="form-section">
                <form action="checkSignIn.php" method="post">
                    <input type="text" name="username" id="username" placeholder="username" required>
                    <input type="text" name="password" id="password" placeholder="password" required>
                    <button type="submit" class="signin-btn">Sign In</button>
                </form>
            </div>
        </div>

        <div class="right">
            <h1>Hello</h1>
            <p>Not a member of the fun yet? Signin to chat with your friends.</p>
            <button type="submit" class="signup-btn">Sign up</button>
        </div>




    </div>

</body>

</html>