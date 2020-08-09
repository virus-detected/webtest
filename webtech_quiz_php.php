<?php $servername = "localhost";
$username = "root";
$password = "";
$myDB="wt_test_database";
session_start();
$connect=mysqli_connect($servername,$username,$password,$myDB);
			if(!$connect)
			{
				echo "not connected";
				
			}
if(isset($_SESSION['sid']))
{
$sid=$_SESSION['sid'];

		
	$q="select * from result_table where sid=$sid";
	$r=mysqli_query($connect, $q);
	if(mysqli_num_rows($r)>0)
	{
		echo "you have already given exam";
	}
	else
	{
			if (isset($_POST['submit'])) 
	           
	        {	   
				$a = $_POST["a"]; 
				$b = $_POST["b"]; 
				$c = $_POST["c"];
				$d = $_POST["d"];
				$e = $_POST["e"];
				$f = $_POST["f"];
				$g = $_POST["g"];
				$h = $_POST["h"];
				$i = $_POST["i"];
				$j = $_POST["j"];
				$k = $_POST["k"];
				$l = $_POST["l"];
				$m = $_POST["m"];
				$n = $_POST["n"];
				$o = $_POST["o"];
				$p = $_POST["p"];
				$q = $_POST["q"];
				$r = $_POST["r"];
				$s = $_POST["s"];
				$t = $_POST["t"];
				$u = $_POST["u"];
				$v = $_POST["v"];
				$w = $_POST["w"];
				$x = $_POST["x"];
				$y = $_POST["y"];
				
				
				
				
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
				$c_answer="Hello World";
				if($c_answer==$c)
				{
					$c_marks= 2;
					echo " <br>";
				}
					else
					{
						$c_marks= 0;
						echo " <br>";
					}	
					
					
				$d_answer="Yes";
				if($d_answer==$d)
				{
					$d_marks= 2;
					echo " <br>";
				}
					else
					{
						$d_marks= 0;
						echo " <br>";
					}		
					
				$e_answer="right";
				if($e_answer==$e)
				{
					$e_marks= 2;
					echo " <br>";
				}
					else
					{
						$e_marks= 0;
						echo " <br>";
					}		
				$f_answer="right";
				if($f_answer==$f)
				{
					$f_marks= 2;
					echo " <br>";
				}
					else
					{
						$f_marks= 0;
						echo " <br>";
					}		
					
				$g_answer="right";
				if($g_answer==$g)
				{
					$g_marks= 2;
					echo " <br>";
				}
					else
					{
						$g_marks= 0;
						echo " <br>";
					}		
					
					
					
				$h_answer="right";
				if($h_answer==$h)
				{
					$h_marks= 2;
					echo " <br>";
				}
					else
					{
						$h_marks= 0;
						echo " <br>";
					}		
					
					
					
				$i_answer="right";
				if($i_answer==$i)
				{
					$i_marks= 2;
					echo " <br>";
				}
					else
					{
						$i_marks= 0;
						echo " <br>";
					}		
					
					
					
				$j_answer="right";
				if($j_answer==$j)
				{
					$j_marks= 2;
					echo " <br>";
				}
					else
					{
						$j_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					$k_answer="right";
				if($k_answer==$k)
				{
					$k_marks= 2;
					echo " <br>";
				}
					else
					{
						$k_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					$k_answer="right";
				if($k_answer==$k)
				{
					$k_marks= 2;
					echo " <br>";
				}
					else
					{
						$k_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					$l_answer="right";
				if($l_answer==$l)
				{
					$l_marks= 2;
					echo " <br>";
				}
					else
					{
						$l_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					$m_answer="right";
				if($m_answer==$m)
				{
					$m_marks= 2;
					echo " <br>";
				}
					else
					{
						$m_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					
					$n_answer="right";
				if($n_answer==$n)
				{
					$n_marks= 2;
					echo " <br>";
				}
					else
					{
						$n_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					
					
					$o_answer="right";
				if($o_answer==$o)
				{
					$o_marks= 2;
					echo " <br>";
				}
					else
					{
						$o_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					
					$p_answer="right";
				if($p_answer==$p)
				{
					$p_marks= 2;
					echo " <br>";
				}
					else
					{
						$p_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					
					
					$q_answer="right";
				if($q_answer==$q)
				{
					$q_marks= 2;
					echo " <br>";
				}
					else
					{
						$q_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					
					$r_answer="right";
				if($r_answer==$r)
				{
					$r_marks= 2;
					echo " <br>";
				}
					else
					{
						$r_marks= 0;
						echo " <br>";
					}	
					
					
					
					
					
					$s_answer="right";
				if($s_answer==$s)
				{
					$s_marks= 2;
					echo " <br>";
				}
					else
					{
						$s_marks= 0;
						echo " <br>";
					}	
					
				$t_answer="right";
				if($t_answer==$t)
				{
					$t_marks= 2;
					echo " <br>";
				}
					else
					{
						$t_marks= 0;
						echo " <br>";
					}		
					
				$u_answer="right";
				if($u_answer==$u)
				{
					$u_marks= 2;
					echo " <br>";
				}
					else
					{
						$u_marks= 0;
						echo " <br>";
					}		
					
					
					
				$v_answer="right";
				if($v_answer==$v)
				{
					$v_marks= 2;
					echo " <br>";
				}
					else
					{
						$v_marks= 0;
						echo " <br>";
					}		
					
					
					
				$w_answer="right";
				if($w_answer==$w)
				{
					$w_marks= 2;
					echo " <br>";
				}
					else
					{
						$w_marks= 0;
						echo " <br>";
					}		
					
					
					
				$x_answer="right";
				if(x_answer==$x)
				{
					$x_marks= 2;
					echo " <br>";
				}
					else
					{
						$x_marks= 0;
						echo " <br>";
					}

					
					$y_answer="right";
				if(y_answer==$y)
				{
					$y_marks= 2;
					echo " <br>";
				}
					else
					{
						$y_marks= 0;
						echo " <br>";
					}		
					
					
		
					$total= $a_marks+$b_marks+$c_marks+$d_marks+$e_marks+$f_marks+$g_marks+$h_marks+$i_marks+$j_marks+$k_marks+$l_marks+$m_marks+$n_marks+$o_marks+$p_marks+$q_marks+$r_marks+$s_marks+$t_marks+$u_marks+$v_marks+$w_marks+$x_marks+$y_marks;
					
					echo "totalmarks: $total";
					echo "<br>";
					$sql = "insert into result_table values ($sid, $total)";	

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
			}
	
?>
<!doctype html>
<html>
	<head>
		<title>quiz</title>	 
		<link rel="stylesheet" type="text/css" href="webtech_quiz_php_css.css">
		
	</head>	
	<body>
		<form action="" method="POST">
		<div class="box_upper">
		<h1>Test</h1>
		
		</div>
		
		<div class="main_box">

			1. Who is the father of PHP?<br><br>
			<input type="radio" name="a" value="Rasmus Lerdorf">A. Rasmus Lerdorf<br>
			<input type="radio" name="a" value="Willam Makepiece">B. Willam Makepiece<br>
			<input type="radio" name="a" value="Drek Kolkevi">C. Drek Kolkevi<br>
			
			<input type="radio" name="a" value="List Barely">D. List Barely<br><br>
			<hr>
			
			
			2. Which of the looping statements is/are supported by PHP?<br>
			i) for loop<br>
			ii) while loop<br>
			iii) do-while loop<br>
			iv) foreach loop<br><br>
			<input type="radio" name="b" value="(i) and (ii)">A. (i) and (ii)<br>
			<input type="radio" name="b" value="(i), (ii) and (iii)">B. (i), (ii) and (iii)<br>
			<input type="radio" name="b" value="All of the mentioned">C. All of the mentioned<br>
			
			<input type="radio" name="b" value="None of the mentioned">D. None of the mentioned
			<br><br>
			<hr>
			
			3. What will be the output of the following PHP code ?<br><br>
			< ?php <br><br>
			$hello = "Hello World";<br>
			$bye = "Bye";<br>
			echo $hello;"$bye";<br>
			?><br><br>
			<input type="radio" name="c" value="Hello World">A. Hello World<br>
			<input type="radio" name="c" value="Hyperlinks and Text Markup Language">B. Bye<br>
			<input type="radio" name="c" value="Home Tool Markup Language">C. Hello worldBye<br>
			
			<input type="radio" name="c" value="Hyperlinks and Text Markup Language">D. Error<br><br>
			
			<hr>
			
			
			4.Is it possible to submit a form with out a submit button?<br><br>
			<input type="radio" name="d" value="Yes">(A) Yes<br>
			<input type="radio" name="d" value="Hyperlinks and Text Markup Language">(B) No<br>
			<br><br>
			
			<hr>
			
			5.what will be the ouput of below code ?<br><br>
            define("x","5"); <br>
            $x=x+10; <br>
            echo x; <br>
			?><br><br>
			<input type="radio" name="e" value="Hyper Text Markup Language">(A) Error<br>
			<input type="radio" name="e" value="right">(B) 5<br>
			<input type="radio" name="e" value="Home Tool Markup Language">(C) 10<br>
			
			<input type="radio" name="e" value="Hyperlinks and Text Markup Language">(D) 15<br><br>
			<hr>
				<span>
			6.	what will be the ouput of below code ?<br>	
					for($i=1;$i<=4;$i++)<br>
						{<br>
							$i1=$i+4;<br>
							$i2=$i+8;<br>
							echo $i." ".$i1." ".$i2;<br>
							echo <<span>"br"</span>>;<br>
						}<br>
						<br><br>
				</span>
			<input type="radio" name="f" value="right">A.&nbsp &nbsp	1 5 9<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp  2 6 10<br>
											&nbsp &nbsp &nbsp &nbsp &nbsp 3 7 11<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp 4 8 12<br><br>
										
			<input type="radio" name="f" value="Willam Makepiece">B.&nbsp &nbsp 1 5 9<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp  3 7 11<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp  2 6 10<br>
											
										&nbsp &nbsp &nbsp &nbsp &nbsp 4 8 12<br><br>
										
			<input type="radio" name="f" value="Drek Kolkevi">C. &nbsp &nbsp 1 5 9<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp 4 8 12<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp  2 6 10<br>
											&nbsp &nbsp &nbsp &nbsp &nbsp 3 7 11<br><br>
										
			
			<input type="radio" name="f" value="List Barely">D. &nbsp &nbsp 4 8 12<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp  2 6 10<br>
											&nbsp &nbsp &nbsp &nbsp &nbsp 3 7 11<br>
										&nbsp &nbsp &nbsp &nbsp &nbsp 1 5 9<br><br>
			
			<hr>
			7. what will be the ouput of below code ?<br>
				$str1 = 'yabadabadoo';<br>
				$str2 = 'yaba';<br>
					if (strpos($str1,$str2)) {<br>
				echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";<br>
				} else {<br>
				echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";<br>
					}<br><br>
			<input type="radio" name="g" value="Rasmus Lerdorf">A. "yabadabadoo" contain "yaba"<br>
			<input type="radio" name="g" value="right">B. "yabadabadoo" does not contain "yaba"<br>
			<input type="radio" name="g" value="Drek Kolkevi">C.error<br>
			
			
			
			<hr>
			8. What are the differences between echo and print in PHP?<br><br>
			<input type="radio" name="h" value="Rasmus Lerdorf">A. echo return a value whereas print does return a value of 1<br>
			<input type="radio" name="h" value="Willam Makepiece">B.echo does not return a value whereas print does not return a value of 1<br>
			<input type="radio" name="h" value="Drek Kolkevi">C.echo  return a value whereas print does not return a value of 1<br>
			
			<input type="radio" name="h" value="right">D. echo does not return a value whereas print does return a value of 1<br><br>
			<hr>
			
			9. What is use of the header() function in PHP?<br><br>
			<input type="radio" name="i" value="Rasmus Lerdorf">A. header() is used to redirect from one page to another<br>
			<input type="radio" name="i" value="Willam Makepiece">B.header() is used to send an HTTP status code: header<br>
			<input type="radio" name="i" value="Drek Kolkevi">C. header() is used to send a raw HTTP header<br>
			
			<input type="radio" name="i" value="right">D. all the above<br><br>
			<hr>
			
			10. for($i=0;$i<=5;$i++){<br>
				for($j=5-$i;$j>=1;$j--){<br>
				echo "* <span> & nbsp </span>;";<br>
				}<br>
					echo "<<span>br</span>>";<br>
				}<br><br>
			<input type="radio" name="j" value="Rasmus Lerdorf">A.<br> * * * * * <br>
																&nbsp * * * * <br>
														&nbsp &nbsp			 * * * <br>
										&nbsp &nbsp &nbsp						      * * <br>
						&nbsp &nbsp &nbsp &nbsp	       *<br><br>
			<input type="radio" name="j" value="right">B.<br> * * * * * <br>
																	  * * * * <br>
																	   * * * <br>
																        * * <br>
																         *<br><br>
			<input type="radio" name="j" value="Drek Kolkevi">C.
										<br> * * * * *<br> 
					&nbsp	 &nbsp 	       * * * * <br>
			&nbsp		&nbsp	&nbsp &nbsp				 * * * <br>
		&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp			      * * <br>
		&nbsp &nbsp &nbsp			&nbsp	&nbsp &nbsp &nbsp &nbsp				       *<br><br>
			
			
			<hr>
			
			
			11.what will be the ouput of below code ?<br>
			$r;<br>
			$c;<br>
			for($r=1;$r<=5;$r++)<br>
			{<br>
			for($c=1;$c<=$r;$c++)<br>
			{<br>
			print("$r");<br>
			}<br>
			print "<<span>br</span>>";<br>
			}<br><br>
			
			<input type="radio" name="k" value="Rasmus Lerdorf">A. <br>
																	1<br>
																	22<br>
																	333<br>
																	4444<br>
																	55555<br>
																	
			<input type="radio" name="k" value="Willam Makepiece">B. <br>
																	1<br>
																	11<br>
																	111<br>
																	1111<br>
																	11111<br><br>
			<input type="radio" name="k" value="Drek Kolkevi">C.<br>
																	5<br>
																	44<br>
																	333<br>
																	2222<br>
																	11111<br><br>
			
			<input type="radio" name="k" value="List Barely">D. error<br><br>
			<hr>
			
			
			12. what will be the ouput of below code?<br><br>
			<br>
																	$num  = 1;<br>
																	$num1 = 2;<br>
																	print $num . "+". $num1;<br>
																	 print $num+$num1;<br>
			<input type="radio" name="l" value="right">A.<br>1+2 <br>
															3<br>		
			<input type="radio" name="l" value="Willam Makepiece">B.<br> 3<br>
																	1+2<br>
			<input type="radio" name="l" value="Drek Kolkevi">C. <br>3<br>
																	3<br>
			<input type="radio" name="l" value="List Barely">D. error<br><br>
			<hr>
			
			
			13.what will be the ouput of below code?<br>
			$state = array ("Karnataka", "Goa", "Tamil Nadu",<br>
								"Andhra Pradesh");<br>
						echo (array_search ("Tamil Nadu", $state) );<br><br>
			<input type="radio" name="m" value="Rasmus Lerdorf">A. True	<br>
			<input type="radio" name="m" value="Willam Makepiece">B. 1<br>
			<input type="radio" name="m" value="Drek Kolkevi">C. False<br>
			
			<input type="radio" name="m" value="right">D. 2<br><br>
			<hr>
			
			
			14.To validate an e-mail address, which flag is to be passed to the function filter_var()<br><br>
			<input type="radio" name="n" value="right">A.FILTER_VALIDATE_EMAIL<br>
			<input type="radio" name="n" value="Willam Makepiece">B. FILTER_VALIDATE_MAIL<br>
			<input type="radio" name="n" value="Drek Kolkevi">C. VALIDATE_EMAIL<br>
			
			<input type="radio" name="n" value="List Barely">D. VALIDATE_MAIL<br><br>
			<hr>
			
			
			15.what will be the ouput of below code? <br>
			function zz(& $x) <br>
				{ <br>
				$x=$x+5; <br>
				} <br>
				<br>
     
				$x=10; <br>
				zz($x); <br>
				echo $x;<br><br>
			<input type="radio" name="o" value="Rasmus Lerdorf">A. 0<br>
			<input type="radio" name="o" value="Willam Makepiece">B. 5<br>
			<input type="radio" name="o" value="Drek Kolkevi">C. 10<br>
			
			<input type="radio" name="o" value="right">D. 15<br><br>
			<hr>
			
			
			16. .Which of the following method sends input to a script via a URL? <br><br>
			<input type="radio" name="p" value="right">A.  Get<br>
			<input type="radio" name="p" value="Willam Makepiece">B. Post<br>
			<input type="radio" name="p" value="Drek Kolkevi">C. Both<br>
			
			<input type="radio" name="p" value="List Barely">D. None<br><br>
			<hr>
			17.mysql_connect( ) does not take following parameter.<br><br>
			<input type="radio" name="q" value="right">A. database name<br>
			<input type="radio" name="q" value="Willam Makepiece">B. database host<br>
			<input type="radio" name="q" value="Drek Kolkevi">C. user ID<br>
			
			<input type="radio" name="q" value="List Barely">D. password<br><br>
			<hr>
			18. What will be displayed in a browser when the following PHP code is executed:<br><br>
			
							for ($counter = 15; $counter != 10; $counter--){<br>
							echo "Hello ";<br>
			<input type="radio" name="r" value="Rasmus Lerdorf">A.  Hello Hello<br>
			<input type="radio" name="r" value="Willam Makepiece">B. Hello Hello Hello<br>
			<input type="radio" name="r" value="Drek Kolkevi">C. Hello Hello Hello Hello<br>
			
			<input type="radio" name="r" value="right">D. Hello Hello Hello Hello Hello<br><br>
			<hr>
			19. What will be the value of $a and $b after the function call in the following PHP code?<br><br>
			function doSomething( &$arg ) {<br>
			$return = $arg;<br>
			$arg += 1;<br>
			return $return;	<br>
			}<br>
			$a = 3;<br>
			$b = doSomething( $a );<br><br>
			<input type="radio" name="s" value="Rasmus Lerdorf">A. a is 3 and b is 4<br>
			<input type="radio" name="s" value="right">B. a is 4 and b is 3<br>
			<input type="radio" name="s" value="Drek Kolkevi">C.  Both are 3<br>
			
			<input type="radio" name="s" value="List Barely">D. Both are 4<br><br>
			<hr>
			20. what will be the ouput of below code?<br><br>
			$num = 4;  <br>
			$virus = 1; <br>
			for ($x=$num; $x>=1; $x--) <br>  
			{  <br>
			$virus = $virus * $x;<br>  
			}  <br>
			echo " $virus";  <br><br>
			
			
			<input type="radio" name="t" value="Rasmus Lerdorf">A. 9<br>
			<input type="radio" name="t" value="Willam Makepiece">B.4 <br>
			<input type="radio" name="t" value="Drek Kolkevi">C. 24<br>
			
			<input type="radio" name="t" value="List Barely">D. error<br><br>
			<hr>
			21. Say we have two compare two strings which of the following function/functions can you use?<br><br>
				(i) strcmp()<br>
				(ii) strcasecmp()<br>
				(iii) strspn()<br>
				(iv) strcspn()<br> <br>
			<input type="radio" name="u" value="Rasmus Lerdorf">A. (i) and (ii)	<br>
			<input type="radio" name="u" value="Willam Makepiece">B. (iii) and (iv)<br>
			<input type="radio" name="u" value="Drek Kolkevi">C. None of the mentioned<br>
			
			<input type="radio" name="u" value="right">D. All of the mentioned<br><br>
			<hr>
			22. place the right order-<br><br>
				$host = 'localhost:3306';  <br>
				$user = '';  <br>
				$pass = '';  <br>
				$dbname = 'test';  <br>
  
				$conn = ----?----($host, $user, $pass,$dbname);  <br>
				if(---?---){  <br>
				die('Could not connect: '.mysqli_connect_error());  <br>
				}  <br>
				echo 'Connected successfully<<span>br/ </span>>'; <br> 
  
				$sql = '---?--- INTO emp4(name,salary) VALUES ("sonoo", 9000)'; <br> 
				if(----?----($conn, $sql)){  <br>
					echo "Record inserted successfully"; <br> 
				}else{  <br>
				echo "Could not insert record: ". mysqli_error($conn);  <br>
					}  <br>
  
				mysqli_close($conn);  <br><br>
			<input type="radio" name="v" value="Rasmus Lerdorf">A. !$conn , mysqli_connect , INSERT , mysqli_query<br>
			<input type="radio" name="v" value="right">B. mysqli_connect , !$conn , INSERT , mysqli_query <br>
			<input type="radio" name="v" value="Drek Kolkevi">C.mysqli_query , mysqli_connect , !$conn , INSERT<br>
			
			<input type="radio" name="v" value="List Barely">D.mysqli_connect , !$conn , INSERT ,    mysqli_query<br><br>
			<hr>
			23. what will be the ouput of below code ?<br><br>
				define("x","5"); <br>
				$x=x+10; <br>
				echo x; <br><br>
			<input type="radio" name="w" value="Rasmus Lerdorf">A. Error<br>
			<input type="radio" name="w" value="right">B. 5<br>
			<input type="radio" name="w" value="Drek Kolkevi">C. 10<br>
			
			<input type="radio" name="w" value="List Barely">D.  15<br><br>
			<hr>
			24. what will be the ouput of below code?<br><br>
			function getIPAddress() {  <br>
			//whether ip is from the share internet <br> 
			if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  <br>
                $ip = $_SERVER['HTTP_CLIENT_IP'];  <br>
				}  <br>
					//whether ip is from the proxy  <br>
					elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  <br>
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  <br>
				}  <br>
					//whether ip is from the remote address  <br>
					else{  <br>
					$ip = $_SERVER['REMOTE_ADDR'];  <br>
				}  <br>
					return $ip;  <br>
				}  <br>
				$ip = getIPAddress(); <br> 
				echo 'User Real IP Address - '.$ip;  <br><br>
			<input type="radio" name="x" value="Rasmus Lerdorf">A. User IP Address - ::0<br>
			<input type="radio" name="x" value="right">B. User IP Address - ::1<br>
			<input type="radio" name="x" value="Drek Kolkevi">C. error<br>
			
			
			<hr>
			25.Which of the following PHP statement/statements will store 111 in variable num?<br>
				i) int $num = 111;<br>
				ii) int mum = 111;<br>
				iii) $num = 111;<br>
				iv) 111 = $num;		<br><br>																
					
			<input type="radio" name="y" value="Rasmus Lerdorf">A. Both i) and ii)<br>
			<input type="radio" name="y" value="Willam Makepiece">B. i), ii), iii) and iv)<br>
			<input type="radio" name="y" value="Drek Kolkevi">C. Only iii)<br>
			
			<input type="radio" name="y" value="List Barely">D. Only i)<br><br>
			<hr>
			
			
			</div>
			
			<input type="submit" name="submit" value="Submit" class="button">
		</form>
	</body>
</html>	
<?php
}
}
else
{
	echo "please login first";
}
?>	
