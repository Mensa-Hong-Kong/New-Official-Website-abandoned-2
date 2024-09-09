import { defineConfig, loadEnv  } from 'vite';
import laravel from 'laravel-vite-plugin';

export default ({ mode }) => {
    const config = {
        plugins: [
            laravel({
                input: [
                    'resources/css/app.scss',
                    'resources/js/app.js',
                    'resources/css/convenienceStore/door.css',
                    'resources/js/convenienceStore/home.js',
                    'resources/js/convenienceStore/form.js',
                    'resources/js/webbi8/transaction/web.js',
                ],
                refresh: true,
            }),
        ],
    };

    return defineConfig(config);
}
