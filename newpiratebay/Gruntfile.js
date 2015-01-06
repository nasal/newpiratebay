module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        uglify: {
            build: {
                src: 'js/newpiratebay.js',
                dest: '../../js/newpiratebay.min.js'
            }
        },

        cssmin: {
            target: {
                files: {
                    '../../css/newpiratebay.min.css': ['css/newpiratebay.css']
                }
            }
        },

        copy: {
            main: {
                src: 'npb_logo.png',
                dest: '../../img/npb_logo.png',
            },
        },

        clean: ['js', 'css', 'npb_logo.png'],

    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');

    grunt.registerTask('default', ['uglify', 'cssmin', 'copy', 'clean']);

};