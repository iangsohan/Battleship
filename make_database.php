$db = new mysqli(Config::$db["host"], Config::$db["user"], Config::$db["pass"], Config::$db["database"]);

$db->query("CREATE TABLE USER(USERNAME VARCHAR(30), PASSWORD VARCHAR(1000), PRIMARY KEY(USERNAME) NOT NULL);");

$db->query("CREATE TABLE SCORES(USERNAME VARCHAR(30), SCORE INT PRIMARY KEY(USERNAME) NOT NULL);");