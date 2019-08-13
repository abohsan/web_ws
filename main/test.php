<?php
// header ('Location: pages/1/1_1_1.php');
include 'core/init.php';
// $_SESSION['requestedPage'] = 'requested';
// $_SESSION['openPage'] ='asdasda';
// $phpFile = new PhpFiledd();
// $phpFile->getPhpFiles();
// // echo "<br>------------------------<br>";
// $phpFile->directTo('1_1_1');
// $phpFile->directTo('2_1_1');
// echo $phpFile->getURL('2_1_1');
// echo PhpFiledd::getURL('2_1_1');
// echo (PhpFiledd::getURL2('2_1_1'));
// echo  $phpF->getURL1();
// die();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<!-- <body>
 <button id='100'>click me</button> -->
<button id='101'>php</button>
    <!-- <input type="text" name="tx" id='tx' > --> 
     <div id="tell" style="background-color : green;">

        div 100

    </div> 
    <script src="js1/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#100').on('click', function(e) {
                e.preventDefault();
                $("requestedPage").text = 'fs';
                var dd = '<?php echo $_SESSION['requestedPage']; ?>';
                alert(dd);
                // var sessionValue = '<%=Session["requestedPage"]%>';
                // // var page_url = "<?php 
                // echo  $phpF->getURL('2_1_1');
                ?>";
                // // $('#tell').load(page_url);
                // $('#tell').text( sessionValue);
            });

        });


    </script>
</body>

</html>