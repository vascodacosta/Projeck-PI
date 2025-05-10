<x-app-layout>
    <h2>Daftar Kos</h2>

    <a href="{{ route('kos.create') }}">+ Tambah Kos</a>

    @foreach ($kos as $item)
        <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
            <b>{{ $item->nama }}</b> <br>
            Alamat: {{ $item->alamat }} <br>
            Harga: Rp{{ number_format($item->harga) }} <br>
            <a href="{{ route('kos.edit', $item->id) }}">Edit</a> |
            <form action="{{ route('kos.destroy', $item->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </div>
    @endforeach
</x-app-layout>
