<h1>Login page</h1>
<!-- <p>Enter your username and password to login</p> -->
<br>
<form name="login" method="POST" action="index.php?page=admin">
    <table>
        <tr>
            <td>Username:</td>
            <td><input name="username" type="text" maxlength="30" /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input name="password" type="password" maxlength="30" /></td>
        </tr>

        <?php
        if (isset($_POST['login']) && !isset($_SESSION['admin'])) {
        ?>
            <p><span class="error">Incorrect username or password
                </span>
            </p>

        <?php
        }
        ?>

        <tr>
            <td></td>
            <td><input type="submit" name="login" value="submit" /></td>
        </tr>
    </table>
</form>