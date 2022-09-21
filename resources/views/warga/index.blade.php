<a href="/warga/create">Tambah Data</a>
<table border="1">
    <thead>
        <td>Nama</td>
        <td>NIK</td>
        <td>No.KK</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </thead>
    @foreach ($warga as $w)
        <tr>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->nik }}</td>
            <td>{{ $w->no_kk }}</td>
            <td>{{ $w->jenis_kelamin }}</td>
            <td>{{ $w->alamat }}</td>
            <td>
                <a href="/warga/{{ $w->id }}/edit">Edit</a>
                <form action="/warga/{{ $w->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
