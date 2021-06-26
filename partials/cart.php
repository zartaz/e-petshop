<div class="container">
            <div class="row">
                <div id="spiti" class="col-12 col-lg-12 col-md-12 bg-white mt-4">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-2">
                            <a id="home" href="index.php"><i class="fas fa-home"></i></a>
                        </div>
                        <div class="col-lg-11 col-md-11 col-10 text-center">
                            <h1>Your Shopping Basket</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-none d-md-block">
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Size</th>
                            <th>Product ID</th>
                            <th>Quantity</th>
                            <th>UNIT PRICE</th>
                            <th>TOTAL</th>
                            <th>DELETE</th>
                        </tr>
                        <tr>
                            <td><img class="w-100" src="images/dog/Dogbeds/orthopedic/9.jpg" /></td>
                            <td>
                                <a href="#">Orthopaedic Dog Bed - Brown / Beige</a>
                            </td>
                            <td>90 x 60 x 30 cm (L x W x H)</td>
                            <td>206847.6</td>
                            <td>
                                <form>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" name="quantity" placeholder="2" min="1" max="10">
                                </form>
                            </td>
                            <td>46.99€</td>
                            <td>93.98€</td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                        <tr>
                            <td><img class="w-100" src="images/dog/kennels.png" /></td>
                            <td><a href="#">Spike Classic Dog Kennel</a></td>
                            <td>Size L</td>
                            <td>99020.2</td>
                            <td>
                                <form>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" name="quantity" placeholder="1" min="1" max="10">
                                </form>
                            </td>
                            <td>72.99€</td>
                            <td>72.99€</td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                    </table>
                </div>
                <div id="table1" class="col-12 d-md-none d-sm-block">
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>UNIT PRICE</th>
                            <th>DELETE</th>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Orthopaedic Dog Bed - Brown / Beige</a>
                            </td>
                            <td>90 x 60 x 30 cm (L x W x H)</td>
                            <td>
                                <form>
                                    <input type="number" name="quantity" placeholder="2" min="1" max="10">
                                </form>
                            </td>
                            <td>46.99€</td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                        <tr>
                            <td><a href="#">Spike Classic Dog Kennel</a></td>
                            <td>Size L</td>
                            <td>
                                <form>
                                    <input type="number" name="quantity" placeholder="1" min="1" max="10">
                                </form>
                            </td>
                            <td>72.99€</td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 mt-4"></div>
                <div class="col-lg-6 mt-4">
                    <div class="row">

                        <div class="subtotal col-lg-6 col-md-6 col-6">Subtotal</div>
                        <div class="col-lg-6 col-md-6 col-6 subtotal text-right">166.97€</div>

                        <div class="col-lg-12 col-md-12 col-12 coupon"><h5>Coupon / Discount</h5></div>
                        <div id="code" class="col-lg-12 col-md-12 col-12">
                            <form>
                                <label for="Code">Your Coupon Code</label><br>
                                <input type="text" name="Code" placeholder="Enter your code">
                                <input type="submit" value="Redeem">
                            </form>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12 coupon"><h5>Shipping Fees</h5></div>
                        <div class="col-lg-8 col-md-8 col-9">Standard delivery to Thessaloniki</div>
                        <div class="col-lg-4 col-md-4 col-3 text-right">5.99€</div>
                        <div id="total" class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6"><span>Total</span> incl. VAT</div>
                                <div id="total-price" class="col-lg-6 col-md-6 col-6 text-right">172.96€</div>
                            </div>
                            
                        </div>

                        <div id="back" class="col-lg-4 col-md-4 col-4"><a href="index.php">Back to shop</a></div>
                        <div id="checkout2" class="col-lg-8 col-md-8 col-8 text-center"><a href="checkout.php">Proceed to checkout</a></div>

                    </div>
                </div>
            </div>
        </div>
        <hr />
        