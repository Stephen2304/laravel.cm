@title(__('A propos de Laravel Cameroun'))

@extends('layouts.default')

@section('body')

    <header class="py-8 sm:py-10 lg:py-12 lg:grid lg:grid-cols-5 lg:gap-16">
        <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-3 lg:text-left lg:mx-0">
            <h1 class="font-sans text-skin-inverted">
                <span class="block text-sm font-semibold text-skin-primary sm:text-base lg:text-sm xl:text-base">A propos</span>
                <span class="mt-1 block text-2xl tracking-tight font-extrabold sm:text-3xl xl:text-4xl">
                    Nous construisons une communauté Open Source d'apprenants et d'enseignants
                </span>
            </h1>
        </div>
        <div class="mt-8 sm:text-center lg:col-span-2 lg:text-left">
            <p class="text-base leading-6 font-normal text-skin-base sm:text-lg">
                <span class="font-medium"><span class="text-skin-primary italic">"</span>Tout le monde enseigne, tout le monde apprend<span class="text-skin-primary italic">"</span></span>.
                Tel est l'esprit qui est derrière la communauté. Une communauté qui se veut grandissante et qui donne la possibilité à tout le monde de partager ses connaissances et d'apprendre.
            </p>
        </div>
    </header>

    <section class="my-10" aria-describedby="stats section">
        <dl class="rounded-lg bg-green-50 shadow-lg sm:grid sm:grid-cols-3">
            <div class="flex flex-col p-6 text-center sm:p-10">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-green-900">
                    Membres sur Slack
                </dt>
                <dd class="order-1 text-5xl font-extrabold text-green-600 font-heading">
                    +300
                </dd>
            </div>
            <div class="flex flex-col p-6 text-center sm:p-10">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-green-900">
                    Membres sur Telegram
                </dt>
                <dd class="order-1 text-5xl font-extrabold text-green-600 font-heading">
                    +100
                </dd>
            </div>
            <div class="flex flex-col p-6 text-center sm:p-10">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-green-900">
                    Membres sur WhatsApp
                </dt>
                <dd class="order-1 text-5xl font-extrabold text-green-600 font-heading">
                    +250
                </dd>
            </div>
        </dl>
    </section>

    <div class="py-8 sm:py-10 lg:py-12">
        <h1 class="font-sans text-skin-inverted">
            <span class="block text-sm font-semibold text-skin-primary sm:text-base lg:text-sm xl:text-base">Notre histoire</span>
            <span class="mt-1 block text-xl tracking-tight font-extrabold font-heading sm:text-2xl xl:text-3xl">
                Nous commençons tout juste
            </span>
        </h1>

        <div class="mt-5 prose prose-lg prose-green text-skin-base lg:max-w-none">
            <div class="lg:grid lg:grid-cols-2 lg:gap-6">
                <div>
                    <p>
                        Lancé en Juin 2018, Laravel CM a rapidement commencé à se développer et à démarrer ses activités par un premier
                        Meetup pour sa présentation globale et ses objectifs. Ce Meetup a enregistré plus de 100 participants.
                    </p>
                    <p>
                        Durant cet événement nous avons notamment enregistré la participation des entreprises telles que:
                    </p>
                    <ul class="font-normal">
                        <li>L'incubateur <a href="http://activspaces.com">ActivSpaces</a> qui a hébergé le meetup.</li>
                        <li>L'entreprise <span class="text-skin-primary font-medium">Kerawa Cameroun</span> qui a été l'un de nos sponsors.</li>
                        <li>La StartUp <a href="https://johns-corporation.com">John's Corporation</a> qui a été un sponsor et nous a soutenu dans la communication.</li>
                        <li>La StartUp <a href="https://twitter.com/DarkCodeCompany">Dark Code</a> qui nous a apporté son soutien dans la mise en place des supports de communication.</li>
                        <li>L'entreprise <a href="https://diool.com">Diool</a> sponsor du Meetup.</li>
                    </ul>
                </div>
                <div class="mt-5 lg:flex lg:justify-end sm:mt-0">
                    <blockquote class="twitter-tweet" @if(get_current_theme() === 'theme-dark') data-theme="dark" @endif>
                        <p lang="en" dir="ltr">On August 25th Laravel Cameroon will have their first meeting. 🙌
                            <a href="https://t.co/KPqC2a3Dvw">https://t.co/KPqC2a3Dvw</a>
                            <a href="https://t.co/MVv4CgIA5H">pic.twitter.com/MVv4CgIA5H</a>
                        </p>&mdash; Laravel News (@laravelnews)
                        <a href="https://twitter.com/laravelnews/status/1025104561965543424?ref_src=twsrc%5Etfw">August 2, 2018</a>
                    </blockquote>
                </div>
            </div>
            <p>
                Laravel Cameroun est une communauté de développeurs et de designers qui se réunissent pour s'entraider. L'industrie du logiciel reposant sur la collaboration et l'apprentissage en réseau.
                Nous nous sommes donnés comme objectif de pouvoir rassembler le maximum de développeurs et designers évoluant au Cameroun et dans l'Afrique Francophone pour organiser des grands événements et Meetup de part le Cameroun et l'Afrique Francophone.
            </p>
        </div>

        <div class="mt-12 border-t border-skin-base pt-12 sm:mt-14 sm:pt-14">
            <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-24 lg:space-y-0">
                <div class="font-sans">
                    <span class="text-sm leading-5 text-skin-primary font-semibold tracking-wide uppercase">Notre équipe</span>
                    <h2 class="mt-2 text-2xl font-extrabold font-heading text-skin-inverted tracking-tight sm:text-3xl">Équipe de direction</h2>
                    <p class="mt-5 text-lg text-skin-base">Laravel Cameroun est une idée qui a été initiée puis transformée en une communauté par 2 développeurs parmi les plus influents au Cameroun.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="space-y-4">
                                <img class="ow-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://avatars.githubusercontent.com/u/14105989?v=4" alt="Arthur Monney Profile">
                                <div class="text-lg leading-6 text-skin-inverted font-medium space-y-1">
                                    <h3>Arthur Monney</h3>
                                    <p class="text-base text-green-600 font-sans">UI/UX Designer & Créateur de Laravel Shopper</p>
                                </div>
                                <div class="text-lg">
                                    <p class="text-skin-base font-normal">
                                        Fullstack Designer. Creator of <a href="https://github.com/shopperlabs/framework" class="text-skin-primary hover:text-skin-primary-hover">@laravelshopper</a> - Laravel Cameroon (@laravelcm) owner
                                    </p>
                                </div>

                                <ul role="list" class="flex space-x-5">
                                    <li>
                                        <a href="https://twitter.com/MonneyArthur" class="text-skin-muted hover:text-skin-base">
                                            <span class="sr-only">Twitter</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/arthurmonney" class="text-skin-muted hover:text-skin-base">
                                            <span class="sr-only">LinkedIn</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <img class="ow-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://pbs.twimg.com/profile_images/1439915090594177030/9ZerHNLd_400x400.jpg" alt="Fabrice Yopa Profile">
                                <div class="text-lg leading-6 text-skin-inverted font-medium space-y-1">
                                    <h3>Fabrice Yopa</h3>
                                    <p class="text-base text-green-600 font-sans">Co-Founder & CTO IS Dev Experts</p>
                                </div>
                                <div class="text-lg">
                                    <p class="text-skin-base font-normal">
                                        CTO at @isdevexperts, Expert Lead Dev Web
                                        <a href="https://twitter.com/10000codeurs" class="text-skin-primary hover:text-skin-primary-hover">@10000codeurs</a>.
                                        Laravel Cameroon Organizer @laravelcm
                                    </p>
                                </div>

                                <ul role="list" class="flex space-x-5">
                                    <li>
                                        <a href="https://twitter.com/yopafabrice" class="text-skin-muted hover:text-skin-base">
                                            <span class="sr-only">Twitter</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/fabriceyopa" class="text-skin-muted hover:text-skin-base">
                                            <span class="sr-only">LinkedIn</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush
