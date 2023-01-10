      <!-- Copy Right Text -->
      <div class="copyRightText" tkey="copy_text">
        © 2022 Made with ❤ by RareDough
      </div>
    </div>
    <!-- End Body Wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="./js/main.js"></script>
    <script src="./js/lang.js"></script>
    <script>
      // Get Src from Image
      let allFlags = document.querySelectorAll(".flagSrc");
      for (let i = 0; i < allFlags.length; i++) {
        allFlags[i].addEventListener("click", flagsHandleClick);
      }

      function flagsHandleClick(e) {
        let flagSrc = e.target.src;
        console.log(flagSrc);
        document.getElementById("selectedFlag").src = flagSrc;
        document.getElementById("selectedFlag2").src = flagSrc;
      }

      const selected = localStorage.getItem("langCode");
      if (selected) {
        document.getElementById(
          "selectedFlag"
        ).src = `./img/${selected.toUpperCase()}.png`;
        document.getElementById(
          "selectedFlag2"
        ).src = `./img/${selected.toUpperCase()}.png`;
      }
    </script>
    <?php if ($page == 'account' || $page == 'shop'): ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.0-rc.0/web3.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="./js/coinabi.js"></script>
      <script src="./js/pizzaabi.js"></script>
      <script src="./js/ovenabi.js"></script>
      <script src="./js/pizzalib.js"></script>
      <script src="./js/connect.js"></script>
    <?php elseif ($page == 'leaderboard'): ?>
      <script src="./js/leaderboard.js"></script>
    <?php endif; ?>

    <?php if ($page == 'shop' || $page == 'utilities' || $page == 'whitelist'): ?>
      <script src="./js/shop.js"></script>
    <?php endif; ?>
  </body>
</html>