{"filter":false,"title":"world.php","tooltip":"/world.php","undoManager":{"mark":62,"position":62,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":20,"column":2},"action":"insert","lines":["<?php","mysql_connect(\"127.4.102.1\",\"rhino_coopes\");","mysql_select_db(\"world\");","","","header(\"content-type:application/xml\");","$LOOKUP = $_REQUEST['lookup'];","","","    ","# execute a SQL query on the database","$results = mysql_query(\"SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';\");","#print $results;","# loop through each country","while ($row = mysql_fetch_array($results)) ","    {","        ","    ?><li> <?php echo  $row[\"name\"]; ?>, ruled by <?php echo  $row[\"head_of_state\"]; ?> </li><?php","    ","    }","?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"remove","lines":["2"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"remove","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"remove","lines":["2"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""]},{"start":{"row":1,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":[""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["#"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":13},"end":{"row":1,"column":14},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":["b"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"insert","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"insert","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":26},"end":{"row":1,"column":27},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":27},"end":{"row":1,"column":28},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":28},"end":{"row":1,"column":29},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":29},"end":{"row":1,"column":30},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":30},"end":{"row":1,"column":31},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":31},"end":{"row":1,"column":32},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":32},"end":{"row":1,"column":33},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":33},"end":{"row":1,"column":34},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":34},"end":{"row":1,"column":35},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":35},"end":{"row":1,"column":36},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":36},"end":{"row":1,"column":37},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":37},"end":{"row":1,"column":38},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"insert","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"remove","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":39},"end":{"row":1,"column":40},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":40},"end":{"row":1,"column":41},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":41},"end":{"row":1,"column":42},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":42},"end":{"row":1,"column":43},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":43},"end":{"row":1,"column":44},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":44},"end":{"row":1,"column":45},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":30},"end":{"row":2,"column":31},"action":"remove","lines":["_"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":30},"end":{"row":2,"column":31},"action":"insert","lines":["_"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":31},"end":{"row":2,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1416635334473,"hash":"4ba9ee183abd59159d32fc81ebb85d0db4b59d89"}