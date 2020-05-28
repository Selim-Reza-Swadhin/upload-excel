<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Excel(CSV) file with PHP - https://selimrezaswadhin.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../website/js/vendor/jquery-3.5.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../website/js/vendor/bootstrap.min.js"></script>
    <link rel="icon" href=".\website\img\coding-birds-online\coding-birds-online-favicon.png" type="image/x-icon">
    <!--==================CSS==================-->
    <link rel="stylesheet" href="./website/css/font-awesome.min.css">
    <link rel="stylesheet" href="./website/css/bootstrap.css">
    <link rel="stylesheet" href="./website/css/main.css">
    <!--==================CSS==================-->
</head>
<body>
<div class="jumbotron text-center">
    <h1>Upload Excel(CSV) file with PHP</h1>
    <a href="https://selimrezaswadhin.com">https://selimrezaswadhin.com</a>
</div>
<div class="container">
    <form action="excel-script.php" method="post" enctype="multipart/form-data">
       <div class="row">
           <div class="col-md-4">
               <div class="form-group">
                   <input type="file" name="excelDoc" id="excelDoc" class="form-control" />
               </div>
           </div>
           <div class="col-md-4">
               <input type="submit" name="uploadBtn" id="uploadBtn" value="Upload Excel" class="btn btn-success" />
           </div>
       </div>
    </form>


        <table border="1" cellpadding="2">
            <tr style="text-align: center;">
                <th>Id</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
            </tr>
            <?php
            include  "config.php";
            $query = "select * from bird_excel_users order by id desc";
            $result = $connection->query($query);
            while ($row = mysqli_fetch_assoc($result)){?>
            <tr style="text-align: center;">
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['contact']; ?></td>
                <td><?= $row['email']; ?></td>
            </tr>
    <?php } ?>
        </table>

    <!--    footer-->
    <div class="row footer-bottom d-flex justify-content-between align-items-center">
        <h4 class="col-lg-12 footer-text text-center">
            Copyright &copy;  <?= date('d-M-Y'); ?> All rights reserved | Designed & Developed <i class="fa fa-heart-o" style="color: red" aria-hidden="true"></i> by <a href="https://selimrezaswadhin.com" target="_blank">Selim Reza Swadhin</a>
        </h4>
    </div>
    <!--   end footer-->
</div>
</body>
</html>
