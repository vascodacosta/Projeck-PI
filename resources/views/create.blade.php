<x-app-layout>
    <h2>Tambah Kos</h2>

    <form method="POST" action="{{ route('kos.store') }}">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga"><br><br>

        <button type="submit">Simpan</button>
    </form>
</x-app-layout>
