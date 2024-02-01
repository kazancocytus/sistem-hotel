@extends('admin.layout.sidebar_admin');

<h1>Add Facility</h1>
<form action="{{ route('update.facility') }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" id="id" name="id" value="{{ $facility->id }}">
<label for="name">Name Facility</label>
<input type="text" id="name" name="name" autocomplete="off" value="{{ $facility->name }}">
<label for="description">Description</label>
<input type="text" id="description" name="description" value="{{ $facility->description }}">
<label for="image">Image</label>
<input type="file" id="image" name="image" src="{{ url('assets/img/facility/'.$facility->images) }}">
<button id="update" type="submit">Submit</button>
</form>