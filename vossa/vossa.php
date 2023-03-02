<?php
session_start();
if (isset($_SESSION['login'])) { 
		header("Location: http://www.vossawilwerk.nl/cv/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        div {
            width: 50%;
            max-width: 500px;
            margin: 0 auto;
            margin-top: 100px;
        }
        
        table {
            width: 100%;
            margin: 0 auto;
        }
        
        td {
            font-size: 30px;
        }
        
        #button {
            font-size: 24px;
            margin-top: 10px;
            cursor: pointer;
            background-color: aliceblue;
            border: 2px solid lightblue;
        }   
        
        #button:hover {
            border: 2px solid darkblue;
        }
    </style>
</head>

<body>

    
<div>
    <form action="/auth/inlog.php" method="post">
        <fieldset>
            <table>
				<tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				</tr>
				<tr>
				    <td>Naam:</td>
				    <td><input type="text" name="naam" maxlength="8" required/></td>
				</tr>
				<tr>
				    <td>Wachtwoord:</td>
				    <td><input type="password" name="wachtwoord" maxlength="8" required/></td>
				</tr>
				<tr>
				    <td></td>
				    <td><input id="button" type="submit" value="Inloggen"/></td>
				</tr>
            </table>	
        </fieldset>
    </form>
</div>

</body>

</html>