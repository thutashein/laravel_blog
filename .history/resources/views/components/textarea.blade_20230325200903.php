@props(['id','name','cols','rows','value'=>null])

<div class="mb-3">
    <textarea
id="{{ $id }}"
 type="text"
 name="{{ $name }}"
 cols="{{ $cols }}"
 rows="{{ $rows }}"
 class="form-control"
 id="{{ $id }}"
 placeholder="Enter {{ $name }}">
 {!! $value !!}
</textarea>

</div>
