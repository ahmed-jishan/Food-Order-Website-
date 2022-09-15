<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper"> 
        <h1>Add Category</h1>

        <br><br><br>

        <?php   

            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        
        ?>

        <br><br>

        <!--Add category form starts -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category title">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
        <!--Add category form end -->

        <?php 

            //check wheather submit btn is clicked or not 
            if(isset($_POST['submit']))
            {
                //echo "clkd";

                //get the value from category form
                $title = $_POST['title'];

                //for radio input type we need to wheather the btn is selected or not
                if(isset($_POST['featured']))
                {
                    //get the value from form 
                    $featured = $_POST['featured'];
                }
                else
                {
                    //set the default value
                    $featured = "No";
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

                //check wheather the image is selected or not and set the value for image name acordingly
               // print_r($_FILES['image']);

                //die();//break the code here
                if(isset($_FILES['image']['name']))
                {
                    //upload image
                    //to upload image we need image name source path and destination path
                    $image_name = $_FILES['image']['name'];

                    //upload the image only if image is selected
                    if($image_name !="")
                    {

                    

                        //auto rename our image
                        //get the extension of our image(jpf,png,gif,etc)e.g. "specialfood1.jpg"
                        $ext = end(explode('.', $image_name));
                        //rename the image
                        $image_name = "Food_Category_".rand(0000, 999).'.'.$ext;

                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "../user/images/category/".$image_name;

                        //finally upload the image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        //check wheather the image is uploaded or not
                        //and if the image is not uploaded then we will stopped the process and redirect with error message
                        if($upload==false)
                        {
                            //set message
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                            //redirect to add category page
                            header('location:'.SITEURL.'admin/add-category.php');
                            //stop the process
                            die();
                        }

                    }
                }
                else
                {
                    //dont upload image and set the image name value as blank
                    $image_name="";
                }

                //create sql qurey to insert category into database
                $sql = "INSERT INTO tbl_category SET
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";

                //execute the qurey and save in database
                $res = mysqli_query($conn, $sql);

                //check wheather qurey executed or not and data added or not
                if($res==true)
                {
                    //qurey executed and category added 
                    $_SESSION['add'] = "<div class='success'>Category Added Successfully.</div>";
                    //redirect to manage category page
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    //failed to add category
                    $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
                    //redirect to manage category page
                    header('location:'.SITEURL.'admin/add-category.php');
                }

            }
        
        
        
        ?>
    </div>
</div>



<?php include('partials/footer.php'); ?>