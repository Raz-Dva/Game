<div class="row">
    <div class="col-lg-12">
        <h2>Питання <?php echo $num_page?></h2> 
        <div class="bs-component">
            <div class="alert alert-dismissible alert-warning">

                <?php 

                $results = mysqli_query($connection, "SHOW TABLES FROM `game_million`");

               $row = mysqli_num_rows($results);
                  print_r($row); 


                $connect_tab = mysqli_query($connection, "SELECT * FROM `$name_db`");
                $num_rows = mysqli_num_rows($connect_tab); 
                //echo "$num_rows"; 
                $ran_id = rand(1, $num_rows);

                $result = mysqli_query($connection, "SELECT * FROM `$name_db` WHERE `id`= $ran_id ");
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
            <div class="col-xs-6">
                <div class="bs-component">
                    <div class="alert alert-dismissible alert-danger">
                        <strong>
                            <?php                    
                                    //echo  '<a href="#" class="alert-link text-success">' . $ran . '</a>'; 
                            if( $arr_quest[$ran] == $true){
                                echo '<a href="#" class="alert-link text-danger" id="true">'.$arr_quest[$ran].'</a> <br>' ;
                            }
                            else
                                echo '<a href="#" class="alert-link text-danger false_answer">'.$arr_quest[$ran].'</a> <br>' ;                                     
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

        ?>   