var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('default', function() {
    gulp.src('./*.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});