var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    gulp.src('./src/*.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});

gulp.task('watch', ['default'], function() {
    gulp.watch('./src/*.css', ['css']);
});

gulp.task('default', ['css']);
