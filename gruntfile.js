module.exports = function(grunt) {
  grunt.initConfig({
    uglify: {
      build: {
        src: ['node_modules/handlebars/dist/handlebars.min.js', 'components/js/*'],
        dest: 'js/script.js'
      } // build
    }, // uglify
    compass: {
      dev: {
        option: {
          config: 'config.rb'
        } // options
      } // dev
    }, // compass
    watch: {
      scripts: {
        files: ['node_modules/handlebars/dist/handlebars.min.js', 'components/js/*'],
        tasks: ['uglify']
      }, // scripts
      sass: {
        files: ['components/sass/*.scss'],
        tasks: ['compass:dev']
      } // sass
    } // watch
  }) // grunt.initConfig
  grunt.registerTask('default', 'watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
};
