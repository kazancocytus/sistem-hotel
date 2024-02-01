@extends('admin.layout.sidebar_admin');

<h1>Add Facility</h1>
<form action="{{ route('update.food') }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" id="id" name="id" value="{{ $food->id }}">
<label for="name">Name Food</label>
<input type="text" id="name" name="name" autocomplete="off" value="{{ $food->name }}">
<label for="image">Image</label>
<input type="file" id="image" name="image" src="{{ url('assets/img/food/'.$food->image) }}">
<button type="submit">Submit</button>
</form>