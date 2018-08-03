

<?php

    include'views/head.php';

    include 'views/header.php';
    
    

    include 'views/nav.html';
    include 'templates/add-jobs.php';
    ?>
    <form action="companyview/investor_percent" method="get">

<input type="number" name="company" value="68"/>
<input type="number" name="investor" value="323"/>
<input type="submit" name="submit" />
 </form>
 <?php
    require 'views/footer.php';



?>


