<form action="{{ url('/authenticate') }}" method="get">
    <div>

    </div>
    <div>
        <label for="uname"><b>Shop URL (App Extension)</b></label>
        <input type="text" placeholder="store.myshopify.com" name="shop" required>

        <button type="submit">Login</button>
    </div>
</form>
