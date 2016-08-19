module.exports = function(grunt){

//　プラグインの読み込み
// grunt.loadNpmTasks("grunt-contrib-sass");
grunt.loadNpmTasks('grunt-contrib');


// 設定
grunt.initConfig({
    // less:{
    //     compress: {
    //         // オプション指定するとこ
    //         options: {
    //             compress: true,
    //             // sourceMap: true
    //         },
    //         // コンパイルするファイルの指定する
    //         // 左辺には出力先のCSSファイル、右辺には元となるLessファイルへのパス
    //         files: {
    //             "style.min.css": "style.less"
    //         }
    //     },

    //     compile: {
    //         options: {
    //             sourceMap: true
    //         },
    //         files: {
    //             "style.css": "style.less"
    //         }
    //     }
    // },

    sass: {
        compact: {

            options: {
                // style:'compact',
                style:'compressed',
                // sourcemap: true
            },
            files: {
                'css/style.css': 'scss/style.scss',
            }

        },
        // expanded: {
        //     options: {
        //         style:'compressed',
        //         sourcemap: true 
        //     },
        //     files: {
        //         'css/style.min.css': 'scss/style.scss'
        //     }
        // }
    },

    // compass: {
    //     dist: {
    //         options: {                
    //           config: 'config.rb'
    //         }
    //     }
    // },

    // connect: {
    //     reload: {
    //         options: {
    //             port:8888,
    //             hostname: 'localhost'
    //             // base: '<%= dir.src %>'
    //             // open:true
    //         }
    //     }
    // },

    watch: {
        // less:{
        //     files: ['style.scss'],
        //     tasks: [ 'sass' ]
        // },
        sass: {
            files: '**/*.scss',
            tasks: ['sass']
        },
        // html:{
        //     files: ['**/*.html'],
        //     // tasks: [ 'connect' ]
        // },
        options: {
            livereload: true, // 変更があればリロードするよ
            nospawn: false
        }
    }
});

//　タスクに名前をつける
//　”default” はgruntコマンドを入力した際に行うデフォルトのタスク
// grunt.registerTask("default", ["タスク名"]);

grunt.registerTask('default', ['watch']);

};