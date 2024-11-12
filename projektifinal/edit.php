<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="apple_storeproject";

 // Create Connection
 $connection= new mysqli($servername,$username,$password,$database);



$id="";
$name="";
$description="";
$price="";
$image_url="";
$category_id="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='GET'){
    //GET method:Show the data of the product
    // die("Failed".$_GET["id"])
    if(!isset($_GET["id"])){
        header("location:/projektifinal/index.php");
        exit;
    }
        $id=$_GET["id"];

        //read the row of the selected client from database table
        $sql="SELECT * FROM productss WHERE id=$id";
        // $result=$connection->query($sql);
        $row=$connection->query($sql)->fetch_assoc();

        if(!$row){
            header("location:/projektifinal/index.php");
            exit;
        }
             $name=$row["name"];
            $description=$row["description"];
            $price=$row["price"];
            $image_url=$row["image_url"];
            $category_id=$row["category_id"];

    }

else{
   
    $id=$_POST["id"];
    $name=$_POST["name"];
    $description=$_POST["description"];
    $price=$_POST["price"];
    $image_url=$_POST["image_url"];
    $category_id=$_POST["category_id"];

    // do{
        if ( empty($id)|| empty($name) || empty($description) || empty($price) || empty($image_url) || empty($category_id)) 
        {

           $errorMessage="All the fields are required";
        //    break;
        }
        $sql = "UPDATE productss SET name='$name', description ='$description', price = '$price', image_url='$image_url',category_id='$category_id' WHERE id ='$id'";

        $result=$connection->query($sql);
        
        if(!$result){
            $errorMessage="Invalid query:" .$connection->error;
            // break;
        }else{
            $successMessage="Product updated correctly";
            header("location:/projektifinal/index.php");
        }
        

    // }while(true);

}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projektifinal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container my-5">
    <h2>New Product</h2>

    <?php
    if(!empty($errorMessage)){
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>$errorMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>

        ";
    }
    
    
    ?>
    <!-- Edit Modal -->
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>">
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description" value="<?php echo $description;?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="price" value="<?php echo $price;?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Image_url:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="image_url" value="<?php echo $image_url;?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category_id:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="category_id" value="<?php echo $category_id;?>">
					</div>
				</div>
                   
                <?php
                  if (!empty($successMessage)) {
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
                 }
                
                ?>

<div class="row mb-3 mt-4">
    <div class="col-sm-6 d-flex justify-content-between">
        <!-- Butoni Submit -->
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>

        <!-- Butoni Cancel -->
        <div class="col-sm-5">
            <a class="btn btn-outline-primary w-100" href="/projektifinal/index.php" role="button">Cancel</a>
        </div>
    </div>
</div>
    </form>



</body>
</html>