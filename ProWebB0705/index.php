<html>
    <head>
        <meta charset="UTF-8">
        <title>SIGN IN</title>
        <link rel="icon" href="asset/images/favicon.ico">
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <link rel="stylesheet" href="asset/css/floating-labels.css">
        
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/popper.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
        <script>
            window.setTimeout(function () {
                $(".alert").fadeOut(400,0).slideUp(400,function (){
                $(this).remove();
            });
            },5000);
        </script>
    </head>
    <body>
        <div class="alert alert-danger fade show" role="alert">
            IHIRRRRRR !!!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <button type="button" class="btn btn-outline-success" data-toggle="modal"
            data-target="#DialogModalKu">
                    Tampilkan Dialog !
        </button>
        
        <div class="modal fade" id="DialogModalKu" tabindex="-1" role="dialog"
            aria-labelledby="DialogModalKu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DialogModalLabel">
                        Ini Modal !
                    </h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bagian Modal Body nya . . .
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Tutup
                    </button>
                </div>
                </div>
                </div>
        </div>
    </body>
</html>
