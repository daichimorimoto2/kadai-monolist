{"filter":false,"title":"User.php","tooltip":"/microposts/app/User.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":114,"column":33},"end":{"row":114,"column":34},"action":"remove","lines":["s"],"id":2}],[{"start":{"row":83,"column":0},"end":{"row":88,"column":5},"action":"remove","lines":["public function feed_microposts()","    {","        $follow_user_ids = $this->followings()-> pluck('users.id')->toArray();","        $follow_user_ids[] = $this->id;","        return Micropost::whereIn('user_id', $follow_user_ids);","    }"],"id":3},{"start":{"row":83,"column":0},"end":{"row":88,"column":5},"action":"insert","lines":["public function feed_microposts()","    {","        $follow_user_ids = $this->followings()-> pluck('users.id')->toArray();","        $follow_user_ids[] = $this->id;","        return Micropost::whereIn('user_id', $follow_user_ids);","    }"]}],[{"start":{"row":93,"column":39},"end":{"row":93,"column":40},"action":"remove","lines":["r"],"id":4},{"start":{"row":93,"column":38},"end":{"row":93,"column":39},"action":"remove","lines":["e"]},{"start":{"row":93,"column":37},"end":{"row":93,"column":38},"action":"remove","lines":["s"]},{"start":{"row":93,"column":36},"end":{"row":93,"column":37},"action":"remove","lines":["U"]}],[{"start":{"row":93,"column":36},"end":{"row":93,"column":37},"action":"insert","lines":["M"],"id":13},{"start":{"row":93,"column":37},"end":{"row":93,"column":38},"action":"insert","lines":["i"]},{"start":{"row":93,"column":38},"end":{"row":93,"column":39},"action":"insert","lines":["c"]},{"start":{"row":93,"column":39},"end":{"row":93,"column":40},"action":"insert","lines":["r"]},{"start":{"row":93,"column":40},"end":{"row":93,"column":41},"action":"insert","lines":["o"]},{"start":{"row":93,"column":41},"end":{"row":93,"column":42},"action":"insert","lines":["p"]},{"start":{"row":93,"column":42},"end":{"row":93,"column":43},"action":"insert","lines":["o"]}],[{"start":{"row":93,"column":43},"end":{"row":93,"column":44},"action":"insert","lines":["s"],"id":14},{"start":{"row":93,"column":44},"end":{"row":93,"column":45},"action":"insert","lines":["t"]},{"start":{"row":93,"column":45},"end":{"row":93,"column":46},"action":"insert","lines":["s"]}],[{"start":{"row":93,"column":45},"end":{"row":93,"column":46},"action":"remove","lines":["s"],"id":15}]]},"ace":{"folds":[],"scrolltop":1204.71875,"scrollleft":0,"selection":{"start":{"row":93,"column":38},"end":{"row":93,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":78,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1529037919074,"hash":"a7b71c46b9e4c162451f8441e51395bdd81b5c54"}