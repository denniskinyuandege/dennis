<?php

/**
  * Function to query information based on
  * a parameter: in this case, location.
  *
  */

if (isset($_POST['submit'])) {
  try {
    require "index.php";
    require "read.php";

    $connection = new PDO($dsn, $username, $password, $persons);

    $sql = "SELECT * FROM users WHERE name = :name";

    $name = $_POST['name'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "header.php"; ?>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
      <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Weight</th>
      <th scope="col">Married</th>
      <th scope="col">Timein</th>
      <th scope="col">Action</th>
    </tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["#"]); ?></td>
<td><?php echo escape($row["Firstname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["gender"]); ?></td>
<td><?php echo escape($row["date"]); ?></td>
<td><?php echo escape($row["weight"]); ?></td>
<td><?php echo escape($row["married"]); ?> </td>
<td><?php echo escape($row["time"]); ?> </td>
<td><?php echo escape($row["Submit"]); ?> </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['name']); ?>.
  <?php }
} ?>

<h2>Find user based on location</h2>

<form method="post">
  <label for="name">First Name</label>
  <input type="text" id="Firstname" name="Firstname">
  <input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php require "footer.php"; ?>