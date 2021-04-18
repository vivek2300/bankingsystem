<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- CSS links-->
    <link rel="stylesheet" type="text/css" href="css/history.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time(); ?>">
    <!--ICON-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Transaction History</title>

    <style>
         body{
            background: #ffffff;
      }
      footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
      </style>
    </head>
    <body>

  <!--Includes the contents from the navbar.php page-->
        <?php
          include 'navbar.php';
        ?>


<div style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class=" text-center">
                    <h2>TRANSACTIONS</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="btn-toolbar">

</div>

        <div class="container">
        <div class='well' style='background-color:#18bc9c;'>
    <table class='table' >
                    <thead class="thead-dark">
                      <tr>
                      <th>SENDER</th>
                      <th>RECEIVER</th>
                      <th>TRANSACTIONS (AMOUNT)</th>
                      <th>DATE AND TIME</th>
                      </tr>
                    </thead>
                <tbody>
                    <?php 
                        include 'config.php';
                        $sql = "SELECT * FROM transaction";
                        $query = mysqli_query($conn , $sql);
                        while($rows = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['sender'] ; ?></td>
                        <td class="py-2"><?php echo $rows['receiver'] ; ?></td>
                        <td class="py-2"><?php echo $rows['balance'] ; ?></td>
                        <td class="py-2"><?php echo $rows['datetime'] ; ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
            

        <footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <p class="ant"><b>VIVEK SINGH</b></p>
                    <a class="btn btn-social-icon btn-linkedin ant"  href="https://www.linkedin.com/in/vivek-singh-b510b3205/"><i class="fa fa-linkedin "></i></a>                      
                    <a class="btn btn-social-icon btn-instagram"  href="https://www.instagram.com/viveksinghraghuvanshi26/"><i class="fa fa-instagram"></i></a>
                    <a class="btn btn-social-icon btn-github" href="https://github.com/vivek2300"><i class="fa fa-github"></i></a> 
                <p class="ant">#GRIPAPRIL21</p>                                      
            </div>
        </div>
    </div>
    </footer>  
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    </body>
</html>