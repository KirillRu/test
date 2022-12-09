<?php /** Created by Кирилл 09.12.2022 22:26*/

class TestTask {

    public function cycle($start, $end) {
        for ($i=$start;$i<=$end;$i++) {
            $isThisPrinted = false;
            if ($i%3 === 0) {
                $isThisPrinted = true;
                $this->_printThree();
            }
            if ($i%5 === 0) {
                $isThisPrinted = true;
                $this->_printFive();
            }
            if (!$isThisPrinted) {
                $this->_printOther($i);
            }
            $this->_printLn();
        }
    }

    private function _printThree() {
        echo "Fizz";
    }

    private function _printFive() {
        echo "Buzz";
    }

    private function _printOther($i) {
        echo $i;
    }

    private function _printLn() {
        echo "\n";
    }

}

(new TestTask())->cycle(1, 100);
