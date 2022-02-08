
<?php include('partials-front/menu.php'); ?>


<?php 
    //CHeck whether food id is set or not
    
if(isset($_GET['food_id']))
    
{
        //Get the Food id and details of the selected food
        
$food_id = $_GET['food_id'];

        //Get the DEtails of the SElected Food
        
$sql = "SELECT * FROM tbl_food WHERE id=$food_id";
        //Execute the Query
 
$res = mysqli_query($conn, $sql);
        //Count the rows
        
$count = mysqli_num_rows($res);
        //CHeck whether the data is available or not
 
if($count==1)
        
{
            //WE Have DAta
            //GEt the Data from Database
            
$row = mysqli_fetch_assoc($res);

            
$title = $row['title'];
           
 $price = $row['price'];
            
$image_name = $row['image_name'];
       
 }
        
else
        
{
            //Food not Availabe
            //REdirect to Home Page
           
        
}
    
}
    
else
    
{
        //Redirect to homepage
        header('location:'.SITEURL);
    
}

?>
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search">

    
<div class="container">
        
        
<h2 class="text-center text-white">Fill this form to confirm your order.</h2>

        
<form action="" method="POST" class="order" id="ordfrm">
            
<fieldset>
                
<legend>Selected Food</legend>

                
<div class="food-menu-img">
                    
<?php 
                    
                        //CHeck whether the image is available or not
                        
if($image_name=="")
                        
{
                            //Image not Availabe
                            
echo "<div class='error'>Image not Available.</div>";
                        
}
                        
else
                        
{
                            //Image is Available
                            
?>
                            
<img src="<?php echo SITEURL; ?>images/food/
<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                            
<?php
                        
}
                    
                    
?>
                    
                
</div>

                
<div class="food-menu-desc">
                    
<h3><?php echo $title; ?></h3>
                    
<input type="hidden" name="food" value="<?php echo $title; ?>">

                    
<p class="food-price">$<?php echo $price; ?></p>
                    
<input type="hidden" name="price" value="<?php echo $price; ?>">

                    
<div class="order-label">Quantity</div>
                    
<input type="number" name="qty" class="input-responsive" value="1" required>
                    
                
</div>

            
</fieldset>
            
            
<fieldset>
                
<legend>Delivery Details</legend>
                
<div class="order-label">Full Name</div>
                
<input type="text" name="full-name" placeholder="E.g. Atik Sayyad" class="input-responsive" required id="nme">

                
<div class="order-label">Phone Number</div>
                
<input type="tel" name="contact" placeholder="E.g. 9876xxxxxx" class="input-responsive" required id="mob">

                
<div class="order-label">Email</div>
                
<input type="email" name="email" placeholder="E.g. abc@gmail.com" class="input-responsive" required id="email">

                
<div class="order-label">Address</div>
                
<textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required id="adrs">
</textarea>

                
<input type="button" id="submit" name="submit" value="Confirm Order" class="btn btn-primary">
            
</fieldset>
           
        
</form>
        
<script>

var nm = document.getElementById("nme");

var mb = document.getElementById("mob");

var eml = document.getElementById("email");

var adr = document.getElementById("adrs");

var submit = document.getElementById("submit");


nm.onkeypress=function(e)
{
    
if(e.key.match("[a-zA-Z ]")) return true;
    return false;

}


mb.onpaste=function(e)
{
    return false;
}

mb.onkeypress=function(e)
{
    if(e.key.match("[0-9]"))
{
        
if(mb.value.length == 10)
{
            return false;
        
}
        return true;
    }
    
return false;

}



submit.onclick=function()
{
    
submit.setAttribute("type","button");
    
let em = email.value;
    
let chkr = 0;
    
if(em.match("[a-zA-Z0-9.]+[@][a-z]+[.][a-z]"))
{        
        
eml.style.background="none";
    
}
else{
        
eml.style.background="pink";
        chkr = 1;
    }

    
if(mb.value.length < 10){
        mb.style.background="pink";
        chkr = 1; }
else{
        mb.style.background="none";
    }

    
if(adr.value.trim().length < 10)
{
        alert("too short address minimun 10 letter");
        
adr.style.background="pink";
        chkr =1;
    
}
else
{
        
adr.style.background = "none";
    
}

    
if(nm.value.trim() == "")
{
       
 nm.style.background="pink";
        
chkr = 1;        
    
}
else
{
        
nm.style.background="none";
    
}
        
    
    
if(chkr == 0)
{
        
submit.setAttribute("type","submit");
        
submit.click();
        alert("Successfully orderd!!")
    
}

}


</script>

        
<?php 

            //CHeck whether submit button is clicked or not
            
if(isset($_POST['submit']))
            
{
                // Get all the details from the form

                
$food = $_POST['food'];
                
$price = $_POST['price'];
                
$qty = $_POST['qty'];

                
$total = $price * $qty; // total = price x qty 

                
$order_date = date("Y-m-d h:i:sa"); //Order DAte

                
$status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                
$customer_name = $_POST['full-name'];
                
$customer_contact = $_POST['contact'];
                
$customer_email = $_POST['email'];
                
$customer_address = $_POST['address'];


                //Save the Order in Databaase
                //Create SQL to save the data
               
 $sql2 = "INSERT INTO tbl_order SET 
food = '$food',
price = $price,qty = $qty,
total = $total,order_date = '$order_date',
status = '$status',
customer_name = '$customer_name',

customer_contact = '$customer_contact',
customer_email = '$customer_email',
customer_address = '$customer_address'
";

                //echo 
$sql2; 
die();

                //Execute the Query
                
$res2 = mysqli_query($conn, $sql2);

                //Check whether query executed successfully or not
                
if($res2==true)
                
{
                    //Query Executed and Order Saved
                    
$_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
                    
header('location:'.SITEURL);
                
}
                
else
                
{
                    //Failed to Save Order
                    
$_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
                    
header('location:'.SITEURL);
                
}

            
}
        
        
?>

    
</div>

</section>

<!-- fOOD sEARCH Section Ends Here -->

<?php include('partials-front/footer.php'); ?>