

<style>
    .full-height {
        min-height: 100%;
        max-height: 100%;
        height: 100vh;
    }

    .chart-content {
        height: 50vh;
    }
</style>

<?php
$headerTitle  = 'Test pagess';
require_once '../layout/header.php';


?>

<div class="">
    <div class="row">
        <div class="col-sm-2 full-height">
            <div class="mt-5 mx-2 ps-2">
                <ul class="list-group">
                    <li class="list-group-item"  id="menu-first" aria-current="true">An active item</li>
                    <li class="list-group-item" id="menu-second" onClick="fetchRemotePage('../pages/second.php','contenthere', 'menu-second')">A second item</li>
                    
                    <li class="list-group-item" id="menu-third" onClick="fetchRemotePage('../pages/third.php','contenthere', 'menu-third')">A third item</li>

                    <li class="list-group-item" id="menu-second" onClick="fetchRemotePage('../pages/second.php','contenthere', 'menu-second')">A second item</li>
                    
                    <li class="list-group-item" id="menu-third" onClick="fetchRemotePage('../pages/third.php','contenthere', 'menu-third')">A third item</li>
                    <li class="list-group-item ">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
        </div>



        <div class="col-sm-10 ">
            <div class="row px-5">
                <div class="col ps-5 pb-5 pt-3">
                    <div class="row" id="contenthere">

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
require_once '../layout/footer.php';
?>