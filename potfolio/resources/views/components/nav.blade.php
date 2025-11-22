<!-- Sticky Bottom Navigation Bar -->
<nav class="fixed bottom-0 left-0 right-0 h-16 bg-slate-900 dark:bg-slate-900 border-t border-slate-700 flex items-center justify-around z-20">
<a class="btn flex flex-col items-center justify-center text-text-dark  hover:bg-primary/20 dark:text-text-dark w-full h-full" href="{{route('home')}}">
<span class="material-symbols-outlined">home</span>
<span class="text-xs font-medium">Home</span>
</a>
<a class="btn flex flex-col items-center justify-center text-text-dark hover:bg-primary/20  dark:text-text-dark w-full h-full  rounded-lg mx-1" href="{{route('about')}}">
<span class="material-symbols-outlined">person</span>
<span class="text-xs font-bold">About</span>
</a>
<a class="btn flex flex-col items-center justify-center text-text-dark hover:bg-primary/20 dark:text-text-dark w-full h-full" href="{{route('project')}}">
<span class="material-symbols-outlined">work</span>
<span class="text-xs font-medium">Projects</span>
</a>
<a class="btn flex flex-col items-center justify-center text-text-dark hover:bg-primary/20 dark:text-text-dark w-full h-full" href="{{route('service')}}">
<span class="material-symbols-outlined">design_services</span>
<span class="text-xs font-medium">Services</span>
</a>
<a class="btn flex flex-col items-center justify-center text-text-dark hover:bg-primary/20 dark:text-text-dark w-full h-full" href="{{route('contact')}}">
<span class="material-symbols-outlined">mail</span>
<span class="text-xs font-medium">Contact</span>
</a>
</nav>
<script>
let btns = document.querySelectorAll('.btn');

btns.forEach(btn => {
    btn.addEventListener('click', function() {
        btn.classList.add('bg-primary/20');
    });
});
</script>
