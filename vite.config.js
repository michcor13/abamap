import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server: {
    //     origin: '127.0.0.1:8000'
    // },
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    // css: {
    //     preprocessorOptions: {
    //       less: {
    //         rewriteUrls: 'local',
    //         rootpath: "http://localhost:8000/src",
    //       },
    //     },
    //   },
});
