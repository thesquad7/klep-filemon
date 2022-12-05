<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Fondation\Http\FormRequest;

Interface ControllerInterface{
    public function index();
    public function create();
    public function store(FormRequest $request);
    public function show($id);
    public function edit($id);
    public function update($id, FormRequest $request);
    public function destroy($id);
}