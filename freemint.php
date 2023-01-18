<?php include 'header.php';?>
<script src="js/product.js"></script>

<?php $itemName = ''; $itemDescription = ''; $itemPrice = ''; $itemImage = ''; ?>

      <!-- Infinity Section -->
      <section class="infinitySection item">
        <!-- mobile view -->
        <div class="mobileView">
          <div class="container text-start">
            <h1 class="mainHeading itemHeading"><?= $itemName ?></h1>
            <a class="imageLink" href="#">
              <img
                class="pizzaImg"
                  src="<?= $itemImage ?>"
                  alt="<?= $itemName ?>"
              />
            </a>
          </div>
        </div>

        <div class="container">
          <div class="row">

            <div class="col-lg-5 mt-4 mt-lg-0 desktopView">
              <a class="imageLink" href="#">
                <img
                  class="pizzaImg"
                  src="<?= $itemImage ?>"
                  alt="<?= $itemName ?>"
                />
              </a>
            </div>
            <div class="col-lg-7">
              <div class="desktopView">
                <h1 class="mainHeading itemHeading"><?= $itemName ?></h1>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="description mt-5 mb-5 mt-lg-0 mb-lg-0">
                    <h1 class="subHeading">Description</h1>
                    <div class="descriptionBody">
                      <p class="mainText itemDescription"><?= $itemDescription ?></p>
                      <div class="mainText itemPrice "><?= $itemPrice ?></div>
                      <h1 class="mainHeading">
                        <img src="./img/bpac-lg-icon.svg" alt="" /> 0
                      </h1>
                      <div class="row ">
                        <div class="col-lg-6 ">
                          <a id="mintButton" class="mainBtn light" href="#">Buy Now</a>
                        </div>
                        <div class="col-lg-6 ">
                          <a href="https://app.uniswap.org/#/tokens/polygon/0xb8e57A05579b1F4c42DEc9e18E0b665B0dB5277f" class="mainBtn dark">Buy BREAD</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-lg-4">
                <div class="col-lg-6">
                  <a class="btn btn-primary collapseBtn" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span>Properties</span>
                    <img src="./img/downArrow.svg" alt="">
                  </a>
                  <div class="collapse" id="property">
                    <div class="card card-body">
                      <div class="cardContainer">
                        <div class="row">
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="collapesCard">
                             <div class="smText">Background</div>
                             <div class="mainText">Background</div>
                           </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <a class="btn btn-primary collapseBtn" data-bs-toggle="collapse" href="#token" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span>Token Details</span>
                    <img src="./img/downArrow.svg" alt="">
                  </a>
                  <div class="collapse" id="token">
                    <div class="card card-body">
                      <table>
                        <tbody>
                          <tr>
                            <td class="smText">Token ID</td>
                            <td class="mainText">1</td>
                          </tr>
                          <tr>
                            <td class="smText">Blockchain</td>
                            <td class="mainText">Polygon</td>
                          </tr>
                          <tr>
                            <td class="smText">Token Standard</td>
                            <td class="mainText">ERC1155</td>
                          </tr>
                          <tr>
                            <td class="smText">Contract</td>
                            <td class="mainText" href="https://polygonscan.com/address/0x37322bf16ccf75fdcf2ee22b4361913b0facba49">0x37322bf16ccf75fdcf2ee22b4361913b0facba49 <img src="./img/collapesArrow.svg" alt=""></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php include 'footer.php'; ?>
