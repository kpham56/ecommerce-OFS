
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<h1>ADMINISTRATIVE TOOLS</h1>
<h3>PRODUCTS</h3>
<h5>Insert item: </h5>
<form action="/php/authentication.php" class="needs-validation" novalidate method = "post">
    <input type="text" name="cid" placeholder="Category ID">
    <input type="text" name="pn" placeholder="Product Name">
    <input type="text" name="price" placeholder="Price">
    <input type="text" name="quatity" placeholder="Quantity">
    <input type="text" name="date" placeholder="Importing date">
    <input type="text" name="url" placeholder="URL Image">
    <input type="text" name="weight" placeholder="Weight">
    <input type="submit" name="admin_insert" placeholder="Submit">
</form> 
<h5>List items </h5>
<table>
    <!--
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>import date</th>
            <th>URL</th>
            <th >weight</th>
        </tr>
    -->
        <?php 
            include('php/connect.php');
            $sql = "SELECT * FROM productdetail";
            $result = mysqli_query($con, $sql);  

            while ($all_products = mysqli_fetch_array($result, MYSQLI_ASSOC)) :
        ?>
        
        <tr>    
            <form action="/php/authentication.php" class="needs-validation" novalidate method = "post">
                <input type="text" name="cid" value="<?php echo $all_products['productID']; ?>">
                <input type="text" name="pn" value="<?php echo $all_products['productName']; ?>">
                <input type="text" name="price" value="<?php echo $all_products['price']; ?>">
                <input type="text" name="quatity" value="<?php echo $all_products['quantity']; ?>">
                <input type="text" name="date" value="<?php echo $all_products['inventoryDate']; ?>">
                <input type="text" name="url" value="<?php echo $all_products['URL_image']; ?>">
                <input type="text" name="weight" value="<?php echo $all_products['weight']; ?>">
                <input type="submit" name="admin_update" value="update">
                <input type="submit" name="admin_update" value="X">
            </form> 
    <?php endwhile; ?>
</table>\

</body>
</html>
