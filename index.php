<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>WSIS | Login</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!--head-->
    <div class="header">
        <h1>WATER SUPPLY IMPEMENTATION SYSTEM</h1>
    </div>

    <div class="content">
        <div class="column_left">
            <div class="frame">
                <div class="image"></div>
            </div>
        </div>
        <div class="column_right">
            <div class="square">
                <br>
                <h2 style="text-align: center; color: rgba(0, 42, 180, 0.675);">Log in</h2>
                <form action="login.php" method="post">

                    <!--
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                    <?php } ?>-->

                    <div class="input-wrap">
                        <input type="text" id="uname" name="uname" class="input-field">
                        <label for="uname">Username</label>
                    </div>

                    <div class="input-wrap">
                        <input type="password" id="password" name="password" class="input-field">
                        <label for="password">Password</label>
                    </div>

                    <div class="input-wrap">
                        <select name="person" id="person" class="input-field" style="font-weight: bold; color:#6d6d6d;">
                            <option value="">--Select type from here--</option>
                            <option value="">Information Provider</option>
                            <option value="">Donor</option>
                            <option value="">Construction Company</option>
                            <option value="">Admin</option>
                        </select>
                    </div>

                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!--JavaScript file-->
    <script src="login.js"></script>
    
</body>

</html>