<div class="row" style="padding-top: 20px;">
    <div class="col-md-12">
        <form method="GET" class="form-inline">
            <div class="col-md-2">
                <div class="form-group">
                    <select class="form-control" name="ordonare" id="ordonare">
                        <option value="">Ordoneaza dupa</option>
                        <option value="nume">Nume</option>
                        <option value="prenume">Prenume</option>
                        <option value="judet">Judet</option>
                        <option value="localitate">Localitate</option>
                        <option value="created_at">Data inregistrare</option>
                    </select>
                  </div>
            </div>
              <div class="col-md-2">
                <button type="submit" class="btn" id="buton">Ordoneaza</button>
              </div>
        </form>
    </div>
</div>
<div class="row justify-content-center">
        <table class="table table-hover" id="producatoriTable">
            <thead class="table-active">
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Email</th>
                    <th>Judet</th>
                    <th>Localitate</th>
                    <th>Vizualizeaza\Sterge</th>
                </tr>
            </thead>
            <tbody id="producatoriBody">
                @foreach ($producatori as $producator)
                    <tr>
                    <td>{{$producator->nume}}</td>
                    <td>{{$producator->prenume}}</td>
                    <td>{{$producator->email}}</td>
                    <td>{{$producator->judet}}</td>
                    <td>{{$producator->localitate}}</td>
                    <td>
                        <button class="btn" id="buton" href="#profil-{{$producator->id}}" data-toggle="modal">Profil</button>
                        <button class="btn" id="buton1" href="#sterge-{{$producator->id}}" data-toggle="modal">Sterge</button>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
<div class="row justify-content-center">
    {{$producatori->links()}}
</div>
@foreach ($producatori as $producator)
        <div class="modal fade" id="profil-{{$producator->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$producator->id}}" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <h6 class="modal-title" id="titlu-modal">Informatii producator</h6>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="/storage/profil/{{$producator->avatar}}" id="avatar" alt="Avatar">
                                    </div>
                                    <div class="col-md-6" id="detalii-modal">
                                    <h2>{{$producator->nume}} {{$producator->prenume}}</h2>
                                    <blockquote>
                                        <cite>{{$producator->adresa . ', ' . $producator->localitate . ', ' . $producator->judet}} <i style="font-size:20px; color:#aa9ba4;" class="fa">&#xf041;</i></cite>
                                    </blockquote>
                                    <h4>Contact:</h4>
                                    <h5><i style="font-size:20px; color:#aa9ba4" class="fa">&#xf0e0;</i> {{$producator->email}}</h5>
                                     <h5><i style="font-size:23px; color:#aa9ba4" class="fa">&#xf095;</i> {{$producator->telefon}}</h5>
                                     @if ($producator->descriere != null)
                                     <button class="btn" href="#" data-toggle="popover" data-placement="right" data-content="{{$producator->descriere}}" animation="true" id="btn-descriere">Vezi descriere</button>
                                     @else
                                     <button class="btn" href="#" data-toggle="popover" data-placement="right" data-content="Nu exista o descriere" animation="true" id="btn-descriere">Vezi descriere</button>
                                     @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
                        </div>
                    </div>
                </div>
        </div>
        <div id="sterge-{{$producator->id}}" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                    <h4 class="modal-title w-100">Doriti sa stergeti producatorul cu numele {{$producator->nume. ' ' .$producator->prenume}}?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Acesta va fi sters definitiv</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta</button>
                        <form method="POST" action="{{ route('admin.stergereproducator',[$producator->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Sterge</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
