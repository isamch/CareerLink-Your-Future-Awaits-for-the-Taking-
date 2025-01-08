<?php

dump($category);
?>

<?php foreach ($category as $categorykey => $categoryvalue): ?>

  <?php

  if (isset($_GET['updatecategory']) && $_GET['updatecategory'] ==   $categoryvalue['id']) {

    $categoryupdatename =  $categoryvalue['name'];
  }

  ?>

<?php endforeach; ?>




<div class="d-flex justify-content-center align-items-center">
  <form class="d-flex align-items-end justify-content-center" method="post" action="">

    <?php if (isset($_GET['updatecategory'])): ?>
      <div class="form-group me-2">
        <label for="exampleInputEmail1" class="me-2">ID</label>
        <input type="text" class="form-control" id="exampleInputID1" value="<?php echo $_GET['updatecategory'] ?>" name="idupdatecategory">
      </div>
    <?php endif ?>

    <div class="form-group me-2">
      <label for="exampleInputEmail1" class="me-2">Category</label>
      <input type="text" class="form-control" id="exampleInputEmail1"
        value="<?php echo (isset($_GET['updatecategory'])) ? $categoryupdatename : ''; ?>"
        name="<?php echo (isset($_GET['updatecategory'])) ? 'nameupdatecategory' : 'nameaddcategory'; ?>">

    </div>

    <button type="submit" name="<?php echo (isset($_GET['updatecategory'])) ? 'updatecategory' : 'addcategory'; ?>" class="btn btn-primary"><?php echo (isset($_GET['updatecategory'])) ? 'update' : 'add'; ?></button>
  </form>
</div>

<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($category as $categorykey => $categoryvalue): ?>

      <?php

      if (isset($_GET['updatecategory']) && $_GET['updatecategory'] ==   $categoryvalue['id']) {

        $categoryupdatename =  $categoryvalue['name'];
      }


      ?>
      <tr>
        <td><?php echo $categoryvalue['id'] ?></td>
        <td><?php echo $categoryvalue['name'] ?></td>
        <td>
          <a href="/brief10/public/index.php/dashboard?section=categorydashboard&updatecategory=<?php echo $categoryvalue['id'] ?>" class="btn btn-primary btn-sm">update</a>
        </td>
        
        
        <td>
          <?php if ($categoryvalue['deleted'] == 'off'): ?>
            <form method='POST' action='/brief10/public/index.php/dashboard?section=categorydashboard'>
              <input type='hidden' name='idrestorecategory' value='<?php echo $categoryvalue['id'] ?>'>
              <button class="btn btn-success btn-sm" name="restorecategory" type='submit'>restore</button>
            </form>
          <?php endif; ?>

          <?php if ($categoryvalue['deleted'] == 'one'): ?>
            <form method='POST' action='/brief10/public/index.php/dashboard?section=categorydashboard'>
              <input type='hidden' name='iddeletecategory' value='<?php echo $categoryvalue['id'] ?>'>
              <button class="btn btn-danger btn-sm" name="deletecategory" type='submit'>delete</button>
            </form>
          <?php endif; ?>

        </td>


      </tr>
    <?php endforeach; ?>

  </tbody>
</table>