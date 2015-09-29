<footer class="footer-area">
      <div class="col-md-12">
        <div class="copy-area">
          <p>copyright &copy; w3zones</p>
        </div>
      </div>

      <?php 
        if ( isset( $connection )) {
            mysqli_close( $connection );
        }

       ?>
</footer>
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>        
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/custom.js"></script>

        <script>
        $(document).ready(function(){
                $("#kader").masonry();
        });

        </script>

    </body>
</html>