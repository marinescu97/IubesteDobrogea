@extends('admin.principala')
@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card-counter primary">
                    <i class="fa fa-group"></i>
                <span class="count-numbers">{{$nrproducatori}}</span>
                  <span class="count-name">Producatori</span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card-counter danger">
                    <i class='fas'>&#xf5d1;</i>
                <span class="count-numbers">{{$nrproduse}}</span>
                  <span class="count-name">Produse</span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card-counter success">
                    <i class="fa fa-calendar"></i>
                <span class="count-numbers">{{$nrevenimente}}</span>
                  <span class="count-name">Evenimente</span>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="utilizatoriChart"></div>
            </div>
            <div class="col-md-6">
                <div id="produseChart"></div>
            </div>
        </div>
    </div>
@endsection
@section('admin-scripts')
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(produseDiagrama);
    google.charts.setOnLoadCallback(utilizatoriDiagrama);

    function produseDiagrama() {
      let data = google.visualization.arrayToDataTable([
        ['Categorie', 'Produse pe categorie'],

        @php
            foreach($categorie as $cat){
                echo "['".$cat->nume."', ".$cat->total."],";
            }
        @endphp
      ]);

      let options = {
        title: 'Numar produse pe categorie'
      };

      let chart = new google.visualization.PieChart(document.getElementById('produseChart'));

      chart.draw(data, options);
    }

    function utilizatoriDiagrama() {
    let data = google.visualization.arrayToDataTable([
      ['Judete', 'Utilizatori pe judet'],
      @php
            foreach($judet as $jud){
                echo "['".$jud->nume."', ".$jud->total."],";
            }
        @endphp
    ]);

    let options = {
      title: 'Numar producatori pe judet',
      pieHole: 0.4,
    };

    let chart = new google.visualization.PieChart(document.getElementById('utilizatoriChart'));
    chart.draw(data, options);
  }
  </script>
@endsection
