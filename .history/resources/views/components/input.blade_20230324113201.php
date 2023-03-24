@props(['name','title'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $ }}</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">

    <x-error name='title'/>
  </div>
