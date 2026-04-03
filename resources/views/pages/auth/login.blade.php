<!DOCTYPE html>

<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;600;700;800&amp;display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'tertiary-container': '#271703',
                        'surface-container-low': '#191c22',
                        'on-tertiary-fixed': '#281804',
                        'on-primary-fixed': '#001c39',
                        'surface-container-highest': '#32353c',
                        'inverse-surface': '#e1e2eb',
                        'surface-container-lowest': '#0b0e14',
                        'surface-dim': '#10131a',
                        'on-error-container': '#ffdad6',
                        'surface-container-high': '#272a31',
                        'inverse-on-surface': '#2e3037',
                        surface: '#10131a',
                        'on-secondary-fixed-variant': '#3c475d',
                        'on-primary-container': '#3d85d6',
                        'on-tertiary-fixed-variant': '#584329',
                        'on-surface': '#e1e2eb',
                        'on-secondary-container': '#adb8d3',
                        'surface-container': '#1d2026',
                        'on-background': '#e1e2eb',
                        'on-surface-variant': '#c4c6cc',
                        'primary-fixed': '#d4e3ff',
                        'surface-bright': '#363940',
                        'on-primary': '#00315d',
                        primary: '#a4c9ff',
                        'secondary-fixed-dim': '#bbc6e2',
                        secondary: '#bbc6e2',
                        error: '#ffb4ab',
                        'primary-container': '#001b37',
                        'on-secondary': '#263046',
                        'primary-fixed-dim': '#a4c9ff',
                        'on-secondary-fixed': '#101b30',
                        tertiary: '#e0c1a0',
                        'error-container': '#93000a',
                        'secondary-fixed': '#d7e2ff',
                        'inverse-primary': '#0060ac',
                        'on-tertiary': '#402d15',
                        'on-error': '#690005',
                        background: '#10131a',
                        'tertiary-fixed': '#feddba',
                        'secondary-container': '#3e4960',
                        'tertiary-fixed-dim': '#e0c1a0',
                        'surface-tint': '#a4c9ff',
                        'surface-variant': '#32353c',
                        outline: '#8e9196',
                        'on-tertiary-container': '#997e60',
                        'on-primary-fixed-variant': '#004883',
                        'outline-variant': '#44474c',
                    },
                    borderRadius: {
                        DEFAULT: '0.25rem',
                        lg: '0.5rem',
                        xl: '1.5rem',
                        full: '9999px',
                    },
                    fontFamily: {
                        headline: ['Manrope'],
                        body: ['Manrope'],
                        label: ['Manrope'],
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }
    </style>
</head>
<body
    class="bg-background text-on-surface font-body min-h-screen relative overflow-hidden flex items-center justify-end px-12 md:px-24 lg:px-32"
>
    <!-- <div class="absolute inset-0 z-0 overflow-hidden">
        <img
            alt="Deep blue atmospheric digital space with subtle luminous particles and swirling ethereal energy"
            class="w-full h-full object-cover opacity-40 scale-105 blur-[2px]"
            data-alt="Abstract deep blue digital atmosphere with cosmic nebulae and soft cinematic lighting reflecting off crystalline textures"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuALLmmAtFvK_nib8JI83s9iHHfQ4vs30skvJUknOXnxVgO3EJrWSixmyjb7rdKOOfWpOe-e86WPmWlkCJAUjjgRkdIcxeHnEvXT2A-eLyxZw45uyhECvD5k3VMN7ULdRCAQvsZO4BNXHYEKxYp1EglQ6Z3HXD57o7VN-hGegyzMX5fPLsTwP5bE9c22OXYgdvUZUeNxb0alCktX3b8oYl0-OYjyFpnLOdbeyxLaLnI_aQued1RDkAJfHZL2ln4YegtbmxsWjPPQUEUB"
        />
        <div class="absolute inset-0 bg-ethereal-mesh opacity-80"></div>
    </div> -->
    <main class="relative z-10 w-full max-w-md">
        <section
            class="bg-surface-container/70 backdrop-blur-3xl p-10 lg:p-12 rounded-xl shadow-[0_20px_40px_-5px_rgba(0,28,57,0.3)] border border-outline-variant/10"
        >
            <div class="mb-12">
                <h1
                    class="text-4xl font-bold text-on-surface tracking-tight mb-2"
                >
                    Bienvenido
                </h1>
                <p class="text-on-surface-variant/80 font-medium">Por favor, introduce tus datos para continuar.</p>
            </div>
            <form class="space-y-6">
                <div class="space-y-2">
                    <label
                        class="block text-[10px] font-bold tracking-[0.1em] text-on-surface-variant uppercase ml-1"
                        >Correo electrónico</label
                    >
                    <div class="relative group">
                        <input
                            class="w-full bg-surface-container-lowest border border-outline-variant/20 rounded-lg px-4 py-4 text-on-surface placeholder:text-on-surface-variant/40 focus:outline-none focus:ring-1 focus:ring-primary/40 focus:border-primary/40 transition-all duration-300"
                            placeholder="nombre@empresa.com"
                            type="email"
                        />
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center ml-1">
                        <label
                            class="block text-[10px] font-bold tracking-[0.1em] text-on-surface-variant uppercase"
                            >Contraseña</label
                        >
                        <a
                            class="text-[10px] font-bold tracking-[0.1em] text-primary uppercase hover:text-surface-bright transition-colors"
                            href="{{ route('olvido-contrasena') }}"
                            >¿Olvidaste tu acceso?</a
                        >
                    </div>
                    <div class="relative group">
                        <input
                            class="w-full bg-surface-container-lowest border border-outline-variant/20 rounded-lg px-4 py-4 text-on-surface placeholder:text-on-surface-variant/40 focus:outline-none focus:ring-1 focus:ring-primary/40 focus:border-primary/40 transition-all duration-300"
                            placeholder="••••••••"
                            type="password"
                        />
                    </div>
                </div>
                <!-- <div class="flex items-center gap-3 py-2">
                    <div class="relative flex items-center">
                        <input
                            class="w-4 h-4 rounded bg-surface-container-highest border-outline-variant/30 text-primary focus:ring-offset-surface focus:ring-primary"
                            id="remember"
                            type="checkbox"
                        />
                    </div>
                    <label
                        class="text-sm text-on-surface-variant cursor-pointer select-none"
                        for="remember"
                        >Mantenerme conectado en este dispositivo</label
                    >
                </div> -->
                <button
                    class="w-full bg-gradient-to-r from-primary to-on-primary-container text-on-primary-fixed font-bold py-4 rounded-full shadow-lg shadow-primary/10 hover:shadow-primary/20 transform active:scale-95 transition-all duration-300 flex items-center justify-center gap-2 mt-8"
                    type="submit"
                >
                    <span>Iniciar sesión</span>
                    <span
                        class="material-symbols-outlined text-xl"
                        data-icon="arrow_forward"
                        >arrow_forward</span
                    >
                </button>
            </form>
            <div
                class="mt-12 pt-8 border-t border-outline-variant/10 text-center"
            >
                <p class="text-sm text-on-surface-variant/60">
                    ¿No tienes una cuenta?
                    <a
                        class="text-primary font-bold hover:underline ml-1"
                        href="#"
                        >Solicitar acceso</a
                    >
                </p>
            </div>
        </section>
    </main>
    <!-- <footer
    </footer> -->
</body>
</html>
