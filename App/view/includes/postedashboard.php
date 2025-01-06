<?php

// dump($postes)

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">author</th>
      <th scope="col">content</th>
      <th scope="col">category</th>
      <th scope="col">tags</th>
      <th scope="col">url</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($postes as $postkey => $postvalue): ?>

      <tr>
        <td><?php echo $postvalue['id'] ?></td>
        <td><?php echo $postvalue['username'] ?></td>
        <td><?php echo $postvalue['content'] ?></td>
        <td><?php echo $postvalue['name'] ?></td>
        <td><?php echo $postvalue['tags'] ?></td>
        <td><?php echo $postvalue['url'] ?></td>
        <td>
          <form method='POST' action='/brief10/public/index.php/dashboard?section=postedashboard'>
            <input type='hidden' name='iddeleteposte' value='<?php echo $postvalue['id'] ?>'>
            <button class="btn btn-danger btn-sm" name="deleteposte" type='submit'>delete</button>
          </form>
        </td>
        <td>
          <a href="/brief10/public/index.php/dashboard?section=postedashboard&updateposte=<?php echo $postvalue['id'] ?>" class="btn btn-primary btn-sm" name="deleteposte" type='submit'>update</a>
        </td>


      </tr>

    <?php endforeach; ?>

  </tbody>
</table>