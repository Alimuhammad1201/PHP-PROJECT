    <footer>
        <div class="footer-content">
            <ul>
            	<li><h4>Categories</h4></li>
                <?php  
                    require_once 'config/dbc.php';
                    $getAllCategories = mysqli_query($connection, "SELECT * FROM category WHERE status='ACTIVE' LIMIT 5") or die(mysqli_error($connection));
                    while ($viewAllCategories = mysqli_fetch_array($getAllCategories)) {
                ?>
                <li><a href="index.html"><?php echo $viewAllCategories['title']; ?></a></li>
            <?php } ?>
            </ul>
            
            <ul>
            	<li><h4>Latest SMS</h4></li>
               <?php  
                    require_once 'config/dbc.php';
                    $getLatestSMS = mysqli_query($connection, "SELECT * FROM message WHERE status='ACTIVE' ORDER BY id DESC LIMIT 5") or die(mysqli_error($connection));
                    while ($viewLatestSMS = mysqli_fetch_array($getLatestSMS)) {
                ?>
                <li><a href="index.html"><?php echo $viewLatestSMS['title']; ?></a></li>
                <?php } ?>
            </ul>
            
            <ul class="endfooter">
            	<li><h4>Follow Us</h4></li>
                <li><a href="https://www.facebook.com/profile.php?id=100081175110888" target="_blank">Facebook </a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="#" target="_blank">Linked In</a></li>
                <li><a href="#" target="_blank">Pinterest</a></li>
                <li><a href="#" target="_blank">YouTube</a></li>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; AFA 2022. by Students of AFA</p>
         </div>
    </footer>
</div>
</body>
</html>