<x-authentication.layout>
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <div><span class="text-black "><span class="font-medium">or:</span></span></div>
                        <a href="{{route('signGithub')}}"><span class="text-black text-lg ml-1"><span class="font-medium">Github</span></span></a>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your social media accounts in one place</div>
                        <div class="intro-x mt-4">
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div>
                            <input name="email" type="text" class="intro-x login__input input input--lg border border-gray-300 block" value="{{old('email')}}"  placeholder="Email" >
                            @error('email')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                @enderror
                            </div>
                            <div>
                            <input name ="password" type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" >
                            @error('password')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                @enderror
                            </div>

                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input type="checkbox" class="input border mr-2" id="remember-me">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="{{route('showforgetpassword')}}">Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top">Login</button>
                        </form>
                            <a href="{{route('showregistration')}}"> <button href="{{route('showregistration')}}" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top">Sign up</button></a>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                            By signin up, you agree to our
                            <br>
                            <a class="text-theme-1 dark:text-theme-10" href="">Terms and Conditions</a> & <a class="text-theme-1 dark:text-theme-10" href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
    </x-authentication.layout>
