<?php
namespace App\Repositories\Interfaces;

interface StatusRepositoryInterface {
	public function all();

	public function create(array $data);

	public function update(array $data, $id);

	public function delete($id);

	public function show($id);
}