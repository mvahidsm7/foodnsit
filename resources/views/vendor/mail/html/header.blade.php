@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Food n Sit')
<img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="FoodnSit">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
