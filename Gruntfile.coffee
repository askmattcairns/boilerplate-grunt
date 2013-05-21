module.exports = (grunt) ->
     grunt.initConfig(
        pkg: grunt.file.readJSON('package.json')
        compass:
            dist:
                options:
                    sassDir: "src/css/scss"
                    cssDir: "dev/"
                    imagesDir: "dev/_/img"
        watch:
            compass:
                files: ["src/css/scss/*.scss", "src/css/scss/**/*.scss"]
                tasks: ["compass"]
    )

    # Load the plugins
    grunt.loadNpmTasks 'grunt-contrib-compass'
    grunt.loadNpmTasks 'grunt-contrib-watch'

    # Default tasks
    grunt.registerTask 'default', ["compass"]