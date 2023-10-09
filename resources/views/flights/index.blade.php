<p>today flights: <em>{{ $count }}</em></p>

<a href='{{ url('/flights/create')}}'>Add new flight</a>

<table>
@foreach($flights as $flight)
<tr>
    <td><a href="{{ url('/flights/edit/' . $flight->id) }}">{{ $flight->name }}</a></td>
    <td>{{ $flight->number }}</td>
    <td>{{ $flight->destination }}</td>
    <td><a href="{{ url('/flights/delete/' . $flight->id) }}">Delete</a></td>
</tr>
@endforeach
</table>
