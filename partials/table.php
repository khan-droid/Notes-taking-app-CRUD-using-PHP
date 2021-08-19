
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Notes</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM `notestable`";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>". $row['title']."</td>
    <td>". $row['notes']."</td>
    <td>
        <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
        <button type='button' class='btn btn-warning'><a href='partials/delete.php?sno=".$row['sno']."'>Delete</a></button>
    </div>
    </td>
  </tr>";
}
?>
  </tbody>
</table>


