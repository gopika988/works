<?php
include('dbc.php');


$sqle = " SELECT * FROM college";
$result = mysqli_query($conn,$sqle);

?>


<html>
    <head>
    <style>
        
        th,
        td {
            
            border:  solid black;
            

        }</style>
    </head>
    <body>
        <section>
            <table>
                <tr><th>Serial no</th>
                <th>college id</th>
                    <th>Firstname</th>
                    <th>lastname</th>
                    <th>gender</th>
                    <th>address</th>
                    <th>email</th>
                    <th>Action</th>
</tr>


<?php
            $i=1;
                while($rows=$result->fetch_assoc()){

            ?>
            <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $rows['college_id'];?></td>
                <td><?php echo $rows['first_name'];?></td>
                <td><?php echo $rows['last_name'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td>
                 <a href="delete.php?id=<?php echo $rows['college_id'] ?>" title="Delete Record" data-toggle="tooltip">Delete</a>;
                 <a href="edit.php?id='<?php echo $rows['college_id'] ?>" title="Update Record" data-toggle="tooltip">Edit</span></a>;
                 
                 

                </td>
            </tr>
            <?php
    $i++;
                }
                ?>
                </table>
                </section>
                </body>
                </html>