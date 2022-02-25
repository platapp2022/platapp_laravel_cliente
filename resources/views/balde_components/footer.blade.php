<footer class="text-white bg-black  body-font  ">
    <div class="container flex flex-col flex-wrap  px-11 py-2 md:px-5 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap ">
        <div class="flex flex-wrap flex-grow mt-8 -mb-10 text-left md:py-5 md:mt-0 ">
            <div class="w-full px-0 h-40 lg:w-1/4 md:w-1/2">
                <div class=" -m-5 ">
                    <a href="/"> <img src="{{$app_logo}}" alt="app_logo" class="h-20 ml-2 mt-2" style="max-width:300px"> </a>
                    <p class="text-lg text-gray-200 mx-3 font-semibold ">{{setting('app_name')}}</p>
                    <p class="text-sm text-gray-200 mx-3 ">{{setting('app_short_description')}}</p>
                </div>
            </div>
            <div class="w-full px-0 lg:w-1/4 md:w-1/2">
                <h1 class="mb-2 text-sm font-semibold tracking-widest text-white uppercase title-font">
                    {{__("Categories")}}
                </h1>
                <footer-categories-links/>
            </div>
            {{-- <div class="w-full px-0 lg:w-1/4 md:w-1/2">
                <h1 class="mb-2 text-sm font-semibold tracking-widest text-white uppercase title-font">
                    {{__("Fields")}}
                </h1>
                <footer-fields-links/>
            </div> --}}
            <div class="w-full px-0 lg:w-1/4 md:w-1/2">
                    <h1 class="mb-2 text-sm font-semibold tracking-widest text-white uppercase title-font">
                        {{__("Download our Application from")}}
                    </h1>
                    <div class="mb-10 flex flex-col md:flex-row">
                        <a href="#" class="nav-link w-full md:w-1/2 rounded bg-white text-black hover:text-gray-300 mt-1 md:mr-2 h-12 flex items-center justify-center" >
                                <img src="/images/google-play.svg" alt="google-play" class="w-6 mr-1">
                                <span class="font-semibold">
                                    {{__("Google Play")}}
                                </span>
                        </a>
                        <a href="#" class="nav-link w-full md:w-1/2 rounded bg-white text-black hover:text-gray-300 mt-1 md:mr-2 h-12 flex items-center justify-center" >
                            <img src="/images/app-store.svg" alt="google-play" class="w-6 mr-1">
                            <span class="font-semibold">
                                {{__("App Store")}}
                            </span>
                        </a>
                    </div>
            </div>
        </div>
        <div class="container flex flex-col flex-wrap  py-6 mx-auto sm:flex-row">
            <p class="text-sm text-center text-gray-200 sm:text-left">
                <a href="{{ url('/terms-of-condicion') }}">{{__("Terms and Conditions")}}</a> <br> <a href="{{ url('/privacy-policies') }}">Politicas de privacidad</a>
            </p>
            <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                <p class="text-sm text-center text-gray-200 sm:text-left">
                    {{setting('app_name')}}  © {{__("All copyrights reserved")}}
                </p>
            </span>
        </div>
        
    </div>
    
    {{-- <div class="" style="background: #222;" >
            <div class="container flex flex-col flex-wrap  py-6 mx-auto sm:flex-row">
                    <div class="dropdown dropup">
                        <button type="button" class="bg-gray-200 py-1 px-2 -mt-2 text-black rounded-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fas fa-globe "></i>   {{__("Language")}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a id="es" onclick="setLanguage(this.id)" class="dropdown-item cursor-pointer flex flex-row items-center" >
                                <img width="30" height="30" src="/images/flags/mx_flag.png" alt="flag" class="mr-2 rounded-sm">
                                <span>{{__("Spanish")}}</span>
                            </a>
                            <a id="en" onclick="setLanguage(this.id)" class="dropdown-item cursor-pointer flex flex-row items-center" >
                                <img width="30" height="30" src="/images/flags/uk_flag.png" alt="flag" class="mr-2 rounded-sm">
                                <span>{{__("English")}}</span>
                            </a>
                        </div>
                      </div>
                        <script type="application/javascript">
                        function setLanguage(lang) {
                            loadLanguageAsync(lang);
                        }
                        </script>


            </div>
    </div> --}}
</footer>

{{-- localStorage.setItem('language', lang) --}}
