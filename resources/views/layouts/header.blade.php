<header class="tw-py-4">
    <div class="tw-container tw-mx-auto tw-flex tw-justify-between">
        <div class="tw-flex">
            {{--      logo      --}}
            <a class="tw-logo" href="{{ url('/') }}">
                <img src="{{ url('/images/logo/Pinkoi.svg') }}" alt="Pinkoi">
            </a>

            <div class="tw-flex tw-flex-col">
                {{--     Search       --}}
                <label for="q" class="tw-flex tw-pb-2">
                    <input type="text"
                           class="tw-flex-1 tw-shadow tw-appearance-none tw-border tw-py-2 tw-px-3 tw-text-grey-darker tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline"
                           name="q">
                    <button
                        class="tw-bg-grey-darkest hover:tw-bg-black tw-text-white tw-font-bold tw-py-2 tw-px-4 focus:tw-outline-none focus:tw-shadow-outline"
                        type="submit"
                    >搜尋
                    </button>
                </label>

                {{--      Tag      --}}
                <ul class="tw-header-tag">
                    <li><a href="">免運手機殼</a></li>
                    <li><a href="">復古耳環</a></li>
                    <li><a href="">手作體驗活動</a></li>
                    <li><a href="">通勤包</a></li>
                    <li><a href="">乳液</a></li>
                    <li><a href="">免運禮物</a></li>
                </ul>
            </div>
        </div>

        <div>
            <!-- Right Side Of Navbar -->
            <ul class="tw-flex tw-py-4 tw-items-center">
                <!-- Authentication Links -->
                <li class="tw-pl-6">
                    <a class="hover:tw-text-pink tw-text-sm"
                       href="">我要開設計館</a>
                </li>

                @guest
                    <li class="tw-pl-6">
                        <a class="tw-border tw-border-black hover:tw-border-pink tw-text-sm tw-rounded tw-block"
                           href="{{ route('login') }}">
                            <span class="tw-p-2 hover:tw-text-pink tw-inline-block">登入/註冊</span>
                        </a>
                    </li>

                    <li class="tw-pl-6">
                        <a href="{{ route('login') }}">
                            <svg height="20px" viewBox="0 -31 512.00026 512" width="20px" class="tw-shopping-cart"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0"></path>
                                <path
                                    d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"></path>
                                <path
                                    d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"></path>
                            </svg>
                        </a>
                    </li>
                @else

                @endguest
            </ul>
        </div>
    </div>
</header>
