/*******************************
            Set-up
*******************************/

var
  gulp         = require('gulp-help')(require('gulp')),

  // read user config to know what task to load
  config       = require('./resources/semantic/tasks/config/user'),

  // watch changes
  watch        = require('./resources/semantic/tasks/watch'),

  // build all files
  build        = require('./resources/semantic/tasks/build'),
  buildJS      = require('./resources/semantic/tasks/build/javascript'),
  buildCSS     = require('./resources/semantic/tasks/build/css'),
  buildAssets  = require('./resources/semantic/tasks/build/assets'),

  // utility
  clean        = require('./resources/semantic/tasks/clean'),
  version      = require('./resources/semantic/tasks/version'),

  // docs resources/semantic/tasks
  serveDocs    = require('./resources/semantic/tasks/docs/serve'),
  buildDocs    = require('./resources/semantic/tasks/docs/build'),

  // rtl
  buildRTL     = require('./resources/semantic/tasks/rtl/build'),
  watchRTL     = require('./resources/semantic/tasks/rtl/watch')
;


/*******************************
             resources/semantic/tasks
*******************************/

gulp.task('default', false, [
  'watch'
]);

gulp.task('watch', 'Watch for site/theme changes', watch);

gulp.task('build', 'Builds all files from source', build);
gulp.task('build-javascript', 'Builds all javascript from source', buildJS);
gulp.task('build-css', 'Builds all css from source', buildCSS);
gulp.task('build-assets', 'Copies all assets from source', buildAssets);

gulp.task('clean', 'Clean dist folder', clean);
gulp.task('version', 'Displays current version of resources/semantic', version);

/*--------------
      Docs
---------------*/

/*
  Lets you serve files to a local documentation instance
  https://github.com/resources/semantic-Org/resources/semantic-UI-Docs/
*/

gulp.task('serve-docs', 'Serve file changes to SUI Docs', serveDocs);
gulp.task('build-docs', 'Build all files and add to SUI Docs', buildDocs);


/*--------------
      RTL
---------------*/

if(config.rtl) {
  gulp.task('watch-rtl', 'Watch files as RTL', watchRTL);
  gulp.task('build-rtl', 'Build all files as RTL', buildRTL);
}
