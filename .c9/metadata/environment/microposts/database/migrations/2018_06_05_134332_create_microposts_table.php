{"filter":false,"title":"2018_06_05_134332_create_microposts_table.php","tooltip":"/microposts/database/migrations/2018_06_05_134332_create_microposts_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":17,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->timestamps();"],"id":2}],[{"start":{"row":17,"column":12},"end":{"row":19,"column":33},"action":"insert","lines":["$table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();"],"id":3}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]},{"start":{"row":20,"column":12},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":70},"action":"insert","lines":["$table->foreign('user_id')->references('id')->on('users');"],"id":5}]]},"ace":{"folds":[],"scrolltop":261.15625,"scrollleft":0,"selection":{"start":{"row":21,"column":70},"end":{"row":21,"column":70},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":30,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528173867237,"hash":"c2d2f3f78607246f21b37f49cb73a6a22d49a506"}