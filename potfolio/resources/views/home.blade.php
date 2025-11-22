<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sulaimon Abubakre - Full-Stack Developer</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#3B82F6",
            "background-light": "#F8FAFC",
            "background-dark": "#0A1A2F", // Mapped from Navy #0A1A2F for dark mode
            "text-light": "#1E293B", // Mapped from Slate #1E293B
            "text-dark": "#F8FAFC", // Mapped from Soft White #F8FAFC
          },
          fontFamily: {
            "display": ["Space Grotesk", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24
    }
  </style>
<style>
    /* body {
      min-height: max(884px, 100dvh);
    } */
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<!-- Sticky TopAppBar -->

<!-- HeroSection -->
<main class="flex-1 md:mt-20">
<div class="@container">
<div class="flex flex-col-reverse gap-8 px-4 pt-5 @[864px]:flex-row @[864px]:items-center @[864px]:py-0 container mx-auto">
<div class="flex flex-col gap-6 text-center @[864px]:flex-1 @[864px]:text-left @[864px]:gap-8">
<div class="flex flex-col gap-2">
<h1 class="text-text-light dark:text-text-dark text-4xl font-bold leading-tight tracking-tight @[480px]:text-5xl @[864px]:text-6xl">
                Hi, I’m Sulaimon — Full-Stack Developer.
              </h1>
<h2 class="text-slate-600 dark:text-slate-400 text-base font-normal leading-normal @[480px]:text-lg">
                I build modern, fast, interactive web applications.
              </h2>
</div>
<div class="flex flex-wrap gap-4 justify-center @[864px]:justify-start">
<button class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-medium leading-normal tracking-wide shadow-lg shadow-primary/30 transition-all hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/40 focus:outline-none focus:ring-4 focus:ring-primary/50">
<span class="truncate">View Projects</span>
</button>
<button class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-transparent text-primary text-base font-medium leading-normal tracking-wide border-2 border-primary transition-all hover:bg-primary/10 focus:outline-none focus:ring-4 focus:ring-primary/50">
<span class="truncate">Hire Me</span>
</button>
</div>
</div>
<div class="w-full @[864px]:w-[400px]">
<div class="w-full mx-auto aspect-square max-w-md @[864px]:max-w-none bg-center bg-no-repeat bg-contain" data-alt="Abstract tech illustration with geometric shapes and lines in navy and electric blue" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBe7pgyeLCa_2YMfY2EwNZM7D6WbybYgc9yr7BVxSdE9OXzy97d7No4OMB_4F_TyAuevQ2UqQK-_vGLp3G96aUiB1lBkDGM0ZddrPJNemj1nu-Dt_ti36Rq1Lmf2lBpZhNeiWuRpCyrgHo1K8acxTcYh0_ZHOWK0l_N9k1dCfx_hOn8B7ar0_dx7LXrclX3EGYN_0bDB4KTgyvINiEka9VK-x-MV4pr5eDhIAK5OV0PbPrJw8K6ZVKLNoEfcTetfAcYf8poA7BWL08"); border-radius: 50%; filter: saturate(1.5) contrast(1.1); box-shadow: 0 0 100px -20px #3B82F680;'></div>
</div>
</div>
</div>
</main>
<x-nav />
</div>
</body></html>