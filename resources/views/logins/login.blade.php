<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login SSO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    {{--
    <link rel="stylesheet" href="/resources/css/login/login.css" /> --}}
</head>

<body>
    <section class="container-fluid">
        <div class="form-box">
            <div class="form-box1">
                <div class="login">Login</div>
                <img class="image1" src="{{ asset('image/logoPoliwangi.png') }}" />
                <div class="custom-button"><p class="login-heading text-center bolt-text">
                    Masuk dengan
                </p></div>
                <div class="custom-button">
                    <a href="{{ route('dashboards.dashboard') }}">
                        <div class="d-grid col-5 mx-auto">
                            <button class="btn btn-light bolt-text" type="button">
                                POLIWANGI SSO
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown text-center">
                    <button class="btn btn-tertiary-color-rgb text-primary dropdown-toggle small-text" type="button"
                        data-bs-toggle="dropdown" aria-expanded="true">
                        <span class="menu-action-text" id="actionmenuaction-1">Bahasa Indonesia ‎(id)‎</span>
                    </button>
                    <div class="dropdown-menu menu dropdown-menu-right" id="action-menu-0-menu" data-rel="menu-content"
                        aria-labelledby="action-menu-toggle-0" role="menu" style="will-change: transform">
                        <a href="#" class="dropdown-item menu-action" role="menuitem" tabindex="-1"
                            aria-labelledby="actionmenuaction-1">
                            <span class="menu-action-text" id="actionmenuaction-1">Bahasa Indonesia ‎(id)‎</span>
                        </a>
                        <a href="./login.html" class="dropdown-item menu-action" data-lang="de" lang="de"
                            role="menuitem" tabindex="-1" aria-labelledby="actionmenuaction-2">
                            <span class="menu-action-text" id="actionmenuaction-2">Deutsch ‎(de)‎</span>
                        </a>
                        <a href="./login.html" class="dropdown-item menu-action" data-lang="en" lang="en"
                            role="menuitem" tabindex="-1" aria-labelledby="actionmenuaction-3">
                            <span class="menu-action-text" id="actionmenuaction-3">English ‎(en)‎</span>
                        </a>
                        <a href="./login.html" class="dropdown-item menu-action" data-lang="ru" lang="ru"
                            role="menuitem" tabindex="-1" aria-labelledby="actionmenuaction-4">
                            <span class="menu-action-text" id="actionmenuaction-4">Русский ‎(ru)‎</span>
                        </a>
                        <a href="./login.html" class="dropdown-item menu-action" data-lang="ja" lang="ja"
                            role="menuitem" tabindex="-1" aria-labelledby="actionmenuaction-5">
                            <span class="menu-action-text" id="actionmenuaction-5">日本語 ‎(ja)‎</span>
                        </a>
                        <a href="./login.html" class="dropdown-item menu-action" data-lang="zh_cn" lang="zh_cn"
                            role="menuitem" tabindex="-1" aria-labelledby="actionmenuaction-6">
                            <span class="menu-action-text" id="actionmenuaction-6">简体中文 ‎(zh_cn)‎</span>
                        </a>
                    </div>
                </div>
                <div class="textinstagram small-text text-center">
                    <svg class="instagram" width="43" height="43" viewBox="0 0 43 43" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 21.5C0 33.3741 9.62588 43 21.5 43C33.3741 43 43 33.3741 43 21.5C43 9.62588 33.3741 0 21.5 0C9.62588 0 0 9.62588 0 21.5Z"
                            fill="#F00073" />
                        <path
                            d="M21.5 12.3625C24.4562 12.3625 24.8594 12.3625 26.0687 12.3625C27.1437 12.3625 27.6812 12.6313 28.0844 12.7656C28.6219 13.0344 29.025 13.1688 29.4281 13.5719C29.8312 13.975 30.1 14.3781 30.2344 14.9156C30.3687 15.3188 30.5031 15.8563 30.6375 16.9313C30.6375 18.1406 30.6375 18.4094 30.6375 21.5C30.6375 24.5906 30.6375 24.8594 30.6375 26.0688C30.6375 27.1438 30.3687 27.6813 30.2344 28.0844C29.9656 28.6219 29.8312 29.025 29.4281 29.4281C29.025 29.8313 28.6219 30.1 28.0844 30.2344C27.6812 30.3688 27.1437 30.5031 26.0687 30.6375C24.8594 30.6375 24.5906 30.6375 21.5 30.6375C18.4094 30.6375 18.1406 30.6375 16.9312 30.6375C15.8562 30.6375 15.3187 30.3688 14.9156 30.2344C14.3781 29.9656 13.975 29.8313 13.5719 29.4281C13.1687 29.025 12.9 28.6219 12.7656 28.0844C12.6312 27.6813 12.4969 27.1438 12.3625 26.0688C12.3625 24.8594 12.3625 24.5906 12.3625 21.5C12.3625 18.4094 12.3625 18.1406 12.3625 16.9313C12.3625 15.8563 12.6312 15.3188 12.7656 14.9156C13.0344 14.3781 13.1687 13.975 13.5719 13.5719C13.975 13.1688 14.3781 12.9 14.9156 12.7656C15.3187 12.6313 15.8562 12.4969 16.9312 12.3625C18.1406 12.3625 18.5437 12.3625 21.5 12.3625ZM21.5 10.3469C18.4094 10.3469 18.1406 10.3469 16.9312 10.3469C15.7219 10.3469 14.9156 10.6156 14.2437 10.8844C13.5719 11.1531 12.9 11.5563 12.2281 12.2281C11.5562 12.9 11.2875 13.4375 10.8844 14.2438C10.6156 14.9156 10.4812 15.7219 10.3469 16.9313C10.3469 18.1406 10.3469 18.5438 10.3469 21.5C10.3469 24.5906 10.3469 24.8594 10.3469 26.0688C10.3469 27.2781 10.6156 28.0844 10.8844 28.7563C11.1531 29.4281 11.5562 30.1 12.2281 30.7719C12.9 31.4438 13.4375 31.7125 14.2437 32.1156C14.9156 32.3844 15.7219 32.5188 16.9312 32.6531C18.1406 32.6531 18.5437 32.6531 21.5 32.6531C24.4562 32.6531 24.8594 32.6531 26.0687 32.6531C27.2781 32.6531 28.0844 32.3844 28.7562 32.1156C29.4281 31.8469 30.1 31.4438 30.7719 30.7719C31.4437 30.1 31.7125 29.5625 32.1156 28.7563C32.3844 28.0844 32.5187 27.2781 32.6531 26.0688C32.6531 24.8594 32.6531 24.4563 32.6531 21.5C32.6531 18.5438 32.6531 18.1406 32.6531 16.9313C32.6531 15.7219 32.3844 14.9156 32.1156 14.2438C31.8469 13.5719 31.4437 12.9 30.7719 12.2281C30.1 11.5563 29.5625 11.2875 28.7562 10.8844C28.0844 10.6156 27.2781 10.4813 26.0687 10.3469C24.8594 10.3469 24.5906 10.3469 21.5 10.3469Z"
                            fill="white" />
                        <path
                            d="M21.5 15.7219C18.275 15.7219 15.7219 18.275 15.7219 21.5C15.7219 24.725 18.275 27.2781 21.5 27.2781C24.725 27.2781 27.2781 24.725 27.2781 21.5C27.2781 18.275 24.725 15.7219 21.5 15.7219ZM21.5 25.2625C19.4844 25.2625 17.7375 23.65 17.7375 21.5C17.7375 19.4844 19.35 17.7375 21.5 17.7375C23.5156 17.7375 25.2625 19.35 25.2625 21.5C25.2625 23.5156 23.5156 25.2625 21.5 25.2625Z"
                            fill="white" />
                        <path
                            d="M27.4125 16.9313C28.1546 16.9313 28.7562 16.3296 28.7562 15.5875C28.7562 14.8454 28.1546 14.2438 27.4125 14.2438C26.6704 14.2438 26.0687 14.8454 26.0687 15.5875C26.0687 16.3296 26.6704 16.9313 27.4125 16.9313Z"
                            fill="white" />
                    </svg>
                    <a href="https://www.instagram.com/ukmolahraga_poliwangi/">UKMOLAHRAGA_POLIWANGI</a>
                </div>
                <div class="textyoutube small-text text-center">
                    <svg class="youtube" width="43" height="43" viewBox="0 0 43 43" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 21.5C0 33.3741 9.62588 43 21.5 43C33.3741 43 43 33.3741 43 21.5C43 9.62588 33.3741 0 21.5 0C9.62588 0 0 9.62588 0 21.5Z"
                            fill="#FF0000" />
                        <path
                            d="M31.7125 16.2594C31.4438 15.3187 30.7719 14.6469 29.8313 14.3781C28.2188 13.975 21.3656 13.975 21.3656 13.975C21.3656 13.975 14.6469 13.975 12.9 14.3781C11.9594 14.6469 11.2875 15.3187 11.0187 16.2594C10.75 18.0062 10.75 21.5 10.75 21.5C10.75 21.5 10.75 24.9937 11.1531 26.7406C11.4219 27.6812 12.0937 28.3531 13.0344 28.6219C14.6469 29.025 21.5 29.025 21.5 29.025C21.5 29.025 28.2187 29.025 29.9656 28.6219C30.9062 28.3531 31.5781 27.6812 31.8469 26.7406C32.25 24.9937 32.25 21.5 32.25 21.5C32.25 21.5 32.25 18.0062 31.7125 16.2594ZM19.35 24.725V18.275L24.9938 21.5L19.35 24.725Z"
                            fill="white" />
                    </svg>
                    <a href="https://www.youtube.com/@ukmolahragapoliteknikneger9683">UKM Olahraga Politeknik Negeri
                        Banyuwangi</a>
                </div>
            </div>

            <div class="form-box2">
                <img class="image2" src="{{ asset('image/Group 134.png') }}" />
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
