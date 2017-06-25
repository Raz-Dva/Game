<?php       include('/pages/header.php');        
$num_page = 1;
$name_db = "db-".$num_page."type"      ?>
<?php       include('/includes/containe.php'); ?>
                
        <div class="text-right"><a href="/question<?php echo $num_page+1?>.php" class="" id="url">Наступне питання &#5125;</a></div>
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Список питяннь</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li class=""><label> <input type="checkbox" checked disabled> Питання 1</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 2</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 3</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 4</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 5</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 6</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 7</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 8</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 9</label></li>
                        <li><label> <input type="checkbox" disabled> Питання 10</label></li>
                    </ul>
                </div>
            </div>

            
        </div>
        <div class="col-xs-4"></div>
    </div>

    <?php       include('/pages/footer.php');        ?>