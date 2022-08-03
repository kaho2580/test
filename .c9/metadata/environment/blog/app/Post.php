{"filter":false,"title":"Post.php","tooltip":"/blog/app/Post.php","undoManager":{"mark":33,"position":33,"stack":[[{"start":{"row":15,"column":11},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":303},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":6},"action":"insert","lines":["''"],"id":304}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["c"],"id":305},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["a"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["t"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":9},"action":"remove","lines":["cate"],"id":306},{"start":{"row":16,"column":5},"end":{"row":16,"column":16},"action":"insert","lines":["category_id"]}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":[","],"id":307}],[{"start":{"row":19,"column":3},"end":{"row":22,"column":5},"action":"remove","lines":[" public function getPaginateByLimit(int $limit_count=10)","    {","        return $this->orderBy('updated_at','DESC')->paginate($limit_count);","    }"],"id":308},{"start":{"row":19,"column":3},"end":{"row":22,"column":1},"action":"insert","lines":["function getPaginateByLimit(int $limit_count = 5)","{","    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"]}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"remove","lines":[","],"id":309}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["y"],"id":310},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["d"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":["o"]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["b"]}],[{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["c"],"id":311},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["t"],"id":312},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["e"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["n"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["t"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"remove","lines":["d"],"id":313},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["i"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["_"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["y"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["r"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":["o"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["g"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["e"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":["t"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["a"]}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["c"],"id":314}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["c"],"id":315},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["a"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["t"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":9},"action":"remove","lines":["cate"],"id":316},{"start":{"row":16,"column":5},"end":{"row":16,"column":15},"action":"insert","lines":["category2s"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["s"],"id":317},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["2"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["y"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["r"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":["o"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["g"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["e"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":["t"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["a"]},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["c"]}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["c"],"id":318},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["a"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["t"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["g"],"id":319},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["r"],"id":320},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["i"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["e"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["s"],"id":321},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["e"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["i"]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["y"],"id":322},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["_"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["i"],"id":323},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["d"]}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["e"],"id":324},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["l"]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"remove","lines":["t"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["i"]},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["t"]}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["n"],"id":325},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["a"]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["m"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["e"],"id":326},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"remove","lines":["m"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["a"]},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["t"],"id":327},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["i"]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["t"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["l"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["s"],"id":328},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["t"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["n"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["e"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["t"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":["o"]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["c"]}],[{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["c"],"id":329},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":["o"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["n"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["t"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["n"],"id":330},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["s"],"id":331}],[{"start":{"row":21,"column":87},"end":{"row":21,"column":88},"action":"remove","lines":["t"],"id":332},{"start":{"row":21,"column":86},"end":{"row":21,"column":87},"action":"remove","lines":["n"]},{"start":{"row":21,"column":85},"end":{"row":21,"column":86},"action":"remove","lines":["u"]},{"start":{"row":21,"column":84},"end":{"row":21,"column":85},"action":"remove","lines":["o"]},{"start":{"row":21,"column":83},"end":{"row":21,"column":84},"action":"remove","lines":["c"]},{"start":{"row":21,"column":82},"end":{"row":21,"column":83},"action":"remove","lines":["_"]},{"start":{"row":21,"column":81},"end":{"row":21,"column":82},"action":"remove","lines":["t"]},{"start":{"row":21,"column":80},"end":{"row":21,"column":81},"action":"remove","lines":["i"]},{"start":{"row":21,"column":79},"end":{"row":21,"column":80},"action":"remove","lines":["m"]},{"start":{"row":21,"column":78},"end":{"row":21,"column":79},"action":"remove","lines":["i"]}],[{"start":{"row":21,"column":77},"end":{"row":21,"column":78},"action":"remove","lines":["l"],"id":333},{"start":{"row":21,"column":76},"end":{"row":21,"column":77},"action":"remove","lines":["$"]}],[{"start":{"row":21,"column":76},"end":{"row":21,"column":77},"action":"insert","lines":["1"],"id":334}],[{"start":{"row":21,"column":76},"end":{"row":21,"column":77},"action":"remove","lines":["1"],"id":335}],[{"start":{"row":21,"column":76},"end":{"row":21,"column":88},"action":"insert","lines":["$limit_count"],"id":336}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":88},"end":{"row":21,"column":88},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1659528694725,"hash":"d4effc5b7635d6945192d975471fa8eaef70b569"}