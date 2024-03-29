<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kr Creation</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./responsive.css">
    <link rel="icon" type="image" href="./images/main_logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="frontPage">
        <div class="navMob">

            <div class="toggle">
                <button id="openBtn" class="open nav" role="button">
                    ☰
                </button>

                <button id="close" class="close nav" role="button">
                    X
                </button>
            </div>
        </div>
        <div class="navbar navMob2">
            <div class="logo">
                <img src="./images/main_logo.png" alt="logo home page">
            </div>
            <div class="nav-list">
                <div class="nav-items saree navItemMob" id="saree">Saree</div>
                <div class="nav-items navItemMob">Monsoon Sale</div>
                <div class="nav-items navItemMob">Feather Soft</div>
                <div class="nav-items navItemMob">Salwar Suit</div>
                <div class="nav-items navItemMob">Men's Kurta</div>
            </div>
            <div class="nav-icons">
                <div>
                    <a href='./login page/index.php'>
                        <i class="fa fa-user"></i>
                    </a>


                </div>
                <div>
                    <i class="fa fa-magnifying-glass"></i>
                </div>
                <div>
                    <i class="fa fa-bag-shopping"></i>
                </div>
            </div>
        </div>
        <div class="saree-nav">
            <div class="col">
                <div class="col-head">
                    <h4>FABRIC</h4>
                </div>
                <div class="col-items">
                    <p>Silk saree</p>
                    <p>Georgette Saree</p>
                    <p>Fancy Cotton Saree</p>
                    <p>Kota Saree</p>
                    <p>organza Saree</p>
                    <p>Chiffon Saree</p>
                    <p>Satin Saree</p>
                    <p>Crepe Saree</p>
                </div>
            </div>
            <div class="col">
                <div class="col-head">
                    <h4>WEAVE</h4>
                </div>
                <div class="col-items">
                    <p>Banarasi Saree</p>
                    <p>Kanjeevaram Saree</p>
                    <p>Katan Saree</p>
                    <p>Lucknowi Linen Saree</p>
                    <p>Patola Saree</p>
                    <p>Print Sarees</p>
                    <p>Bandhani Saree</p>
                </div>
            </div>
            <div class="col">
                <div class="col-head">
                    <h4>COLORS</h4>
                </div>
                <div class="col-items">
                    <p>Red</p>
                    <p>Green</p>
                    <p>Orange</p>
                    <p>Pink</p>
                    <p>Yellow</p>
                    <p>White</p>
                    <p>Purple</p>
                    <p>Maroon</p>
                    <p>Grey</p>
                    <p>Blue</p>
                </div>
            </div>
            <div class="col">
                <div class="col-head">
                    <h4>FABRIC</h4>
                </div>
                <div class="col-items">
                    <p>organza Saree</p>
                    <p>Chiffon Saree</p>
                    <p>Satin Saree</p>
                    <p>Cotton Linen Saree</p>
                    <p>Crepe Saree</p>
                    <p>Georgette Saree</p>
                    <p>Silk saree</p>
                </div>
            </div>
            <div class="col">
                <div class="col-head">
                    <h4>FABRIC</h4>
                </div>
                <div class="col-items">
                    <p>organza Saree</p>
                    <p>Chiffon Saree</p>
                    <p>Satin Saree</p>
                    <p>Cotton Linen Saree</p>
                    <p>Crepe Saree</p>
                    <p>Georgette Saree</p>
                    <p>Silk saree</p>
                </div>
            </div>
        </div>
        <div class="crousel"></div>
        <div class="crousel-nav">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
    <div class="second-list" align="center">
        <p style="text-align: center;">ELEGANCE MEETS INTEGRITY</p>
        <div class="heading">
            <div>
                <h1>Our Newest Drapes</h1>
                <div class="underline"></div>
            </div>
            <div>
                <p>
                    Anniversary Sale (Buy 2 Get 1 Free)
                </p>
            </div>
        </div>
        <div class="left">
            <i class="fa fa-chevron-left"></i>
        </div>


        <div class="listing">
            <?php
            include_once "./login page/config/dbconnect.php";
            $sql = "SELECT * FROM `first_list`";
            $qry = mysqli_query($conn, $sql);
            $count = 1;
            if (mysqli_num_rows($qry) > 0) {
                while ($rows = mysqli_fetch_assoc($qry)) {
            ?>
                    <div class="item">
                        <a href="./item/item.html">
                            <img src="<?=$rows['item_image']?>" alt="<?=$rows['id']?>">
                        </a>
                        <div class="description">
                            <p>Turquoise Blue Gold with Copper silver zari Kanjeevaram Silk Saree</p>
                            <div class="price">
                                <p>Rs. 6,799.00</p>
                                <p>Rs. 3,399.00</p>
                            </div>
                        </div>
                    </div>
            <?php
                $count++;

                }
            }
            ?>
        </div>
        <div class="right">
            <i class="fa fa-chevron-right"></i>
        </div>
    </div>


    <div class="third-list"></div>

    <div class="fourth-list">
        <div class="fourth-list-heading">
            <p>MOST POPULAR</p>
            <div class="heading2">
                <div class="weave-heading">
                    <h2>Weave</h2>
                    <div></div>
                </div>
                <div>
                    <p>Fabric</p>
                </div>
            </div>

        </div>
        <div class="fourth-left">
            <i class="fa fa-chevron-left"></i>
        </div>
        <div class="fourth-listing"></div>
        <div class="fourth-right">
            <i class="fa fa-chevron-right"></i>
        </div>
    </div>


    <div class="fifthSec">
        <div class="loomimage">
            <img src="./images/loom.webp" alt="" class="loom">
        </div>
        <div class="discover">
            <p>Kr Creation</p>
            <h4>An Embodiment Of True Style</h4>
            <div class="sec-5-1p">
                <p>Draped in a rich family legacy of textile owners and</p>
                <p>saree manufactures,Vardha brings exquisite handloom sarees <br>for women who know <br> what they want
                </p>
            </div>
            <div class="sec-5-2p">
                <p>Coming from a place of knowledge, we offer purpose and <br>meaning to evry piece we design.</p>
                <p>Our collection weaves in the true stories of tradition</p>
                <p>and fine craftsmanship, making it beautiful from the inside out.</p>

            </div>
            <div class="dicover-button">
                <p>Discover</p>
                <img src="./images/download.png" alt="">
            </div>
        </div>
    </div>

    <div class="sixthSec">
        <p>Pick Your look</p>
        <p>At a Price You Prefer</p>
        <div class="sixthListing">
            <div class="sixthItem">
                <img src="./images/sixth-listing/1.jpg" alt="1">
                <p>Below 1999</p>
            </div>
            <div class="sixthItem">
                <img src="./images/sixth-listing/2.webp" alt="2">
                <p>Below 3999</p>
            </div>
            <div class="sixthItem">
                <img src="./images/sixth-listing/3.webp" alt="3">
                <p>Below 5999</p>
            </div>
            <div class="sixthItem">
                <img src="./images/sixth-listing/4.webp" alt="4">
                <p>Below 7999</p>
            </div>

        </div>
    </div>

    <div class="seventhsec">
        <p>Why you'll love us</p>
        <div class="seventhListing">
            <div class="row">
                <div class="seventhItem">
                    <img src="./images/seventh-listing/1.webp" alt="1">
                    <p>Free Shipping in India</p>
                </div>
                <div class="seventhItem">
                    <img src="./images/seventh-listing/2.webp" alt="2">
                    <p>Tailored for you</p>
                </div>
            </div>
            <div class="row">
                <div class="seventhItem">
                    <img src="./images/seventh-listing/3.webp" alt="3">
                    <p>Bespoke collection</p>
                </div>
                <div class="seventhItem">
                    <img src="./images/seventh-listing/4.webp" alt="4">
                    <p>Stamp of authenticity</p>
                </div>
            </div>
            <div class="row">
                <div class="seventhItem lastItem">
                    <img src="./images/seventh-listing/5.webp" alt="5">
                    <p>35+ years of sarees</p>
                </div>
            </div>

        </div>
    </div>
    <!-- 
    <div class="testimonial">
        <div class="testimonial-head">
            <p>They have an eye for the finest</p>
            <p>You Will Too</p>
        </div>
        <div class="testListing"></div>

        <div class="showMore">
            <p>Show More Reviews</p>
        </div>
        <div class="testNav">
            <div class="testNavItem"></div>
            <div class="testNavItem"></div>
            <div class="testNavItem"></div>
            <div class="testNavItem"></div>
            <div class="testNavItem"></div>
            <div class="testNavItem"></div>
        </div>
    </div> -->


    <div class="footer">
        <div class="footer-padding">
            <div class="footer-upper">
                <p>Subscribe to experience the promise of quality</p>
                <p>Explore this section for special deals, unique giveaways, and one-of-a-kind offers.</p>
                <form action="">
                    <input type="text" placeholder="Enter your email">
                    <button>Subscribe</button>
                </form>
            </div>
            <hr>
            <div class="footer-lower">
                <div class="footer-col">
                    <p>SHOP</p>
                    <div class="shop">
                        <p>Saree</p>
                        <p>Salwar Suit</p>
                        <p>Men's Kurta</p>
                    </div>
                </div>
                <div class="footer-col">
                    <div class="info">
                        <p>INFORMATION</p>
                        <p>Our Story</p>
                        <p>Contact us</p>
                        <p>Our Testimonials</p>
                    </div>
                </div>
                <div class="footer-col">

                    <p>HELP</p>
                    <div class="help">
                        <p>Privacy Policy</p>
                        <p>Shipping & Delivery Policy</p>
                        <p>Terms & Conditions</p>
                        <p>Cancellation , Refunds & Exchange Policy</p>
                    </div>
                </div>
                <div class="footer-col customer-care">
                    <p>CUSTOMER CARE</p>
                    <div class="care">
                        <p>+91-8866015444</p>
                        <p>(Mon-Sat 10 AM to 6 PM)</p>
                    </div>

                </div>
                <div class="footer-col">
                    <p>CONTACT</p>
                    <div class="contact">
                        <p>65,Jay Industrial Estate-1,
                            <br>Anjana Farm,<br> Surat 395002
                        </p>
                        <p>Salwar Suit</p>
                        <p>Men's Kurta</p>
                    </div>
                </div>
                <div class=" footer-col footer-logo">
                    <img src="./images/main_logo.png" alt="">
                    <div class="social-icon">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>