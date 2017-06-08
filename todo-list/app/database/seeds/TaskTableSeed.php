<?php

class TaskTableSeed extends Seeder {
	public function run() {
		DB::table('task')->insert(
			array(
				'titre' => 'Init',
				'tache' => 'Ceci est la première initialisation de la table',
			)
		);
	}
}
