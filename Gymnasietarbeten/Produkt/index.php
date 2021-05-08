<?php
//index.php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Produkt</title>
    <script src="../Js/jquery.min.js"></script>
    <link rel="stylesheet" href="../Css/bootstrap.min.css" />
    <script src="../Js/bootstrap.min.js"></script>
    <style>
        .popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		</style>
</head>

<body>

    <?php
 include("../Templets/Navigation.php");
?>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                </div>

                <div id="navbar-cart" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span class="badge"></span>
                                <span class="total_price">$ 0.00</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div id="popover_content_wrapper" style="display: none">
            <span id="cart_details"></span>
            <div align="right">
                <a href="Kassa.php" class="btn btn-primary" id="check_out_cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Checka ut
                </a>
                <a href="#" class="btn btn-default" id="clear_cart">
                    <span class="glyphicon glyphicon-trash"></span> Rensa
                </a>
            </div>
        </div>

        <div id="display_item">


        </div>

    </div>
    <?php
 include("../Templets/Footer.php");
?>
</body>

</html>

<script>
    $(document).ready(function() {

        load_product();

        load_cart_data();

        function load_product() {
            $.ajax({
                url: "fetch_item.php",
                method: "POST",
                success: function(data) {
                    $('#display_item').html(data);
                }
            });
        }

        function load_cart_data() {
            $.ajax({
                url: "fetch_cart.php",
                method: "POST",
                dataType: "json",
                success: function(data) {
                    $('#cart_details').html(data.cart_details);
                    $('.total_price').text(data.total_price);
                    $('.badge').text(data.total_item);
                }
            });
        }

        $('#cart-popover').popover({
            html: true,
            container: 'body',
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        });

        $(document).on('click', '.add_to_cart', function() {
            var product_id = $(this).attr("id");
            var product_name = $('#name' + product_id + '').val();
            var product_price = $('#price' + product_id + '').val();
            var product_quantity = $('#quantity' + product_id).val();
            var action = "add";
            if (product_quantity > 0) {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {
                        product_id: product_id,
                        product_name: product_name,
                        product_price: product_price,
                        product_quantity: product_quantity,
                        action: action
                    },
                    success: function(data) {
                        load_cart_data();
                        alert("Produkten har tagit in i kassa");
                    }
                });
            } else {
                alert("Skriv hur mycket av produkten");
            }
        });

        $(document).on('click', '.delete', function() {
            var product_id = $(this).attr("id");
            var action = 'remove';
            if (confirm("Är du säker du vill ta bort denna produkten?")) {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {
                        product_id: product_id,
                        action: action
                    },
                    success: function() {
                        load_cart_data();
                        $('#cart-popover').popover('hide');
                        alert("Produkten har tagit bort från Kassa");
                    }
                })
            } else {
                return false;
            }
        });

        $(document).on('click', '#clear_cart', function() {
            var action = 'empty';
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function() {
                    load_cart_data();
                    $('#cart-popover').popover('hide');
                    alert("Din kassa har rensat");
                }
            });
        });

    });

</script>
