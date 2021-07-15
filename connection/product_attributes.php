<?php  
require"connection.php";
if(isset($_POST['attributes'])){
    $weight=$_POST['weight'];
    $length=$_POST['length'];
    $breath=$_POST['breath'];
    $height=$_POST['height'];
    $shipping_class=$_POST['shipping_class'];
    $categories=$_POST['categories'];
    $color=$_POST['color'];
    $size=$_POST['size'];
    $product_image=$_FILES['product_image'];
    
    $filename = $product_image['name'];
    $fileerror = $product_image['error'];
    $filetmp = $product_image['tmp_name'];
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
        $destinationfile = '../public/image/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
    }

    // $prod_gally1=$_POST['prod_gally1'];
    // $prod_gally2=$_POST['prod_gally2'];
    // $prod_gally3=$_POST['prod_gally3'];
    // $prod_gally4=$_POST['prod_gally4'];


     
    $query = "insert into product_attributes(weight,length,breath,	height,	categories,prod_categories,color,size,prod_image) values 
    ('$weight','$length','$breath','$height','$shipping_class','$categories','$color','$size','$destinationfile')";
    
    // print_r($query);
    // die;

    $a=mysqli_query($con,$query);
    
}

?>