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
      document.getElementById(
        "selectedFlag"
      ).src = `./img/${selected.toUpperCase()}.png`;
      document.getElementById(
        "selectedFlag2"
      ).src = `./img/${selected.toUpperCase()}.png`;
    </script>
  </body>
</html>