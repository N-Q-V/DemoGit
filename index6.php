<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST["addNew"])):
    ?>
    <table width="800" border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Avata</th>
        </tr>
        <tr>
            <td><?php echo $_POST["name"]; ?></td>
            <td><?php echo $_POST["age"]; ?></td>
            <td><?php echo $_POST["phone"]; ?></td>
            <td><?php echo $_POST["email"]; ?></td>
            <td><?php echo $_POST["address"]; ?></td>
            <td><?php echo ($_POST["gender"])?"Nam":"Nữ"; ?></td>
            <td><?php echo ""; ?></td>
        </tr>
    </table>
     <?php 
        endif
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="text" name="age" id="age">
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="phone" id="phone">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" id="male" value="1" /> <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="0" /> <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td>Avata</td>
                <td>
                    <input type="file" name="avata" id="avata">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="AddNew" name="addNew" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>