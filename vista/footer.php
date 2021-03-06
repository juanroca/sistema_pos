  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="assest/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assest/dist/js/adminlte.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="assest/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assest/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="assest/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assest/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="assest/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assest/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="assest/plugins/jszip/jszip.min.js"></script>
  <script src="assest/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="assest/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="assest/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="assest/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="assest/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="assest/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Script para el Data table-->

  <script>
    $(function() {
      //PARA LA VISTA USUARIO
      $("#dataTableUsuario").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        //Traducir subtitulos al espa??ol
        language: {
          "decimal": "",
          "emptyTable": "No hay informaci??",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior",
          }
        }
      }).buttons().container().appendTo('#dataTableUsuario_wrapper .col-md-6:eq(0)');

      $("#dataTablePaciente").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        //Traducir subtitulos al espa??ol
        language: {
          "decimal": "",
          "emptyTable": "No hay informaci??",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior",
          }
        }
      }).buttons().container().appendTo('#dataTablePaciente_wrapper .col-md-6:eq(0)');
    });
  </script>

  <!--*********************
/* SECCION DE MODAL/ */
************************-->

  <!--modal SIMPLE-->
  <div class="modal fade" id="modal-df">
    <div class="modal-dialog">
      <div class="modal-content" id="modal-content-df">

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- MODAL PEQUE??O -->
  <div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body" id="formulario">
          <div class="modal-content" id=formulario-sm>
            <!-- Aqui va el contenido -->
          </div>
        </div>
        <div id="mensaje-sm" style="display:flex; justify-content:center;">
          <!-- Aqui va el mensaje de confirmaci??n -->

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- MODAL MEDIANO -->
  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" id="modal-content-lg">

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- MODAL PANTALLA COMPLETA -->
  <div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header" id="mensaje-xl-title" style="display:flex; justify-content:center;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body" id="formulario-xl">

        </div>
        <div id="mensaje-xl" style="display:flex; justify-content:center;">
          <!-- Aqui va el mensaje de confirmaci??n -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  </body>

  </html>