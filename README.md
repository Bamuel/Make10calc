#A php calculator for solving the MAKE 10 puzzle
-[http://make10.bamuel.com/](http://make10.bamuel.com/) an online version available
##Introduction
- This was a challenge that I had todo mentally 6,6,7,8. After spending 2 days on it. I manage to make ten at 2am.
- The point of the challenge was to make "10" using + - * / (). 
##How the code works
- index.php loads up the  < form >  and it goes through calculation.php then if it can't calculate it rearranges the numbers and redirects to calculation2.php and etc... till calculation24.php (max possible ways to rearrange a,b,c,d). If it is impossible todo the page will redirect to calculation24.php displaying a final output message.
##Todo
- Make an option todo Make 24. 