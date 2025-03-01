@props(['carTypes', 'label' => ''])

<x-form.select name="fuel_type_id" :$label>
    <option value="">Car Type</option>
    @foreach ($carTypes as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach

</x-form.select>
