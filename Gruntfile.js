module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    bowercopy: {
      options: {
        clean: true
      },

      foundation: {
        options: {
          destPrefix: 'public'
        },

        files: {
          'js/vendor': 'foundation/js/vendor',
          'js/foundation.min.js': 'foundation/js/foundation.min.js',

          'css/vendor/foundation.css': 'foundation/css/foundation.css',
          'css/vendor/foundation.css.map': 'foundation/css/foundation.css.map',
          'css/vendor/normalize.css': 'foundation/css/normalize.css',
          'css/vendor/normalize.css.map': 'foundation/css/normalize.css.map'
        }
      }
    },

    uglify: {
      options: {
        sourceMap: true
      },
      dist: {
        files: {
          'public/js/sangbok.js':
            ['public/js/src/SangbokApp.js',
              'public/js/src/SangbokHomeCtrl.js',
              'public/js/src/SangbokSongCtrl.js',
              'public/js/src/SangbokOfflineCtrl.js']
        }
      }
    },

    cssmin: {
      combine: {
        files: {
          'public/css/vendor/foundation.min.css': ['public/css/vendor/foundation.css'],
          'public/css/sangbok.min.css': ['public/css/sangbok.css']
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-bowercopy');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default', ['bowercopy', 'uglify', 'cssmin']);
  grunt.registerTask('compress', ['uglify', 'cssmin']);
};