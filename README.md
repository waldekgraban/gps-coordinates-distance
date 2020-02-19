# GPS Coordinates Distance
Get the distance between two GPS coordinates in kilometers or miles.

A very simple example of the available distance between two GPS points in decimal format.
We create two objects of the Point class and calculate the distance between them.  
  
Just enter the coordinates:

    $startingPlace = new Point(54.377464, 18.608775);
    $destination   = new Point(54.357664, 18.586158);

If you want the result in kilometers, just set true. Otherwise you will receive miles.

    $calculator = new Calculator($startingPlace, $destination, $kilometers = true);
    echo $calculator->getDistance();

That's all - we get the distance in a variable **$calculator** .

