{"filter":false,"title":"bootstrap.php","tooltip":"/ios/__doctrine/bootstrap.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":0},"end":{"row":20,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":70,"mode":"ace/mode/php"}},"hash":"16177d2753e4b387976bbc535ea84580d81ee96e","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":19,"column":6},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":103},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":4},"end":{"row":28,"column":5},"action":"insert","lines":["function __construct() {","        require_once '../clases/vendor/autoload.php';","        $this->config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/src'), $this->isDevMode);","        $this->entityManager = EntityManager::create($this->conn, $this->config);","    }","","    function getEntityManager() {","        return $this->entityManager;","    }"],"id":104}],[{"start":{"row":20,"column":0},"end":{"row":28,"column":5},"action":"remove","lines":["    function __construct() {","        require_once '../clases/vendor/autoload.php';","        $this->config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/src'), $this->isDevMode);","        $this->entityManager = EntityManager::create($this->conn, $this->config);","    }","","    function getEntityManager() {","        return $this->entityManager;","    }"],"id":105}]]},"timestamp":1485275819471}