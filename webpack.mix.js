const mix = require('laravel-mix');
const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer');

mix.js('resources/js/app.js', 'public/assets/js')
    .extract(['vue', 'axios', 'lodash']) // Code splitting
    .sass('resources/scss/argon-dashboard.scss', 'public/assets/css', [
        //
    ])
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')(),
            require('cssnano')({ preset: 'default' }) // Minify CSS
        ],
    })
    .version() // Cache busting
    .sourceMaps(); // Source maps for easier debugging

// Enable bundle analyzer if needed
if (mix.inProduction()) {
    mix.webpackConfig({
        plugins: [
            new BundleAnalyzerPlugin({
                analyzerMode: 'static',
                openAnalyzer: false,
                reportFilename: 'bundle-report.html'
            })
        ]
    });
}

mix.webpackConfig({
    output: {
        chunkFilename: 'assets/js/[name].js', // Configure chunk file names
    }
});

// Enable versioning for production
if (mix.inProduction()) {
    mix.version();
}
