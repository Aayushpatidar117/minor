<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="orderstyle.css">
    <title>Food Website</title>
</head>

<body>
    <section>
        <div class="main_btn">
            <a href="index.php">Back</a>

        </div>
        <div class="order" id="Order">
            <h1><span>Order</span>Now</h1>

            <div class="order_main">

                <div class="order_image">
                    <img src="image/order_image.png">
                </div>


                <form action="order_action.php" method="post">

                    <div class="input">
                        <p>Name</p>
                        <input type="text" placeholder="you name" name="name">
                    </div>

                    <div class="input">
                        <p>Email</p>
                        <input type="email" placeholder="you email" name="email">
                    </div>

                    <div class="input">
                        <p>Number</p>
                        <input type="text" placeholder="you number" name="phone_number">
                    </div>

                    <div class="input">
                        <p>How Much</p>
                        <input type="number" placeholder="how many order" name="how_much">
                    </div>

                    <div class="input">
                        <p>You Order</p>
                        <input type="text" placeholder="food name" name="your_order">
                    </div>

                    <div class="input">
                        <p>Address</p>
                        <input type="text" placeholder="you Address" name="address">
                    </div>

                    <!-- <a href="index.php" class="order_btn"> Submit </a> -->
                    <input type="submit" name="Submit" value="Submit" class="order_btn">
                </form>

            </div>

        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

