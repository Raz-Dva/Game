       </div>       
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="publik/js/bootstrap.min.js"></script>
       <script>
        $(window).load(function () {
            var modalBts = $('#myModal');
            var textMod = modalBts.find("#textMod");                  
            $(".alert-link").click(function () {
                if ($(this).attr("id") == "true" ) {
                    modalBts.modal();
                    textMod.text("Вiрно! Молодець!");  
                    var url = $("#url").attr("href");                             
                    setTimeout(function() { document.location.href = "http://game-million.ua" + url }, 2000);

                    window.onbeforeunload = function() {};

                }
                else {
                    modalBts.modal();
                    textMod.text("Не вiрно. Спробуйте ще раз.");   
                    //modalBts.modal('hide');

                }
            })        
            
        })
    </script> 
</body>
</html>