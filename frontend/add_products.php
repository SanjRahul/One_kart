<?php  
session_start();
if(isset($_SESSION['ADMIN_Login']))
{
  $user=$_SESSION['ADMIN_Login'];
}
else
{
  header('Location:../index.php');
}
?>

<?php 
  include'dashboard_head.php';
  include'dashboard_navbar.php';
  include'admin_dashboard_sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Products</h3>
              </div>
              
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header">
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Product Details</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Product Attributes</span>
                      </button>
                    </div>
                  </div>

                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                    <form method="POST" action="../connection/product_details.php">
                      <div class="form-group mb-3">
                          Product Name:
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name" aria-label="product_name" aria-describedby="basic-addon1">
                      </div>
                      <div class="form-group mb-3">
                          Short Description:
                        <textarea class="form-control" name="short_description" placeholder="Short Description" aria-label="short_description"></textarea>
                      </div>
                      <label>General Detail &nbsp;<i class="fa fa-male"></i></label>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Regular Price:
                            <input type="text" class="form-control" name="regular_price" id="regular_price" placeholder="Regular Price" aria-label="regular_price" aria-describedby="basic-addon1">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Sale Price:
                            <input type="text" class="form-control" name="sale_price" id="sale_price"placeholder="Sale Price" aria-label="sale_price" aria-describedby="basic-addon1">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Tax Class:
                            <select name="tax_class" class="form-control" required>
                              <option value="standard">Standard</option>
                              <option value="gst10">GST 10</option>
                              <option value="gst15">GST 15</option>
                            </select>
                          </div>
                        </div>
                               
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Quantity:
                            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" aria-label="quantity" aria-describedby="basic-addon1">
                          </div>
                        </div>
                      </div>   
                      <div class="form-group mb-3">
                          Long Description:
                        <textarea class="form-control" name="long_description" placeholder="Long Description" aria-label="long_description"></textarea>
                      </div>
                      <div class="col-md-12">
                      <button type="submit" name="details" class="btn btn-primary">Submit</button>
                      </div>
                      </form> 
                      <div class="footer" style="margin-bottom: 3rem;">
                      <button class="btn btn-primary float-end" onclick="stepper.next()">Next</button> 
                      </div>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <form method="POST" action="../connection/product_attributes.php" enctype="multipart/form-data"> 
                      <label>Attributes &nbsp;<i class="fa fa-male"></i></label>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Weight (kg) :
                              <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" aria-label="weight" aria-describedby="basic-addon1">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Demination: 
                              <div class="row">
                                <div class="col-md-3">
                                <input type="text" class="form-control mb-3" name="length" id="length" placeholder="L" aria-label="length" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-3">
                                <input type="text" class="form-control mb-3" name="breath" id="breath" placeholder="B" aria-label="breath" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-3">
                                <input type="text" class="form-control mb-3" name="height" id="height" placeholder="H" aria-label="height" aria-describedby="basic-addon1">
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                              Shipping Class:
                              <select name="shipping_class" class="form-control" required>
                                <option value="noshipping">No shipping class</option>
                                <option value="bulky">Bulky</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group mb-3">
                              Categories :&nbsp;&nbsp;
                              <input type="radio" value="cat1" name="categories">&nbsp;&nbsp;Mens&nbsp;&nbsp;
                              <input type="radio" value="cat2" name="categories">&nbsp;&nbsp;Womens&nbsp;&nbsp;
                              <input type="radio" value="cat3" name="categories">&nbsp;&nbsp;Kids&nbsp;&nbsp;
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mb-3">
                              Categories Products :&nbsp;&nbsp;
                              <input type="radio" value="procat1" name="categorie_pro">&nbsp;&nbsp;shirt&nbsp;&nbsp;
                              <input type="radio" value="procat2" name="categorie_pro">&nbsp;&nbsp;Shoe&nbsp;&nbsp;
                              <input type="radio" value="procat3" name="categorie_pro">&nbsp;&nbsp;Shoe&nbsp;&nbsp;
                              <input type="radio" value="procat4" name="categorie_pro">&nbsp;&nbsp;Shoe&nbsp;&nbsp;
                              <input type="radio" value="procat5" name="categorie_pro">&nbsp;&nbsp;Shoe&nbsp;&nbsp;
                              <input type="radio" value="procat6" name="categorie_pro">&nbsp;&nbsp;Shoe&nbsp;&nbsp;
                            </div>
                          </div>
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                            Colors:
                            <select name="color" class="form-control" required>
                              <option value="color1">Black</option>
                              <option value="color2">yellow</option>
                              <option value="color3">Red</option>
                              <option value="color4">White</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-3">
                            Size:
                            <select name="size" class="form-control" required>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="40">40</option>
                              <option value="42">42</option>
                              <option value="44">44</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        Product Image:
                        <div class="input-group mb-3">
                            <input type="file" name="product_image" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        Product Gallery:
                        <div class="input-group mb-3">
                            <input type="file" name="prod_gally1" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="prod_gally2" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="prod_gally3" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="prod_gally4" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                      </div> -->
                      
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" name="attributes" class="btn btn-primary float-end">Submit</button>
                      </form>
                    </div>
                    
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
  include'dashboard_footer.php';
  include'dashboard_head_footer.php';
?>