<x-layout>

    <div class="sign_up">
        <div class="title">
            <h4>Sign Up</h4>
            <p class="subtitle-profile">Create your Profile</p>
        </div>

        <form method="POST" action="/users" class="form-sign-up">
            @csrf
            <div class="input-field">
                <label for="firstname">Firstname</label>
                <input type="text" class="input" name="firstname" value="{{old('firstname')}}">

                @error('firstname')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label for="lastname">Lastname</label>
                <input type="text" class="input" name="lastname" value="{{old('lastname')}}">

                @error('lastname')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

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
                <label for="password2">Confirm Password</label>
                <input type="password" class="input" name="confirm_password" value="{{old('confirm_password')}}">

                @error('confirm_password')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            

            <div class="input-field">
                <button type="submit" class="button-profile">Create User</button> 
            </div>

            <div class="go-login">
                <p>Already have an account ?</p>
                <a href="/login">Login</a>
            </div>

        </form>
    </div>

</x-layout>