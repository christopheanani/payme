<div >
  <h2>Tous les utilisateurs</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Fullname </th>
        <th class="text-center">Phone</th>
        <th class="text-center">Code</th>
        <th class="text-center">Society</th>
        <th class="text-center">Joining Date</th>
      </tr>
    </thead>
    <?php
      // include_once "config.php";
      include '/config.php';
      $sql="SELECT * FROM users WHERE isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["fullname"]?> <?=$row["fullname"]?></td>
      <td><?=$row["phone"]?></td>
      <td><?=$row["code"]?></td>
      <td><?=$row["society"]?></td>
      <td><?=$row["created_at"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>