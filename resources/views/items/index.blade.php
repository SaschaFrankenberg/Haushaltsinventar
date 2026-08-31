@extends('layouts.app')

@section('title', 'Items')

@section('content')
    <h2>Items</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bezeichnung</th>
                <th>Kategorie</th>
                <th>Lagerort</th>
                <th>Anzahl</th>
                <th>Einheiten</th>
                <th>Mind. Anzahl</th>
                <th>MHD</th>
                <th>Notiz</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->location->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>{{ $item->minimum_quantity }}</td>
                    <td>{{ $item->expires_at ?? '-' }}</td>
                    <td>{{ $item->notes ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">Keine Einträge</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection