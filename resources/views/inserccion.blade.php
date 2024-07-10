<h1> hola </h1>
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label>city</label>
    <input type="text" name="city_id">

    <label>company</label>
    <input type="text" name="company_id">

    <label>name</label>
    <input type="text" name="name">

    <label>execution_date</label>
    <input type="date" name="execution_date">

    <label>is_active</label>
    <input type="checkbox" name="is_active">

    <button type="submit">Guardar</button>
</form>