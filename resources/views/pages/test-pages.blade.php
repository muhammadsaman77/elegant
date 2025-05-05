@extends('layouts.app-customer')

@section('content')
    <x-asymmetric-form :title="'Step 1: Pilih Jenis Kegiatan'">
        <form method="POST" action="{{ route('booking.storeEvent') }}" style="display: flex; flex-direction: column; gap: 1rem;">
            @csrf
            <input type="hidden" name="venue_id" value="{{ $venue->id ?? '' }}">

            <label for="event_type_id" style="font-weight: 600;">Jenis Kegiatan</label>
            <select name="event_type_id" id="event_type_id" required style="padding: 0.5rem;">
                <option value="" disabled selected>-- Pilih Jenis Kegiatan --</option>
                @foreach($eventTypes as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-dark" style="padding: 0.6rem;">
                Lanjut ke Pilih Tanggal
            </button>
        </form>
    </x-asymmetric-form>
@endsection
