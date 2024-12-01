<?php 
interface State {
    public function evolve($context);
    public function getDescription();
}

?>