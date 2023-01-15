<x-layout-default title="Login">
    <form method="POST" action="{{route('login.store')}}">
        @csrf
        <div class="mb-2">
            <label class="form-label">Email:</label>
            <input class="form-control" type="email" name="email" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Password:</label>
            <input class="form-control" type="password" name="password" required>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="false">
            <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>

        <div class="mb-2">
            <input class="form-control" type="submit" value="Login">
        </div>
    </form>
</x-layout-default>
