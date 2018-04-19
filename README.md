Task 1
In this task you have to create method which displays statistics of age and sex of air passengers
based on data from a MySQL database.
You have 120 min to resolve the tasks.
Example of the input data is shown in Listing below:

age>50;date<1.III.2011
Listing 1.

Input data should filter results, based on the age of passengers and the flight date. For
example in Listing 1, report should display people with the age higher than 50 years old and flights
after March, 1 2011.
Before execute method, order of character in input data was reversed. Syntax of method call
should look like:

Stats::show_statistics(‘1102.III.1<etad;05>ega’);
Stats::show_statistics(‘1102.IIX.92>etad;53<ega’);
// etc.
Listing 2
You should assume, that:
• you will have only two types of comparison: '<' and '>';
• sequence of parameters (after reverse to correct order of characters) will looks like in
Listening 1;
• and format of input data will be always correct.
If there will be no passengers that meet criteria in results, then you should print value '-1'
(Picture 1).
After executing, script should run function with sample parameter, for example:
Stats::show_statistics(‘1102.III.1>etad;53<ega’);

Task 2
Jfdksldlffffdsdfjklksjkfffjkduioxxuiojkbbbbbjklkjkladfjkla
Write code that will find substring that contains the maximum number of
consecutive characters in this string

Task 3
Create div and place it in the top left corner of the screen. Set div height =
5px and width = 50px; Set div border just to make it visible
Every 5 seconds div height must be increased by 2px and div must be shifted
to the right by 15 pixels.
By clicking 'Enter' div should return to initial state (at the top left corner) and
stop moving and resizing

Task 4
We have array with js files' urls:
var container = ['/actions/1.js', '/actions/2.js', '/actions/3.js', …,'/actions/n.js']
Write script that will load those files synchronously (one by one) and execute
it.
After loading the last script, alert('loaded') should be shown.
