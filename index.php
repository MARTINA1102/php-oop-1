<?
class Movie {
   public $title;
   public $sconto = 0;
   public $year;

	public function __construct($title, $year)
	{
		$this->title = $title;
		$this->setYear($year);
	}

   public function setSconto ($year)
	{
      if($year > 30) {
        $this->sconto = 20;
      }
   }

	public function setYear($year) {
		if (is_integer($year) && $year >= 0) {
			$this->year = $year;
		}
		return $year;
	}

	public function getYear() {
		return $this->year;
	}

   public function getSconto() {
      return $this->sconto;
   }
}

$lorem = new Movie('Lorem', 50);
$ipsum = new Movie('Ipsum', 15);



var_dump($lorem);
var_dump($ipsum);

?>