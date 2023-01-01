 <!-- Vendor js -->
 <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

 <script src="{{ asset('assets/libs/moment/moment.min.js') }}"></script>
 <script src="{{ asset('assets/libs/jquery-scrollto/jquery.scrollTo.min.js') }}"></script>
 <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

 <script src="{{asset('assets/libs/jquery-validation/jquery.validate.min.js')}}"></script>

 <!-- Validation init js-->
 <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>

   <!-- Datatables init -->
   <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
 
 <!-- Chat app -->
 <script src="{{ asset('assets/js/pages/jquery.chat.js') }}"></script>

 <!-- Todo app -->
 <script src="{{ asset('assets/js/pages/jquery.todo.j') }}s"></script>

 <!-- flot chart -->
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
 <script src="{{ asset('assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

  <!-- third party js -->
  <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

  <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

  <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>

  <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>

  <script src="{{ asset('assets/libs/datatables/dataTables.fixedHeader.min.html') }}"></script>
  <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables/dataTables.scroller.min.js') }}"></script>


 <!-- Dashboard init JS -->
 <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

 <!-- App js -->
 <script src="{{ asset('assets/js/app.min.js') }}"></script>

 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script> --}}

 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
 {{-- <script>
  @if (Session::has('message'))
    var type="{{ Session::get('alert-type', 'info') }}"
    switch(type){
      case 'success':
           toastr.success("{{ Session::get('message') }}");
           break;
    }
  @endif
 </script> --}}

<script>
  $(document).ready(function() {
      toastr.options.timeOut = 10000;
      @if (Session::has('error'))
          toastr.error('{{ Session::get('error') }}');
      @elseif(Session::has('success'))
          toastr.success('{{ Session::get('success') }}');
      @endif
  });

</script>

 {{-- <script src="">
     $(document).on("click","#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      $wal({
        title: "Are you want to delete?",
        text: "Once Delete, This will be Permanently Delete!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      });
      .then(willDelete) => {
        if(willDelete){
            window.location.href = link;
          } else{
               $wal("Safe Data!");
          }
        }
      }
     });
 </script> --}}