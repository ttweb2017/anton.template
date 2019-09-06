<?php
/**
 * Created by PhpStorm.
 * User: shagy
 * Date: 9/6/19
 * Time: 2:22 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Anton Template">
    <title>Anton Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Anton Template" />
    <meta property="og:description" content="Anton Template Description" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en" />
    <meta property="og:url" content="http://localhost/anton.template/" />
    <meta property="og:image" content="http://localhost/anton.template/img/logo.png" />

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />

    <!-- Data table -->
    <link rel="stylesheet" href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- Default Design-->
    <link rel="stylesheet" type="text/css" href="css/default.css">

    <!-- jQuery 3 -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <img src="img/logo.png" alt="Template" title="" />
        </div>
    </header>
    <div class="wrapper">
        <main class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="userList" class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ady</th>
                                <th scope="col">Açyklama</th>
                                <th scope="col">Salgysy</th>
                                <th scope="col">Hereket</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for($i = 1; $i < 21; $i++) { ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td>Planiyev Plany</td>
                                    <td>Towar satyn aldy</td>
                                    <td>Ashgabat</td>
                                    <td>
                                        <a href="#"><i class="fa fa-cogs"></i></a>
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                            <!--<tfoot>
                            <tr>
                                <td colspan="2"><b>Jemi:</b></td>
                                <td colspan="3"><b>150 TMT</b></td>
                            </tr>
                            </tfoot>-->
                        </table>
                    </div>
                </div>
            </div>
            <!-- DataTables -->
            <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <script>
                $(function () {
                    $('#userList').DataTable({
                        "language": {
                            "decimal":        "",
                            "emptyTable":     "Görkezmek üçin belgi tapylmady",
                            "info":           "_TOTAL_ setiriň _START_ bilen _END_ arasy görkezilýär",
                            "infoEmpty":      "0 setiriň 0 bilen 0 arasy görkezilýär",
                            "infoFiltered":   "(_MAX_ belgi içinden saýlandy)",
                            "infoPostFix":    "",
                            "thousands":      ",",
                            "lengthMenu":     "_MENU_ sany görkez",
                            "loadingRecords": "Indirilýär...",
                            "processing":     "Işlenýär...",
                            "search":         "Gözleg",
                            "zeroRecords":    "Gabat gelýän belgi tapylmady",
                            "paginate": {
                                "first":      "Byrynjy",
                                "last":       "Soňky",
                                "next":       "Indiki",
                                "previous":   "Öňki"
                            },
                            "aria": {
                                "sortAscending":  ": sütün boýunça saýlamak üçin köpelen bölümini aktiwleşdirmek",
                                "sortDescending": ": sütün boýunça saýlamak üçin azalan bölümini aktiwleşdirmek"
                            }
                        }
                    });
                })
            </script>
        </main>
    </div>
    <footer>
        <p id="copyright">&copy; TTWeb <?php echo date("Y"); ?> Ähli haklar goragly.</p>
    </footer>
</body>
</html>
