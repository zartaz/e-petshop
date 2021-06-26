<div class="container-fluid my-3">
            <div class="container-lg bg-white">
                <div id="newsletter" class="row pt-lg-5 pt-md-5 pt-4">
                    <div id="subscribe" class="col-lg-6 col-md-6 col-12">
                        <div class="row">

                            <div class="col-2 col-md-3 pl-4">
                                <img src="images/envelope.png" alt="envelope" />
                            </div>
                            <div class="col-10 col-md-9" id="sub">

                                SUBSCRIBE!
                                <br>NEW PRODUCTS, DISCOUNTS, OFFERS!
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <form class="form-row" id="subform">
                            <div class="col-8 col-md-7 col-lg-8">
                                <input id="email" type="email" class="form-control" placeholder="Enter your email" name="email">
                            </div>
                            <div class="col-4 col-md-5 col-lg-4">
                                <button id="subbutton" type="submit" class="btn">SUBSCRIBE</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <hr />
        <footer>
            <div class="container-fluid my-5">
                <div class="container-lg text-center text-md-left">
                    <div class="row ">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div id="cat">
                                <h5>CATEGORIES</h5>
                                <ul class="list-unstyled m-0 p-0">
                                    <?php
                                        mysqli_data_seek($categories_recordset,0);
                                        while($categories_record=mysqli_fetch_assoc($categories_recordset)){ ?>
                                            <li><a href="<?=$categories_record['alias']?>products.php"><?=$categories_record['name']?></a></li>
                                            <?php } ?>
                                    <!-- <li><a href="catproducts.php">Cat</a></li>
                                    <li><a href="birdproducts.php">Bird</a></li>
                                    <li><a href="smallpetproducts.php">Small Pet</a></li>
                                    <li><a href="topbrands.php">Top Brands</a></li>
                                    <li><a href="offers.php">Special Offers</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div id="information">
                                <h5>INFORMATION</h5>
                                <ul class="list-unstyled m-0 p-0">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div id="myaccount">
                                <h5>MY ACCOUNT</h5>
                                <ul class="list-unstyled m-0 p-0">
                                    <li><a href="register.php">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div id="contactus">
                                <h5>CONTACT US</h5>
                                <ul class="list-unstyled m-0 p-0">
                                    <li><i class="fas fa-address-book"></i><span><a href="#"> 4578 Marmora road, glasgow d04 89 gr</a></span></li>
                                    <li><i class="fas fa-phone-alt"></i><span><a href="#"> 800-4569-9874</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-white mt-5 pt-2">
                <div class="container-lg">
                    <div class="row">
                        <div id="copy" class="col-12">Powered By OpenCart Pets Shop © 2020</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>

<?php
    mysqli_free_result($categories_recordset);
    mysqli_close($con);
?>