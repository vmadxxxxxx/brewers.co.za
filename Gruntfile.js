module.exports = function(grunt) {

    var reloadPort = 35729;
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            options: { nospawn: true },
            env: {
                files: [
                    "Gruntfile.js",
                    "*.php"
                ],
                options: { livereload: true },
                tasks: []
            },
            js: {
                files: [
                    'assets/js/plugins/*.js',
                    'assets/js/libs/*.js',
                    'assets/js/*.js'
                ],
                options: { livereload: true },
                tasks: ['uglify:development']
            },
            less: {
                files: [
                    'assets/css/less/*.less'
                ],
                options: { livereload: true },
                tasks: ['less:development']
            }
        },
        autoshot: {
            default: {
                options: {
                    // necessary config
                    path: '/Users/adam/Desktop/',
                    // optional config, must set either remote or local
                    remote: {
                        files: [
                            { src: 'http://local.brewers.co.za/', dest: 'screenshot.png' }
                        ]
                    },
                    viewport: [
                        '1400x1000',
                        '720x1000',
                        '320x1000'
                    ]
                }
            }
        },

        // I need the the css output to originate from the same location.
        // The difference between the production level is the
        // level of compression
        less: {
            development: {
                options: {
                    yuicompress: false,
                    compress: false
                },
                files: [
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    },
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    }
                ]
            },
            production: {
                options: {
                    yuicompress: true,
                    compress: true
                },
                files: [
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    },
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    }
                ]
            }
        },
        uglify: {

            // Compile all plugins into a single file.
            // Run this each time a file is added to the directory.
            plugins: {
                options: {
                    banner: '/*!\n' +
                        ' * Plugins - <%= grunt.template.today("yyyy-mm-dd H:MM:ss") %>\n' +
                        ' */\n',
                    compress: {},
                    preserveComments: 'all',
                    beautify: true,
                    mangle: false,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            'assets/js/plugins/*.js'
                        ],
                        dest: 'assets/js/plugins.js'
                    }
                ]
            },

            // Development-level code
            development: {
                options: {
                    banner: '/*!\n' +
                        ' * <%= pkg.name %> - <%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd H:MM:ss") %>\n' +
                        ' * Development\n' +
                        ' */\n',
                    compress: {},
                    preserveComments: true,
                    mangle: false,
                    beautify: true,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            'assets/js/libs/jquery.js',
                            'assets/js/plugins.js',
                            'assets/js/script.js',
                        ],
                        dest: 'assets/js/build.js'
                    }
                ]
            },

            // Production-level code
            production: {
                options: {
                    banner: '/*!\n' +
                        ' * <%= pkg.name %> - <%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd H:MM:ss") %>\n' +
                        ' * Release\n' +
                        ' */\n',
                    compress: {},
                    preserveComments: false,
                    mangle: false,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            'assets/js/libs/jquery.js',
                            'assets/js/plugins.js',
                            'assets/js/script.js',
                        ],
                        dest: 'assets/js/build.min.js'
                    }
                ]
            }
        },
        // TODO
        // All of this
        modernizr: {
            // [REQUIRED] Path to the build you're using for development.
            "devFile" : "assets/js/libs/modernizr.js",
            // [REQUIRED] Path to save out the built file.
            "outputFile" : "assets/js/libs/modernizr-custom.js",
            // Based on default settings on http://modernizr.com/download/
            "extra" : {
                "shiv" : true,
                "printshiv" : false,
                "load" : true,
                "mq" : false,
                "cssclasses" : true
            },
            // Based on default settings on http://modernizr.com/download/
            "extensibility" : {
                "addtest" : false,
                "prefixed" : false,
                "teststyles" : false,
                "testprops" : false,
                "testallprops" : false,
                "hasevents" : false,
                "prefixes" : false,
                "domprefixes" : false
            },
            // By default, source is uglified before saving
            "uglify" : true,
            // Define any tests you want to impliticly include.
            "tests" : [
                "touch"
                /*
                "flexbox",
                "boxshadow",
                "opacity",
                "localstorage",
                "video",
                "audio",
                "canvas",
                "rgba",
                "flexbox",
                "draganddrop",
                "touch",
                "cssanimations",
                "csstransitions",
                "csstransforms3d",
                "csstransforms",
                "cssgradients",
                "backgroundsize"
                */
            ],
            // By default, this task will crawl your project for references to Modernizr tests.
            // Set to false to disable.
            "parseFiles" : true,
            // When parseFiles = true, this task will crawl all *.js, *.css, *.scss files, except files that are in node_modules/.
            // You can override this by defining a "files" array below.
            "files" : [
                'assets/js/*.js',
                'assets/css/less/*.less'
            ],
            "excludeFiles": [],
            // When parseFiles = true, matchCommunityTests = true will attempt to
            // match user-contributed tests.
            "matchCommunityTests" : false,
            // Have custom Modernizr tests? Add paths to their location here.
            "customTests" : []
        },
        copy: {
            // Copies all the components installed from bower into the libs directory.
            //
            installFromBower: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: [
                            'bower_components/*/*.js',
                            '!bower_components/*/grunt.js'
                        ],
                        dest: 'assets/js/libs/',
                        filter: 'isFile'
                    }
                ]
            }
        },
        clean: {
            default: [
                "bower_components/*",
                "!bower_components/.gitignore",
                "assets/js/libs/*",
                "!assets/js/libs/.gitignore",
                "assets/js/plugins.js",
                "assets/js/min"
            ],
            scripts: [
                "assets/js/libs/*",
                "!assets/js/libs/.gitignore",
                "assets/js/plugins.js",
                "assets/js/min"
            ]
        }
    });


    /**
     * default tasks when Grunt is run
     * without any arguments
     */
    // grunt.registerTask('default', [
    //     'copy:installFromBower',
    //     'uglify:plugins'
    // ]);

    /**
     * Revert and tests carried out before
     * pushing to master
     */
    grunt.registerTask('reset', [
        'clean'
    ]);

    /**
     * Generate a buiild of the app
     * still in development
     */
    grunt.registerTask('build', [
        'less:production',
        'uglify:production'
    ]);

    /**
     * Generate a buiild of the app
     * still in development
     */
    grunt.registerTask('build-development', [
        'less:development',
        'uglify:development'
    ]);

    /**
     * Live developing
     *
     */
    grunt.registerTask('default', [
        'watch'
    ]);
};
