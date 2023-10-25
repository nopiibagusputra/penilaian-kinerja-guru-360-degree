<link href="{{ url('/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ url('/assets/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
<table class="mb-0 table" border=1 id="" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach($data as $siswa)
        <tr>
            <td scope="row">{{ $i++ }}</td>
            <td>{{ $siswa->nama_siswa }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama_kelas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>