<x-authentication.layout>
    <!-- BEGIN: Login Form -->
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">

            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Change Password
            </h2>
            <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Change Password</div>
            <div class="intro-x mt-8">
                <form method="POST" action="{{route("submitresetpassword")}}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div>
                <input name = "email" type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Email">
                @error('email')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror
                </div>

                <div>
                <input name="password" type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="password">
                @error('password')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror
                </div>
                <input name="password_confirmation" type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="confirmation password">

            </div>
            <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">

            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top">Change Password</button>
            </form>
                <a href="{{route('showlogin')}}"> <button href="{{route('showlogin')}}" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top">Sign in</button></a>
            </div>

        </div>
    </div>
    <!-- END: Login Form -->
</div>
</div>
</x-authentication.layout>
