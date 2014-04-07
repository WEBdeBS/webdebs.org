
module.exports = function(grunt) {

    grunt.initConfig({
        smushit: {
            dev: {
                src: [
                    "images/*.png", 
                    "images/*.jpg"
                ]
            }
        },
        watch: {    
            php: {
                files: [
                    "*.php"
                ],
                options: {
                    livereload: true,
                },
            },
            css: {
                files: [
                    "*.css"
                ],
                options: {
                    livereload: true
                }
            }
        },
        clean: {
            build: "build",
            css: [
                "build/style_yoko_mod.css",
                "build/style_webdebs_fonts.css",
                "build/style_webdebs_custom.css",
                "build/style_webdebs_responsive.css"
            ]
        },
        copy: {
            build: {
                src: [
                    "**", 
                    "!node_modules/**",
                    "!.ftppass", 
                    "!.gitignore", 
                    "!Gruntfile.js", 
                    "!package.json"
                ],
                dest: "build/"
            }
        },
        cssmin: {
            combine: {
                files: {
                    "build/style.css": [
                        "build/style_yoko_mod.css",
                        "build/style_webdebs_fonts.css",
                        "build/style_webdebs_custom.css",
                        "build/style_webdebs_responsive.css"
                    ]
                }
            }
        },
        ftpush: {
            build: {
                auth: {
                  host: "webdebs.org",
                  port: 21,
                  authKey: "key1"
                },
                src: "build/",
                dest: "/webdebs.org/wp-content/themes/yoko-webdebs"
            }
        }
    });

    grunt.loadNpmTasks("grunt-smushit");   
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-clean");
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-ftpush");
     

    grunt.registerTask("default", [
        "watch"
    ]);

    grunt.registerTask("build", [
        "clean:build", 
        "copy", 
        "cssmin",
        "clean:css", 
        "ftpush", 
        "clean:build"
    ]);

};