@extends('admin.principala')
@section('admin-content')
<div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-7">
        <div class="input-group lg-form form-lg form-2 pl-0">
            <input class="form-control" id="producatoriInput" type="text"  onkeyup="myFunction()" placeholder="Cautare" aria-label="Cautare">
          </div>
    </div>
    </div>
    <div id="table_data">
        @include('admin.producatorpag')
    </div>
  </div>
@endsection
@section('admin-scripts')
    <script>
        function myFunction() {
          let input, filter, table, tr, td, i;
          input = document.getElementById("producatoriInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("producatoriBody");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            let filtered = false;
            let tds = tr[i].getElementsByTagName("td");
            for(let t=0; t<tds.length; t++) {
                td = tds[t];
                if (td) {
                  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    filtered = true;
                  }
                }
            }
            if(filtered===true) {
                tr[i].style.display = '';
            }
            else {
                tr[i].style.display = 'none';
            }
          }
        }
    </script>
@endsection
