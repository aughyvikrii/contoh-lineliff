<html>
    <head>
        <meta charset="utf-8">
        <title>Latihan Line Liff</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="page-header">
                <h1 align="center">
                    Latihan Line Liff
                </h1>
                <!-- <ul class="nav nav-pills">
                    <li><a id="nav-list-catatan" href="javascript:void(0);" onclick="gantiMenu('list-catatan');">List Catatan</a></li>
                    <li><a id="nav-tambah-catatan" href="javascript:void(0);" onclick="gantiMenu('tambah-catatan');">Tambah Catatan</a></li>
                </ul> -->
            </div>
            
            <div class="row">
                <div class="col-12">

                <div class="alert alert-info">
                    <p> Open From App : <b id="openFrom"></b> </p>
                    <p> Is Login : <b id="isLogin"></b> </p>
                </div>

                <div id="result">

                </div>

                    <button class="btn btn-sm btn-success get-profile">Get Profile</button>
                </div>
            </div>
        </div>

        <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
        <script>

            var init = {};

            // Using a Promise object
            liff
            .init({
                liffId: "1234567890-abcedfgh" // use own liffId
            })
            .then(() => {
                // Start to use liff's api
            })
            .catch((err) => {
                // Error happens during initialization
                console.log(err.code, err.message);
            });

            

            var initFirst = function(){
                init.InClient = liff.isInClient();
                init.isLogin = liff.isLoggedIn();
            }
            initFirst();

            var appendAllView = function(){
                $('#openFrom').html(''+init.InClient);
                $('#isLogin').html(''+init.isLogin);
            }

            appendAllView();

            var setResult = function(type,message)
            {
                $('#result').html('');
                let result = '<div class="alert alert-'+type+'">'+message+'</div>';
                $('#result').html(result);
            }

            $('.get-profile').click(function(){
                if( init.isLogin == true ) {
                    liff.getProfile()
                    .then( profile => {
                        console.log(profile)
                    })
                    .catch( (err) => {
                        console.log('error',err);
                    });
                }
                else {
                    setResult('danger',"You are not logged in")
                }
            });
        </script>
    </body>
</html>