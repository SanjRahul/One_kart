<?php  
require"connection.php";
if(isset($_POST['details'])){
    $product_name=$_POST['product_name'];
    $short_description=$_POST['short_description'];
    $regular_price=$_POST['regular_price'];
    $sale_price=$_POST['sale_price'];
    $tax_class=$_POST['tax_class'];
    $quantity=$_POST['quantity'];
    $long_description=$_POST['long_description'];



    $query = "insert into product_details(product_name,	short_desc,reg_price,sale_price,tax,qty,long_desc) values 
    ('$product_name','$short_description','$regular_price','$sale_price','$tax_class','$quantity','$long_description')";
    $r=mysqli_query($con,$query);
}

?>