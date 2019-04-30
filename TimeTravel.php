<?php namespace BackToTheFuture;
Class TimeTravel
{
    private $start;
    private $end;
    private $interval;

    public function __construct($start, $end) {
        $this-> $start = new DateTime($start);
        $this-> $end = new DateTime($end);
    }
    

    public function getTravelInfo($start) 
    {
        if ($this->start < $this->end) 
        {
            return $this->end->diff($this->start)->format(
                ", il y a %y années, %m mois, %d jours, %h heures, %i minutes et %s secondes.");
        }
    }

    public function findDate(DateInterval $interval)
    {
        $this->interval = new DateInterval($interval);
        return ($this->start->sub($this->interval)->format('d/m/Y'));
    }

    public function backToFutureStepByStep(DatePeriod $step)
    {
        $step = new DateInterval($step);
        $steps = new DatePeriod($this->start, $step, $this->end);
        foreach ($steps as $date){
            echo $date->format('M d Y A g:i').'<br>';
        }
    }
}
