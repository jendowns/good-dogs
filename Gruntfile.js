module.exports = function (grunt) {
  'use strict';

  // Project configuration.
  grunt.initConfig({

    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    
    sass: {
      options: {
        sourcemap: 'none'
      },
      dist: {
        files: {
          /* NOTE: style.noprefix.css is a compiled file BEFORE 
          flex vendor prefixes have been added via postcss grunt below */
          'style.noprefix.css': 'sass/style.scss'
        }
      }
    },

    /* NOTE: this add important vendor prefixes to all flexbox styles */
    postcss: {
      options: {
        processors: [require('autoprefixer')],
        map: false
      },
      dist: {
        files: {
          'style.css': 'style.noprefix.css'
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.registerTask('default', ['sass', 'postcss']);

};