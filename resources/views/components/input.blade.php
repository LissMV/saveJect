@props(['titulo', 'tipo', 'rex'])
<div class="my-4">
  <label class="pr-6">{{ $titulo }} <label>
  <input name={{ $rex }} type={{ $tipo }}
  class="border rounded-xl px-4 py-1.5 text-orange-600">
  @error($rex)
  <p class="text-blue-500">{{$message}}</p>
  @enderror
</div>
