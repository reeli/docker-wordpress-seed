import gulp from 'gulp'
import gutil from 'gulp-util'
import path from 'path'
import requireDir from 'require-dir'
import gulpTaskConfig from './tasks/libs/gulp-task-config'

gulpTaskConfig(gulp)

requireDir('./tasks')

gulp.config('base.src', 'src')
gulp.config('base.dist', '_html/wp-content/themes/customtheme')

gulp.config('tasks', requireDir('./tasks/config'))

gulp.config('tasks.build', {
  taskQueue: [
    'clean',
    'copy',
    'iconfont',
    'stylus',
    'browserify'
  ]
})

gulp.task('dev', () => {
  gulp.config(gulp.DEV_MODE, true)
  gulp.start(['build'])
})

gulp.task('default', ['build'])

