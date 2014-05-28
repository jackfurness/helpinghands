'use strict';

module.exports = function(grunt) {
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        meta: {
            version: '<%= pkg.version %>'
        },
        banner: '/*! <%= pkg.name %> - v<%= meta.version %> <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.company %>\n'+
            ' */\n',
        clean: {
            dev: ['dist/**/*']
        },
        copy: {
            fonts: {
                files: [{
                    expand: true,
                    flatten: true,
                    src: ['src/fonts/**'],
                    dest: 'dist/fonts/',
                    filters: 'isFile'
                }]
            },
            svg: {
                files: [{
                    expand: true,
                    flatten: true,
                    src: ['src/img/*/*.svg'],
                    dest: 'dist/img/',
                    filter: 'isFile'
                }]
            }
        },
        sass: {
            dev: {
                options: {
                    banner: '<%= banner %>',
                    style: 'compressed',
                    noCache: true,
                    sourcemap: false
                },
                files: [{
                    expand: true,
                    cwd: 'src',
                    src: ['css/*.scss'],
                    dest: 'dist',
                    ext: '.css'
                }]
            },
            local: {
                options: {
                    banner: '<%= banner %>',
                    style: 'expanded',
                    noCache: true,
                    sourcemap: false
                },
                files: [{
                    expand: true,
                    cwd: 'src',
                    src: ['css/*.scss'],
                    dest: 'dist',
                    ext: '.css'
                }]
            }
        },
        uglify: {
            /*options: {
                sourceMap: 'dist/js/<%= pkg.name %>.map.js'
            },*/
            dev: {
                files: {
                    'dist/js/<%= pkg.name %>.min.js': ['src/js/<%= pkg.name %>.js']
                }
            }
        },
        imagemin: {
            dev: {
                files: [{
                    expand: true,
                    cwd: 'src/img',
                    src: ['**/*.{png,jpg,jpeg}'],
                    dest: 'dist/img'
                }]
            }
        },
    });

    grunt.registerTask('build', 'Basic build task for development environment', ['clean:dev', 'sass:dev', 'uglify:dev', 'imagemin:dev', 'copy']);
    grunt.registerTask('local', 'Basic build task for local environment', ['clean:dev', 'sass:dev', 'uglify:dev', 'imagemin:dev', 'copy:fonts', 'copy:svg']);
}