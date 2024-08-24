@extends('layouts.guest')

@section('content')
    <main class="isolate">
        <!-- Hero section -->
        <div class="relative isolate -z-10 overflow-hidden bg-gradient-to-b from-teal-100/20 pt-14">
            <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-teal-600/10 ring-1 ring-teal-50 sm:-mr-80 lg:-mr-96"
                aria-hidden="true"></div>
            <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
                <div
                    class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                    <h1
                        class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">
                        We’re a passionate group of people working from around the world to build the future of ecommerce.
                    </h1>
                    <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                        <p class="text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                            irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua. Anim
                            aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1567532900872-f4e906cbf06a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&q=80"
                        alt=""
                        class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
        </div>

        <!-- Timeline section -->
        <div class="mx-auto -mt-8 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">
                <div>
                    <time datetime="2021-08" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Aug 2021
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Founded company</p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Nihil aut nam. Dignissimos a pariatur et quos omnis.
                        Aspernatur asperiores et dolorem dolorem optio voluptate repudiandae.</p>
                </div>
                <div>
                    <time datetime="2021-12" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Dec 2021
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Secured $65m in funding</p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Provident quia ut esse. Vero vel eos repudiandae
                        aspernatur. Cumque minima impedit sapiente a architecto nihil.</p>
                </div>
                <div>
                    <time datetime="2022-02" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Feb 2022
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Released beta</p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Sunt perspiciatis incidunt. Non necessitatibus
                        aliquid. Consequatur ut officiis earum eum quia facilis. Hic deleniti dolorem quia et.</p>
                </div>
                <div>
                    <time datetime="2022-12" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Dec 2022
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Global launch of product
                    </p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Ut ipsa sint distinctio quod itaque nam qui. Possimus
                        aut unde id architecto voluptatem hic aut pariatur velit.</p>
                </div>
            </div>
        </div>

        <!-- Logo cloud -->
        <div class="mx-auto mt-32 max-w-7xl sm:mt-40 sm:px-6 lg:px-8">
            <div
                class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Our customers love us
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Aliquip reprehenderit incididunt amet quis
                    fugiat ut velit. Sit occaecat labore proident cillum in nisi adipisicing officia excepteur tempor
                    deserunt.</p>
                <div
                    class="mx-auto mt-20 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:max-w-4xl lg:grid-cols-5">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor"
                        width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158"
                        height="48">
                    <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158"
                        height="48">
                </div>
                <div class="absolute -top-24 right-0 -z-10 transform-gpu blur-3xl" aria-hidden="true">
                    <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>
            </div>
        </div>

        <!-- Content section -->
        <div class="mt-32 overflow-hidden sm:mt-40">
            <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                    <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our people</h2>
                        <p class="mt-6 text-xl leading-8 text-gray-600">Quasi est quaerat. Sit molestiae et. Provident ad
                            dolorem occaecati eos iste. Soluta rerum quidem minus ut molestiae velit error quod. Excepturi
                            quidem expedita molestias quas.</p>
                        <p class="mt-6 text-base leading-7 text-gray-600">Anim aute id magna aliqua ad ad non deserunt
                            sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat. Quasi
                            aperiam sit non sit neque reprehenderit.</p>
                    </div>
                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                            <img src="https://images.unsplash.com/photo-1670272502246-768d249768ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80"
                                alt=""
                                class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div
                            class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                                <img src="https://images.unsplash.com/photo-1605656816944-971cd5c1407f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80"
                                    alt=""
                                    class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                                <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&h=842&q=80"
                                    alt=""
                                    class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80"
                                    alt=""
                                    class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We approach the workplace as
                    something that adds to our lives and adds value to world.</h2>
                <p class="mt-6 text-base leading-7 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit
                    est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.</p>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
                <div
                    class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-50 p-8 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">
                    <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">250k</p>
                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                        <p class="text-lg font-semibold tracking-tight text-gray-900">Users on the platform</p>
                        <p class="mt-2 text-base leading-7 text-gray-600">Vel labore deleniti veniam consequuntur sunt
                            nobis.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
                    <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                        <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made
                            over $8 billion in total revenue.</p>
                        <p class="mt-2 text-base leading-7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget
                            magna egestas.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-teal-600 p-8 sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">
                    <p class="flex-none text-3xl font-bold tracking-tight text-white">401,093</p>
                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                        <p class="text-lg font-semibold tracking-tight text-white">Transactions this year</p>
                        <p class="mt-2 text-base leading-7 text-teal-200">Eu duis porta aliquam ornare. Elementum eget
                            magna egestas. Eu duis porta aliquam ornare.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content section -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div
                class="mx-auto flex max-w-2xl flex-col items-end justify-between gap-16 lg:mx-0 lg:max-w-none lg:flex-row">
                <div class="w-full lg:max-w-lg lg:flex-auto">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We’re always looking for
                        awesome people to join us</h2>
                    <p class="mt-6 text-xl leading-8 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac
                        velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id.</p>
                    <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&h=1104&q=80"
                        alt=""
                        class="mt-16 aspect-[6/5] w-full rounded-2xl bg-gray-50 object-cover lg:aspect-auto lg:h-[34.5rem]">
                </div>
                <div class="w-full lg:max-w-xl lg:flex-auto">
                    <h3 class="sr-only">Job openings</h3>
                    <ul class="-my-8 divide-y divide-gray-100">
                        <li class="py-8">
                            <dl class="relative flex flex-wrap gap-x-3">
                                <dt class="sr-only">Role</dt>
                                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">
                                    <a href="#">
                                        Full-time designer
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                    </a>
                                </dd>
                                <dt class="sr-only">Description</dt>
                                <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">Quos sunt ad dolore
                                    ullam qui. Enim et quisquam dicta molestias. Corrupti quo voluptatum eligendi autem
                                    labore.</dd>
                                <dt class="sr-only">Salary</dt>
                                <dd class="mt-4 text-base font-semibold leading-7 text-gray-900">$75,000 USD</dd>
                                <dt class="sr-only">Location</dt>
                                <dd class="mt-4 flex items-center gap-x-3 text-base leading-7 text-gray-500">
                                    <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300"
                                        aria-hidden="true">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    San Francisco, CA
                                </dd>
                            </dl>
                        </li>
                        <li class="py-8">
                            <dl class="relative flex flex-wrap gap-x-3">
                                <dt class="sr-only">Role</dt>
                                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">
                                    <a href="#">
                                        Laravel developer
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                    </a>
                                </dd>
                                <dt class="sr-only">Description</dt>
                                <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">Et veniam et officia
                                    dolorum rerum. Et voluptas consequatur magni sapiente amet voluptates dolorum. Ut porro
                                    aut eveniet.</dd>
                                <dt class="sr-only">Salary</dt>
                                <dd class="mt-4 text-base font-semibold leading-7 text-gray-900">$125,000 USD</dd>
                                <dt class="sr-only">Location</dt>
                                <dd class="mt-4 flex items-center gap-x-3 text-base leading-7 text-gray-500">
                                    <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300"
                                        aria-hidden="true">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    San Francisco, CA
                                </dd>
                            </dl>
                        </li>
                        <li class="py-8">
                            <dl class="relative flex flex-wrap gap-x-3">
                                <dt class="sr-only">Role</dt>
                                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">
                                    <a href="#">
                                        React Native developer
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                    </a>
                                </dd>
                                <dt class="sr-only">Description</dt>
                                <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">Veniam ipsam nisi quas
                                    architecto eos non voluptatem in nemo. Est occaecati nihil omnis delectus illum est.
                                </dd>
                                <dt class="sr-only">Salary</dt>
                                <dd class="mt-4 text-base font-semibold leading-7 text-gray-900">$105,000 USD</dd>
                                <dt class="sr-only">Location</dt>
                                <dd class="mt-4 flex items-center gap-x-3 text-base leading-7 text-gray-500">
                                    <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300"
                                        aria-hidden="true">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    San Francisco, CA
                                </dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="mt-8 flex border-t border-gray-100 pt-8">
                        <a href="#"
                            class="text-sm font-semibold leading-6 text-teal-600 hover:text-teal-500">View all openings
                            <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
