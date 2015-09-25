var gulp = require( 'gulp' );
var sass = require( 'gulp-sass' );
var autoprefixer = require( 'gulp-autoprefixer' );
var uglify = require( 'gulp-uglify' );
var replace = require( 'gulp-replace' );
var browserSync = require( 'browser-sync' );
var reload = browserSync.reload;

gulp.task( 'styles', function () {
    gulp.src( './src/resources/assets/scss/*.scss' )
        .pipe( sass( {outputStyle: 'compressed'} ).on( 'error', sass.logError ) )
        .pipe( autoprefixer() )
        .pipe( gulp.dest( './src/resources/assets/dist' ) )
        .pipe( gulp.dest( '../../../public/vendor/firo' ) )
        .pipe( reload( {stream: true} ) );
} );

gulp.task( 'scripts', function () {
    gulp.src( './src/resources/assets/js/*.js' )
        //.pipe( uglify() )
        .pipe( gulp.dest( './src/resources/assets/dist' ) )
        .pipe( gulp.dest( '../../../public/vendor/firo' ) );
} );

gulp.task( 'serve', [ 'styles', 'scripts' ], function () {
    browserSync();

    gulp.watch( './src/resources/assets/scss/*.scss', [ 'styles' ] );
    gulp.watch( './src/resources/assets/js/*.js', [ 'scripts' ] );
    gulp.watch( './src/**/*.php' ).on( 'change', reload );
} );

gulp.task( 'default', [ 'serve' ] );