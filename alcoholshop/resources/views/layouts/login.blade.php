@include('blocks.head')
@include('blocks.header')
<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Login to your account</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="email" name="email" placeholder="Email Address" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <span>
                            <input type="checkbox" class="checkbox" name="remember"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>New User Signup!</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="text" name="name" placeholder="Name" required />
                        <input type="email" name="email" placeholder="Email Address" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link">Logout</button>
        </form>
         --}}
    </div>
</section>
