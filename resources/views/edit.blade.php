<x-app-layout>
    <h2>Edit Kos</h2>

    <form method="POST" action="{{ route('kos.update', $kos->id) }}">
        @csrf
        @method('PUT')
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $kos->nama }}"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat">{{ $kos->alamat }}</textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $kos->harga }}"><br><br>

        <button type="submit">Update</button>
    </form>
</x-app-layout>
