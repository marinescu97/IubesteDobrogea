@extends('admin.principala')
@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-7">
                <div class="input-group lg-form form-lg form-2 pl-0">
                    <input class="form-control" id="produseInput" type="text"  onkeyup="myFunction()" placeholder="Cautare" aria-label="Search">
                  </div>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <form method="GET" class="form-inline">
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="ordonare" id="ordonare">
                                <option value="">Ordoneaza dupa</option>
                                <option value="denumire">Denumire</option>
                                <option value="categorie">Categorie</option>
                                <option value="nproducator">Producator</option>
                                <option value="judet">Judet</option>
                                <option value="localitate">Localitate</option>
                                <option value="created_at">Data inregistrare</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="categorie" id="categorie">
                                <option value="">Categorie</option>
                                @foreach ($categorie as $cat)
                            <option value="{{$cat->id}}">{{$cat->nume}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group" style="margin-left: 50px;">
                            <select class="form-control" name="judet" id="judet">
                                <option value="">Judet</option>
                                @foreach ($judete as $judet)
                            <option value="{{$judet->id}}">{{$judet->nume}}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="localitate" id="localitate">
                                <option value="">Localitate</option>
                            </select>
                          </div>
                    </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn" id="buton" style="float: right;">Filtreaza</button>
                      </div>
                </form>
            </div>
        </div>
        <div id="table_data">
            <div class="row justify-content-center">
                <table class="table table-hover" id="produseTable">
                    <thead class="table-active">
                        <tr>
                            <th>Denumire</th>
                            <th>Categorie</th>
                            <th>Producator</th>
                            <th>Judet/Localitate</th>
                            <th>Vizualizeaza/Sterge</th>
                        </tr>
                    </thead>
                    <tbody id="produseBody">
                        @foreach ($produse as $produs)
                            <tr>
                            <td>{{$produs->denumire}}</td>
                            <td>{{$produs->categorieprod}}</td>
                            <td>{{$produs->nproducator. ' '.$produs->pproducator}}</td>
                            <td>{{$produs->judet.','.$produs->localitate}}</td>
                            <td>
                                <button class="btn" id="buton" href="#produs-{{$produs->id}}" data-toggle="modal" data-product-id="{{ $produs->id }}">Vizualizeaza</button>
                                <button class="btn" id="buton1" href="#sterge-{{$produs->id}}" data-toggle="modal">Sterge</button>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            {{$produse->links()}}
        </div>
    </div>
    @foreach ($produse as $produs)
    <div id="sterge-{{$produs->id}}" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                <h4 class="modal-title w-100">Doriti sa stergeti produsul?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Acesta va fi sters definitiv</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta</button>
                    <form method="POST" action="{{ route('admin.stergereprodus',[$produs->id])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Sterge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade viewModal" id="produs-{{$produs->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$produs->id}}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h6 class="modal-title" id="titlu-modal">Informatii produs</h6>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@section('admin-scripts')
    <script>
        $(document).ready(function() {
            $('[data-toggle="modal"]').click(function() {
                let productId = $(this).data('product-id');
                let modalClass = '.viewModal';
                $.ajax({
                    url: 'produs/modal/' + productId,
                    type: 'GET',
                    success: function(data) {
                        $(modalClass + ' .modal-body').html(data);
                    }
                });
            });
        });

        function myFunction() {
          let input, filter, table, tr, td, i, t;
          input = document.getElementById("produseInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("produseBody");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            let filtered = false;
            let tds = tr[i].getElementsByTagName("td");
            for(t=0; t<tds.length; t++) {
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

        $('#judet').change(function(){
            let countyId = $(this).val();
            $.ajax({
                url: 'produse/afiseazaLocalitati/' + countyId,
                type: 'GET',
                success: function(response) {
                    $('#localitate').empty();
                    $.each(response, function(key, value) {
                        $('#localitate').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        });
    </script>
@endsection
