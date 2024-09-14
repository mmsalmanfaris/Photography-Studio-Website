<?php
require_once '../includes/config_session.inc.php';

    if(isset($_SESSION["user_id"])){ 
        require_once 'header.php';
        

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $packageName = $_POST["packageName"];
        $price = $_POST["price"];
        $shootDuration = $_POST["shootDuration"];
        $count = $_POST["count"];
        $editing = $_POST["editing"];
        $assistant = $_POST["assistant"];
        $category = $_POST["category"];
        $image = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $path = "assets/img/PackagePage/".$image;
        move_uploaded_file($tmp_name, $path);

        $qry = "INSERT INTO tbl_package(name, price, duration, photo_count, editing, assistant, category, image) VALUES('$packageName', '$price', '$shootDuration', '$count', '$editing', '$assistant', '$category', '$image')";


        $result = $con -> query($qry);

        if(!$result){
            die("Query Error!");
        }
        else{
            $msg = "success";
        }
    }
?>


<div class="container py-5">
    <div class="row justify-content-center pt-5">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Package</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="packageName" class="form-label">Package Name</label>
                            <input type="text" name="packageName" class="form-control form-control-lg" id="packageName" >
                        </div>
                        <div class="row">
                        <div class=" col-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control form-control-lg" id="price" >
                        </div>
                        <div class="col-6 mb-3">
                            <label for="shootDuration" class="form-label">Shoot Duration</label>
                            <input type="text" name="shootDuration" class="form-control form-control-lg" id="shootDuration" >
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-6 mb-3">
                            <label for="details" class="form-label">Photo Count</label>
                            <input type="number"   name="count" class="form-control form-control-lg" id="details" ></input>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="details" class="form-label">Editing</label>
                            <input type="text"   name="editing" class="form-control form-control-lg" id="details" ></input>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-6 mb-3">
                            <label for="image" class="form-label">Assistant</label>
                            <input type="text" name="assistant" class="form-control form-control-lg" id="image" >
                        </div>
                        <div class="col-6 mb-3">
                                <label for="" class="form-label">Select Category</label>
                                <select class="form-select" aria-label="Default select example" name="category">
                                        <option value="wedding">Wedding</option>
                                        <option value="Event">Event</option>
                                        <!-- <option value="Unread">Unread</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-lg" id="image">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100 my-2 mt-4">Add Package</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'footer.php';

}
else {
  header("Location: ../login.php");
    die();
}
?>
