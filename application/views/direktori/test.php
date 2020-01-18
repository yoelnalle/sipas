<html>
    <head>
        <title>Modal - harviacode.com</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    </head>
    <body>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <!--pada prakteknya looping dari database-->
                <tr>
                    <td>Hari</td>
                    <td>Jakarta</td>
                    <td><a href="#" class="edit-record" data-id="1">Show</a></td>
                </tr>
                <tr>
                    <td>Hera</td>
                    <td>Bekasi</td>
                    <td><a href="#" class="edit-record" data-id="2">Show</a></td>
                </tr>
            </table>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>
        <script>
            $(function () {
                $(document).on('click', '.edit-record', function (e) {
                    e.preventDefault();
                    $("#myModal").modal('show');
                    $.post('hasil.php',
                            {id: $(this).attr('data-id')},
                    function (html) {
                        $(".modal-body").html(html);
                    }
                    );
                });
            });
        </script>
    </body>
</html>
<!--harviacode.com-->