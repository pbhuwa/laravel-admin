import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/script.js",
                "resources/css/app.css",
                "resources/css/style.css",
            ],
            refresh: true,
        }),
    ],
});
