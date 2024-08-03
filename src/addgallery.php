<?php
include_once './headerDB.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $category = $_POST['category'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $path = "assets/img/Gallery/" . $image;
  move_uploaded_file($tmp_name, $path);

  $qry = "INSERT INTO tbl_gallery(category, image) VALUES('$category', '$image')";

  print_r($image);
  $result = $con->query($qry);

  if (!$result) {
    die("Query Error!");
  } else {
    $msg = "success";
  }
}
?>

<div class="container">
  <div class="row justify-content-center py-5">
    <div class="col-12 mt-5">
      <div class="card">
        <div class="card-body">
          <div class=" col-12 p-5">
            <h2 class="py-4">Add Latest Image</h2>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-4">
                <label for="" class="form-label pb-2">Select the Category</label>
                <select name="category" id="" class="form-select form-select-lg">
                  <option value="wedding">Wedding</option>
                  <option value="event">Event</option>
                </select>
              </div>
              <div class="col mb-3">
                <label for="image" class="form-label">Select the Latest Image</label>
                <input type="file" name="image" class="form-control form-control-lg" id="image" required>
              </div>

              <button class="btn btn-primary w-100 mt-3 p-2 fw-bold">Upload Image</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
include './footerDB.php';
?>