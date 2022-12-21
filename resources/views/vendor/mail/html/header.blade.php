<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Becas COZCYT')
<img src="https://cozcyt.gob.mx/wp-content/uploads/2022/04/logo_encabezado-200x54.png"  alt="Becas COZCYT">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
