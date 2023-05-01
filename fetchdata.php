<?php
$conn=mysqli_connect('localhost','root','','adminprofile');
$query="select * from adminprofile";
$output=mysqli_query($conn,$query);

?>
<?php while($data=$output->fetch_assoc()): ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['joined']; ?></td>
        <td><?php echo $data['type']; ?></td>
        <td><?php echo $data['status']; ?></td>

    </tr>

<?php endwhile;?> 