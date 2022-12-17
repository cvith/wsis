<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>WSIS | SignUp</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!--head-->
    <div class="header">
        <img src="../waterDropLogo.png" height="90px" width="640px" alt="Logo" class="center">
    </div>

    <div class="content">

        <div class="column">
            <div class="square">

                <table class="container">
                    <br>
                    <h2 style="text-align: center; color: #187efa;">Register</h2>
                    <form>
                        <tr>
                            <td>
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your first name here..">
                            </td>
                            <td>
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name here..">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="uname">Username</label>
                                <input type="text" id="uname" name="uname" placeholder="ex:- chamu01">
                            </td>
                            <td>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="ex:- abcd@some.lk">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="Telephone Number">
                            </td>
                            <td>
                                <label for="province">Province</label>
                                <select id="province" name="province">
                                    <option value="Central Province">Central Province</option>
                                    <option value="Eastern Province">Eastern Province</option>
                                    <option value="Northern Province">Northern Province</option>
                                    <option value="Southern Province">Southern Province</option>
                                    <option value="Western Province">Western Province</option>
                                    <option value="North Western Province">North Western Province</option>
                                    <option value="North Central Province">North Central Province</option>
                                    <option value="Uva Province">Uva Province</option>
                                    <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="nic">NIC</label>
                                <input type="text" id="nic" name="nic" placeholder="National Identity Card Number">
                            </td>
                            <td>
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" name="dob">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password">
                            </td>
                            <td>
                                <label for="confpassword">Confirm Password</label>
                                <input type="password" id="confpassword" name="confpassword">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="address">Postal Address</label>
                                <textarea id="address" name="address" rows="4" cols="50">
                            </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Register">
                            </td>
                            <td>
                                <p>Already have an account? <a href="../index.php">Login</a></p>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>

    </div>

    <script src="app.js"></script>
</body>

</html>