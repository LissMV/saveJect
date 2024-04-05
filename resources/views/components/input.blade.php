@props(['titulo', 'tipo', 'rex'])
<div class="my-4">
  <label class="pr-6">{{ $titulo }} <label>
  <input name={{ $rex }} type={{ $tipo }} class=" border-b-4 text-orange-600 rounded-full px-9 py-2 placeholder={{$titulo}}">
  @error($rex)
  <p class="text-blue-500">{{$message}}</p>
  @enderror
</div>
