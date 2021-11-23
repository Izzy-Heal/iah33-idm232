<?php
$page_title = 'View';
include_once __DIR__ . '/../_global/header.php';

$query = "SELECT * FROM recipei";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $col["row1"];
        $field2name = $col["row2"];
        $field3name = $col["row3"];
        $field4name = $col["row4"];
        $field5name = $col["row5"];
   
    echo '<b>'.$field1name.$field2name.'</b><br />';
    echo $field5name.'<br />';
    echo $field5name.'<br />';
    echo $field5name; 
}
    /* free result set */
    $result->free();
}

<div class="container">
  <h1><?php echo $recipei['recipename']; ?>
  </h1>
  <p>Price: <?php echo $recipei['step1']; ?>
  </p>
  <p><img
      src=" <?php echo $recipei['step2']; ?>"
      alt=""></p>

  <p><a class="btn btn-primary"
      href="/admin/services/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
    <a class="btn btn-secondary"
      href="/admin/services/delete.php?id=<?php echo $data['id']; ?>">Delete</a>
  </p>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
?>

