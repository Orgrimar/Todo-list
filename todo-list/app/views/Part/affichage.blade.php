<?php

$id = DB::table('task')->select('id')->get();
$titre = DB::table('task')->select('titre')->get();
$tache = DB::table('task')->select('tache')->get();

?>
<table>
	<tr>
		<th>Numero de tache</th>
		<th>Titre</th>
		<th>Détail</th>
	</tr>
	<tr>
		<td>
			@foreach($id as $val)
				<p>{{ $val->id }}</p>
			@endforeach
		</td>
		<td>
			@foreach($titre as $val)
				<p>{{ $val->titre }}</p>
			@endforeach
		</td>
		<td>
			@foreach($tache as $val)
				<p>{{ $val->tache }}</p>
			@endforeach
		</td>
	</tr>
</table>