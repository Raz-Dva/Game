<?php       include('/pages/header.php');        ?>

 <div class="row">
    <div class="col-lg-12">
        <h2>Вопросы</h2>
        <div class="bs-component">
            <div class="alert alert-dismissible alert-warning">

                <?php 
                $result = mysqli_query($connection, "SELECT * FROM `million_db` WHERE `id`=3 ");                      
                while( ($question = mysqli_fetch_assoc($result)) ){
                    echo '<h4 id="text_question" class="">' . $question['title'] .'</h4>'; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="asks" class="row">

        <?php
        $arr_quest = array();
        for( $i=1; $i<5; $i++) { 
            ?>
            <?php             
            $str = 'text';                
            array_push($arr_quest, $question[$str . $i]);            
            ?>
            <?php  } 
        };       
                //print_r($arr_quest);
        $true = $arr_quest[0];

        for ($j=0; $j<4; $j++) {
                    //echo '<a href="#" class="alert-link text-primary">' . (count($arr_quest)) .'</a> <br>'; 
                    //echo $j; 
            $e = count($arr_quest)-1;
                    //echo $e;
            $ran = rand(0, ($e));?>
            <div class="col-lg-6">
                <div class="bs-component">
                    <div class="alert alert-dismissible alert-danger">
                        <strong>
                            <?php                    
                                    //echo  '<a href="#" class="alert-link text-success">' . $ran . '</a>'; 
                            if( $arr_quest[$ran] == $true){
                                echo '<a href="#" class="alert-link text-danger" id="true">'.$arr_quest[$ran].'</a> <br>' ;
                            }
                            else
                                echo '<a href="#" class="alert-link text-danger">'.$arr_quest[$ran].'</a> <br>' ;                                     
                            ?>
                        </strong>
                    </div>
                </div>
            </div>
            <?php
            array_splice($arr_quest, $ran, 1);
            ?>
            <?php    
        }  
                    //print_r($arr_quest);
        ?>                   
        <div class="text-right"><a href="/question4.php" id="url" class="hidden">Следующий вопрос &#5125;</a></div>
    </div> 

     <?php       include('/pages/footer.php');        ?>