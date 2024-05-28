@php use Carbon\Carbon; @endphp
@extends('admin.principala')
@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-hover" id="evenimenteTable">
                <thead class="table-active">
                    <tr>
                        <th>Titlu</th>
                        <th>Data</th>
                        <th>Ora</th>
                        <th>Judet</th>
                        <th>Localitate</th>
                        <th>Vizualizeaza\Sterge</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($evenimente as $eveniment)
                    <tr>
                        <td>{{$eveniment->titlu}}</td>
                        <td>{{date('d.m.Y', strtotime($eveniment->data))}}</td>
                        <td>{{Carbon::createFromFormat('H:i:s',$eveniment->ora)->format('h:i')}}</td>
                        <td>{{$eveniment->judet}}</td>
                        <td>{{$eveniment->localitate}}</td>
                        <td>
                            <button class="btn" id="buton" href="#eveniment-{{$eveniment->id}}" data-toggle="modal" data-product-id="{{ $eveniment->id }}">Detalii</button>
                            <button class="btn" id="buton1" href="#sterge-{{$eveniment->id}}" data-toggle="modal">Sterge</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach($evenimente as $eveniment)
        <div id="sterge-{{$eveniment->id}}" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title w-100">Doriti sa stergeti evenimentul?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Acesta va fi sters definitiv</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta</button>
                        <form method="POST" action="{{ route('admin.stergereeveniment',[$eveniment->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Sterge</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade viewModal" id="eveniment-{{$eveniment->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$eveniment->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h6 class="modal-title" id="titlu-modal">Informatii eveniment</h6>
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
                let eventId = $(this).data('product-id');
                let modalClass = '.viewModal';
                $.ajax({
                    url: 'eveniment/modal/' + eventId,
                    type: 'GET',
                    success: function(data) {
                        $(modalClass + ' .modal-body').html(data);
                    }
                });
            });
        });

        const jsonData = @json($data);

        $(document).ready(function() {
            $('#evenimenteTable').DataTable({
                language: jsonData,
            });
        });
    </script>
@endsection
