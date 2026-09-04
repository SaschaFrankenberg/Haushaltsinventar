@extends('layouts.app')

@section('title', 'Items')

@section('content')
    <h2>Items</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bezeichnung</th>
                    <th>Kategorie</th>
                    <th>Lagerort</th>
                    <th>Menge</th>
                    <th>Einheit</th>
                    <th>MHD</th>
                    <th>Notiz</th>
                    <th>Zeitstempel</th>
                    <th>Letztes Update</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ route('items.show', $item) }}">
                                {{ $item->name }}</a>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->location->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->expires_at ?? '-' }}</td>
                        <td>{{ $item->notes ?? '-' }}</td>
                        <td>{{ $item->created_at->format('d.m.Y') }}</td>
                        <td>{{ $item->updated_at->format('d.m.Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Keine Einträge</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <a href="{{ route('items.create') }}">Neues Item anlegen</a>
@endsection