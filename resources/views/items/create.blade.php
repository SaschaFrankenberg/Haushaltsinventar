@extends('layouts.app')

@section('title', 'Item hinzufügen')
{{-- Fehlermeldung-Ausgabe --}}
@if ($errors->any())
    <ul>
        @foreach($errors->all() as $fehler)
            <li> {{ $fehler }} </li>
        @endforeach
    </ul>
@endif

{{-- Formular zum Hinzufügen von Items --}}
@section('content')
    <h1>Items hinzufügen</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <label for="name">Bezeichnung</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name') {{ $message }} @enderror
           
        <label for="category_id">Kategorie</label>
        <select id="category_id" name="category_id">
            <option value="">--Auswahl--</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id') {{ $message }} @enderror

        <label for="location_id">Lagerort</label>
        <select id="location_id" name="location_id">
            <option value="">--Auswahl--</option>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}" @selected(old('location_id') == $location->id)>
                    {{ $location->name }}
                </option>
            @endforeach
        </select>
        @error('location_id') {{ $message }} @enderror

        <label for="quantity">Menge</label>
        <input type="text" id="quantity" name="quantity" value="{{ old('quantity') }}">
        @error('quantity') {{ $message }} @enderror

        <label for="unit">Einheiten</label>
        <input type="text" id="unit" name="unit" value="{{ old('unit') }}">
        @error('unit') {{ $message }} @enderror

        <label for="expires_at">MHD</label>
        <input type="date" id="expires_at" name="expires_at" value="{{ old('expires_at') }}">
        @error('expires_at') {{ $message }} @enderror

        <label for="notes">Notiz</label>
        <textarea id="notes" name="notes">{{ old('notes') }}</textarea>
        @error('notes') {{ $message }} @enderror
        
        <button type="submit">Speichern</button><br>
        
        <a href="{{ route('items.index') }}">Zurück zur Tabelle</a>
    </form>
@endsection