<?php
/*write a php program that stimulates a traffic lights. That should take color code as input (1 fo for red, 2 for yellow and 3 for red) and use switch statement to display a message indicating the meaning of traffic light color("stop","slowdown","Go")*/
$input = 1;
readline("Enter the traffic light color(1 for red, 2 for yellow, 3 for green):\n");
switch ($input) {
    case 1:
        echo "Red light - Stop";
        break;
    case 2:
        echo "Yellow light -Slowdown";
        break;
    case 3:
        echo "Green light- Go";
        break;
    default:
        echo "Invalid input.";
}
