<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <LI><A HREF="https://www.rvitm.edu.in/about/">ABOUT</A></LI>
                <li><a href="#">SERVICES</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>
            REGISTER
        </h1>
    

        <form class="form-container">

<form action="" method="post">
    <input type="text" name="name" required placeholder="enter your name">
    <input type="email" name="email" required placeholder="enter your email">
    <input type="text" name="usn" required placeholder="enter your usn">
    <input type="password" name="password" required placeholder="enter your password">
    <input type="password" name="cpassword" required placeholder="confirm ">
    <select name="user_type">
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select>
    <input type="submit" name="submit" value="register now" class="form-btn">
    <p>already have an account?<a href="login.php">login now</a></p>

</form>

    </div>
</body>
</html>