<div class="container">
    <div class="row">
        <div id="spiti" class="col-12 col-lg-12 col-md-12 bg-white mt-4">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-2">
                    <a id="home" href="index.php"><i class="fas fa-home"></i></a>
                </div>
                <div class="col-lg-11 col-md-11 col-10 text-center">
                    <h1>REGISTER ACCOUNT</h1>
                </div>
            </div>
        </div>

        <div id="path" class="col-lg-12 my-3">
            <a href="index.php">PetParadise.gr</a>/<a href="login.php">Account</a>/Register
        </div>
        <div class="col-12">
            <p id="sindesi">If you already have an account with us, please login at the <a href="login.php">login page</a>.</p>
        </div>
        <div class="col-12">
            <h2 class="form_title">Your Personal Details</h2>
            <form target="_blank" action="registration.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="form-item1" for="fname">First Name:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="text" class="form-control" name="fname" placeholder="First Name">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="lname">Last Name:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="email">E-Mail:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="email" class="form-control" name="email" placeholder="Enter Your E-mail">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="phone">Telephone:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone">
                    </div>
                </div>
                <h2 class="form_title">Your Address</h2>
                <!-- <div class="row">
                            <div class="col-lg-3">
                                <label class="form-item1" for="Company">Company:</label>
                            </div>
                            <div class="col-lg-9 form-item2">
                                <input type="text" class="form-control" name="Company" placeholder="Company">
                            </div>
                        </div> -->
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="Address">Address:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="text" class="form-control" name="Address" placeholder="Your Address">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="City">City:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="text" class="form-control" name="City" placeholder="City">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="Postcode">Post Code:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="text" size="5" maxlength="5" class="form-control" name="Postcode" placeholder="Your Post Code">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="Country">Country:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <select class="form-control" id="sel1" name="Country">
                            <option value="Greece">Greece</option>
                            <option value="Germany">Germany</option>
                            <option value="Italy">Italy</option>
                            <option value="Spain">Spain</option>
                        </select>
                    </div>
                </div>
                <h2 class="form_title">Your Password</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <label class="form-item1" for="password">Password:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        <label class="form-item1" for="repassword">Password Confirm:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="password" class="form-control" name="repassword" placeholder="Password Confirm">
                    </div>
                </div>
                <h2 class="form_title">Newsletter</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <label class="form-item1" for="subscribe">Subscribe:</label>
                    </div>
                    <div class="col-lg-9 form-item2">
                        <input type="radio" name="subscribe" value="yes" /> Yes
                        <input type="radio" name="subscribe" value="no" /> No
                    </div>
                </div>
                <label id="pp" for="pp"> I have read and agree to the <a href="#">Privacy Policy</a></label>
                <input type="checkbox" id="checkbox" name="pp" value="yes">
                <input class="btn btn-warning btn-lg" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>