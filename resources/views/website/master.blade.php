<!DOCTYPE html>
<html dir="rtl">

@include('website.layouts.head')

<body>
    @include('website.layouts.header')
    <!-- ****************** -->
  @yield('content')
    <!-- ****************** -->
   @include('website.layouts.footer')
    <!-- ****************** -->
    <div class="scroll-container">

        <button class="scroll-to-top" onclick="ScrollToTop()" id="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
                <path fill-rule="evenodd"
                    d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
        </button>
    </div>
    <!-- ****************** -->
   @include('website.layouts.scripts')
</body>

</html>