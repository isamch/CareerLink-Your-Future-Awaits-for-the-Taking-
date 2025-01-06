<?php

// dump($postes);

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
      <th scope="col">status</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($postes as $postkey => $postvalue): ?>

      <?php

      if (isset($_GET['updateposte']) && $postvalue['id'] == $_GET['updateposte']) {
        $id = $postvalue['id'];
        $content = $postvalue['content'];
        $name = $postvalue['name'];
        $url = $postvalue['url'];
        $tagsarrays = explode(",", $postvalue['tags']);
        $tags = implode(" ", $tagsarrays);
      }

      ?>

      <tr>
        <td><?php echo $postvalue['id'] ?></td>
        <td><?php echo  $postvalue['username'] ?></td>
        <td><?php echo $postvalue['content'] ?></td>
        <td><?php echo $postvalue['name'] ?></td>
        <td>
          <?php
          $tagsarrays = explode(",", $postvalue['tags']);
          ?>
          <?php foreach ($tagsarrays as $tag): ?>
            <?php echo $tag; ?>
          <?php endforeach; ?>
        </td>

        <td><?php echo $postvalue['url'] ?></td>
        <td><?php echo $postvalue['statusdel'] ?></td>
        <td>
          <?php if ($postvalue['statusdel'] == 'off'): ?>
            <form method='POST' action='/brief10/public/index.php/dashboard?section=postedashboard'>
              <input type='hidden' name='idrestoreposte' value='<?php echo $postvalue['id'] ?>'>
              <button class="btn btn-success btn-sm" name="restoreposte" type='submit'>restore</button>
            </form>
          <?php endif; ?>

          <?php if ($postvalue['statusdel'] == 'one'): ?>
            <form method='POST' action='/brief10/public/index.php/dashboard?section=postedashboard'>
              <input type='hidden' name='iddeleteposte' value='<?php echo $postvalue['id'] ?>'>
              <button class="btn btn-danger btn-sm" name="deleteposte" type='submit'>delete</button>
            </form>
          <?php endif; ?>

        </td>
        <td>

          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="">
            update
          </button> -->

          <a href="/brief10/public/index.php/dashboard?section=postedashboard&updateposte=<?php echo $postvalue['id'] ?>" class="btn btn-primary btn-sm">update</a>

        </td>


      </tr>

    <?php endforeach; ?>

  </tbody>
</table>




<!-- Modal Trigger Button -->
<button id="toggleform" type="button" class="btn btn-primary invisible" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch Modal
</button>


<!-- 
$content = $postvalue['content'];
          $name = $postvalue['name'];
          $tags = $postvalue['tags'];
          $url = $postvalue['url']; -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- Use modal-lg for large modals -->
    <div class="modal-content">


      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Poste</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="modalForm" method="POST" action="/brief10/public/index.php/dashboard">
        
          <input type='hidden' name='updateid' value='<?php echo $id ?>'>

          <div class="mb-3">
            <label for="field1" class="form-label">content</label>
            <input type="text" class="form-control" id="field1" value="<?php echo $content ?>" name="updatecontent">
          </div>


          <div class="mb-3">
            <label for="field1" class="form-label">tags</label>
            <input type="text" class="form-control" id="field1" value="<?php echo $tags ?>" name="updatetags">
          </div>

          <div class="mb-3">
            <label for="field1" class="form-label">url</label>
            <input type="text" class="form-control" id="field1" value="<?php echo $url ?>" name="updateurl">
          </div>


          <div class="mb-3">
            <label for="field2" class="form-label">Category</label>
            <select class="form-control" id="field2" name="updatecategory">
              <?php foreach ($category as $categorykey => $categoryvalue): ?>
                <option value="<?php echo $categoryvalue['id'] ?>"><?php echo $categoryvalue['name'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>


          <button type="submit" name="updateposte" class="btn btn-primary" form="modalForm">Update</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>
  @media screen and (min-width: 768px) {
    .show {
      width: 100%;
    }
  }
</style>



<?php if (isset($_GET['updateposte'])): ?>

  <script>
    setTimeout(() => {
      let btn = document.querySelector('#toggleform');
      btn.click();
    }, 1000);
  </script>

<?php endif; ?>