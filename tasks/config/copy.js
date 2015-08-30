import gulp from 'gulp'

export default {
  'files': [
    {
      'src': [
        `${gulp.config('base.src')}/templates/**`
      ],
      'dest': `${gulp.config('base.dist')}`
    },
    {
      'src': [
        `${gulp.config('base.src')}/partials/**`
      ],
      'dest': `${gulp.config('base.dist')}/partials`
    },
    {
      'src': [
        `${gulp.config('base.src')}/**/images/**/*.*`
      ],
      'dest': `${gulp.config('base.dist')}/assets/images`,
      'options': {
        'baseRegExp': /.+images/
      }
    }
  ]
}