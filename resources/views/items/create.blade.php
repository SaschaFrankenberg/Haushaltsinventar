@extends('layouts.app')

@section('title', 'Item hinzufügen')

@section('content')
    <h1>Items hinzufügen</h1>

    <form action="/items/create" method="POST">
        @csrf
        <pre>
            <label for="name">Bezeichnung</label>
            <input type="text" id="name" value="{{ old('name') }}">

            <label for="category_id">Kategorie</label>
            <select id="category_id" name="category_id"></select>

            <label for="quantity">Menge</label>
            <input type="text" id="quantity" value="{{ old('quantity') }}">

            <label for="unit">Einheiten</label>
            <input type="text" id="unit" value="{{ old('unit') }}">

            <label for="minimum_quantity">Mind. Anzahl</label>
            <input type="text" id="minimum_quantity" value="{{ old('minimum_quantity') }}">

            <label for="expires_at">MHD</label>
            <input type="text" id="expires_at" value="{{ old('expires_at') }}">

            <label for="notes">Notiz</label>
            <textarea id="notes" name="notes" {{ old('notes') }}></textarea>
            </pre>
    </form>
@endsection