<h1>edit</h1>

<form action="/admin/{{ $kategori->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="kategori" placeholder="nama kategori" value="{{ $kategori->kategori }}">
    <select name="status" id="">
        <option value="">Status</option>
        <option value="Aktif"@if ($kategori->status == "Aktif")selected @endif>Stok Ada</option>
        <option value="Tidak Aktif"@if ($kategori->status == "Tidak Aktif")selected @endif>Stok Kosong</option>
    </select>
    <input type="submit" name="submit" value="simpan">
</form>
