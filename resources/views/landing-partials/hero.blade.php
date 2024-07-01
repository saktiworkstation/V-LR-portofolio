{{--  backup hero start 
<div class="mx-auto py-52 bg-slate-800 relative" data-aos="fade-down-left" id="hero">
    <div id="particles-js" class="absolute top-0 left-0 w-full h-full z-0"></div>
    <div class="row max-w-[90%] mx-auto flex justify-center h-auto items-center relative z-10">
        <div class="w-1/2 ps-40 pe-5 py-5" data-aos="fade-up" data-aos-delay="200">
         
            <h1 class="text-8xl font-bold mb-5 text-slate-100 mt-8">
                Create Your CV <span class="">Practically and Easily</span>
            </h1>
            <p class="text-slate-500 mb-4 text-justify pe-10">
            Do you want to create a CV simply and easily for yourself? Look no further! 
            We have the perfect tools and features to help you create a CV that truly represents you. 
            Our user-friendly interface allows you to showcase your work and achievements in a professional and organized manner. 
            So why wait? Register now and start building your CV in just a few clicks!
            </p>

            
            <a href="#" rel="noopener noreferrer"
            class="uppercase w-auto h-[45px] inline-flex items-center px-4 py-3 bg-slate-100 border border-transparent rounded-md font-semibold text-md text-grey-500 tracking-widest hover:bg-neutral-300 my-5">
                create Now &rarr;
            </a>
        </div>
        <div class="w-1/2" data-aos="fade-left" data-aos-delay="400">
            <img src="/img/banner.png" alt="Be Good" class="w-6/6">
        </div>
    </div>
</div>
--}}

<!-- particles.js library -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<!-- AOS CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>

{{-- hero start --}}
<div class="mx-auto py-40 lg:py-52 px-10 bg-slate-800 relative" data-aos="fade-down-left" id="hero">
    <div id="particles-js" class="absolute top-0 left-0 w-full h-full z-0"></div>
        <div class="row w-full md:max-w-[90%] mx-auto flex justify-center h-auto items-center relative z-10">
            <div class="w-screen lg:w-1/2 md:ps-18 md:ps-20 lg:ps-18 2xl:ps-40 pe-5 py-5 " data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-[50px] leading-none sm:text-[70px] md:text-[75px] lg:text-7xl sm:pe-16 lg:pe-5 font-bold mb-5 text-slate-100 mt-8">
                    Create Your CV <span class="">Practically and Easily</span>
                </h1>
                <p class="text-slate-500 mb-4 text-justify pe-10 md:w-[90%] lg:pe-5">
                    Do you want to create a CV simply and easily for yourself? Look no further! 
                    We have the perfect tools and features to help you create a CV that truly represents you. 
                    Our user-friendly interface allows you to showcase your work and achievements in a professional and organized manner. 
                    So why wait? Register now and start building your CV in just a few clicks!
                </p>
                
                
                <a href="#" rel="noopener noreferrer"
                   class="uppercase w-auto h-[45px] inline-flex items-center px-4 py-3 bg-slate-100 border border-transparent rounded-md font-semibold text-md text-grey-500 tracking-widest hover:bg-neutral-300 my-5">
                    create Now &rarr;
                </a>
            </div> 

            <div class="hidden lg:flex w-1/2 " data-aos="fade-left" data-aos-delay="400">
                <img src="/img/banner.png" alt="Be Good" class="lg:w-6/6">
            </div>   
        </div>
    </div>
</div>
{{-- hero end --}}

<!-- particles.js configuration -->
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "star",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
