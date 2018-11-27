module.exports = function(grunt) {
    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        serve: {
            options: {
                port: 8888
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify'],
                options: {
                },
            },
            css: {
                files: ['**/*.sass','**/*.scss'],
                tasks: ['sass'],
                options: {
                },
            },
        },

        uglify: {
            build: {
                src: 'js/scripts.js',
                dest: 'js/min/scripts-min.js'
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'style.css': 'sass/style.sass'
                }
            }
        },
        postcss: {
            options: {
              map: true, // inline sourcemaps
        
              // or
              map: {
                  inline: false, // save all sourcemaps as separate files...
                  annotation: 'dist/css/maps/' // ...to the specified directory
              },
        
              processors: [
                require('pixrem')(), // add fallbacks for rem units
                require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                require('cssnano')() // minify the result
              ]
            },
            dist: {
              src: 'css/*.css'
            }
          }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-serve');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['watch']);

};
