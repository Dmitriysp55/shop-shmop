<h3>Add new category: </h3>

<form action="{{ route('admin') }}" method="POST" >
    @csrf
    <input type="text" placeholder="category" name="category">
    <button type="submit">Add</button>
</form>

@yield('msg')
