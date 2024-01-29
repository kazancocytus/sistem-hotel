@extends('admin.layout.sidebar_admin');

<h1>Add Facility</h1>
<form action="{{ route('store.food') }}" method="POST" enctype="multipart/form-data">
@csrf
<label for="name">Name Food</label>
<input type="text" id="name" name="name" autocomplete="off">
<label for="image">Image</label>
<input type="file" id="image" name="image">
<button type="submit">Submit</button>
</form>