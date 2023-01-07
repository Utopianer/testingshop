<?php 
  $filename = basename($_SERVER['PHP_SELF']);
  $page = preg_replace("/(.+)\.php$/", "$1", $filename);
  if ($page == 'index'):
    $page = 'home';
    $title = 'RareDough | Home';
  elseif ($page == 'shop'):
    $title = 'RareDough | Shop';
  elseif ($page == 'account'):
    $title = 'RareDough | Account';
  elseif ($page == 'burn-oven'):
    $title = 'RareDough | Burn Oven';
  elseif ($page == 'leaderboard'):
    $title = 'RareDough | Leader Board';
  elseif ($page == 'vip-pass'):
    $title = 'RareDough | Vip Pass';
  endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
      name="viewport"
    />
    <title><?= $title; ?></title>
    <meta name="author" content="BoredApePizzaClub" />
    <meta
      name="description"
      content="Collect digital Pizza Collectibles, burn and engage to earn BREAD Tokens."
    />
    <meta
      name="keywords"
      content="Blockchain, Ethereum, Polygon, nft, bayc, boredpizzas, freenft, freemint, nftcommunity, whitelist, digital, collectibles"
    />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://raredough.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="RareDough.com">
    <meta property="og:description" content="Collect digital Pizza Collectibles, burn and engage to earn BREAD Tokens.">
    <meta property="og:image" content="https://www.RareDough.com/img/BoredPizzas.jpg">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="RareDough Pizzeria" />
    <meta property="og:image:type" content=".jpg" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="RareDough.com">
    <meta property="twitter:url" content="https://RareDough.com">
    <meta name="twitter:title" content="RareDough.com">
    <meta name="twitter:description" content="Collect digital Pizza Collectibles, burn and engage to earn BREAD Tokens.">
    <meta name="twitter:image" content="https://www.RareDough.com/img/BoredPizzas.jpg">
    <meta name="twitter:image:alt" content="RareDough Pizzeria">
    
    <link rel="apple-touch-icon" sizes="180x180" href="img/bapc-favicon-180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/bapc-favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/bapc-favicon-16.png">
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/minireset.css/0.0.2/minireset.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body class="<?= $page; ?>">
    <!-- Hide Menu -->
    <div id="mobHideMenu" class="hideMenu">
      <div class="hideMenuHeader">
        <div>
          <a class="menuBrand" href="./">
            <img src="./img/logo.png" alt="BoredApePizzaClub Logo" />
          </a>
        </div>
        <div class="languagesSide">
          <div>
            <div class="dropdown flagDropdown me-3">
              <a
                class="dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img id="selectedFlag2" src="./img/EN.png" alt="" />
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div>
                  <a onClick="setLanguage('ch')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/CH.png"
                      alt="Chinese Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('fr')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/FR.png"
                      alt="French Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('gr')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/GR.png"
                      alt="German Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('it')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/IT.png"
                      alt="Italian Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('jp')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/JP.png"
                      alt="Japanese Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('tr')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/TR.png"
                      alt="Turkish Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('hi')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/HI.png"
                      alt="Hindi Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('th')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/TH.png"
                      alt="Thai Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('en')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/EN.png"
                      alt="British Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('es')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/ES.png"
                      alt="Spanish Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('nl')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/NL.png"
                      alt="Dutch Flag"
                  /></a>
                </div>
                <div>
                  <a onClick="setLanguage('pt')" class="dropdown-item" href="#"
                    ><img
                      img
                      class="flagSrc"
                      src="./img/PT.png"
                      alt="Portuguese Flag"
                  /></a>
                </div>
              </div>
            </div>
          </div>
          <div id="hideMenuIcon" class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line mb-0"></span>
          </div>
        </div>
      </div>
      <div class="hideMenuBody">
        <a class="hideMenuLink" tkey="" href="./">Home</a>
        <br />
        <a class="hideMenuLink" tkey="get_btn" href="./vip-pass">Get Vip Pass</a>
        <br />
        <a class="hideMenuLink" tkey="get_btn" href="./burn-oven">Burn oven</a>
        <br />
        <a class="hideMenuLink" tkey="get_btn" href="./shop">Shop</a>
        <div class="socialIcons">
          <a
            class=""
            href="https://opensea.io/collection/boredapepizzaclub"
            target="_blank"
          >
            <img src="./img/opensea-icon.png" alt="Opensea Icon" />
          </a>
          <a
            class="mx-2"
            href="https://twitter.com/BOREDpizzas"
            target="_blank"
          >
            <img src="./img/twitter-icon.png" alt="Twitter Icon" />
          </a>
          <a href="https://discord.gg/boredpizzas" target="_blank">
            <img src="./img/discrod-icon.png" alt="Discord Icon" />
          </a>
        </div>
      </div>
    </div>

    <!-- Start Body Wrapper -->
    <div class="bodyWapper <?= $page; ?>">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand me-5" href="./">
            <img src="./img/logo.png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav brandNav">
              <li class="nav-item">
                <a
                  tkey="free_mint_btn"
                  class="nav-link"
                  aria-current="page"
                  href="./"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a tkey="get_btn" class="nav-link" href="./vip-pass">Get VIP Pass</a>
              </li>
              <li class="nav-item">
                <a tkey="" class="nav-link" href="./burn-oven">Burn oven</a>
              </li>
              <li class="nav-item">
                <a tkey="" class="nav-link" href="./leaderboard">Leaderboard</a>
              </li>
              <li class="nav-item">
                <a tkey="" class="nav-link" href="./shop">Shop</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://opensea.io/collection/boredapepizzaclub"
                  target="_blank"
                  ><img src="./img/opensea-icon.png" alt=""
                /></a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link px-0"
                  href="https://twitter.com/BOREDpizzas"
                  target="_blank"
                  ><img src="./img/twitter-icon.png" alt=""
                /></a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://discord.gg/boredpizzas"
                  target="_blank"
                  ><img src="./img/discrod-icon.png" alt=""
                /></a>
              </li>
              <?php if ($page == 'home'): ?>
                <li class="nav-item dropdown flagDropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img id="selectedFlag" src="./img/EN.png" alt="" />
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <a
                        onClick="setLanguage('ch')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          tkey="flag"
                          src="./img/CH.png"
                          alt="Chinese Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('fr')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/FR.png"
                          alt="French Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('gr')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/GR.png"
                          alt="German Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('it')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/IT.png"
                          alt="Italian Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('jp')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/JP.png"
                          alt="Japanese Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('tr')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/TR.png"
                          alt="Turkish Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('hi')"
                        class="dropdown-item"
                        href="#"
                        ><img class="flagSrc" src="./img/HI.png" alt="Hindi Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('th')"
                        class="dropdown-item"
                        href="#"
                        ><img class="flagSrc" src="./img/TH.png" alt="Thai Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('en')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/EN.png"
                          alt="English Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('es')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/ES.png"
                          alt="Spanish Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('pt')"
                        class="dropdown-item"
                        href="#"
                        ><img
                          class="flagSrc"
                          src="./img/PT.png"
                          alt="Portuguese Flag"
                      /></a>
                    </li>
                    <li>
                      <a
                        onClick="setLanguage('nl')"
                        class="dropdown-item"
                        href="#"
                        ><img class="flagSrc" src="./img/NL.png" alt="Dutch Flag"
                      /></a>
                    </li>
                  </ul>
                </li>
              <?php endif; ?>
            </ul>
            <?php if ($page == 'account' || $page == 'shop'): ?>
              <ul class="navbar-nav ms-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="https://opensea.io/collection/boredapepizzaclub"
                    target="_blank"
                    ><img src="./img/cart-icon.svg" alt=""
                  /></a>
                </li>
                <li class="nav-item ms-3">
                  <div class="dropdown">
                    <button
                      class="nav-link mainBtn"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <img id="userIcon" src="./img/userIcon.svg" alt="" />
                      <span>Connect</span>
                      <img
                        src="./img/downArrowDark.svg"
                        alt=""
                        class="downArrowDark"
                      />
                    </button>
                    <ul class="dropdown-menu">
                      <div class="mainText">Bread Balance</div>
                      <h1 class="subHeading">
                        <img
                          src="./img/bpac-sm-icon.svg"
                          alt=""
                          class="me-3"
                        />10,000.00
                      </h1>
                      <li>
                        <a href="#" class="dropdown-item active">Account</a>
                      </li>
                      <li><a href="#" class="dropdown-item">Logout</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </nav>