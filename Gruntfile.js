module.exports = function(grunt) {
    // Main grunt config
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Task for merging js files
        concat: {
            libjs: {
                src: [
                    'js/lib/*.js',
                ],
                dest: 'build/libs.js',
            },
            script: {
                src: [
                    'js/*.js',
                ],
                dest: 'build/production.js',
            },
        },

        //Task for minifying js files
        uglify: {
            build: {
                src: 'build/production.js',
                dest: 'build/production.min.js'
            }
        },

        // Task for getting orfeatures mixin from http://github.com/davelab6/otfeatures/
        curl: {
            otfeatures_scss: {
                src: 'https://raw2.github.com/davelab6/otfeatures/master/_otfeatures.scss',
                dest: 'scss/_otfeatures.scss'
            }
        },

        // Task for compiling css from sass
        sass: {
            dist: {
                style: 'compact',
                files: [{
                    src: 'scss/main.scss',
                    dest: 'build/production.css'
                }]
            }
        },
    });

    // Grunt plugins list
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-curl');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Grunt commands
    grunt.registerTask('default', ['concat', 'uglify','sass']);
    grunt.registerTask('download', ['curl']);

};
