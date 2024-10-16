<x-header>
</x-header>

<body class="d-flex align-items-center justify-content-center h-100 bg-light">
    <div class="card d-flex align-items-center justify-content-center p-5 w-25">
        <form method="post" action="" class="d-flex align-items-center flex-column">
            @csrf
            <img src="{{ asset('images/wow-icon.png') }}" alt="Icon" class="mb-4" width="72" height="72">
            <h2>Please sign in</h2>
            
            <div class="d-flex align-items-start flex-column mt-2">
                <label class="form-label" for="inputEmail">Email address</label>
                <input class="form-control" type="email" id="inputEmail" placeholder="Email address">    
            </div>

            <div class="d-flex align-items-start flex-column mt-2">
                <label class="form-label" for="inputPassword">Password</label>
                <input class="form-control" type="password" id="inputPassword" placeholder="Password" required="">
            </div>
            
            <button class="btn btn-lg btn-primary btn-block mt-4 px-5" type="submit">Sign in</button>

        </form>
        <p class="relative-bottom">Don't have an account? <a href="/register">Click here to sign up!</a></p>
    </div>
</body>