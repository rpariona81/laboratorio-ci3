<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?= base_url('dist/img/icons/icon-48x48.png') ?>" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Blank Page | AdminKit Demo</title>

    <link rel="stylesheet" href="<?= base_url('dist/datatables/datatables.min.css') ?>" />
    <link href="<?= base_url('dist/css/app.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dist/css/light.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="<?= base_url('dist/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">

</head>

<body data-theme="colored" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">

    <div class="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Bolsa laboral</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Ofertas laborales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mis postulaciones</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Rol - User
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                <li><a class="dropdown-item" href="#">Cambiar clave</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                <form class="d-flex" role="logout">
                  <div class="d-grid dropdown-item">
            <button class="btn btn-sm btn-warning" type="submit" value="Cerrar sesión"><i class="ti-power-off"> Salir</i></button>
                  </div>
          </form>
                </li>
              </ul>
            
          </ul>
          
        </div>
      </div>
    </nav>
        <!--
        <nav class="navbar navbar-expand navbar-inverse bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="form-control mr-sm-2" type="submit" placeholder="Cerrar sesión"
                        aria-label="Search"><i class="fa fa-key">&nbsp;Cerrar sesión</i></button>
                </form>
            </div>
        </nav>-->

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Blank Page</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0 text-info">Empty card</h5>
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="heading"><span style="float: right">Jquery
                                                    Datatables</span></th>
                                        </tr>
                                        <tr class="bg-warning text-dark">
                                            <th>Order</th>
                                            <th>Start Date</th>
                                            <th>Salary</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $item): ?>
                                            <tr>
                                                <td>
                                                    <?= $item->id ?>
                                                </td>
                                                <td>
                                                    <?= $item->region_id ?>
                                                </td>
                                                <td>
                                                    <?= $item->codentidad ?>
                                                </td>
                                                <td>
                                                    <?= $item->entidad ?>
                                                </td>
                                                <td>
                                                    <?= $item->titulo_entidad ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    if ($item->codtipoentidad == NULL) {
                                                    } else {
                                                        echo '<a class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar CV" target="_blank" download="' . $item->codtipoentidad . '" href="' . base_url('/uploads/filescv/' . $item->codtipoentidad) . '"><i class="fa fa-file-pdf-o" title="' . $item->codtipoentidad . '"></i></a></td>';
                                                    }
                                                    ?>
                                                <td>
                                                    <?= $item->codgestionentidad ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/"
                                target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                    Template</strong></a> &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <script src="<?= base_url('dist/js/jquery-3.7.0.min.js') ?>"></script>
    <script src="<?= base_url('dist/datatables/datatables.min.js') ?>"></script>

    <script src="<?= base_url('dist/js/app.js') ?>"></script>

    <script>
        //document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        // https://datatables.net/reference/button/excelHtml5

        //https://www.youtube.com/watch?v=j59H9xnyCBs
        $(document).ready(function () {
            var mytable = $("#example").DataTable({
                deferRender: true,
                responsive: true,
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                scrollH: true,
                scrollX: true,
                order: [],
                stateSave: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                }
            });

            new $.fn.dataTable.Buttons(mytable, {
                buttons: [
                    'copy', 'pdf',
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function (xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                            $('row c[r^="B"]', sheet).attr('s', '57');
                            //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                            $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });

            mytable.buttons().container().appendTo($('tr th.heading', mytable.table().container()));

        });
    </script>
</body>

</html>