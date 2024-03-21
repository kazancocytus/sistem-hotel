<form action="{{ route('update.report') }}" method="POST">
@csrf
<input type="hidden" name="id" id="id" value="{{ $transaction->id }}">
<label for="name">Name</label>
<input type="text" id="name" name="name" value="{{ $transaction->name }}">
<label for="suite">Suite</label>
<input type="text" id="suite" name="suite" value="{{ $transaction->suite }}">
<label for="deluxe">Deluxe</label>
<input type="text" id="deluxe" name="deluxe" value=" {{ $transaction->deluxe}}">
<label for="standart">Standart</label>
<input type="text" id="standart" name="standart" value="{{ $transaction->standart }}">
<label for="check_in">Check In</label>
<input type="date" id="check_in" name="check_in" value="{{ $transaction->check_in }}">
<label for="check_out">Check Out</label>
<input type="date" id="check_out" name="check_out" value="{{ $transaction->check_out }}">
<!-- <label for="price">Price</label>
<input type="text" id="price" name="price" value="{{ $transaction->price }}" disabled> -->
<button type="submit">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')
