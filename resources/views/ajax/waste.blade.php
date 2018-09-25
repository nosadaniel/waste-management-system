<option selected value="0">Select</option>
@foreach($waste_type as $waste)
	<option value="{{ $waste->id }}">{{ $waste->type_of_waste }}</option>
@endforeach