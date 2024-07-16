import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { glob } from "glob";
import { ViteImageOptimizer } from "vite-plugin-image-optimizer";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...glob.sync("resources/js/**/*.js"),
                ...glob.sync("resources/css/**/*.css"),
                ...glob.sync("resources/images/**/*.*"),
                ...glob.sync("resources/audios/**/*.*"),
                ...glob.sync("resources/videos/**/*.*"),
            ],
            refresh: true,
        }),
        ViteImageOptimizer({}),
    ],
});
