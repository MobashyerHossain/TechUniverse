<nav class="navbar sticky-top shadow bg-white p-0">
    <div class="row m-0 p-0 w-100">
        <!--logo-->
        <div class="col-3 text-center">
          <a href="{{route('index')}}" class="nav-link text-secondary">
            <h3>{{ config('app.name', 'Laravel') }}</h3>
          </a>
        </div>

        <!--SearchBox-->
        @include('base.inc.nav.searchbox')

        <!--Sign In-->
        @include('base.inc.nav.signIn')

        <!--Cart-->
        @include('base.inc.nav.cart')
    </div>
</nav>

<!-- Login Modal -->
@include('base.inc.modals.loginModal')

<!-- Register Modal -->
@include('base.inc.modals.registrationModal')

<!-- Checkout Modal -->
@include('base.inc.modals.paymentModal')
