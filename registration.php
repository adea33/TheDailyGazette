<?php 

include "DBC.php";
include_once "userRepository.php";

$userrep = new userRepository();
$users = $userrep->getAllUsers();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>ConfirmPassword</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>CardNumber</th>
                <th>CVC</th>
                <th>Muaji</th>
                <th>Viti</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?> 
                    <tr>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['password'];?></td>
                        <td><?php echo $user['confirmpassword'];?></td>
                        <td><?php echo $user['firstname'];?></td>
                        <td><?php echo $user['lastname'];?></td>
                        <td><?php echo $user['cardNumber'];?></td>
                        <td><?php echo $user['cvc'];?></td>
                        <td><?php echo $user['muaji'];?> </td>
                        <td><?php echo $user['viti'];?> </td>
                     
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>