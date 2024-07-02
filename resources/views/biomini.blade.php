<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biomini | Create & Share mini bio links to grow your networks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <main>
        <header>
            <div class="logo"><h1>Bio Mini</h1></div>
        </header>
        <section class="profile_settings">
            <div class="image">
                <img src="{{ asset('images/'.$detail->image) }}" alt="Profile Image">
            </div>
            <div class="settings" id="settings">
                <ul>
                   @if(Auth::check())
                   <li>
                    <button type="button" style="all:unset;" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Edit Profile">
                        <a href="{{ route('update',$detail->id) }}"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z" fill="#ffffff"/>
                            </svg></a>
                      </button>
                </li>
                   @endif
                    <li>
                        <button type="button" style="all:unset;" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Copy Mini Link">
                        <a href="" id="copyBtn" ><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#a)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 5h7.795c1.115 0 1.519.116 1.926.334.407.218.727.538.945.945.218.407.334.811.334 1.926V16a1 1 0 1 0 2 0V8.128c0-1.783-.186-2.43-.534-3.082a3.635 3.635 0 0 0-1.512-1.512C18.302 3.186 17.655 3 15.872 3H8a1 1 0 0 0 0 2zm7.721 2.334C15.314 7.116 14.91 7 13.795 7h-7.59c-1.115 0-1.519.116-1.926.334a2.272 2.272 0 0 0-.945.945C3.116 8.686 3 9.09 3 10.205v7.59c0 1.114.116 1.519.334 1.926.218.407.538.727.945.945.407.218.811.334 1.926.334h7.59c1.114 0 1.519-.116 1.926-.334.407-.218.727-.538.945-.945.218-.407.334-.811.334-1.926v-7.59c0-1.115-.116-1.519-.334-1.926a2.272 2.272 0 0 0-.945-.945z" fill="#ffffff"/>
                        </g>
                        <defs>
                        <clipPath id="a">
                        <path fill="#ffffff" d="M0 0h24v24H0z"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </a>
                </button>
                {{-- url('biominiView/'.$detail->id) }} --}}
        
                    </li>
                    <li id="change_themes">
                        <button type="button" style="all:unset;" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Change Theme">
        
                        <svg width="800px" height="800px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g fill="#ffffff">
                        <path d="M8.586 7.532c.477.597.864.834 1.135.92a.936.936 0 00.69-.04c.228-.1.442-.27.627-.458.09-.09.168-.18.234-.257l.03-.036c.048-.058.12-.143.17-.193a.75.75 0 011.062 1.06l-.023.026-.025.03-.07.082a5.846 5.846 0 01-.312.344c-.253.256-.623.572-1.095.778a2.434 2.434 0 01-1.743.094c-.64-.204-1.257-.67-1.852-1.414-.477-.597-.864-.834-1.135-.92a.936.936 0 00-.69.04c-.228.1-.442.27-.627.458-.09.09-.168.18-.234.257l-.03.036a3.3 3.3 0 01-.17.193.75.75 0 01-1.063-1.057l.024-.03.025-.028.07-.083c.077-.092.183-.214.312-.344.253-.256.623-.572 1.095-.777a2.434 2.434 0 011.743-.095c.64.204 1.257.67 1.852 1.414z"/>
                        <path fill-rule="evenodd" d="M8 0a8 8 0 100 16A8 8 0 008 0zM1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0z" clip-rule="evenodd"/>
                        </g>
                        </svg>
                </button>
        
                <div class="colors" id="colors">
                <div id="close" class="close"><i class="fas fa-times-circle"></i> Close</div>
                <h5>Change Theme</h5>
                <div class="options-1">
                    <div id="color" class="" style="background-color:#ffebc7;"></div>
                    <div id="color" class="" style="background-color:#ffc8c8;"></div>
                    <div id="color" class="" style="background-color:hsl(166, 100%, 90%);"></div>
                    <div id="color" class="" style="background-color:#cfdaff;"></div>
                    <div id="color" class="" style="background-color:#ffd8f4;"></div>
                </div>
                <div class="options-2">
                    <div id="color" class="" style="background-color:#dcffd9;"></div>
                    <div id="color" class="" style="background-color:#daedff;"></div>
                    <div id="color" class="" style="background-color:#ffe9dc;"></div>
                    <div id="color" class="" style="background-color:#d1f7ff;"></div>
                    <div id="color" class="" style="background-color:#e7dcff;"></div>
                </div>
            </div>
             </li>
                </ul>
            </div>
        </section>
        <script>
        
            copyBtn.addEventListener('click',(event)=>{
                const copyBtn = document.getElementById('copyBtn');
                const url = window.location.href;
                let copied = navigator.clipboard.writeText(url);
            })
        
        </script>


        <div class="personal_info">

            <h5 class="name">{{ $detail->name }}</h5>
            <h5 class="profession">{{ $detail->profession }}</h5>
        </div>
        <section class="content">
            <div class="short_desc">
                <h2>Short Bio</h2>
                <p>{{ $detail->short_bio }}</p>
            </div>
            <div class="interests">
                <h2>Interests</h2>
                <div class="buttons">
                    @php
                        $explode = explode(',',$detail->interest);
                    @endphp
                       @foreach ($explode as $interest)
                       <button>{{ $interest }} </button>
                       @endforeach
                </div>
            </div>
            <div class="contact">
                <h2>Contact</h2>
                <div class="links">
                    <ul>
                        <li><a target="_blank" href="{{ $detail->website }}">{{ $detail->website }} <i class="fas fa-external-link-alt"></i></a></li>
                        <li><a target="_blank" href="mailto:{{ $detail->email }}">{{ $detail->email }} <i class="fas fa-external-link-alt"></i></a></li>
                        <li><a target="_blank" href="{{ $detail->portfolio }}">{{ $detail->portfolio }} <i class="fas fa-external-link-alt"></i></a></li>
                        <li><a href="{{ asset('/resume'.'/'.$detail->resume) }}" download>Resume <i class="fas fa-download"></i></a></li>
                        <li><a href="">{{ $detail->phone }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="socials">
                <h2>Socials</h2>
                <ul>
                    <li><a target="_blank" href="{{ $detail->insta }}"><i class="fab fa-instagram"></i></a></li>
                    <li><a target="_blank" href="{{ $detail->facebook }}"><i class="fab fa-facebook"></i></a></li>
                    <li><a target="_blank" href="{{ $detail->twitter }}"><i class="fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="{{ $detail->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="{{ asset('script.js') }}"></script>
    <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>
