    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/account/vendor/jquery.min.js') }}"></script>
        <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/account/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/account/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/account/vendor/pace.min.js') }}"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('js/account/vendor/Chart.min.js') }}"></script>
    <!-- Datatable js files -->
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
    <!-- CoreUI main scripts -->

      <script type="text/javascript">
      $(document).ready(function() {
      $('#data').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
      } );
      } );
    </script>
