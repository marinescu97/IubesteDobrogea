@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-1">
                <div class="card shadow-lg rounded">
                    <div class="card-header">
                        <div id="card-titlu">Profil</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/storage/profil/{{Auth::user()->avatar}}" id="avatar" alt="Avatar">
                            </div>
                            <div class="col-md" id="detalii">
                                <h2>{{Auth::user()->nume . ' ' . Auth::user()->prenume}}</h2>
                                <blockquote>
                                    <cite>{{Auth::user()->adresa . ', ' . $localitate . ', ' . $judet}} <i style="font-size:20px; color:#aa9ba4;" class="fa">&#xf041;</i></cite>
                                </blockquote>
                                @php
                                    $numeintreg = Auth::user()->nume . " " . Auth::user()->prenume;
                                    $n = explode(" ",$numeintreg);
                                    $numenou = implode("-",$n);
                                @endphp
                                <a href="{{route('produse-producator', [Auth::user()->id,$numenou])}}" style="font-size: 20px;">Produsele mele</a>
                                <h4>Contact:</h4>
                                <h5><i style="font-size:20px; color:#aa9ba4" class="fa">&#xf0e0;</i> {{Auth::user()->email}}</h5>
                                 <h5><i style="font-size:23px; color:#aa9ba4" class="fa">&#xf095;</i> {{Auth::user()->telefon}}</h5>
                                 @if (Auth::user()->descriere != null)
                                     <button class="btn" href="#" data-toggle="popover" data-placement="right" data-content="{{Auth::user()->descriere}}" animation="true" id="btn-descriere">Vezi descriere</button>
                                     @else
                                     <button class="btn" href="#" data-toggle="popover" data-placement="right" data-content="Nu exista o descriere" animation="true" id="btn-descriere">Vezi descriere</button>
                                     @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
