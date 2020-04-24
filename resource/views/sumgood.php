<html>
<body>

<?php

$quantity = 3;
$cartdetailsID = 1;
$free_qty = 1;
?>

<a href="javascript:" id="minus2" onclick="decrementValue()"/><strong>-</strong></a>
<input type="text" id="qty2" name="<?php echo $s ?>" min="1" value="<?php echo $quantity; ?>">

<a href="javascript:" id="add2" onclick="incrementValue()"/><strong>+</strong></a>
&nbsp;<a href="cart-item-delete.php?cartdetailsID=<?php echo $cartdetailsID; ?>"><i class="icon-trash icon-large"
                                                                                    onclick="return confirm('Do you want to delete cart?');"></i>
</a>
<?php if ($free_qty != 0) {
    echo "<br>" . $free_qty . " Free";
} ?>


<script type="text/javascript">

    var qty2 = document.getElementById("qty2");

    function decrementValue() {

        if (!isNaN(qty2.value) && qty2.value > 0) {

            qty2.value--;

        }

    }

    function incrementValue() {

        if (!isNaN(qty2.value)) {

            qty2.value++;

        }

    }

</script>


</body>
</html>