<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <style>
        body {
            background-image: url("images/a.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }

        header {
            height: 15vh;
        }

        header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: absolute;
            right: 10%;
            top: 7%;
        }

        header ul li {
            display: inline-block;
        }

        header ul li a {
            text-decoration: none;
            color: whitesmoke;
            margin-right: 25%;
            padding: 20px;
            font-size: 1.5rem;
        }

        header ul li a:hover {
            color: rgb(222, 245, 16);
        }

        header h1 {
            color: rgb(222, 245, 16);
            position: absolute;
            top: 1%;
            font-size: 2.5rem;
        }

        .hero h2 {
            color: whitesmoke;
            font-size: 2rem;
            margin-top: 5%;
        }

        .hero form {
            margin-top: 5%;
            background-color: whitesmoke;
            padding: 1%;
            border-radius: 5px;
            width: 40%;
        }

        input[type=text],
        input[type=password] {
            width: 90%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5%;
            background: #f1f1f1c0;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }


        /* Set a style for all buttons */

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }


        /* Extra styles for the cancel button */

        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }


        /* Float cancel and signup buttons and add an equal width */

        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }


        /* Add padding to container elements */

        .container {
            padding: 16px;
        }


        /* Clear floats */

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }


        /* Change styles for cancel button and signup button on extra small screens */

        @media screen and (max-width: 300px) {

            .cancelbtn,
            .signupbtn {
                width: 100%;
            }

            /*header ul li a {
        text-decoration: none;
        color: whitesmoke;
        position: absolute;
        top: 5%;
        margin-left: 0%;
        padding: 20px;
        font-size: 1.5rem;
    } */
        }
    </style>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Travellium</h1>
        <ul>
            <li><a href="login.html">Home</a></li>
            <li><a href="news.asp">News</a></li>
            <li><a href="contact.asp">Contact</a></li>
            <li><a href="about.asp">About</a></li>
        </ul>
    </header>
    <main>
        <div class="hero">
            <h2>Sign Up Today to get special deals on our vacation offers.</h2>
            <form action="welcome.php" method="post" style="border:1px solid #ccc">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Enter Your Full Name" name="name" required>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <label><br>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button" class="cancelbtn cancel">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>