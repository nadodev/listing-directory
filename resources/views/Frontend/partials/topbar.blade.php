<section id="wsus__topbar">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-7 d-none d-md-block">
                <ul class="wsus__topbar_left">
                    <li><a href="mailto:support@websolutionus.com"><i class="fal fa-envelope"></i>
                            support@websolutionus.com</a></li>
                    <li><a href="callto:+6958474522655"><i class="fal fa-phone-alt"></i>+6958474522655</a></li>
                </ul>
            </div>
            <div class="col-xl-6 col-md-5">
                <div class="row justify-content-end">
                    @if (Auth::check())
                    <div class="col-xl-3 col-md-5 ">
                        <div class="wsus__topbar_right">
                            <a href="{{ route('user.dashboard') }}" class="wsus__topbar_btn"><i class="fal fa-user"></i>My Account</a>
                        </div>
                    </div>
                    @else
                    <div class="col-xl-3 col-md-5 ">
                        <div class="wsus__topbar_right">
                            <a href="{{ route('login') }}" class="wsus__topbar_btn"><i class="fal fa-user"></i>Login</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-5 ">
                        <div class="wsus__topbar_right">
                            <a href="{{ route('login') }}" class="wsus__topbar_btn"><i class="fal fa-user"></i>Register</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
