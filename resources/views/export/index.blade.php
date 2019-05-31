<table>
	<thead>
		<tr>
			<th>Jumlah Peserta</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>XD Fiesta 2019</td>	
		</tr>
	</tbody>
</table>

<table>
    <thead>
    <tr>
        <th>Nama Team</th>
        <th>Nama Ketua</th>
        <th>No. Whatsapp</th>
        <th>Lomba</th>
    </tr>
    </thead>
    <tbody>
    @foreach($daftar as $lm)
        <tr>
            <td>{{$lm->nama_team}}</td>
            <td>{{$lm->nama_ketua}}</td>
            <td>{{$lm->no_wa}}</td>
            <td>{{$lm->judul_lomba}}</td>
        </tr>
    @endforeach
    </tbody>
</table>