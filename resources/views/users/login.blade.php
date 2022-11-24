<x-layout>

    <div class="back">
        <a href="/"><i class="fa-solid fa-arrow-left"></i>Back</a>
    </div>

    <div class="login">
        <div class="title">
            <h4>Login</h4>
            <p class="subtitle-profile">Log into your account</p>
        </div>

        <form method="POST" action="/users/authenticate" class="form-login">

            @csrf
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" class="input" name="email" value="{{old('email')}}">

                @error('email')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" class="input" name="password" value="{{old('password')}}">

                @error('password')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            

            <div class="input-field">
                <button type="submit" class="button-profile">Login</button> 
            </div>

            <div class="go-signup">
                <p>Don't have an account ?</p>
                <a href="/signup">Sign Up</a>
            </div>

        </form>
    </div>

</x-layout>