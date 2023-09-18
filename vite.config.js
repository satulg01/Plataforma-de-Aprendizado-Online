import { defineConfig } from 'vite';
<<<<<<< HEAD
import laravel, { refreshPaths } from 'laravel-vite-plugin';
=======
import laravel from 'laravel-vite-plugin';
>>>>>>> 238e8ef7b6f7597915af1048a7528d60d08bdf5a

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
>>>>>>> 238e8ef7b6f7597915af1048a7528d60d08bdf5a
        }),
    ],
});
