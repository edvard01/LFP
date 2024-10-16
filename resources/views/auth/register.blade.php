<x-header>
</x-header>

<body class="d-flex align-items-center justify-content-center h-100 bg-light">
    <div class="card d-flex align-items-center justify-content-center p-5 w-25">
        <form method="POST" action="/register" class="d-flex align-items-center flex-column">
            @csrf
            <img src="{{ asset('images/wow-icon.png') }}" alt="Icon" class="mb-4" width="72" height="72">
            <h2>Please sign in</h2>

            <div class="d-flex align-items-start flex-column mt-2">
                <label class="form-label" for="inputName">Name</label>
                <input class="form-control" name="inputName" type="name" id="inputName" placeholder="Name">    
            </div>
            
            <div class="d-flex align-items-start flex-column mt-2">
                <label class="form-label" for="inputEmail">Email address</label>
                <input class="form-control" name="inputEmail" type="email" id="inputEmail" placeholder="Email address">    
            </div>

            <div class="d-flex align-items-start flex-column mt-2">
                <label class="form-label" for="inputPassword">Password</label>
                <input class="form-control" name="inputPassword" type="password" id="inputPassword" placeholder="Password" required="">
            </div>
            
            <button class="btn btn-lg btn-primary btn-block mt-4 px-5" type="submit">Sign up</button>

        </form>
        <p class="relative-bottom">Already have an account? <a href="/login">Click here to sign in!</a></p>
    </div>
</body>