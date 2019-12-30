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
                    <button class="btn btn-sm btn-success get-profile">Get Profile</button>
                </div>
            </div>
        </div>

        <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
        <script>
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

            $('.get-profile').click(function(){
                liff.getProfile()
                .then( profile => {
                    console.log(profile)
                })
                .catch( (err) => {
                    console.log('error',err);
                });
            });
        </script>
    </body>
</html>