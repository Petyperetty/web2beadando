@extends('layouts.main')
@section('content')
    @if(session('status'))
        <h2><b>{{ session('status') }}</h2>
    @endif
    <h2>Web 2 beadandó</h2>
    <p>Hanák Péter, GT4OUZ</p>
    <p>FOSZK, levelező, programtervező informatikus</p>
    <p>A feladat a 2-04-Moziműsor-3 táblás adatbázis alapján a feladat kiírás szerint valósítja meg a feladatot.</p>
    <p>A web oldal kiinduló struktúráját a feladat kiírás alapján a megoldások mappából felhasznált 07-08-Authentication Laravel rendszer alkotja.</p>
    <p>Az adatbázis menüpontban ki lehet listázni a mozikat és az egyes mozikban játszott filmeket, ha van olyan.</p>
    <p>Az adatbázis userek táblája tartalmazza a regisztrált felhasználókat és az admin jogosultságú felhasználót.</p>
    <p>Lehet regisztrálni a web oldalra. Aki regisztrál az látja és tud üzenet küldeni, amit lát az admin.</p>
    <p>A kapcsolat menüpontban bejelentekzés nélkül és lehet üzenetet küldeni.</p>
    <p>A CRUD menüpontban az admin tud adatbázis műveleteket elvégezni.</p>
    <p>A diagram menüpontban le lehet kérni a mozikban játszott filmek statisztikáját.</p>
@endsection