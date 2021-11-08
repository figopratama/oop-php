<?php

class RerataNilai {

	function __call(string $method_name, array $arguments)
    {		
        if ($method_name == 'doubleAverage')
        {    
            switch (count($arguments))
            {	
                // If there is only one argument
                case 1:
                    echo "\n unknown method";
                    return false;
				
				// IF two arguments
				case 2:
					return $arguments[0] * $arguments[1] / 2;
            }
        }

		if($method_name == 'average')
        {
			switch (count($arguments))
            {	
                // If there is only one argument
                case 1:
                    echo "\n unknown method";
                    return false;
				
				// IF two arguments
				case 2:
					return $arguments[0] * $arguments[1] / 2;
						
				// IF three arguments
				case 3:
					return $arguments[0] * $arguments[1] * $arguments[2] / 3;
			}
		}
	}
}



?>
