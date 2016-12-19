<?php
$page_title = "Onaxsys Innovations";
require_once 'includes/HeaderMain.php';
?>

<div class="container" style="border:1px solid #ececec; margin-top: 52px;">

    <div class="row onx-min-height400">
        
        <div class="onx-container">
            <?php
        echo 'out';
        ?>
        <input type="text" id="txtName"/>
        <button type="button" id="btnNameCall" onclick="onaxClick();">Submit</button>
        <script>
            function onaxClick() {
                var txtName = $("#txtName");
                alert(txtName.val());
            }
        </script>
        </div>
        
    </div>

</div>


<?php
require_once 'includes/FooterMain.php';
?>

