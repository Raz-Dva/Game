<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Питання кування</title>
    <link href="publik/css/bootstrap.min.css" rel="stylesheet">
    <link href="publik/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .alert-my {
            background: #F4DAF7;
        }

        .modal {
            background: rgba(0, 0, 0, .3);
        }

        .modal-header {
            padding-top: 10px;
            padding-bottom: 0;
            border: 0;
        }

        #textMod {
            margin: 0;
        }
    </style>
</head>
<body>

   <?php       include('/includes/db.php');  
         ?>

    <div class="container">
   
        <!-- ====================модал. окно================ -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                    </div>
                    <div class="modal-body">
                        <h2 id="textMod" class="text-center">
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====================модал. окно and================ -->
       