{"filter":false,"title":"2018_06_05_150001_create_tasks_table.php","tooltip":"/kadai-tasklist/database/migrations/2018_06_05_150001_create_tasks_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":6,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}",""],"id":2}],[{"start":{"row":6,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","            $table->string('content');","            $table->string('status',10);","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}"],"id":3}]]},"ace":{"folds":[],"scrolltop":318.5546875,"scrollleft":0,"selection":{"start":{"row":32,"column":1},"end":{"row":32,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528178441015,"hash":"3f01f5b1d068a1fc0f0ec0116a4fb18309fd585d"}