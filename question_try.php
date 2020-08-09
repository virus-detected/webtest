<?php
$index=1;    
				$a = $_POST["a"]; 
				$b = $_POST["b"]; 
				 $a_answer="Rasmus Lerdorf";
				if($a_answer==$a)
				{
					$a_marks= 2;
					echo " <br>";
				}
					else
					{
						$a_marks= 0;
						echo " <br>";
					}
					
					
				$b_answer="All of the mentioned";
				if($b_answer==$b)
				{
					$b_marks= 2;
					echo " <br>";
				}
					else
					{
						$b_marks= 0;
						echo " <br>";
					}	
		
		
					$total= $a_marks+$b_marks;
					echo "totalmarks: $total";
					echo "<br>";
						

				$run=mysqli_query($connect, $sql); 
				if( $run==true)
				{
					echo "New record created successfully";	
					echo " <br>";
				}					
						else
						{
							die(mysqli_error($connect));
							echo "not recorded";
						}	
			
?>
<!doctype html>
<html>
	<head>
		<title>quiz</title>		
	</head>	
	<body>
		<form action="" method="POST">

			1. Who is the father of PHP?<br><br>
			<input type="radio" name="a" value="Rasmus Lerdorf">A. Rasmus Lerdorf<br>
			<input type="radio" name="a" value="Willam Makepiece">B. Willam Makepiece<br>
			<input type="radio" name="a" value="Drek Kolkevi">C. Drek Kolkevi<br>
			
			<input type="radio" name="a" value="List Barely">D. List Barely<br><br><br><br>
			
			
			2. Which of the looping statements is/are supported by PHP?<br>
			i) for loop<br>
			ii) while loop<br>
			iii) do-while loop<br>
			iv) foreach loop<br><br>
			<input type="radio" name="b" value="(i) and (ii)">A. (i) and (ii)<br>
			<input type="radio" name="b" value="(i), (ii) and (iii)">B. (i), (ii) and (iii)<br>
			<input type="radio" name="b" value="All of the mentioned">C. All of the mentioned<br>
			
			<input type="radio" name="b" value="None of the mentioned">D. None of the mentioned
			<br><br><br><br>
			
			3. What will be the output of the following PHP code ?<br><br>
			< ?php <br>
			$hello = "Hello World";<br>
			$bye = "Bye";<br>
			echo $hello;"$bye";<br>
			?><br><br>
			<input type="radio" name="c" value="Hyper Text Markup Language">A. Hello World<br>
			<input type="radio" name="c" value="Hyperlinks and Text Markup Language">B. Bye<br>
			<input type="radio" name="c" value="Home Tool Markup Language">C. Hello worldBye<br>
			
			<input type="radio" name="c" value="Hyperlinks and Text Markup Language">D. Error<br><br><br><br>
			
			
			
			
			4.Is it possible to submit a form with out a submit button?<br><br>
			<input type="radio" name="d" value="Hyper Text Markup Language">(A) Yes<br>
			<input type="radio" name="d" value="Hyperlinks and Text Markup Language">(B) No<br>
			<br><br><br><br>
			
			
			
			5.what will be the ouput of below code ?<br><br>
            define("x","5"); <br>
            $x=x+10; <br>
            echo x; <br>
			?><br><br>
			<input type="radio" name="e" value="Hyper Text Markup Language">(A) Error<br>
			<input type="radio" name="e" value="Hyperlinks and Text Markup Language">(B) 5<br>
			<input type="radio" name="e" value="Home Tool Markup Language">(C) 10<br>
			
			<input type="radio" name="e" value="Hyperlinks and Text Markup Language">(D) 15<br><br><br><br>
			
			<span>
						for($i=1;$i<=4;$i++)
						{
						$i1=$i+4;
						$i2=$i+8;
						echo $i." ".$i1." ".$i2;
						echo "<br />";
						<br><br>
						</span>
			<input type="radio" name="a" value="Rasmus Lerdorf">A. Rasmus Lerdorf<br>
			<input type="radio" name="a" value="Willam Makepiece">B. Willam Makepiece<br>
			<input type="radio" name="a" value="Drek Kolkevi">C. Drek Kolkevi<br>
			
			<input type="radio" name="a" value="List Barely">D. List Barely<br><br><br><br>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>	

			