@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-top: 10px;">
        <div class="col-3">
            <div style="padding-left: 150px;">
                <img src="/svg/teste.jpeg" alt="" class="rounded-circle" style="width: 150px; height: 150px;">
            </div>
        </div>
        <div class="col-9" style="padding-left: 150px;">
            <div class="row pl-3">
                <div>
                    <h2>italotrres</h2>
                </div>
                <div class="pl-4">
                    <button class="pl-2" type="button" style="background-color: #0095F6; color: #E3F3FE; border-radius: 10%; border:none; height: 40px; width: 60px;">Seguir</button>
                </div>
            </div>
            <div class="row pl-3 pt-2">
                <div><strong>14</strong> publicações</div>
                <div class="pl-5"><strong>863</strong> seguidores</div>
                <div class="pl-5"><strong>596</strong> seguindo</div>
            </div>
            <div class="pt-3">Ítalo Torres</div>
            <div>🔥Quem pensa pouco, erra muito! <br>
                👨‍💻 Engenharia da Computação - UEMA<br>
                <a href="https://www.instagram.com/compreendendoosofrimento/">@compreendendoosofrimento</a>
            </div>
        </div>
        <div class="row" style="padding-left: 100px; padding-top:40px">
            <div class="col-4">
                <img src="/svg/firstPhoto.jpg" style="width: 300px; height: 300px" alt="">
            </div>
            <div class="col-4">
                <img src="/svg/firstPhoto.jpg" style="width: 300px; height: 300px" alt="">
            </div>
            <div class="col-4">
                <img src="/svg/firstPhoto.jpg" style="width: 300px; height: 300px" alt="">
            </div>

        </div>
    </div>
</div>
@endsection