<style>
input.is-invalid {
    border: 1px solid red;
}
</style>
<h1>Create xxx</h1>
<a href='{{ url('/flights')}}'>back</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ url('/flights')}}">
<input type="text" name="name" placeholder="伊丹市" value="{{ old('name') }}" required class="@error('name') is-invalid @enderror"><br>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="text" name="number" placeholder="zdfsaf" value="{{ old('number') }}" required class="@error('number') is-invalid @enderror"><br>
@error('number')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="text" name="destination" placeholder="札幌市" value="{{ old('destination') }}" required class="@error('destination') is-invalid @enderror"><br>
@error('destination')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@csrf
<button type="submit">追加</button>
</form>
<a href='{{ url('/flights')}}'>back</a>
