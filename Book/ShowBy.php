<?php
    class ShowBy{
        private $option;

        public function __construct($option)
        {
            $this ->option = $option;
            if ($option=="6"){
                echo "\n\n Hello from " . self::class . " YEAR \n";
            }
            if ($option=="7"){
                echo "\n\n Hello from " . self::class . " AUTHOR \n";
            }
        }


}
