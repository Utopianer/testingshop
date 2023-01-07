<?php include 'header.php'; ?>

<!-- Shop Section -->
<section class="shopSection mt-lg-3">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-2 smallSectionBorder py-lg-5">
            <div class="sideMenu">
              <!-- desktopView -->
              <div class="sideMenuLinks desktopView">
                <a class="sideMenuLink active" href="./shop.html">All Items</a>
                <a class="sideMenuLink " href="./whitelist.html">Whitelist</a>
                <a class="sideMenuLink" href="./limited-editions.html">Limited Editions</a>
                <a class="sideMenuLink" href="./custom-pizza.html">Custom Pizzas</a>
                <a class="sideMenuLink" href="./utilities.html">Utilities</a>
              </div>
              <!-- mobileView -->
              <div class="sideMenuLinks mobileView">
                <a class="sideMenuLink active" data-bs-toggle="collapse" href="#sideMenu" role="button"
                  aria-expanded="false" aria-controls="collapseExample">
                  All Items
                </a>
                <div class="collapse" id="sideMenu">
                  <div class="card card-body">
                    <a class="sideMenuLink " href="./whitelist.html">Whitelist</a>
                    <a class="sideMenuLink" href="./limited-editions.html">Limited Editions</a>
                    <a class="sideMenuLink" href="./custom-pizza.html">Custom Pizzas</a>
                    <a class="sideMenuLink" href="./utilities.html">Utilities</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-10 py-lg-5 ps-lg-4">
              <div class="row">
                  <div class="col-lg-3">
                      <div class="searchArea">
                          <input type="text" placeholder="search">
                          <img src="./img/search-icon.svg" alt="">
                      </div>
                  </div>
                  <div class="col-lg-2 ms-auto text-end mt-2 mt-lg-0">
                      <div class="dropdown newestDropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                              Newest
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Price (low to high)</a></li>
                            <li><a class="dropdown-item" href="#">Price (high to low)</a></li>
                            <li><a class="dropdown-item" href="#">Name (A to Z)</a></li>
                          </ul>
                        </div>
                  </div>
              </div>
              <!-- desktopView -->
              <div class="desktopView">
                <div class="row mt-4">
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Utilities</p>
                                <p class="cardText">Free Mint Pizza</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 0</p>
                                <a href="freemint.html" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/2.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Infinity Pizza</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 1</p>
                                <a href="infinity.html" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/3.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Whitelist lvl 1</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 35000</p>
                                <a href="whitelist-lvl1.html" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/4.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Whitelist lvl 2</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 85000</p>
                                <a href="whitelist-lvl2.html" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/5.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Whitelist lvl 3</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 135000</p>
                                <a href="whitelist-lvl3.html" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mt-lg-4">
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- mobileView -->
              <div class="mobileView">
                <div class="row mt-3 gx-3 gy-0">
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/1.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Utilities</p>
                                <p class="cardText">Free Mint Pizza</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 0</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/2.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Infinity Pizza</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 1</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/3.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Whitelist lvl 1</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 35000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/4.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Whitelist lvl 2</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 85000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./assets/images/4.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Whitelist</p>
                                <p class="cardText">Whitelist lvl 3</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 135000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./img/shop-card-img-6.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./img/shop-card-img-7.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./img/shop-card-img-8.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./img/shop-card-img-9.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./img/shop-card-img-10.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Some product</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="shopCard">
                            <img class="shopCardImg" src="./img/shop-card-img-10.png" alt="">
                            <div class="shopCardFooter">
                                <p class="category">Category</p>
                                <p class="cardText">Genesis Pizza #8</p>
                                <p class="cardText odd"><img src="./img/bpac-sm-icon.svg" alt=""> 10.000</p>
                                <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<?php include 'footer.php'; ?>