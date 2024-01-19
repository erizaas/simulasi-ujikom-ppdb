<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPBD SMK WIKRAMA BOGOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
	</head>
	<body>
    <section class="vh-100" style="background-image: linear-gradient(45deg, #009EC5 0%, #2e7eed 20%, #02225B 50%); background-repeat: no-repeat; min-height: 100vh">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/hero2.jpg" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <form action="{{route('auth.login')}}" method="POST">
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Login</span>
                        </div>
                        <h5 class="text-primary fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke Akun PPDB-mu</h5>
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger text-center" role="alert">{{ session('error') }}</div>
                        @endif
                        @if(session('isLogin'))
                            <div class="alert alert-warning text-center" role="alert">{{ session('isLogin') }}</div>
                        @endif
                        @if(session('logout'))
                            <div class="alert alert-success text-center" role="alert">{{ session('logout') }}</div>
                        @endif
                        {{-- Email --}}
                        <div class="form-outline mb-4">
                          <input type="text" id="form-username" class="form-control form-control-lg" name="username">
                          <label class="form-label" for="form-username">Username</label>
                        </div>

                        {{-- Password --}}
                        <div class="form-outline mb-4">
                          <input type="password" id="form-password" class="form-control form-control-lg" name="password">
                          <label class="form-label" for="form-password">Kata Sandi</label>
                        </div>

                        <div class="pt-1 mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="sumbit">Login</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

	</body>
</html>
