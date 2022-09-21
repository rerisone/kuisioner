<h1>Edit Data Warga</h1>

<form action="/warga/{{ $warga->id }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="nama" id="" placeholder="nama" value="{{ $warga->nama }}"><br>
    <input type="text" name="nik" id="" placeholder="nik" value="{{ $warga->nik }}"><br>
    <input type="text" name="no_kk" id="" placeholder="nomor kk" value="{{ $warga->no_kk }}"><br>
    <select name="jenis_kelamin" id="" >
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if ($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select> <br>
    <textarea name="alamat" id="">{{ $warga->alamat }}</textarea><br>
    <input type="submit" name="submit" value="save">
</form>
